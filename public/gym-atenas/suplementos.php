<?php
$page_title = "Gym Atenas Industria";

require_once __DIR__ . '../../../bootstrap.php';

include(SHARED_PATH . "/elementos/head-vcard/head.php");
?>


<body>
    <div class="background-wrapper"></div> 
    <main>
        <?php include("elementos/header.html");?>
        <link rel="stylesheet" href="elementos/header.css">

        <link rel="stylesheet" href="css/suplementos.css">

        <div class="contenedor-1">
            <div class="separador"></div>   
            <div class="seccion-suplementos">
                <h1>SUPLEMENTOS & MÁS</h1>
            </div>
            <div class="seccion-texto-1">
                <p>Complementa tu entrenamiento con productos seleccionados para potenciar tu rendimiento: </p>
            </div>
            <div class="seccion-contenido">
                <h2><span>PROTEINAS</span></h2>
                <h2><span>CREATINA</span></h2>
                <h2><span>PREENTRENOS</span></h2>
                <h2><span>BEBIDAS ENERGÉTICAS</span></h2>
                <h2><span>SNACKS SALUDABLES</span></h2>
            </div>
            <div class="seccion-texto-2">
                <p>Todo pensado para mantener tu energía y apoyar tus objetivos sin complicaciones.</p>             
            </div>
            
        </div>
    </main>

     <?php include("elementos/footer.html");?>
    <link rel="stylesheet" href="elementos/footer.css">

    <?php include(SHARED_PATH . "/elementos/footer-vcard/footer.html");?>
</body>