<?php
$page_title = "Gym Atenas Industria";

require_once __DIR__ . '../../../bootstrap.php';

include(SHARED_PATH . "/elementos/head-vcard/head.php");
?>

<body>
    <main>
        <?php include("elementos/header.html");?>
        <link rel="stylesheet" href="elementos/header.css">

        <link rel="stylesheet" href="css/nosotros.css">

        <div class="seccion-nosotros">
            <h2>NOSOTROS</h2>
            <p>Desde 2009, hemos acompañado a cientos de personas en su camino hacia una vida más activa, saludable y llena de energía. A lo largo de estos años, nuestro gimnasio se ha consolidado como un referente en Tláhuac, gracias a la dedicación, profesionalismo y pasión de nuestro equipo de entrenadores.</p>
            <p>Nuestra trayectoria nos respalda y nos impulsa a seguir innovando, trabajando bajo un enfoque de mejora continua. Hoy contamos con más de 100 máquinas, lo que nos permite ofrecer entrenamientos variados, efectivos y adaptados a todas las necesidades.</p>
        </div>

        <div class="seccion-nosotros">
            <h2>MISIÓN</h2>
            <p>Brindar un espacio moderno, seguro y motivador donde cada persona pueda desarrollar su potencial físico, guiada por entrenadores capacitados, apoyada por instalaciones de calidad, servicios complementarios, fomentando hábitos saludables y bienestar integral.</p>
        </div>

        <div class="seccion-nosotros">
            <h2>VISIÓN</h2>
            <p>Ser reconocidos como el gimnasio de referencia en la ciudad, donde calidad, profesionalismo y atención personalizada se combinan para ofrecer resultados visibles y una experiencia única que fidelice a nuestra comunidad.</p>
        </div>

    </main>

           <?php include("elementos/footer.html");?>
    <link rel="stylesheet" href="elementos/footer.css">

    <?php include(SHARED_PATH . "/elementos/footer-vcard/footer.html");?>
</body>