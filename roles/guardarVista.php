
<html>
	<head>
		<meta charset="utf-8">
		<title>FOMOPE Autorizar</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/estilo_form.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

		<link href='css/jquery-ui.min.css' type='text/css' rel='stylesheet'>
		<link href='css/jquery-ui.css' type='text/css' rel='stylesheet'>

		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<script src="js/jquery-3.4.1.min.js" type="text/javascript"></script>
		<script src="js/jquery-ui.min.js" type="text/javascript"></script>
		<script src="js/jquery-ui.js" type="text/javascript"></script>
			<style type="text/css">
			
			.formulario_fomope{
				padding-left: 10%;
				padding-right: 10%;
			}
			
			input{
				text-transform: uppercase;
			}

			.estilo-color{
				color: red;
				font-weight: bold;
			}

			.plantilla-titulos{
				background-color: #A9D0F5;
				font-family: Verdana, Geneva, sans-serif;
				font-size: 22px;
				font-weight: bold;
				padding: 12px 12px 0px 12px;
			}

			.plantilla-subtitulos{
				font-family: Verdana, Geneva, sans-serif;
				font-size: 18px;
				font-weight: bold;
			}

			.plantilla-input{
				background-color: #CEE3F6;
				font-family: Verdana, Geneva, sans-serif;
				padding: 12px;
			}

			.plantilla-label{
				font-weight: bold;
			}

			.plantilla-lugnac{
				background-color: #A9D0F5;
				font-family: Verdana, Geneva, sans-serif;
				font-size: 21px;
				font-weight: bold;
				padding: 12px 12px 2px 12px;
			}

			.plantilla-depend{
				background-color: #A9D0F5;
				font-family: Verdana, Geneva, sans-serif;
				font-size: 22px;
				font-weight: bold;
				padding: 12px 12px 8px 12px;
			}

			.plantilla-inputdepend{
				background-color: #CEE3F6;
				font-family: Verdana, Geneva, sans-serif;
				padding: 36px 12px 36px 12px;
			}

			.tamanio-button{
				font-weight: bold;
				font-size: 25px;
			}

			.modal-header, h4, .close {
		    background-color: #5cb85c;
		    color:white !important;
		    text-align: center;
		    font-size: 30px;
		  }
		  .modal-footer {
		    background-color: #f9f9f9;
		  }

			  .columnaBoton {
			  width:50%;
			  float:left;
		}

		</style>
		<script type="text/javascript">
			
			function listaDeDoc(text, listaEnviar){
				document.getElementById("listaDoc").value = text;
				document.getElementById("guardarDoc").value = listaEnviar;
			}

		</script>
	</head>
	<body>

		<img class="img-responsive" src="img/img-salud.jpg" height="150" width="400">
		
		<center>			
				<h3>Sistema para guardar archivos digitales .pdf</h3>
				<br>
				<h5>DDSCH</h5>

				<?php
					if(isset($_POST["listaDoc"])){ 
						$listaMostrar = $_POST["listaDoc"];
					}else{
						$listaMostrar = "";
					}

				?>
			
			<form enctype="multipart/form-data" method="post" action=""> 
				<div class="rounded border border-dark plantilla-input text-center">
					<div class="form-row">
						<div class="col">
							<div class="form-group col-md-12">
								<label class="plantilla-label" for="elRfc">*RFC:</label>
								<input type="text" class="form-control unexp border border-dark" id="rfc" name="rfc" value="<?php if(isset($_POST["rfc"])){ echo $_POST["rfc"];} ?>" placeholder="Ingresa rfc" maxlength="13" >
							</div>
							<input type="text" style="display:none;" class="form-control border border-dark" id="listaDoc" name="listaDoc" placeholder="Apellido Paterno" value="<?php if(isset($_POST["listaDoc"])){ echo $_POST["listaDoc"];} ?>" >
							<input type="text" class="form-control" id="guardarDoc" name="guardarDoc" value="<?php if(isset($_POST["guardarDoc"])){ echo $_POST["guardarDoc"];} ?>" style="display:none">
						</div>

						
						<div class="col">
				  			<div class="col">
				  			<label  class="plantilla-label" for="nombreT">NOMBRE COMPLETO: </label>

						   <div class="form-group col-md-12">
						        <input type="text" class="form-control unexp border border-dark" id="apellido1" name="apellido1" placeholder="Apellido Paterno" maxlength="30" value="<?php if(isset($_POST["apellido1"])){ echo $_POST["apellido1"];} ?>" required>
						      </div>
						    </div>

						    <div class="col">
						     <div class="form-group col-md-12">
						        <input type="text" class="form-control unexp border border-dark" id="apellido2" name="apellido2" value="<?php if(isset($_POST["apellido2"])){ echo $_POST["apellido2"];} ?>" placeholder="Apellido Materno" maxlength="30" required>
						      </div>
						    </div>

						    <div class="col">
						     <div class="form-group col-md-12">
						        <input type="text" class="form-control unexp border border-dark" id="nombre" name="nombre" value="<?php if(isset($_POST["nombre"])){ echo $_POST["nombre"];} ?>" placeholder="Nombre" maxlength="40" value="" required>
						      </div>
						    </div>

						    	<div class="form-group">
						    <label  class="plantilla-label" for="archivo_1">Adjuntar un archivo</label>
						    <!--  <input type="hidden" name="MAX_FILE_SIZE" value="30000" /> -->
						    <input type="file" id="nameArchivo" name="nameArchivo" >
						   <!--  <p class="help-block">Ejemplo de texto de ayuda.</p> -->
						  </div>
						</div>

						<div class="col">
							<div class="md-form md-0">
							<div class="box" >
								<label  class="plantilla-label" for="arch">Nombre del archivo: </label>
								<select class="form-control border border-dark custom-select" name="documentoSelct">
									
									<?php
									include "./controller/configuracion.php";

									if (!$conexion->set_charset("utf8")) {//asignamos la codificación comprobando que no falle
									       die("Error cargando el conjunto de caracteres utf8");
									}

									$consulta = "SELECT * FROM m1ct_documentos";
									$resultado = mysqli_query($conexion , $consulta);
									$contador=0;

									while($listDoc = mysqli_fetch_assoc($resultado)){ $contador++;?>
									<option value="<?php echo $listDoc["nombre_documento"]; ?>"><?php echo $listDoc["nombre_documento"]; ?></option>
									<?php }?>          
									</select>
							</div>

						</div>
					</div>		
				</div>
			
				<!-- <div class="col-sm-12">
					<div class="form-row">

					<div class="form-group col-md-12">
						<div class="col text-center">
							 <input type="submit" name="guardarAdj" class="btn btn-outline-info tamanio-button" value="Guardar"><br> 
						</div>
					</div>

					</div>
				</div> -->
					<div class="form-group col-md-12">
						<div class="col text-center">
							<div class="columnaBoton">
								<input type="reset" class="btn btn-secondary" value="Borrar">
							</div>
							<div class="columnaBoton">	
								 <input type="submit" name="guardarAdj" class="btn btn btn-danger tamanio-button plantilla-input text-white bord" value="Guardar"><br> 

							</div>
							<!-- <button type="submit" name="buscar" class="btn btn-outline-info tamanio-button">Buscar</button> -->
							<br>
						</div>
					</div>

			</form>

		</div>
	
	</div>

		<br>
		<br>
		<?php
							$arrayView = explode("_", $listaMostrar);
												 $tamanio = count($arrayView);
												if($tamanio > 1 ){
												echo '
													<div class="form-group col-md-12 estilo-colorn" >	
					  									<label for="existe">Existen Documentos adjuntos. </label>
													</div>

												';	
												}


							if(isset($_POST['guardarAdj'])){
									$nombre = strtoupper($_POST['nombre'] );
									$elRfc =  strtoupper($_POST['rfc']);
									$elApellido1 = strtoupper ($_POST['apellido1']);
									$elApellido2 = strtoupper ($_POST['apellido2']);
									$nombreArch = $_POST['documentoSelct'];
									$listaCompleta = $_POST['listaDoc'];
									$concatenarNombDoc = $_POST['guardarDoc'];

									$nombreCompletoArch = $nombreArch."_".$listaCompleta;
									// consultamos para saber el id y el nombre corto del nombre 
									$sqlRolDoc = "SELECT id_doc, documentos FROM m1ct_documentos WHERE nombre_documento = '$nombreArch'";
									$resRol=mysqli_query($conexion, $sqlRolDoc);
									$idDoc = mysqli_fetch_row($resRol);

									$enviarDoc = $idDoc[1].'_'.$concatenarNombDoc;

								

									$dir_subida = './documentos/';
											// Arreglo con todos los nombres de los archivos
											$files = array_diff(scandir($dir_subida), array('.', '..')); 
											
											foreach($files as $file){
											    // Divides en dos el nombre de tu archivo utilizando el . 
											    $data = explode("_",$file);
											    $data2 = explode(".",$file);
												$indice = count($data2);	

												$extencion = $data2[$indice-1];
											    // Nombre del archivo
											    $extractRfc = $data[0];
											    $nameAdj = $data[1];
											    // Extensión del archivo 

											    if($elRfc == $extractRfc AND $idDoc[1] == $nameAdj){
											      		unlink($dir_subida.$elRfc."_".$nameAdj."_".$elApellido1."_".$elApellido2."_".$nombre.".".$extencion);
											        	break;
											    }
											}

											$fichero_subido = $dir_subida . basename($_FILES['nameArchivo']['name']);
											$extencion2 = explode(".",$fichero_subido);
											$tamnio = count($extencion2);

											$extencion3 = $extencion2[$tamnio-1];

											if (move_uploaded_file($_FILES['nameArchivo']['tmp_name'], $fichero_subido)) {
												sleep(3);
												$concatenarNombreC = $dir_subida.strtoupper($elRfc."_".$idDoc[1]."_".$elApellido1."_".$elApellido2."_".$nombre."_.".$extencion3);
												rename ($fichero_subido,$concatenarNombreC);
												
													$arrayDoc = explode("_", $nombreCompletoArch);
												 	$tamanioList = count($arrayDoc);
												
												 
												echo "
													<script>
															listaDeDoc( '$nombreCompletoArch', '$enviarDoc');
													</script >";
												echo '
													<br>	<br>		<br>
													<center>
													<div class="col-md-8 col-md-offset-8">
														<ul class="list-group">';
															for($i=0; $i<=$tamanioList-1; $i++){
																if($arrayDoc[$i] == ""){
																	
																}else{
																	echo "
																	<li class='list-group-item'>$arrayDoc[$i]</li>
																	";	
																}
															}
												echo '
														</ul>
													</div>	
													</center>

												';
																									   	
											} else{
											    echo "<script> alert('Existe un error al guardar el archivo'); ";
											}


								$arrayDoc = explode("_", $concatenarNombDoc) ;
								//$limite = count($arrayDoc);

								//actualizamos la base para poder tener el registro de los documentos
								for($i=0; $i < count($arrayDoc)-1 ; $i++){
									$nombreAsignar = $arrayDoc[$i];
									$sqlAgregar =  "UPDATE fomope SET $arrayDoc[$i] = '$nombreAsignar' WHERE rfc = '$elRfc'";
									if ($resUpdate = mysqli_query($conexion, $sqlAgregar)){

									}else{
										echo "<script> alert ('error');</script>";
									}

								}

							}
						?>	

	
			  
	</center>
	</body>

</html>

