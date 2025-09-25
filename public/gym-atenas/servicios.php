<?php
$page_title = "Gym Atenas Industria";

require_once __DIR__ . '../../../bootstrap.php';

include(SHARED_PATH . "/elementos/head-vcard/head.php");
?>

<body>
    <main>
        <?php include("elementos/header.html");?>
        <link rel="stylesheet" href="elementos/header.css">

        <link rel="stylesheet" href="css/servicios.css">

        <div class="contenedor-1">
            <div class="separador"></div>  
            <div class="texto"> 
                <h1>SERVICIOS</h1>
                <h2><span>MEMBRESIAS</span></h2>
                <p>Ofrecemos membresías diseñadas para adaptarse a tu estilo de vida y necesidades:</p>
                <ul>
                    <li>MUJER</li>
                    <li>HOMBRE</li>
                    <li>ESTUDIANTE</li>
                    <li>PAQUETES PERSONALIZADOS</li>
                </ul>
                <p>Cada membresía te da acceso a un ambiente seguro, moderno y motivador, 
                    con entrenadores capacitados que te guiarán en cada paso de tu entrenamiento.</p>
                <h2><span>Entrenadores capacitados</span></h2>
                <p>Nuestro equipo de entrenadores profesionales está listo para acompañarte en cada rutina, 
                    ofreciendo asesoría personalizada y programas adaptados a tus objetivos. 
                    Ya sea que busques tonificar, ganar fuerza, mejorar tu resistencia o aprender nuevas
                    disciplinas, contamos con la experiencia y conocimiento para maximizar tus resultados.</p>
            </div>
            <div class="separador"></div>  
        </div>
        
    </main>

           <?php include("elementos/footer.html");?>
    <link rel="stylesheet" href="elementos/footer.css">

    <?php include(SHARED_PATH . "/elementos/footer-vcard/footer.html");?>
</body>