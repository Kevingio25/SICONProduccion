
<?php
	include "configuracion.php";
		//header ('Content-type: text/html; charset=utf-8');
		
		$usuarioSegimiento = $_POST['usuarioSeguir'];
		$noFomope = $_POST['noFomope'];
		$usuario_rol = $_POST['id_rol'];
		$usuario = $_POST['usuarioSeguir'];

		$elBoton = $_POST['accionB'];

		$idFomope = $_POST['noFomope'];
		$elRol = $_POST['id_rol'];
		$usuarioEdito = $_POST['usuarioSeguir'];

		
		$qna_Add =$_POST['qnaOption'];
		$anio_Add =$_POST['anio'];
		$of_unidad =$_POST['ofunid'];
		$fecha_oficio =$_POST['fechaofi'];
		$fecha_recibido =$_POST['fechareci'];
		$codigo =$_POST['codigo'];
		$no_puesto =$_POST['num_pues'];
		$clave_presupuestaria =$_POST['clavepres'];
		
		//$codigo_movimiento =$_POST['cod2_1'];
		//$concepto =$_POST['concept'];//descripción del movimiento		 
		$movimientoYcodigo = $_POST['cod2_1'];
		$nombreCompletoMov = explode("_", $_POST['cod2_1']);
		$codigo_movimiento = $nombreCompletoMov[0];
		$concepto = $nombreCompletoMov[1];
		$del_1 =$_POST['del2'];
		$al_1 =$_POST['al3'];
		$estado_en =$_POST['cod3_1'];
		$consecutivo_maestro_impuestos =$_POST['consema'];
		$observaciones =$_POST['observ'];
		$fecha_recibido_spc =$_POST['fecharecspc'];
		$fecha_envio_spc =$_POST['fechenvvb'];
		$fecha_recibo_dspo =$_POST['fechenvvb'];
		$folio_spc = $_POST['foliospc'];


	function genearExcel(){
				require "./librerias/conexion_excel.php";
				include "configuracion.php";
				include './librerias/Classes/PHPExcel/IOFactory.php';

				$fileType = 'Excel5';
				$fileName = './generarVolanteRechazo/rechazoT.xls';

				// Read the file
				$objReader = PHPExcel_IOFactory::createReader($fileType);
				$objPHPExcel = $objReader->load($fileName);
				$fecha_recibido =$_POST['fechareci'];
				$motivoR = $_POST['comentarioR'];
				$idfom = $_POST['noFomope'];
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
	
		

	if($elBoton == "Capturar" || $elBoton == "aceptar y modificar"){
		$sqlRol = "SELECT id_rol FROM usuarios WHERE usuario = '$usuario'";
		$resRol = mysqli_query($conexion,$sqlRol);
		$datoId = mysqli_fetch_row($resRol);


		$hoy = "select CURDATE()";
		$tiempo ="select curTime()";

			 if ($resultHoy = mysqli_query($conexion,$hoy) AND $resultTime = mysqli_query($conexion,$tiempo)) {
			 		$row = mysqli_fetch_row($resultHoy);
			 		$row2 = mysqli_fetch_row($resultTime);
			 }

		if($fecha_recibido <= $row[0] AND $fecha_oficio <= $row[0] AND $fecha_recibido_spc <= $row[0] AND $fecha_envio_spc <= $row[0] AND $fecha_recibo_dspo <= $row[0] ){

			$sql1 = "UPDATE fomope SET usuario_name='$usuario',color_estado='cafe',quincenaAplicada='$qna_Add',anio='$anio_Add',oficioUnidad='$of_unidad',fechaOficio='$fecha_oficio',fechaRecibido='$fecha_recibido',codigo='$codigo',n_puesto='$no_puesto',clavePresupuestaria='$clave_presupuestaria',codigoMovimiento='$codigo_movimiento',descripcionMovimiento='$concepto',vigenciaDel='$del_1',vigenciaAl='$al_1',entidad='$estado_en',consecutivoMaestroPuestos='$consecutivo_maestro_impuestos',observaciones='$observaciones',fechaRecepcionSpc='$fecha_recibido_spc',fechaEnvioSpc='$fecha_envio_spc',fechaReciboDspo='$fecha_recibo_dspo',folioSpc='$folio_spc', fechaCaptura = '$row[0] - $usuario' WHERE id_movimiento = '$noFomope' " ;

				$hoy = "select CURDATE()";
				$tiempo ="select curTime()";
					
					
			if ($resultHoy = mysqli_query($conexion,$hoy) AND $resultTime = mysqli_query($conexion,$tiempo)) {
							 		$row = mysqli_fetch_row($resultHoy);
							 		$row2 = mysqli_fetch_row($resultTime);
							 }
				 $sql2 = "INSERT INTO historial (id_movimiento,usuario,fechaMovimiento,horaMovimiento) VALUES ('$noFomope','$usuario','$row[0]','$row2[0]')";

				if (mysqli_query($conexion,$sql2)) {
			    	
			          //echo "<script> alert('Fomope rechazado'); window.location.href = './analista.php?usuario_rol=Tostado'</script>";//Tostado


				} else {
				    //echo "Error updating record: " . mysqli_error($conexion);
				    echo '<script type="text/javascript">alert("error '. mysqli_error($conexion).'");</script>';
				}
					
					if (mysqli_query($conexion,$sql1)) {
						if($datoId[0] == 2){
							   echo "<script> alert('el fomope fue capturado'); window.location.href = './analista.php?usuario_rol=$usuario'</script>";
							}elseif ($datoId[0] == 3) {
								  echo "<script> alert('el fomope fue actualizado'); window.location.href = './capturistaTostado.php?usuario_rol=$usuario'</script>";
							}
							

					}else {
						echo '<script type="text/javascript">alert("Error en la conexion");</script>';
						echo '<script type="text/javascript">alert("error '. mysqli_error($conexion).'");</script>';
					}
		}else{
					 echo "<script> alert('Se detecto incosistencia en las fechas');window.location.href='./form_FOMOPE.php?usuario=$usuario&id_rol=$usuario_rol&noFomope=$noFomope'</script>";
		}
	}else if($elBoton == "descargar"){
		$motivoR = $_POST['comentarioR'];



		 $hoy = "select CURDATE()";
		   	$tiempo ="select curTime()";

					 if ($resultHoy = mysqli_query($conexion,$hoy) AND $resultTime = mysqli_query($conexion,$tiempo)) {
					 		$row = mysqli_fetch_row($resultHoy);
					 		$row2 = mysqli_fetch_row($resultTime);
					 }
					$sql = "UPDATE fomope SET color_estado='negro', usuario_name = '$usuarioEdito', 	justificacionRechazo = '$motivoR' WHERE id_movimiento = '$idFomope'" ;

					 $sql2 = "INSERT INTO historial (id_movimiento,usuario,fechaMovimiento,horaMovimiento) VALUES ('$idFomope','$usuarioEdito','$row[0]','$row2[0]')";

					 $sql3 = "INSERT INTO rechazos (id_movimiento,justificacionRechazo,usuario,fechaRechazo) VALUES ($idFomope,'$motivoR','$usuarioEdito','$row[0]')";
	
		$hoy = "select CURDATE()";
		$tiempo ="select curTime()";

			 if ($resultHoy = mysqli_query($conexion,$hoy) AND $resultTime = mysqli_query($conexion,$tiempo)) {
			 		$row = mysqli_fetch_row($resultHoy);
			 		$row2 = mysqli_fetch_row($resultTime);
			 }


			$sql1 = "UPDATE fomope SET usuario_name='$usuario',color_estado='negro',quincenaAplicada='$qna_Add',anio='$anio_Add',oficioUnidad='$of_unidad',fechaOficio='$fecha_oficio',fechaRecibido='$fecha_recibido',codigo='$codigo',n_puesto='$no_puesto',clavePresupuestaria='$clave_presupuestaria',codigoMovimiento='$codigo_movimiento',descripcionMovimiento='$concepto',vigenciaDel='$del_1',vigenciaAl='$al_1',entidad='$estado_en',consecutivoMaestroPuestos='$consecutivo_maestro_impuestos',observaciones='$observaciones',fechaRecepcionSpc='$fecha_recibido_spc',fechaEnvioSpc='$fecha_envio_spc',fechaReciboDspo='$fecha_recibo_dspo',folioSpc='$folio_spc', fechaCaptura = '$row[0] - $usuario' WHERE id_movimiento = '$noFomope' " ;

				$hoy = "select CURDATE()";
				$tiempo ="select curTime()";
					
				if (mysqli_query($conexion,$sql1)) {
					if (mysqli_query($conexion,$sql) AND mysqli_query($conexion,$sql2) AND mysqli_query($conexion,$sql3) ) {
							genearExcel();
																			
					}else {
						echo '<script type="text/javascript">alert("Error en la conexion");</script>';
						echo '<script type="text/javascript">alert("error '. mysqli_error($conexion).'");</script>';
					}
				}else {
						echo '<script type="text/javascript">alert("Error en la conexion");</script>';
						echo '<script type="text/javascript">alert("error '. mysqli_error($conexion).'");</script>';
					}
				

	}else if($elBoton == "bandeja principal"){
		

		$sqlRol = "SELECT id_rol FROM usuarios WHERE usuario = '$usuario'";
		$resRol = mysqli_query($conexion,$sqlRol);
		$datoId = mysqli_fetch_row($resRol);
				if($datoId[0] == 2){
 					echo "<script> window.location.href = './analista.php?usuario_rol=$usuarioEdito' </script>";
				}elseif ($datoId[0] == 3) {
								
				  echo "<script>window.location.href = './capturistaTostado.php?usuario_rol=$usuario'</script>";
				}
	}
	

 ?>
	
