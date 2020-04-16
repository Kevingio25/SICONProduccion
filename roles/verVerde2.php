<html>
	
	<head>
		<meta charset="utf-8">
		<title>SS-FOMOPE Iniciar Sesión</title>
			<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/estilo_form.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<link href='jquery/jquery-ui.min.css' type='text/css' rel='stylesheet'>
		<link href='jquery/jquery-ui.css' type='text/css' rel='stylesheet'>

		<script type="text/javascript" src="./include/jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="./include/jquery.validate.js"></script>

		

		  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

		<script src="js/funciones.js"></script>

		<script src="jquery/jquery-3.4.1.min.js" type="text/javascript"></script>
		<script src="jquery/jquery-ui.min.js" type="text/javascript"></script>
		<script src="jquery/jquery-ui.js" type="text/javascript"></script>
		<script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js" ></script>	

	<script src="js/jquery-3.4.1.min.js" type="text/javascript"></script>
		<script src="js/jquery-ui.min.js" type="text/javascript"></script>
		<script src="js/jquery-ui.js" type="text/javascript"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/estilossicon.css">

		  <style>
		  .modal-header, h4, .close {
		    background-color: #5cb85c;
		    color:white !important;
		    text-align: center;
		    font-size: 30px;
		  }
		  .modal-footer {
		    background-color: #f9f9f9;
		  }
		  </style>

		


	</head>
	<body>
		<?php 
			include "Controller/configuracion.php";
			$usuarioSeguir =  $_GET['usuario_rol'];
			$idMovSeg = $_GET['id_mov'];
			$sql = "SELECT * FROM fomope WHERE id_movimiento = '$idMovSeg'";

			if($result = mysqli_query($conexion,$sql)){
				$ver = mysqli_fetch_row($result);
			}else{
					echo '<script type="text/javascript">alert("Error en la conexion");</script>';
					echo '<script type="text/javascript">alert("error '. mysqli_error($conexion).'");</script>';
								
			}

			$consultaR = " SELECT * FROM usuarios WHERE usuario = '$usuarioSeguir'";

		        if($resultado3 = mysqli_query($conexion,$consultaR)){
	        		$row = mysqli_fetch_assoc($resultado3);
					$id_rol1 = $row['id_rol'];

					
			}
			$sqlNombre = "SELECT nombrePersonal FROM usuarios WHERE usuario = '$usuarioSeguir'";
			$result = mysqli_query($conexion,$sqlNombre);
			$nombreU = mysqli_fetch_row($result);
			//echo $idMovSeg;
		?>
	
		 <br>
    	<br>
    	<br>

		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar" class=" bordv">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-outline-secondary">
	          <i class="fa fa-bars"></i>
	          <br>
	          <span class="sr-only">Menú</span>
	        </button>
        </div>
				<div class="p-4 ">

		  		<img class="img-responsive" src="img/ss1.png" height="50" width="190">
	        <ul class="list-unstyled components mb-5">
	        	<br>
	        	<center>
	        		<li class=" estilo-color">
	            <a  href= <?php echo ("'./menuPrincipal.php?usuario_rol=$usuarioSeguir'");?> ><img src="./img/iclogin.png" alt="x" height="17" width="17"/><?php echo (" $nombreU[0]"); ?></a>
	          </li>
	        	</center>
	          <li class=" estilo-color">
	            <a href= <?php echo ("'./lulu.php?usuario_rol=$usuarioSeguir'"); ?>  ><img src="./img/icbuzon.png" alt="x" height="17" width="20"/>      Bandeja</a>
	          </li>
	          <li class=" estilo-color">
	              <a href= <?php echo ("'./consultaEstado.php?usuario_rol=$usuarioSeguir'");?> ><img src="./img/ic-consulta.png" alt="x" height="17" width="17"/> Consulta</a>
	          </li>
	          <li class=" estilo-color">
              <a ><img src="./img/icreport.png" alt="x" height="17" width="17"/> Reporte</a>
	          </li>
	          <br>
	          <br>
	          <br>
	          <br>
	          <br>
	          <br>
	          <li class=" estilo-color">
	              <a class="nav-link" href=  "../LoginMenu/vista/cerrarsesion.php" ><img src="./img/iclogout.png" alt="x" height="17" width="17"/> Cerrar Sesión</a>
	          </li>
	          </li>
	          <li class=" estilo-color">
             
	          </li>

	        </ul>

	       <!-- <div class="mb-5">
						<h3 class="h6 mb-3">Subscribe for newsletter</h3>
						<form action="#" class="subscribe-form">
	            <div class="form-group d-flex">
	            	<div class="icon"><span class="icon-paper-plane"></span></div>
	              <input type="text" class="form-control" placeholder="Enter Email Address">
	            </div>
	          </form>
					</div>-->

	        <!--<div class="footer">
	        	<p>Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0.
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
						  Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0.</p>
	        </div>-->

	      </div>
    	</nav>
    	<br>
    	<br>
    	<br>

    	<nav class="navbar fixed-top navbar-expand-lg navbar-dark bordv plantilla-inputv fixed-top">
		    <center>
		    	<div class="container plantilla-inputv " align="center">
		      <div class="collapse navbar-collapse" id="navbarResponsive">
		      	
		      		<div class="form-row " >
		      		 
		        <ul class="navbar-nav ml-auto">          
		       
		        	
		        	<h3  class="estilo-colorn">Sistema de Control de Registro de Formato de Movimiento de Personal
		          </h3>
		          <h3  class="estilo-colorv">............
		          </h3>
		        </ul>

		         <ul class="navbar-nav ml-auto">          
		      
		         <h5 class=" estilo-color">Departamento Dirección General de Recursos Humanos y Organización/Dirección integral de puestos y servicios personales</h5>
		        </ul>
		       
		     
		         
		      </div>
		      <br>
		     
		    </div> 
		</center>
		    <br>
		    <br>
		  </nav>



		
		
        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">


