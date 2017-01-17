<?php 
    session_start();
    $menu=4;
    include("menu.php");
    include("header.php");

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

			<div class="formularioInicio">
			<h1 class="arriba">Acceso al Panel de Administración</h2>
				<form action="menuAdmin.php" method="POST">
					 <input id="pass" class="caja" name="pass" type="password" placeholder="Contraseña" required="required" title="Introduzca clave de administrador." autofocus/></br>
					 <input class="boton" type="submit" value="Acceder"/>
				 </form>
			 </div>
		</div>
     </body>
</html>