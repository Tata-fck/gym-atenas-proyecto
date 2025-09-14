<?php 
$page_title = "Gym Atenas Industria";

// 1. Cargar la configuración de forma segura.
// Esta ruta es relativa al archivo actual y siempre funcionará dentro del paquete.

//-1. En la etiqueta header le doy una clase llamada top-bar, para llamarla en css 
require_once __DIR__ . '..\..\..\bootstrap.php';

include(SHARED_PATH . "/elementos/head-vcard/head.php");
?>

<body>
    <main>
        <div class="contenedor-1">
            <img class="logo" src="img/logo.png" alt="Gym Atenas Logo">
            <div class="info-cliente">
                <h1>ATENAS INDUSTRIA GYM</h1>
                <h2>TU MEJOR VERSIÓN EMPIEZA AQUÍ</h2>
            </div>
        </div>
        <div class="contenedor-2">
            
        </div>
    </main>
    <?php include(SHARED_PATH . "/elementos/footer-vcard/footer.html");?>
</body>
</html>