<center>
	<div class="col-md-8 col-md-offset-8">
					 <form name="captura1" action="./Controller/autorizarVerde2.php" method="POST"> 
				 		<div class="form-row">
							<input readonly type="text" class="form-control unexp border border-dark" id="userName" name="userName" value="<?php echo $usuarioSeguir ?>" style="display:none">
						</div>
						<div class="form-row">
							<input readonly type="text" class="form-control unexp border border-dark" id="idFom" name="idFom" value="<?php echo $idMovSeg ?>" style="display:none">
						</div>
						<div class="form-row">
						    <div class="col">
						      <div class="form-group col-md-12">
					  			<label class="plantilla-label estilo-colorg" for="fAlaborar">FECHAS ENTREGA DE EXPEDIENTE A RELACIONES LABORALES: </label>
						        <input readonly type="date" class="form-control unexp border border-dark" id="fechaRLaborales" value="<?php echo $ver[39] ?>" name="fechaRLaborales">
						      </div>
						    </div>	
						    <div class="col">

							    <div class="form-group col-md-12" >
						  		 <label class="plantilla-label estilo-colorg" for="ofEntregaL">OFICIO ENTREGA EXPEDIENTE A RELACIONES LABORALES:</label> 
						  		
							    <input readonly type="text" class="form-control unexp border border-dark" id="ofEntregaRL" value="<?php echo $ver[40] ?>" name="ofEntregaRL" placeholder="OFICIO ENTREGA EXPEDIENTE RELACIONES LABORALES" maxlength="65">
							 </div>
				  			</div>		
						    
						</div>
						<br>
						

				  		  <div class="form-group col-md-4" >
						    <label class="plantilla-label estilo-colorg" for="ejemplo_archivo_1">Archivo adjunto: </label>
						    <input readonly type="text"class="form-control unexp border border-dark" value="<?php echo $ver[41] ?>" id="ejemplo_archivo_1" name="ejemplo_archivo_1">
						   <!--  <p class="help-block">Ejemplo de texto de ayuda.</p> -->
						  </div>
						<br>
						

						<div class="form-row">
						    <div class="col">
						      <div class="form-group col-md-12" >
						  		<label class="plantilla-label estilo-colorg" for="fechaUnidad">FECHA ENTREGA EXPEDIENTE UNIDAD: </label>
							    <input readonly type="date" class="form-control unexp border border-dark" value="<?php echo $ver[42] ?>" id="fechaEntregaUnidad" name="fechaEntregaUnidad" >
					  		</div>
						    </div>	
						    <div class="col">

							   <div class="form-group col-md-12" >
							  		 <label class="plantilla-label estilo-colorg" for="ofUnidad">OFICIO ENTREGA EXPEDIENTE UNIDAD: </label> 
								    <input readonly type="text" class="form-control unexp border border-dark" id="ofEntregaUnidad" value="<?php echo $ver[43] ?>" name="ofEntregaUnidad" placeholder="OFICIO ENTREGA EXPEDIENTE UNIDAD" maxlength="49">	
						  		</div>		

				  			</div>		
						    
						</div>

							<div class="form-group col-md-12" >
					  		<label class="plantilla-label estilo-colorg" for="oficio">OFICIO ENTREGA SEGUROS: </label>
						    <input type="text" class="form-control unexp border border-dark" id="ofEntrega" name="ofEntrega" value="<?php echo $ver[10] ?>" placeholder="Ingresa el oficio de entrega" maxlength="25"required>
				  		</div>

				

						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
											 Autorizar
											</button>
							  			<br>

											<!-- Modal -->
											<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
											  <div class="modal-dialog" role="document">
											    <div class="modal-content">
											      <div class="modal-header">
											        <h5 class="modal-title" id="exampleModalLabel">Confirmar</h5>
											        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
											          <span aria-hidden="true">&times;</span>
											        </button>
											      </div>
											      <div class="modal-body">
											        ¿Estas seguro de autorizar esta información?
											      </div>
											      <div class="modal-footer">
											        <button type="button" class="btn btn-secondary" data-dismiss="modal">Regresar</button>
											       	<button type="submit" class="btn btn-primary">Aceptar</button>
											      </div>
											    </div>
											  </div>
											</div>

				  			<br>
						
							
						
					</form>  
					<form name="captura2" action="./Controller/rechazoVerde2.php" method="POST">
						<div class="form-row">
							<input readonly type="text" class="form-control" id="userName" name="userName" value="<?php echo $usuarioSeguir ?>" style="display:none">
						</div>
						<div class="form-row">
							<input readonly type="text" class="form-control unexp border border-dark" id="idFom" name="idFom" value="<?php echo $idMovSeg ?>" style="display:none">
						</div>
						
						<div class="form-group col-md-6">
							<button type="button" name="rechazo" id="rechazo" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalRT" >Rechazar </button>


						</div>
					
								<div class="modal fade" id="exampleModalRT" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="exampleModalLabel">Rechazo/modificar datos</h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div class="modal-body">
							         <textarea class="form-control border border-dark" id="MotivoRechazo" rows = "4" name="comentarioR" placeholder="Motivo...." required></textarea>
							       
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">REGRESAR</button>
									<input type="submit" class="btn btn-primary" id="descargar" name="accionB"  value="Enviar">
							      </div>
							     
							    </div>
							  </div>
							</div>

				</div>


					</form>

</center>
				
					<script src="js/bootstrap.min.js"></script>
   	<script src="js/main.js"></script>
				</div>
		
	</body>

		
</html>

