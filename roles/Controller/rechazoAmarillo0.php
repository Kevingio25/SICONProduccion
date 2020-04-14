<?php 

		include "configuracion.php";
		//header ('Content-type: text/html; charset=utf-8');
		$usuarioEdito = $_POST['userName'];
		$idFomope = $_POST['idFom'];
		$motivoR = $_POST['comentarioR'];
		$laAccion = $_POST['tipButton'];


/*
			$tiempo =  date_default_timezone_set("America/Mexico_City");
			$tiempo =  time();
			$hoy = getdate();*/
		if($laAccion == "aceptar"){
		    $hoy = "select CURDATE()";
		   	$tiempo ="select curTime()";

			function genearExcel(){
				require "../generarVolanteRechazo/conexion_excel.php";
				include "configuracion.php";
				include '../generarVolanteRechazo/Classes/PHPExcel/IOFactory.php';

				$fileType = 'Excel5';
				$fileName = '../generarVolanteRechazo/rechazoL.xls';

				// Read the file
				$objReader = PHPExcel_IOFactory::createReader($fileType);
				$objPHPExcel = $objReader->load($fileName);
				$fecha_recibido =$_POST['fechareci'];
				$motivoR = $_POST['comentarioR'];
				$idfom = $_POST['idFom'];
				//header ('Content-type: text/html; charset=utf-8');

				$sqlUnidad = "SELECT unidad , rfc FROM fomope WHERE id_movimiento = '$idfom' ";
				if($resUni = mysqli_query($conexion, $sqlUnidad)){
					$rowUni = mysqli_fetch_row($resUni);
					$objPHPExcel->getActiveSheet()->setCellValue('G7',$fecha_recibido); 
			        $objPHPExcel->getActiveSheet()->setCellValue('C9', $_POST['cod2_1']); 
			        $objPHPExcel->getActiveSheet()->setCellValue('C13', $rowUni[0]); 
			        $objPHPExcel->getActiveSheet()->setCellValue('C18', $motivoR); 

				// Write the file
			        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, $fileType);
				        //$objWriter->save("fomopeDESCARGA.xlsx");


				    $writer = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');

				    header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
				    header('Content-Disposition: attachment;filename='."volanteRechazo_".$rowUni[1].".xlsx"); //attachment inline
					header('Cache-Control: max-age=0');
//Location: ./analista.php?usuario_rol=$usuarioEdito
		

				    ob_end_clean();

			   		$writer->save('php://output');
	
			   		
			   		exit();

			}
	}
	
		

					 if ($resultHoy = mysqli_query($conexion,$hoy) AND $resultTime = mysqli_query($conexion,$tiempo)) {
					 		$row = mysqli_fetch_row($resultHoy);
					 		$row2 = mysqli_fetch_row($resultTime);
					 }


					$sql = "UPDATE fomope SET color_estado='negro', usuario_name = '$usuarioEdito', 	justificacionRechazo = '$motivoR' WHERE id_movimiento = '$idFomope'" ;

					 $sql2 = "INSERT INTO historial (id_movimiento,usuario,fechaMovimiento,horaMovimiento) VALUES ('$idFomope','$usuarioEdito','$row[0]','$row2[0]')";

					 $sql3 = "INSERT INTO rechazos (id_movimiento,justificacionRechazo,usuario,fechaRechazo) VALUES ($idFomope,'$motivoR','$usuarioEdito','$row[0]')";

					
					 if (mysqli_query($conexion,$sql) AND mysqli_query($conexion,$sql2) AND mysqli_query($conexion,$sql3) ) {
							genearExcel();
							

					}else {
						echo '<script type="text/javascript">alert("Error en la conexion");</script>';
						echo '<script type="text/javascript">alert("error '. mysqli_error($conexion).'");</script>';
					}
		}else if($laAccion == "bandeja de entrada"){
		              		echo "<script>window.location.href = '../lulu.php?usuario_rol=$usuarioEdito'</script>";

		}

 ?>