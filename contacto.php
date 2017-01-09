<?php 
    session_start();
    $menu=1;
    include("menu.php");
    include("header.php");

     if(isset($_SESSION['error'])){
	    if($_SESSION['error']==0){?>
	      <div id="mensajerror"> 
	          <span id="cerrar" class="icon-basura"></span>
	          <h2>El mensaje se envió correctamente</h2>
	          <h4>Responderemos lo antes posible</h4>
	      </div>
	      <style>#mensajerror{display:block;}</style>
          <?php     $_SESSION['error']=10;
	    }
	     if($_SESSION['error']==1){?>
	      <div id="mensajerror" display="block"> 
	          <span id="cerrar" class="icon-basura"></span>
	          <h2>Error al enviar el email</h2>
	          <h4>Intentalo más tarde</h4>
	      </div>
	      <style>#mensajerror{display:block;}</style>
          <?php     $_SESSION['error']=10;
	    }
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

	    <div class="filaContactos">
			<div class="columnaGrande3 izquierda">
				<h1>CONSULTANOS PARA CUALQUIER SERVICIO TÉCNICO QUE NECESITES</h1>
				<p>Manda tus consultas a través de este sencillo formulario, y responderemos lo antes posible.</p>
				<div class="aviso2">
				 	<p>
					 	Aviso legal: En cumplimiento de lo establecido en la Ley Orgánica 15/1999, de 13 de diciembre, de Protección de Datos de Carácter
		 				 Personal le informamos que, con el envío de este formulario, sus datos personales , una vez contestada la consulta, no 
		  				serán guardados en ninguna base de datos ni fichero para su posterior utilización.
	  				</p>
				</div>
			</div>
			<div class="columnaGrande4 derecha">
				<div class="columna2">
			    	<form id="mailto" method="POST" action="mail.php">
			        	<label class="primerImput">Nombre</label><input type="text" name="nombre" placeholder="Introduce tu nombre" required/>
			        	<label>E-mail</label><input type="email" name="email" placeholder="Introduce una dirección de correo electrónico" required/>
			        	<label>Mensaje</label><textarea name="mensaje" placeholder="Introduzca su mensaje..." rows="10" required></textarea>
			        	<input class="boton" type="submit" value="ENVIAR"/>
			    	</form>
				</div>
			</div>
		</div>	
		
		<div class="filaContactos">
			<div class="columnaGrande3 derecha">
				<h1>ESTAMOS EN PONFERRADA Y CUBRIMOS BIERZO, LACIANA, LEÓN Y VALDEORRAS</h1>
				<div class="columna">
			        <div class="titulo2">
			            <span class="logoReloj icon-home">DIRECCIÓN</span>
			        </div>
			        <div class="tabla2">
			            C/ Villa Luz, 11, bajo.<br>
			            Cuatrovientos</br>
			            Ponferrada
			        </div>
	        	</div>
			</div>  

			<div class="columnaGrande4 izquierda">
				<div id="mapa">

	            </div>
	         </div> 
         </div>

   
<?php 
    include("footer.php");
 ?>