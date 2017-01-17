<?php 
    session_start();
    include('mysql.inc.php');
    conectarBD($conexion);
	mysqli_select_db($conexion,'biercom');



	if((isset($_POST['pass']))){
		$pass=md5('joosee'.$_POST['pass']);
		$check_sql=mysqli_query($conexion,'
			SELECT * FROM otra WHERE nombre="'.$pass.'"');
		if(mysqli_affected_rows($conexion)==0){

			header('Location: index.php');
		}
	
	
	else{
			$_SESSION['admin']=true;
			$menu=4;
    		include("menu.php");
    		include("header.php");


	/*SERVICIOS*/
   if(isset($_SESSION['admin'])&&$_SESSION['admin']==true){
   

    	if(isset($_POST['imagen'])&&isset($_POST['tumbl'])){
    			echo "hola2";
    		if($_FILES['imagen']['error']==0){
			$ruta1='./img/servicios/'.$_FILES['imagen']["name"];
			$ruta2='./img/servicios/'.$_FILES['imagen']["name"];
			if(move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta1&&$ruta2)){
				$imagenservicios=$ruta1;
				$tumblservicios=$ruta2;


	    	if(mysqli_query($conexion,"INSERT INTO servicios
				VALUES ('NULL',
				'".ucfirst($_POST['titulo'])."',
				'".$tumblservicios."',
				'".$imagenservicios."'.")){
			       header('Location: servicios.php');
			}
			 else{
			        //mensaje de error
			        echo mysqli_error($conexion);
			  }
			}
		}
	}
		/*GALERIA*/
		if((isset($_POST['imagen']))&&(!isset($_POST['tumbl']))){
	    	if(mysqli_query($conexion,"INSERT INTO galeria
				VALUES ('NULL',
				'".ucfirst($_POST['titulo'])."',
				'".$_POST['imagen']."'.")){
			       header('Location: trabajos.php');
			}
			 else{
			        //mensaje de error
			        echo mysqli_error($conexion);
			  }
		}
		/*PROMOCION*/
		if((isset($_POST['promocion']))){
	    	if(mysqli_query($conexion,"INSERT INTO promociones
				VALUES ('NULL',
				'".ucfirst($_POST['titulo'])."',
				'".$_POST['promocion']."'.")){
			       header('Location: trabajos.php');
			}
			 else{
			        //mensaje de error
			        echo mysqli_error($conexion);
			  }
		}

    }
    else{
		header('Location: index.php');
	}
	
     ?>
				<div class="contenedor">

					<nav class="nav-collapse">
						<ul>
							  <li><a id="menu" href="./index.php" title="Ir Inicio">Inicio</a></li>
							  <li><a id="menu1" href="./contacto.php" title="Ir Contacto">Contacto</a></li>
							  <li><a id="menu2" href="./servicios.php" title="Ir Servicios">Servicios</a></li>
							  <li><a id="menu3" href="./trabajos.php" title="Ir Trabajos">Promociones</a></li>	  
						</ul>
					</nav>


					<a href="./cerrar.php"><div class="boton">Cerrar Sesión</div></a>
					<div class="parte">
						<h2>CREAR NUEVO SERVICIO</h2>
						<form method="POST" enctype="multipart/form-data" >
							 <input class="caja" name="titulo" type="text" placeholder="Titulo del servicio" required="required"/></br>
							 <input class="img" type="file" name="tumbl" required="required"/></br>
							 <input class="img" type="file" name="imagen" required="required"/></br>
							 <input class="boton" type="submit" value="Guardar"/>
							 <input class="boton" type="reset" value="Borrar"/>
						 </form>
					</div>
					<div class="parte">
						<h2>BORRAR SERVICIO</h2>
						<form method="POST" action="borrarRegistro.php">
						<?php
							$articulo_sql1= mysqli_query($conexion, "SELECT *
						    FROM servicios");

							echo '<select name="titulo" class="file3">';

							while($servicios=mysqli_fetch_array($articulo_sql1)){
								echo '<option>'.$servicios["titulo"].'</option>';
							}
							echo '</select>';
						?>
							<br>
							<input class="boton" type="submit" value="Borrar">
						</form>
					</div>
					<div class="parte">
						<h2>BORRAR PROMOCION</h2>
						<form method="POST" action="borrarRegistro.php">
						<?php
							$articulo_sql2= mysqli_query($conexion, "SELECT *
						    FROM promociones");

							echo '<select name="titulo" class="file3">';

							while($promociones=mysqli_fetch_array($articulo_sql2)){
								echo '<option>'.$promociones["titulo"].'</option>';           
							}
							echo '</select>';
						?>
							<br>
							<input class="boton" type="submit" value="Borrar">
						</form>
					</div>
					<div class="parte">
						<h2>BORRAR IMAGEN DE GALERIA</h2>
						<form method="POST" action="borrarRegistro.php">
						<?php
							$articulo_sql3= mysqli_query($conexion, "SELECT *
						    FROM galeria");

							echo '<select name="titulo" class="file3">';

							while($galeria=mysqli_fetch_array($articulo_sql3)){
								echo '<option>'.$galeria["titulo"].'</option>';           
							}
							echo '</select>';
						?>
							<br>
							<input class="boton" type="submit" value="Borrar">
						</form>
					</div>

				</div>	
				
			<?php 
			    include("footer.php");
		}


	

