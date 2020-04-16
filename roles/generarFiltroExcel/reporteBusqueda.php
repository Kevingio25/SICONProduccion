
<?php

	//require 'Classes/PHPExcel.php';
    include "../configuracion.php";
    require "../librerias/conexion_excel.php";

	include '../librerias/Classes/PHPExcel/IOFactory.php';

		$fileType = 'Excel5';
		$fileName = 'reporteFiltro.xls';

		// Read the file
		$objReader = PHPExcel_IOFactory::createReader($fileType);
		$objPHPExcel = $objReader->load($fileName);


	   $fila = 8;
	   $estiloTituloColumnas = array(
    	'font' => array(
			'name'  => 'Calibri',
			'size' =>8,
			'color' => array(
				'rgb' => '000000'
			)
    	),
    	'borders' => array(
			'allborders' => array(
				'style' => PHPExcel_Style_Border::BORDER_THIN
			)
    	),
    	'alignment' =>  array(
			'horizontal'=> PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
			'vertical'  => PHPExcel_Style_Alignment::VERTICAL_CENTER
    	)
	);
		$estiloInformacion = new PHPExcel_Style();

			$estiloInformacion->applyFromArray( array(
		    	'font' => array(
					'name'  => 'Calibri',
					'size' =>11,
					'color' => array(
						'rgb' => '000000'
					)
		    	),
		    	'fill' => array(
					'type'  => PHPExcel_Style_Fill::FILL_SOLID
				),
		    	'borders' => array(
					'allborders' => array(
						'style' => PHPExcel_Style_Border::BORDER_THIN
					)
		    	),
				'alignment' =>  array(
					'horizontal'=> PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
					'vertical'  => PHPExcel_Style_Alignment::VERTICAL_CENTER
		    	)
			));

//            $nombreUser = $_POST['usuario_rol'];
			$arr = unserialize(stripslashes($_POST['array']));
							//echo($arr[0]);
							// foreach($arr as $nombre=>$telefono)
				   //          {
				   //             // echo "<br>".$nombre." => ".$telefono;
				   //                 echo "{$nombre} => {$telefono} ";
				   //          }
				$tamanio = count($arr);
						var_dump($arr[1]);
		if($tamanio > 0){
				for($i=0; $i<$tamanio; $i++){
					$sqlImp  = "SELECT * FROM fomope WHERE id_movimiento = '$arr[$i]'";
					if($resImp = mysqli_query($conexion, $sqlImp)){
						$imprimirRow = mysqli_fetch_row($resImp);
						$objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $arr[$i]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $arr[$i]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $arr[$i]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $arr[$i]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('E'.$fila, $arr[$i]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('F'.$fila, $arr[$i]);
		                $fila++;
					}else{
						echo "hay fallas";
					}
				}    
   
                        $fila--;
                    	$objPHPExcel->getActiveSheet()->setSharedStyle($estiloInformacion, "A8:F".$fila);
						$objPHPExcel->getActiveSheet()->getStyle("A8:F".$fila)->applyFromArray($estiloTituloColumnas);
                // Write the file
                        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, $fileType);
                        //$objWriter->save("fomopeDESCARGA.xlsx");


                    $writer = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');

                    header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
                    header('Content-Disposition: attachment;filename='."reporte.xlsx");
                    header('Cache-Control: max-age=0');


                    ob_end_clean();



                    $writer->save('php://output');
                

            }else{
                echo "<script> alert('No hay informacion de busqueda para generar reporte'); window.location.href = '../consultaEstado.php?usuario_rol=$nombreUser'</script>";

            }
			
      
?>
