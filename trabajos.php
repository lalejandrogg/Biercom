<?php 
    session_start();
    $menu=3;
    include("menu.php");
    include("header.php");
    include('mysql.inc.php');
    conectarBD($conexion);
    mysqli_select_db($conexion,'biercom');
    //si hay resultado los divido en 8 por cada página y contamos cuantos resultados hay
    //para despues paginar
    $estadistica_sql1=mysqli_query($conexion, 'SELECT COUNT(*) AS total FROM promociones');
    $estadistica1=mysqli_fetch_array($estadistica_sql1);
    $total1=$estadistica1['total'];
    $paginas1=ceil($total1/4);
     //dependiendo de el total de resultados guardo el numero en la variable $p
    if(!isset($_GET['p'])){
        $p1=1;
    }
    else if($_GET['p']>$paginas1){
        $p1=$paginas1;
    }
    else{
        $p1=$_GET['p'];
    }
    //muestro todos los articulos divididos en 8 por página
    $articulo_sql1= mysqli_query($conexion, "SELECT *
        FROM promociones 
        ORDER BY id DESC
        LIMIT ".($p1*4-4).",4");

    //si hay resultado los divido en 8 por cada página y contamos cuantos resultados hay
    //para despues paginar
    $estadistica_sql2=mysqli_query($conexion, 'SELECT COUNT(*) AS total FROM galeria');
    $estadistica2=mysqli_fetch_array($estadistica_sql2);
    $total2=$estadistica2['total'];
    $paginas2=ceil($total2/8);
     //dependiendo de el total de resultados guardo el numero en la variable $p
    if(!isset($_GET['p'])){
        $p2=1;
    }
    else if($_GET['p']>$paginas2){
        $p2=$paginas2;
    }
    else{
        $p2=$_GET['p'];
    }
    //muestro todos los articulos divididos en 8 por página
    $articulo_sql2= mysqli_query($conexion, "SELECT *
        FROM galeria 
        ORDER BY id DESC
        LIMIT ".($p1*8-8).",8");
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

    <h1 class="arriba">PROMOCIONES</h1>

    <div class="promos">

        <?php
            while($servicios=mysqli_fetch_array($articulo_sql1)){ ?>
                <div class="polaroid">
                    <a href="<?php echo $servicios['imagen']; ?>" data-lightbox="image-1" title="<?php echo $servicio['titulo'];?>">
                   <img src="<?php echo $servicios['imagen']; ?>" alt="<?php echo $servicio['titulo'];?>"/></a>
                    <div class="container">
                      <p><?php echo $servicio['titulo'];?></p>
                    </div>              
                    
                </div>    
        <?php } ?>

    

        <div class="paginacion">
           <?php
                //Mostramos las flechas y páginas segun en la que nos encontremos    
                if($p1!=1){
                    echo '<a class="flecha" href="trabajos.php?p='.($p1-1).'"><span class=".icon-flecha-izq"></span></a>';
                }
                for($i=1;$i<=$paginas1;$i++){
                    echo ' <a ';
                    if($i==$p1){
                        echo 'class="actual"';
                    }    
                    echo ' href="trabajos.php?p='.$i.'">'.$i.'</a>';
                }
                if($p1!=$paginas1){
                    echo '<a class="flecha" href="trabajos.php?p='.($p1+1).'"><span class=".icon-flecha-der"></span></a>';
                }
           ?>
        </div>

    </div> 


   
    <h1 class="arriba">ALGUNOS DE NUESTROS TRABAJOS CON CCTV, ALARMAS, ANTENAS, PORTEROS...</h1>

    <div class="promos">
       <?php
            while($galeria=mysqli_fetch_array($articulo_sql2)){ ?>
                <div class="polaroid">
                    <a href="<?php echo $galeria['imagen']; ?>" data-lightbox="image-1" title="<?php echo galeria['titulo'];?>">
                   <img src="<?php echo $galeria['imagen']; ?>" alt="<?php echo galeria['titulo'];?>"/></a>
                    <div class="container">
                      <p><?php echo galeria['titulo'];?></p>
                    </div>              
                    
                </div>    
        <?php } ?>

    

        <div class="paginacion">
           <?php
                //Mostramos las flechas y páginas segun en la que nos encontremos    
                if($p2!=1){
                    echo '<a class="flecha" href="trabajos.php?p='.($p2-1).'"><span class=".icon-flecha-izq"></span></a>';
                }
                for($i2=1;$i2<=$paginas2;$i2++){
                    echo ' <a ';
                    if($i2==$p2){
                        echo 'class="actual"';
                    }    
                    echo ' href="trabajos.php?p='.$i2.'">'.$i2.'</a>';
                }
                if($p2!=$paginas2){
                    echo '<a class="flecha" href="trabajos.php?p='.($p2+1).'"><span class=".icon-flecha-der"></span></a>';
                }
           ?>
        </div>

 </div>



<?php 
    include("footer.php");
 ?>
