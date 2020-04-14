
<?php
	
	$mysqli=new mysqli("localhost","root","","fomope2");
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
	
?>
