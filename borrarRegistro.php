<?php
	session_start();
	if(isset($_SESSION['admin'])&&$_SESSION['admin']==true){
		include('mysql.inc.php');
		conectarBD($conexion);
		mysqli_select_db($conexion,'biercom');

		/*BORRAR UN SERVICIO*/

		if((isset($_POST['tumbl']))&&(isset($_POST['imagen']))){
			$valor1=$_POST['titulo'];
			
			$articulo_sql= mysqli_query($conexion, "DELETE FROM servicios WHERE titulo='$valor1'");

			header('Location: servicios.php');
		}

		/*BORRAR UNA PROMOCION*/

		if(isset($_POST['promocion'])){
			$valor2=$_POST['titulo'];
			
			$articulo_sql= mysqli_query($conexion, "DELETE FROM promociones WHERE titulo='$valor2'");

			header('Location: trabajos.php');
		}

		/*BORRAR UNA IMAGEN DE LA GALERIA*/

		if((isset($_POST['imagen']))&&(!isset($_POST['tumbl']))){
			$valor3=$_POST['titulo'];
			
			$articulo_sql= mysqli_query($conexion, "DELETE FROM galeria WHERE titulo='$valor3'");

			header('Location: trabajos.php');
		}
	}
	else{
		header('Location: index.php');
	}
?>
