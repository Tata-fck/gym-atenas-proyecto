<?php 
$page_title = "Gym Atenas Industria";

require_once __DIR__ . '../../../bootstrap.php';

include(SHARED_PATH . "/elementos/head-vcard/head.php");
?>

<body>
    <main>

        <?php include("elementos/header.html");?>
        <link rel="stylesheet" href="elementos/header.css">
        <link rel="stylesheet" href="css/ubicacion.css">

         <div class="contenedor-1">
            <div class="separador"></div>   
            <div class="seccion-ubicacion">
                <h1>UBICACIÓN & HORARIO</h1>
            </div>
            <div class="seccion-texto-1">
                <p><span>C. Gitana, La Nopalera, Tláhuac, 13220 Ciudad de México, CDMX. </span></p>
            </div>
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d407.40612931590596!2d-99.05336776653843!3d19.30054096601656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ce0366308a955b%3A0x86fd03da3851d73c!2sATENAS%20INDUSTRIA%20GYM!5e0!3m2!1ses!2smx!4v1758947266347!5m2!1ses!2smx" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>            
            <div class="seccion-contenido">
                <h2>¡ABIERTO <span class="color-resaltado">363</span> DÍAS!</h2>
            </div>
            <div class="seccion-texto-2" id = "horario">
                <p>Lunes a viernes: <br><b>6:00 A.M. – 23:00 P.M.</b></p>             
                <p>Sábado y Domingo: <br><b>8:00 P.M. – 18:00 P.M.</b></p>  
                <p>Días festivos: <br><b>8:00 P.M. – 18:00 P.M.</b></p>             
                <p><span>Excepto el 25 de diciembre <br>y el 1 de enero</span></p>             
            </div>
    </main>

     <?php include("elementos/footer.html");?>
    <link rel="stylesheet" href="elementos/footer.css">

    <?php include(SHARED_PATH . "/elementos/footer-vcard/footer.html");?>
</body>
    