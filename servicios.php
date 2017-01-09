<?php 
    session_start();
    $menu=2;
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


	<h1 class="arriba">SERVICIO TÉCNICO EN MÚLTIPLES CAMPOS, DESCUBRE TODOS NUESTROS SERVICIOS:</h1>
				
    <div class="servicios">
    	<!--CCTV-->
        <div class="caja 1" >
        	<div class="botonCaja">
        		<span>CCTV</span>
        	</div>
             <a class="botonoculto2" href="./img/servicios/CCTV.jpg" data-lightbox="image-1" title="CCTV">
                 <img class="imagenes" src="./img/servicios/CCTV1.jpg" alt="SERVICIO TÉCNICO DE PORTEROS, CCTV, ALARMAS, REDES, INTERNET, CENTRALITAS, SONIDO ..."/>
             </a>
             
        </div> 
        <!--ALARMAS-->
        <div class="caja 2" >
        	<div class="botonCaja">
        		<span>ALARMAS</span>
        	</div>
            <a class="botonoculto2" href="./img/servicios/SEGURIDAD.jpg" data-lightbox="image-1" title="SEGURIDAD">
                 <img class="imagenes" src="./img/servicios/SEGURIDAD1.jpg" alt="SERVICIO TÉCNICO DE PORTEROS, CCTV, ALARMAS, REDES, INTERNET, CENTRALITAS, SONIDO ..."/>
             </a>     
        </div>
        <!--PORTEROS-->
        <div class="caja 3">
        	<div class="botonCaja">
        		<span>PORTEROS</span>
        	</div>
             <a class="botonoculto2" href="./img/servicios/PORTEROS.jpg" data-lightbox="image-1" title="PORTEROS">
                 <img class="imagenes" src="./img/servicios/PORTEROS1.jpg" alt="SERVICIO TÉCNICO DE PORTEROS, CCTV, ALARMAS, REDES, INTERNET, CENTRALITAS, SONIDO ..."/>
            </a>
        </div>
        <!--REDES-->
        <div class="caja 4" >
        	<div class="botonCaja">
        		<span>REDES</span>
        	</div>
             <a class="botonoculto2" href="./img/servicios/REDES.jpg" data-lightbox="image-1" title="REDES">
                 <img class="imagenes" src="./img/servicios/REDES1.jpg" alt="SERVICIO TÉCNICO DE PORTEROS, CCTV, ALARMAS, REDES, INTERNET, CENTRALITAS, SONIDO ..."/>
             </a>  
        </div>
        <!--INTERNET-->
        <div class="caja 5">
        	<div class="botonCaja">
        		<span>INTERNET</span>
        	</div>
            <a class="botonoculto2" href="./img/servicios/INTERNET.jpg" data-lightbox="image-1" title="INTERNET">
                 <img class="imagenes" src="./img/servicios/INTERNET1.jpg" alt="SERVICIO TÉCNICO DE PORTEROS, CCTV, ALARMAS, REDES, INTERNET, CENTRALITAS, SONIDO ..."/>
            </a>
        </div>
        <!--CENTRALITAS-->
        <div class="caja 6">
        	<div class="botonCaja">
        		<span>CENTRALITAS</span>
        	</div>
            <a class="botonoculto2" href="./img/servicios/CENTRALITAS.jpg" data-lightbox="image-1" title="CENTRALITAS"> 
                 <img class="imagenes" src="./img/servicios/CENTRALITAS1.jpg" alt="SERVICIO TÉCNICO DE PORTEROS, CCTV, ALARMAS, REDES, INTERNET, CENTRALITAS, SONIDO ..."/>
            </a>
        </div>
        <!--IMAGEN Y SONIDO-->
        <div class="caja 7">
        	<div class="botonCaja">
        		<span>IMAGEN Y SONIDO</span>
        	</div>
            <a class="botonoculto2" href="./img/servicios/SONIDO.jpg" data-lightbox="image-1" title="IMAGEN Y SONIDO">
                 <img class="imagenes" src="./img/servicios/SONIDO1.jpg" alt="SERVICIO TÉCNICO DE PORTEROS, CCTV, ALARMAS, REDES, INTERNET, CENTRALITAS, SONIDO ..."/>
            </a>
        </div>
        <!--ANTENAS-->
        <div class="caja 8">
        	<div class="botonCaja">
        		<span>ANTENAS</span>
        	</div>
            <a class="botonoculto2" href="./img/servicios/ANTENAS.jpg" data-lightbox="image-1" title="ANTENAS"> 
                 <img class="imagenes" src="./img/servicios/ANTENAS1.jpg" alt="SERVICIO TÉCNICO DE PORTEROS, CCTV, ALARMAS, REDES, INTERNET, CENTRALITAS, SONIDO ..."/>
            </a> 
        </div>
    </div>
		

<?php 
    include("footer.php");
 ?>
