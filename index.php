<?php 
    session_start();
    $menu=0;
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
	
	<h1 class="tituloIndex">BIERCOM PONFERRADA SERVICIO TÉCNICO EN BIERZO Y VALDEORRAS DE ANTENAS, PORTEROS, CCTV, ALARMAS ...</h1>
    <div class="columnaGrande izquierda"> 
        <p>
            Somos una empresa en <b>Ponferrada</b> de nueva creación, pero con personas con más de 20 años 
			de experiencia en <b>Servicio Técnico de Antenas, Porteros, CCTV, Alarmas... en la zona del Bierzo y Valdeorras.</b> </br>

			Nos dedicamos al mundo de las telecomunicaciones, donde cubrimos campos desde:</br>
			<ul>
				<li>
				Circuito cerrado de televisión <b>(CCTV)</b>.
				</li>
				<li>
				Videovigilancia, <b>alarmas</b>, seguridad.
				</li>
				<li>
				<b>Porteros y videoporteros.</b> 
				</li>
				<li>
				<b>Control de accesos.</b>
				</li>
				<li>
				<b>Redes</b> de datos,  Fibra óptica. Certificación de redes CAT 6 y Fibra óptica en ICT2.
				</li>
				<li>
				Instalaciones <b>Wifi, ADSL por satélite,</b> seguimiento vehículos por GPS, etc. 
				</li>
				<li>
				<b>Centralitas Telefónicas</b> para empresas (PBXs) analógicas, digitales e IP.
				</li>
				<li>
				<b>Sonido e Imagen.</b>
				</li>
				<li>
				Instalaciones de <b>Televisión, Antenas satélite y TDT</b>. ICT2, etc.
				</li>
			</ul>
        </p>
    </div>
    <div class="columnaGrande derecha">
        <img src="./img/marcas.png" alt="BIERCOM PONFERRADA SERVICIO TÉCNICO EN BIERZO Y VALDEORRAS DE ANTENAS, PORTEROS, CCTV, ALARMAS ...<"/>
    </div> 
	


	<article>
		<img src="./img/furgo.jpg" alt="BIERCOM PONFERRADA SERVICIO TÉCNICO EN BIERZO Y VALDEORRAS DE ANTENAS, PORTEROS, CCTV, ALARMAS ...<"/>
		<div class="tituloFooter">
			<span class="icon-comillas-dos"></span>CONTACTA CON NOSOTROS<span class="icon-comillas"></span>
		</div>	
		<div class="columna">
	        <div class="titulo">
	            <span class="logoReloj icon-reloj">HORARIO DE TIENDA</span>
	        </div>
	        <div class="tabla">
	            <b>Lunes - Viernes</b></br>
	            <b>Mañanas :</b>8:30 - 13:30</br>
	            <b>Tardes :</b>15:30 - 18:30</br>
	        </div>
        </div>
        <div class="columna">
	        <div class="titulo">
	            <span class="logoReloj icon-telefono">Nº TELEFONO</span>
	        </div>
	        <div class="tabla">
	            <b>Jorge :</b>670 699 842 </br>
	            <b>Fernando :</b>660 226 134</br>
	            <b>Miguel :</b>633 598 424</br>     
	        </div>
        </div>
        <div class="columna">
	        <div class="titulo">
	            <span class="logoReloj icon-home">DIRECCIÓN</span>
	        </div>
	        <div class="tabla">
	            C/ Villa Luz, 11, bajo.<br>
	            Cuatrovientos</br>
	            Ponferrada
	        </div>
        </div>
	</article>
	

<?php 
    include("footer.php");
 ?>
