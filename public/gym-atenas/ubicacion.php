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
                <p>C. Gitana, La Nopalera, Tláhuac, 13220 Ciudad de México, CDMX. </p>
            </div>
            <img src="/gym-atenas-proyecto/public/gym-atenas/img/fondo-7.png" alt="Mapa de ubicación">            
            <div class="seccion-contenido">
                <h2>¡ABIERTO <span class="color-resaltado">363</span> DÍAS!</h2>
            </div>
            <div class="seccion-texto-2">
                <p>Lunes a viernes: 6:00 A.M. – 23:00 P.M.</p>             
                <p>Sábado y Domingo: 8:00 P.M. – 18:00 P.M.</p>             
            </div>
            <div class="seccion-texto-3">
                <p>Días festivos: 8:00 P.M. – 18:00 P.M.</p>             
                <p>Excepto el 25 de diciembre y el 1 de enero</p>             
            </div>
    </main>

     <?php include("elementos/footer.html");?>
    <link rel="stylesheet" href="elementos/footer.css">

    <?php include(SHARED_PATH . "/elementos/footer-vcard/footer.html");?>
</body>
    