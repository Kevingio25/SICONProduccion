<?php
include("configuracion.php");
require_once dirname(__FILE__).'../../librerias/Classes/PHPWord-master/src/PhpWord/Autoloader.php';
\PhpOffice\PhpWord\Autoloader::register();

use PhpOffice\PhpWord\TemplateProcessor;

$templateWord = new TemplateProcessor('DGRHO_DIPSP_2020_MEMORANDUM_126.docx');
 

$fechaA = date("d-m-Y");
$sql="SELECT * FROM `fomope` WHERE rfc = 'BAMF930630MK7' ";
$res=mysqli_query($conexion,$sql)or die("problema con la consulta");
if($data=mysqli_fetch_array($res)){  

    $nombre = $data['nombre'];
    $apellido_P = $data['apellido_1'];
    $apellido_M = $data['apellido_2'];
    $unidadO = $data['unidad'];
}  

// // --- Asignamos valores a la plantilla
$templateWord->setValue('nombres',$nombre);
$templateWord->setValue('fecha', $fechaA);
$templateWord->setValue('apellido1',$apellido_P);
$templateWord->setValue('apellido2',$apellido_M);
$templateWord->setValue('unidad',$unidadO);


// // --- Guardamos el documento
$templateWord->saveAs('Documento02.docx');

header("Content-Disposition: attachment; filename=Documento02.docx; charset=iso-8859-1");
echo file_get_contents('Documento02.docx');
        
?>