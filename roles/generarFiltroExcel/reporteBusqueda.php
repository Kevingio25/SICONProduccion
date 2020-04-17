
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
						$objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $imprimirRow[0]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $imprimirRow[1]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $imprimirRow[2]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $imprimirRow[3]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('E'.$fila, $imprimirRow[4]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('F'.$fila, $imprimirRow[5]);
		                $objPHPExcel->getActiveSheet()->setCellValue('G'.$fila, $imprimirRow[6]);
		                $objPHPExcel->getActiveSheet()->setCellValue('H'.$fila, $imprimirRow[7]);
		                $objPHPExcel->getActiveSheet()->setCellValue('I'.$fila, $imprimirRow[8]);
		                $objPHPExcel->getActiveSheet()->setCellValue('J'.$fila, $imprimirRow[9]);
		                $objPHPExcel->getActiveSheet()->setCellValue('K'.$fila, $imprimirRow[10]);
		                $objPHPExcel->getActiveSheet()->setCellValue('L'.$fila, $imprimirRow[11]);
		                $objPHPExcel->getActiveSheet()->setCellValue('M'.$fila, $imprimirRow[12]);
		                $objPHPExcel->getActiveSheet()->setCellValue('N'.$fila, $imprimirRow[13]);
		                $objPHPExcel->getActiveSheet()->setCellValue('O'.$fila, $imprimirRow[14]);
		                $objPHPExcel->getActiveSheet()->setCellValue('P'.$fila, $imprimirRow[15]);
		                $objPHPExcel->getActiveSheet()->setCellValue('Q'.$fila, $imprimirRow[16]);
		                $objPHPExcel->getActiveSheet()->setCellValue('R'.$fila, $imprimirRow[17]);
		                $objPHPExcel->getActiveSheet()->setCellValue('S'.$fila, $imprimirRow[18]);
		                $objPHPExcel->getActiveSheet()->setCellValue('T'.$fila, $imprimirRow[19]);
		                $objPHPExcel->getActiveSheet()->setCellValue('U'.$fila, $imprimirRow[20]);
		                $objPHPExcel->getActiveSheet()->setCellValue('V'.$fila, $imprimirRow[21]);
		                $objPHPExcel->getActiveSheet()->setCellValue('W'.$fila, $imprimirRow[22]);
		                $objPHPExcel->getActiveSheet()->setCellValue('X'.$fila, $imprimirRow[23]);
		                $objPHPExcel->getActiveSheet()->setCellValue('Y'.$fila, $imprimirRow[24]);
		                $objPHPExcel->getActiveSheet()->setCellValue('Z'.$fila, $imprimirRow[25]);
						$objPHPExcel->getActiveSheet()->setCellValue('AA'.$fila, $imprimirRow[26]); 
						$objPHPExcel->getActiveSheet()->setCellValue('AB'.$fila, $imprimirRow[27]); 
						$objPHPExcel->getActiveSheet()->setCellValue('AC'.$fila, $imprimirRow[28]); 
						$objPHPExcel->getActiveSheet()->setCellValue('AD'.$fila, $imprimirRow[29]); 
						$objPHPExcel->getActiveSheet()->setCellValue('AE'.$fila, $imprimirRow[30]); 
						$objPHPExcel->getActiveSheet()->setCellValue('AF'.$fila, $imprimirRow[31]); 
						$objPHPExcel->getActiveSheet()->setCellValue('AG'.$fila, $imprimirRow[32]); 
						$objPHPExcel->getActiveSheet()->setCellValue('AH'.$fila, $imprimirRow[33]); 
						$objPHPExcel->getActiveSheet()->setCellValue('AI'.$fila, $imprimirRow[34]); 
						$objPHPExcel->getActiveSheet()->setCellValue('AJ'.$fila, $imprimirRow[35]); 
						$objPHPExcel->getActiveSheet()->setCellValue('AK'.$fila, $imprimirRow[36]); 
						$objPHPExcel->getActiveSheet()->setCellValue('AL'.$fila, $imprimirRow[37]); 
						$objPHPExcel->getActiveSheet()->setCellValue('AM'.$fila, $imprimirRow[38]); 
						$objPHPExcel->getActiveSheet()->setCellValue('AN'.$fila, $imprimirRow[39]); 
						$objPHPExcel->getActiveSheet()->setCellValue('AO'.$fila, $imprimirRow[40]); 
						$objPHPExcel->getActiveSheet()->setCellValue('AP'.$fila, $imprimirRow[41]); 
						$objPHPExcel->getActiveSheet()->setCellValue('AQ'.$fila, $imprimirRow[42]); 
						$objPHPExcel->getActiveSheet()->setCellValue('AR'.$fila, $imprimirRow[43]); 
						$objPHPExcel->getActiveSheet()->setCellValue('AS'.$fila, $imprimirRow[44]); 
						$objPHPExcel->getActiveSheet()->setCellValue('AT'.$fila, $imprimirRow[45]); 
						$objPHPExcel->getActiveSheet()->setCellValue('AU'.$fila, $imprimirRow[46]); 
						$objPHPExcel->getActiveSheet()->setCellValue('AV'.$fila, $imprimirRow[47]); 
						$objPHPExcel->getActiveSheet()->setCellValue('AW'.$fila, $imprimirRow[48]); 
						$objPHPExcel->getActiveSheet()->setCellValue('AX'.$fila, $imprimirRow[49]); 
						$objPHPExcel->getActiveSheet()->setCellValue('AY'.$fila, $imprimirRow[50]); 
						$objPHPExcel->getActiveSheet()->setCellValue('AZ'.$fila, $imprimirRow[51]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('BA'.$fila, $imprimirRow[52]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('BB'.$fila, $imprimirRow[53]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('BC'.$fila, $imprimirRow[54]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('BD'.$fila, $imprimirRow[55]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('BE'.$fila, $imprimirRow[56]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('BF'.$fila, $imprimirRow[57]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('BG'.$fila, $imprimirRow[58]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('BH'.$fila, $imprimirRow[59]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('BI'.$fila, $imprimirRow[60]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('BJ'.$fila, $imprimirRow[61]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('BK'.$fila, $imprimirRow[62]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('BL'.$fila, $imprimirRow[63]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('BM'.$fila, $imprimirRow[64]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('BN'.$fila, $imprimirRow[65]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('BO'.$fila, $imprimirRow[66]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('BP'.$fila, $imprimirRow[67]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('BK'.$fila, $imprimirRow[68]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('BR'.$fila, $imprimirRow[69]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('BS'.$fila, $imprimirRow[70]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('BT'.$fila, $imprimirRow[71]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('BU'.$fila, $imprimirRow[71]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('BV'.$fila, $imprimirRow[73]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('BW'.$fila, $imprimirRow[74]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('BX'.$fila, $imprimirRow[75]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('BY'.$fila, $imprimirRow[76]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('BZ'.$fila, $imprimirRow[77]);
		                $objPHPExcel->getActiveSheet()->setCellValue('CA'.$fila, $imprimirRow[78]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('CB'.$fila, $imprimirRow[79]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('CC'.$fila, $imprimirRow[80]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('CD'.$fila, $imprimirRow[81]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('CE'.$fila, $imprimirRow[82]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('CF'.$fila, $imprimirRow[83]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('CG'.$fila, $imprimirRow[84]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('CH'.$fila, $imprimirRow[85]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('CI'.$fila, $imprimirRow[86]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('CJ'.$fila, $imprimirRow[87]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('CK'.$fila, $imprimirRow[88]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('CL'.$fila, $imprimirRow[89]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('CM'.$fila, $imprimirRow[90]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('CN'.$fila, $imprimirRow[91]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('CO'.$fila, $imprimirRow[92]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('CP'.$fila, $imprimirRow[93]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('CK'.$fila, $imprimirRow[94]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('CR'.$fila, $imprimirRow[95]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('CS'.$fila, $imprimirRow[96]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('CT'.$fila, $imprimirRow[97]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('CU'.$fila, $imprimirRow[98]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('CV'.$fila, $imprimirRow[99]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('CW'.$fila, $imprimirRow[100]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('CX'.$fila, $imprimirRow[101]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('CY'.$fila, $imprimirRow[102]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('CZ'.$fila, $imprimirRow[103]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('DA'.$fila, $imprimirRow[104]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('DB'.$fila, $imprimirRow[105]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('DC'.$fila, $imprimirRow[106]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('DD'.$fila, $imprimirRow[107]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('DE'.$fila, $imprimirRow[108]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('DF'.$fila, $imprimirRow[109]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('DG'.$fila, $imprimirRow[110]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('DH'.$fila, $imprimirRow[111]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('DI'.$fila, $imprimirRow[112]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('DJ'.$fila, $imprimirRow[113]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('DK'.$fila, $imprimirRow[114]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('DL'.$fila, $imprimirRow[115]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('DM'.$fila, $imprimirRow[116]); 
		                $objPHPExcel->getActiveSheet()->setCellValue('DN'.$fila, $imprimirRow[117]);
		                $objPHPExcel->getActiveSheet()->setCellValue('DO'.$fila, $imprimirRow[118]); 
		                $fila++;
					}else{
						echo "hay fallas";
					}
				}    
   
                        $fila--;
                    	$objPHPExcel->getActiveSheet()->setSharedStyle($estiloInformacion, "A8:DO".$fila);
						$objPHPExcel->getActiveSheet()->getStyle("A8:DO".$fila)->applyFromArray($estiloTituloColumnas);
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
