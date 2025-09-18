<?php 
$page_title = "Gym Atenas Industria";

require_once __DIR__ . '..\..\..\bootstrap.php';

include(SHARED_PATH . "/elementos/head-vcard/head.php");
?>

<body>
    <main>

        <?php include("elementos/header.html");?>
        <link rel="stylesheet" href="elementos/header.css">

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
    
    <?php include("elementos/footer.html");?>
    <link rel="stylesheet" href="elementos/footer.css">

    <?php include(SHARED_PATH . "/elementos/footer-vcard/footer.html");?>

</body>
</html>