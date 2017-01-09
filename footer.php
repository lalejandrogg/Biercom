            <footer>
              <p>&copy; 2015 - Biercom.com  <a href="./aviso.php"> -  Aviso legal  - </a> <span class="dos"> Desarrollado por 
              <a href="http://www.lagg.es"> -  Alex García  - </a></span></p>  
            </footer>
        </div>    
        <script src="./js/jquery-1.10.2.js"></script>
        <script type="text/javascript" src="./js/jquery.cookieuttr.js"></script>
        <script type="text/javascript" src="./js/jquery.cookie.js"></script>
        <script type="text/javascript" src="./js/jquery.nivo.slider.js"></script>
        <script src="./js/lightbox-2.6.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB-YLSEZRk4X3tK28RPggKkGDHAOZGSnZw">
        </script>
       
       <script type="text/javascript">
        $(window).load(function() {
              $('#slider').nivoSlider();
          });
       </script>

        <script type="text/javascript">  
        //Cerrar mensaje email
        $(document).ready(function(){
          $("#cerrar").click(function(e){  
            $("#mensajerror").css("display", "none");   
          });
        });  
        //API de Google Maps
           function initialize() {
            var posicion=new google.maps.LatLng(42.559917,-6.626646);
             var mapOptions = {
               center:posicion,
               zoom: 17,
               panControl:false,
               mapTypeControl:false,
               zoomControl:false
             };
             var map = new google.maps.Map(document.getElementById("mapa"), mapOptions);
            //Marcador personalizado
            var marker = new google.maps.Marker({
              position: posicion,
              map: map,
              icon:"./img/biercomicono.png",
              animation:google.maps.Animation.BOUNCE
            });

           }
           google.maps.event.addDomListener(window, 'load', initialize);

           //Google Analitics dentro del cookieCuttr
           $(document).ready(function(){
            $.cookieCuttr();
          });
           if (jQuery.cookie('cc_cookie_accept') == "cc_cookie_accept") {
            
            
              (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
              (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
              m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
              })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

              ga('create', 'UA-88823127-1', 'auto');
              ga('send', 'pageview');


            
          }
          </script>
    </body>
</html>