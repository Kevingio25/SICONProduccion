
<html>
	<head>
		<meta charset="utf-8">
		<title>Bandeja de entrada</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/estilo_form.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

		<link href='css/jquery-ui.min.css' type='text/css' rel='stylesheet'>
		<link href='css/jquery-ui.css' type='text/css' rel='stylesheet'>

		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

		<script src="js/funciones.js"></script>
		<script src="js/jquery-3.4.1.min.js" type="text/javascript"></script>
		<script src="js/jquery-ui.min.js" type="text/javascript"></script>
		<script src="js/jquery-ui.js" type="text/javascript"></script>
		<style type="text/css">
			
			p.one {
			  border-style: solid;
			  border-color: hsl(0, 100%, 50%); /* red */
			}

			p.two {
			  border-style: solid;
			  border-color: hsl(240, 100%, 50%); /* blue */
			}

			p.three {
			  border-style: solid;
			  border-color: hsl(0, 0%, 73%); /* grey */
			}
			
			.formulario_fomope{
				padding-left: 10%;
				padding-right: 10%;
			}
			.bord {
			  border-style: solid;
			  border-color: #9f2241; /* grey */
			}
			.bordg {
			  border-style: solid;
			  border-color: #6f7271; /* grey */
			}
			input{
				text-transform: uppercase;
			}

			.estilo-color{
				font-family: Monserrat, Medium;
				font-size: 25px;
				color:  #9f2241 ;
				font-weight: bold;
			}
			.estilo-colorr{
				color:  #f2ebd7 ;
				font-weight: bold;
			}
			.estilo-colorn{
				color:  #000000 ;
				font-weight: bold;
			}
			.estilo-colorb{
				color:  #ffffff ;
				font-weight: bold;
			}

			.plantilla-titulos{
				background-color: #A9D0F5;
				font-family: Monserrat, Medium;
				font-size: 25px;
				font-weight: bold;
				padding: 12px 12px 0px 12px;
			}

			.plantilla-subtitulos{
				font-family: Monserrat, Medium;
				font-size: 18px;
				font-weight: bold;
			}
			.plantilla-subtitulosp{
				font-family: Monserrat, Medium;
				font-size: 22px;
				font-weight: bold;
			}
			.plantilla-subtitulospr{
				font-family: Monserrat, Medium;
				font-size: 25px;
				font-weight: bold;
			}

			.plantilla-inputb{
				text-color: #ffffff;
				font-family: Monserrat, Medium;
				padding: 12px;
			}
			.plantilla-input{
				background-color: #9f2241;
				font-family: Monserrat, Medium;
				padding: 12px;
			}
			.plantilla-inputg{
				background-color: #6f7271;
				font-family: Monserrat, Medium;
				padding: 25px;
			}
			.plantilla-inputv{
				background-color: #f2ebd7;
				font-family: Monserrat, Medium;
				padding: 12px;
			}

			.plantilla-label{
				font-weight: bold;
				border-color: hsl(0, 100%, 50%); /* red */
				font-family: Monserrat, Medium;
				font-size: 18px;
			}

			.plantilla-lugnac{
				background-color: #A9D0F5;
				font-family: Monserrat, Medium;
				font-size: 21px;
				font-weight: bold;
				padding: 12px 12px 2px 12px;
			}

			.plantilla-depend{
				background-color: #A9D0F5;
				font-family: Monserrat, Medium;
				font-size: 22px;
				font-weight: bold;
				padding: 12px 12px 8px 12px;
			}

			.plantilla-inputdepend{
				background-color: #CEE3F6;
				font-family: Monserrat, Medium;
				padding: 36px 12px 36px 12px;
			}

			.tamanio-button{
				font-weight: bold;
				font-size: 25px;
			}
			.tamanio-button2{
				font-weight: bold;
				font-size: 13px;
			}

		</style>

	</head>

	<body>

			<script type="text/javascript">
					
					function autNomina(datos){
							var losDtos = document.getElementById("idDatosA").value = datos;
					}

					function enviarAutorizacion(){
							var valor = document.getElementById("idDatosA").value;
							 d=valor.split('||');
							 console.log(d);
							var parametros = { "val1" :  d[1]};
							window.location.href = './Controller/autorizarNomina.php?noFomope='+d[0]+'&usuario='+d[1]; 
		
					}
					
				</script>

		<form name="cerrar" action="../LoginMenu/vista/cerrarsesion.php" method="POST"> 
		<nav class="navbar fixed-top navbar-expand-lg navbar-dark plantilla-input fixed-top">
		    <div class="container">
		      <div class="collapse navbar-collapse" id="navbarResponsive">
		        <ul class="navbar-nav ml-auto">            
		          <li class="nav-item">
		          	<a class="nav-link" href='../LoginMenu/vista/cerrarsesion.php'>CERRAR SESIÓN</a>
		        </ul>
		      </div>
		    </div>
		  </nav>
		</form>
		<img class="img-responsive" src="img/img-salud.jpg" height="150" width="354">
		
		<center>			
			
				<h3 class="estilo-color plantilla-subtitulospr">Sistema de Control de Registro de Formato de Movimiento de Personal (SICON).</h3>
				<br>
				<h5 class=" plantilla-subtitulop"> DEPARTAMENTO DE SEGUIMIENTO DE PLANTILLAS OCUPACIONALES - DSPO</h5>
			<?php
				include "configuracion.php";
				$usuarioSeguir =  $_GET['usuario_rol'];

			?>


			<br>
			
			<form method="post" action=""> 
				<div class="plantilla-inputv text-center">
					<div class="form-row">
						<div class="col">
							<div class="form-group col-md-12">
								<label class="plantilla-label" for="elRfc">*RFC:</label>
								<input type="text" class="form-control border-dark" id="rfc" name="rfc" placeholder="Ingresa rfc" maxlength="13"  >
							</div>

						</div>

						<div class="col">

							<div class="form-group col-md-12">
								<label  class="plantilla-label" for="laQna">*QNA: </label>
									 
									<select class="form-control custom-select border-dark" name="qnaOption">
										<?php
										if (!$conexion->set_charset("utf8")) {//asignamos la codificación comprobando que no falle
										       die("Error cargando el conjunto de caracteres utf8");
										}

										$consulta = "SELECT * FROM ct_quincena";
										$resultado = mysqli_query($conexion , $consulta);
										$contador=0;

										while($misdatos = mysqli_fetch_assoc($resultado)){ $contador++;?>
										<option  data-subtext="<?php echo $misdatos["id_qna"]; ?>"><?php echo $misdatos["qna"]; ?></option>
										<?php }?>          
										</select>
							</div>
						</div>

						<div class="col">
							<div class="form-group col-md-12">
								<label  class="plantilla-label" for="elAnio">AÑO: </label>
									 
									<select class="form-control custom-select border-dark" name="anio">
										<option value=""></option>
										<option value="2019">2019</option>
	  									<option value="2020">2020</option>	
									</select>
							</div>
						</div>		
					</div>
			
				<div class="col-sm-12">
					<div class="form-row">

					<div class="form-group col-md-12">
						<div class="col text-center">
							<input type="submit" name="buscar" onclick="'<?php $_GET['usuario_rol']; ?>'" class="btn btn btn-danger tamanio-button plantilla-input text-white bord" value="Buscar"><br>

							<!-- <button type="submit" name="buscar" class="btn btn-outline-info tamanio-button">Buscar</button> -->
						</div>
					</div>

					</div>
				</div>
			</form>

		</div>
	
	</div>
			<?php 
						include "configuracion.php";

						if(isset($_POST['buscar'])){// $_SERVER['REQUEST_METHOD'] == 'POST' if(){
							$qnaBuscar = $_POST['qnaOption'];
							$rfcBuscar = $_POST['rfc'];
							$anioBuscar = $_POST['anio'];


						if($rfcBuscar != "" && $qnaBuscar != "" && $anioBuscar != ""){

								$sql="SELECT id_movimiento,color_estado,unidad,rfc,quincenaAplicada,fechaIngreso,codigoMovimiento, fechaAutorizacion FROM fomope WHERE (rfc='$rfcBuscar' AND quincenaAplicada='$qnaBuscar' AND anio='$anioBuscar')";

							}elseif ($rfcBuscar != "" && $qnaBuscar == "" && $anioBuscar == "") {
								
								$sql="SELECT id_movimiento,color_estado,unidad,rfc,quincenaAplicada,fechaIngreso,codigoMovimiento, fechaAutorizacion FROM fomope WHERE (rfc='$rfcBuscar')";
								
							}elseif ($rfcBuscar == "" && $qnaBuscar != "" && $anioBuscar != "") {
								
								$sql="SELECT id_movimiento,color_estado,unidad,rfc,quincenaAplicada,fechaIngreso,codigoMovimiento, fechaAutorizacion FROM fomope WHERE ( quincenaAplicada='$qnaBuscar' AND anio='$anioBuscar')";
								
							}elseif ($rfcBuscar == "" && $qnaBuscar == "" && $anioBuscar == "") {
								
								$sql="SELECT id_movimiento,color_estado,unidad,rfc,quincenaAplicada,fechaIngreso,codigoMovimiento, fechaAutorizacion FROM fomope WHERE (rfc='$rfcBuscar' AND quincenaAplicada='$qnaBuscar' AND anio='$anioBuscar')";
								
							}elseif ($rfcBuscar != "" && $qnaBuscar != "" && $anioBuscar == "") {
								
								$sql="SELECT id_movimiento,color_estado,unidad,rfc,quincenaAplicada,fechaIngreso,codigoMovimiento, fechaAutorizacion FROM fomope WHERE (rfc='$rfcBuscar' AND quincenaAplicada='$qnaBuscar')";
								
							}elseif ($rfcBuscar != "" && $qnaBuscar == "" && $anioBuscar != "") {
								
								$sql="SELECT id_movimiento,color_estado,unidad,rfc,quincenaAplicada,fechaIngreso,codigoMovimiento, fechaAutorizacion FROM fomope WHERE (rfc='$rfcBuscar' AND anio='$anioBuscar')";
								
							}elseif ($rfcBuscar == "" && $qnaBuscar != "" && $anioBuscar == "") {
								
								$sql="SELECT id_movimiento,color_estado,unidad,rfc,quincenaAplicada,fechaIngreso,codigoMovimiento, fechaAutorizacion FROM fomope WHERE (  quincenaAplicada='$qnaBuscar')";
								
							}elseif ($rfcBuscar == "" && $qnaBuscar == "" && $anioBuscar != "") {
								
								$sql="SELECT id_movimiento,color_estado,unidad,rfc,quincenaAplicada,fechaIngreso,codigoMovimiento, fechaAutorizacion FROM fomope WHERE (anio='$anioBuscar')";
								
							}


							$sqlColor="SELECT colorAsignado FROM usuarios WHERE usuario='$usuarioSeguir'";


							if ($result = mysqli_query($conexion,$sql)) {

								$totalFilas    =    mysqli_num_rows($result);  
								if($totalFilas == 0){
										
										echo('
											<br>
											<br>
											<div class="col-sm-12 ">
											<div class="plantilla-inputv text-dark ">
											    <div class="card-body"><h2 align="center">No existe resultados de la busqueda, vuelve intentar.</h2></div>
										</div>
										</div>');
								}else{


									while($ver=mysqli_fetch_row($result)){ 

						 ?>
		<br>
		<br>

		<table class="table table-hover table-white">
						<thead>
						    <tr>
							<!-- <td>Observacion</td>
							<td>ID Fomope</td> -->
						          <th scope="titulo">Color del estado</th>
						      <th scope="titulo">Unidad</th>
						      <th scope="titulo">RFC</th>
						      <th scope="titulo">QNA</th>
						      <th scope="titulo">Fecha de Ingreso</th>
						      <th scope="titulo">Codigo Mov.</th>
						      <th scope="titulo">Fecha de Autorizador</th>
						      
						   </tr>
					 	 </thead>

					
						<tr>
							<td><?php echo $ver[1] ?></td>
							<td><?php echo $ver[2] ?></td>
							<td><?php echo $ver[3] ?></td>
							<td><?php echo $ver[4] ?></td>
							<td><?php echo $ver[5] ?></td>
							<td><?php echo $ver[6] ?></td>
							<td><?php echo $ver[7] ?></td>
							


							<td>
								
								<?php
									if ($resultColor = mysqli_query($conexion,$sqlColor)) {
										$verColor=mysqli_fetch_row($resultColor);
										$totalColor = mysqli_num_rows($resultColor);  

										$colores2 = explode(",",$verColor[0]);
										//echo $verColor[0] . "  >>>>>>>";
										//echo $colores2[1] . "  >>>>>>>";

										
										if($totalColor != 0){
											if($ver[1] == "negro1" ){
										$datos=$ver[0]."||".$usuarioSeguir."||4";
								?>
												<button type="button" class="btn btn-outline-secondary" onclick="agregaform('<?php echo $datos ?>')" id="" >Editar</button>
								<?php	
											}else if($ver[1] == "amarillo"){
												$datos=$ver[0]."||".$usuarioSeguir."||1";
								?>	
												<button type="button" class="btn btn-outline-secondary" onclick="agregaform('<?php echo $datos ?>')" id="" >Capturar</button>

								<?php	
											}else if($ver[1] == "rosa"){
												$datos=$ver[0]."||".$usuarioSeguir."||6";
								?>	
												<button type="button" class="btn btn-outline-secondary" data-toggle="modal"  data-target="#exampleModalN" >
																 Nomina
												</button>

								<?php	

											}
										}
									}
								
								?>	
															
							</td>
						</tr>
						<?php 
										}
									}
							}else{
								echo '<script type="text/javascript">alert("Error en la conexion");</script>';
								echo '<script type="text/javascript">alert("error '. mysqli_error($conexion).'");</script>';
							}
						}
						 ?>
		</table>

			
			<div class="col-sm-12">
				
					<div class="card bg-secondary text-white">
						    <div class="card-body plantilla-inputg"><h2>Por Capturar</h2></div>
					</div>
					<table class="table table-hover table-white">
						<thead>
						    <tr>
							<!-- <td>Observacion</td>
							<td>ID Fomope</td> -->
						      <th scope="titulo">Color Estado</th>
						      <th scope="titulo">Unidad</th>
						      <th scope="titulo">RFC</th>
						      <th scope="titulo">QNA Aplicada</th>
			           		  <th scope="titulo">Fecha Ingreso</th>
			           		  <th scope="titulo">Fecha de Autorizador</th>
						      


						   </tr>
					 	 </thead>

						<?php 
							include "configuracion.php";

							$sql="SELECT id_movimiento,color_estado,unidad, rfc,quincenaAplicada,fechaIngreso, fechaAutorizacion from fomope WHERE (analistaCap = '$usuarioSeguir' AND color_estado = 'amarillo')";
							$result=mysqli_query($conexion,$sql);

							while($ver=mysqli_fetch_row($result)){ 

								$consulta2 = " SELECT * FROM fomope WHERE id_movimiento = ".$ver[0];

						        if($resultado2 = mysqli_query($conexion,$consulta2)){
					        		$row = mysqli_fetch_assoc($resultado2);
					        		$id_mov = $row['id_movimiento'];
					        	}
					        	$datos=$ver[0]."||".$usuarioSeguir."||1";

						 ?>

						<tr>
							<td><?php echo $ver[1] ?></td>
							<td><?php echo $ver[2] ?></td>
							<td><?php echo $ver[3] ?></td>
							<td><?php echo $ver[4] ?></td>
							<td><?php echo $ver[5] ?></td>
							<td><?php echo $ver[6] ?></td>

							<td>
									<button type="button" class="btn btn-outline-secondary" onclick="agregaform('<?php echo $datos ?>')" id="" >Capturar</button>

							</td>
						</tr>
						<?php 
						
						 
					}
						 ?>
					</table>
				</div>
					<?php 
						 		include "configuracion.php";
							$sql="SELECT id_movimiento,color_estado,unidad, rfc,quincenaAplicada,fechaIngreso, fechaAutorizacion
									from fomope WHERE color_estado = 'amarillo'";
							$result=mysqli_query($conexion,$sql);

							$totalFilas    =    mysqli_num_rows($result);  
							if($totalFilas == 0){
									
									echo('
										<div class="col-sm-12 ">
										<div class="plantilla-inputv text-dark">
										    <div class="card-body"><h2>No existen fomopes por capturar</h2></div>
									</div>
									</div>');
							}


						  ?>

			<div class="col-sm-12">
				
					<div class="card bg-secondary text-white">
						    <div class="card-body plantilla-inputg"><h2>Editar Rechazados</h2></div>
					</div>
					<table class="table table-hover table-white">
						<thead>
						    <tr>
							<!-- <td>Observacion</td>
							<td>ID Fomope</td> -->
						      <th scope="titulo">Color Estado</th>
						      <th scope="titulo">Unidad</th>
						      <th scope="titulo">RFC</th>
						      <th scope="titulo">QNA Aplicada</th>
			           		<th scope="titulo">Fecha Ingreso</th>
			           		<th scope="titulo">Fecha de Autorizador</th>
						   </tr>
					 	 </thead>

						<?php 
							include "configuracion.php";

							$sql="SELECT id_movimiento,color_estado,unidad, rfc,quincenaAplicada,fechaIngreso, fechaAutorizacion
									from fomope WHERE color_estado = 'negro1'";
							$result=mysqli_query($conexion,$sql);

							while($ver=mysqli_fetch_row($result)){ 

							
								$consulta2 = " SELECT * FROM fomope WHERE id_movimiento = ".$ver[0];

						        if($resultado2 = mysqli_query($conexion,$consulta2)){
					        		$row = mysqli_fetch_assoc($resultado2);
					        		$id_mov = $row['id_movimiento'];
					        	}
					        	$datos=$ver[0]."||".$usuarioSeguir."||4";


						 ?>

						<tr>
							<td><?php echo $ver[1] ?></td>
							<td><?php echo $ver[2] ?></td>
							<td><?php echo $ver[3] ?></td>
							<td><?php echo $ver[4] ?></td>
							<td><?php echo $ver[5] ?></td>
							<td><?php echo $ver[6] ?></td>

							<td>
									<button type="button" class="btn btn-outline-secondary" onclick="agregaform('<?php echo $datos ?>')" id="" >Editar</button>

							</td>
						</tr>
						<?php 
						
						 
					}
						 ?>
					</table>
			</div>
				<?php 
						 		include "configuracion.php";
							$sql="SELECT id_movimiento, unidad, rfc,fechaOficio 
									from fomope WHERE color_estado = 'amarillo'";
							$result=mysqli_query($conexion,$sql);

							$totalFilas    =    mysqli_num_rows($result);  
							if($totalFilas == 0){
									
									echo('
										<div class="col-sm-12 ">
										<div class="p-3 mb-5 bg-warning text-dark">
										    <div class="card-body"><h2>No existen rechazados.</h2></div>
									</div>
									</div>');
							}


						  ?>

			<div class="col-sm-12">
				
					<div class="card bg-secondary text-white">
						    <div class="card-body plantilla-inputg"><h2>Nomina</h2></div>
					</div>
					<table class="table table-hover table-white">
						<thead>
						    <tr>
							<!-- <td>Observacion</td>
							<td>ID Fomope</td> -->
						      <th scope="titulo">Color Estado</th>
						      <th scope="titulo">Unidad</th>
						      <th scope="titulo">RFC</th>
						      <th scope="titulo">QNA Aplicada</th>
			           		<th scope="titulo">Fecha Ingreso</th>
			           		<th scope="titulo">Fecha de Autorizador</th>
						   </tr>
					 	 </thead>

						<?php 
							include "configuracion.php";

							$sql="SELECT id_movimiento,color_estado,unidad, rfc,quincenaAplicada,fechaIngreso, fechaAutorizacion
									from fomope WHERE color_estado = 'rosa'";
							$result=mysqli_query($conexion,$sql);

							while($ver=mysqli_fetch_row($result)){ 

							
								$consulta2 = " SELECT * FROM fomope WHERE id_movimiento = ".$ver[0];

						        if($resultado2 = mysqli_query($conexion,$consulta2)){
					        		$row = mysqli_fetch_assoc($resultado2);
					        		$id_mov = $row['id_movimiento'];
					        	}
					        	$datos=$id_mov."||".$usuarioSeguir."||6";


						 ?>

						<tr>
							<td><?php echo $ver[1] ?></td>
							<td><?php echo $ver[2] ?></td>
							<td><?php echo $ver[3] ?></td>
							<td><?php echo $ver[4] ?></td>
							<td><?php echo $ver[5] ?></td>
							<td><?php echo $ver[6] ?></td>

							<td>
									

						
										<input type="button" id="autNomina" class="btn btn-outline-secondary" data-toggle="modal"  data-target="#exampleModalN" onclick="autNomina('<?php echo $datos ?>')" value="Nomina" >
																 
							
							  			


							</td>
						</tr>
						<?php 
						
						 
					}
						 ?>
					</table>

										
											<div class="modal fade" id="exampleModalN" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
											  <div class="modal-dialog" role="document">
											    <div class="modal-content">
											      <div class="modal-header">
											        <h5 class="modal-title" id="exampleModalLabel">Confirmar</h5>
											        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
											          <span aria-hidden="true">&times;</span>
											        </button>
											      </div>
											      <div class="modal-body">
											        ¿Quieres mandar a lotear el fomope?
											      </div>
											      <div class="form-row">
														<input type="text" class="form-control" id="idDatosA" name="idDatosA" style="display:none">
													</div>
											      <div class="modal-footer">
											        <button type="button" class="btn btn-secondary" data-dismiss="modal">NO, Regresar</button>
											       	<input type="button" id="autorizarNsi" value="SI" class="btn btn-outline-secondary" onclick="enviarAutorizacion()">
											      </div>
											    </div>
											  </div>
											</div>


			</div>
				<?php 
						 		include "configuracion.php";
							$sql="SELECT id_movimiento, unidad, rfc,fechaOficio 
									from fomope WHERE color_estado = 'rosa'";
							$result=mysqli_query($conexion,$sql);

							$totalFilas    =    mysqli_num_rows($result);  
							if($totalFilas == 0){
									
									echo('
										<div class="col-sm-12 ">
										<div class="plantilla-inputv text-dark">
										    <div class="card-body"><h2>No existen fomopes en captura de nomina.</h2></div>
									</div>
									</div>');
							}


						  ?>


	</center>
	</body>
</html>

