<?php 
    session_start();
    $menu=3;
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

    <h1 class="arriba">PROMOCIONES</h1>

<div class="promos">
        <div class="polaroid">
        <a  href="./img/ofertas/IMG-20160301-WA0000.jpg" data-lightbox="image-1" title="WIMAX">
          <img src="./img/ofertas/IMG-20160301-WA0000.jpg" alt="WIMAX"">
        </a>  
          <div class="container">
            <p>Internet via satelite</p>
          </div>
        </div>

        <div class="polaroid">
        <a  href="./img/ofertas/web.jpg" data-lightbox="image-1" title="WIMAX">
          <img src="./img/ofertas/web.jpg" alt="Diseño Web" ">
        </a>  
          <div class="container">
            <p>Diseño de Páginas Web</p>
          </div>
        </div>

 </div>  
   
    <h1 class="arriba">ALGUNOS DE NUESTROS TRABAJOS CON CCTV, ALARMAS, ANTENAS, PORTEROS...</h1>



    <div class="promos">
        <div class="polaroid">
        <a  href="./img/slider/antena.jpg" data-lightbox="image-1" title="TDT Unifamiliar">
          <img src="./img/slider/antena.jpg" alt="TDT Unifamiliar"">
        </a>  
          <div class="container">
            <p>Instalación TDT unifamiliar</p>
          </div>
        </div>

        <div class="polaroid">
        <a  href="./img/slider/antena2.jpg" data-lightbox="image-1" title="TDT Comunitario">
          <img src="./img/slider/antena2.jpg" alt="TDT Comunitario" ">
        </a>  
          <div class="container">
            <p>Instalación comunitaria TDT y Parabólica</p>
          </div>
        </div>

        <div class="polaroid">
        <a  href="./img/slider/Videoportero.jpg" data-lightbox="image-1" title="Videoportero">
          <img src="./img/slider/Videoportero.jpg" alt="Videoportero" ">
        </a>  
          <div class="container">
            <p>Instalación Videoportero Comunitario</p>
          </div>
        </div>

        <div class="polaroid">
        <a  href="./img/slider/portero.jpg" data-lightbox="image-1" title="Portero">
          <img src="./img/slider/portero.jpg" alt="Portero" ">
        </a>  
          <div class="container">
            <p>Instalación Portero Comunitario</p>
          </div>
        </div>

        <div class="polaroid">
        <a  href="./img/slider/rack.jpg" data-lightbox="image-1" title="Rack de comunicaciones">
          <img src="./img/slider/rack.jpg" alt="Rack de comunicaciones" ">
        </a>  
          <div class="container">
            <p>Rack de comunicaciones</p>
          </div>
        </div>

        <div class="polaroid">
        <a  href="./img/slider/cctv.jpg" data-lightbox="image-1" title="CCTV">
          <img src="./img/slider/cctv.jpg" alt="CCTV" ">
        </a>  
          <div class="container">
            <p>Instalación de Videovigilancia</p>
          </div>
        </div>

 </div>



<?php 
    include("footer.php");
 ?>
