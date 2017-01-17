
<?php 
    session_start();
    $menu=2;
    include("menu.php");
    include("header.php");
    include('mysql.inc.php');
    conectarBD($conexion);
    mysqli_select_db($conexion,'biercom');
    //si hay resultado los divido en 8 por cada página y contamos cuantos resultados hay
    //para despues paginar
    $estadistica_sql=mysqli_query($conexion, 'SELECT COUNT(*) AS total FROM servicios');
    $estadistica=mysqli_fetch_array($estadistica_sql);
    $total=$estadistica['total'];
    $paginas=ceil($total/8);
     //dependiendo de el total de resultados guardo el numero en la variable $p
    if(!isset($_GET['p'])){
        $p=1;
    }
    else if($_GET['p']>$paginas){
        $p=$paginas;
    }
    else{
        $p=$_GET['p'];
    }
    //muestro todos los articulos divididos en 8 por página
    $articulo_sql= mysqli_query($conexion, "SELECT *
        FROM servicios 
        ORDER BY id DESC
        LIMIT ".($p*8-8).",8");
?>

<div class="contenedor">
    <?php
        if(isset($_SESSION['admin'])&&$_SESSION['admin']==true){
    ?>
	<nav class="nav-collapse">
		<ul>
			  <li><a id="menu" href="./index.php" title="Ir Inicio">Inicio</a></li>
			  <li><a id="menu1" href="./contacto.php" title="Ir Contacto">Contacto</a></li>
			  <li><a id="menu2" href="./servicios.php" title="Ir Servicios">Servicios</a></li>
			  <li><a id="menu3" href="./trabajos.php" title="Ir Trabajos">Promociones</a></li>
              <li><a id="menu4" href="./menuAdmin.php" title="Ir Admin">Administracion</a></li>	  
		</ul>
	</nav>

    <?php
    }
    else{
     ?>

    <nav class="nav-collapse">
        <ul>
              <li><a id="menu" href="./index.php" title="Ir Inicio">Inicio</a></li>
              <li><a id="menu1" href="./contacto.php" title="Ir Contacto">Contacto</a></li>
              <li><a id="menu2" href="./servicios.php" title="Ir Servicios">Servicios</a></li>
              <li><a id="menu3" href="./trabajos.php" title="Ir Trabajos">Promociones</a></li>    
        </ul>
    </nav>
    <?php
     }
     ?>

	<h1 class="arriba">SERVICIO TÉCNICO EN MÚLTIPLES CAMPOS, DESCUBRE TODOS NUESTROS SERVICIOS:</h1>
				
    <div class="servicios">

        <?php
            while($servicios=mysqli_fetch_array($articulo_sql)){ ?>
                <div class="caja <?php echo $servicio['id'];?>" >
                    <div class="botonCaja">
                        <span><?php echo $servicio['titulo'];?></span>
                    </div>
                               
                    <a class="botonoculto2" href="<?php echo $servicios['tumbl']; ?>" data-lightbox="image-1" title="OFERTA"><img src="<?php echo $servicios['imagen']; ?>" alt="SERVICIO TÉCNICO DE PORTEROS, CCTV, ALARMAS, REDES, INTERNET, CENTRALITAS, SONIDO ..."/></a>
                </div>    
        <?php } ?>

    </div>

    <div class="paginacion">
       <?php
            //Mostramos las flechas y páginas segun en la que nos encontremos    
            if($p!=1){
                echo '<a class="flecha" href="servicios.php?p='.($p-1).'"><span class=".icon-flecha-izq"></span></a>';
            }
            for($i=1;$i<=$paginas;$i++){
                echo ' <a ';
                if($i==$p){
                    echo 'class="actual"';
                }    
                echo ' href="servicios.php?p='.$i.'">'.$i.'</a>';
            }
            if($p!=$paginas){
                echo '<a class="flecha" href="servicios.php?p='.($p+1).'"><span class=".icon-flecha-der"></span></a>';
            }
       ?>
    </div>
		

<?php 
    include("footer.php");
 ?>
