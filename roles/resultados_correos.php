
<?php

    include "configuracion.php";
    $request = $_POST['request'];

    if($request == 1){
        $busqueda = $_POST['busqueda'];
        $consulta1 = "SELECT * FROM correos_ur WHERE UR like'%".$busqueda."%'";
        $resultado1 = mysqli_query($conexion,$consulta1);
        while($row = mysqli_fetch_array($resultado1)){
            $response[] = array("value"=>$row['UR'],"label"=>$row['descripcion']);
        }
 
        echo json_encode($response);
        exit;
    }
    
    if($request == 2){
        $buscarid = $_POST['buscarid'];
        $consulta2 = "SELECT * FROM correos_ur WHERE UR like'%".$busqueda."%'";
        $resultado2 = mysqli_query($conexion,$consulta2);
        $buscar_arr = array();
        while($row = mysqli_fetch_array($resultado2)){
            $idx = $row['UR'];
            $unexp_validado = $row['descripcion'];
            $unexp = mb_strtoupper($unexp_validado);
            $correoAdmin1 = $row['correoAdmin1'];
            $correoAdmin2 = $row['correoAdmin2'];
            $cc1 = $row['cc1'];
            $cc2 = $row['cc2'];
            $cc3 = $row['cc3'];
            $cc4 = $row['cc4'];
            $cc5 = $row['cc5'];

            $buscar_arr[] = array("idx" => $idx, "unexp" => $unexp,"correoAdmin1" => $correoAdmin1, "correoAdmin2" => $correoAdmin2,"cc1" => $cc1, "cc2" => $cc2,"cc3" => $cc3, "cc4" => $cc4,"cc5" => $cc5);
       

        }
        
        echo json_encode($buscar_arr);
        exit;
    }


?>
 