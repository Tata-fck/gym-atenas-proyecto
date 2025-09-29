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
        <div class="contenedor-1">
            <div class="separador"></div>   
            <div class="seccion-nosotros" id = "historia">
                <h1>NOSOTROS</h1>
                <p>Desde 2009, hemos acompañado a cientos de personas en su camino hacia una vida más activa, saludable y llena de energía. A lo largo de estos años, nuestro gimnasio se ha consolidado como un referente en Tláhuac, gracias a la dedicación, profesionalismo y pasión de nuestro equipo de entrenadores.</p>
                <p>Nuestra trayectoria nos respalda y nos impulsa a seguir innovando, trabajando bajo un enfoque de mejora continua. Hoy contamos con más de 100 máquinas, lo que nos permite ofrecer entrenamientos variados, efectivos y adaptados a todas las necesidades.</p>
            </div>

            <div class="seccion-nosotros" id = "mision">
                <h2><span>MISIÓN</span></h2>
                <p>Brindar un espacio moderno, seguro y motivador donde cada persona pueda desarrollar su potencial físico, guiada por entrenadores capacitados, apoyada por instalaciones de calidad, servicios complementarios, fomentando hábitos saludables y bienestar integral.</p>
            </div>

            <div class="seccion-nosotros">
                <h2><span>VISIÓN</span></h2>
                <p>Ser reconocidos como el gimnasio de referencia en la ciudad, donde calidad, profesionalismo y atención personalizada se combinan para ofrecer resultados visibles y una experiencia única que fidelice a nuestra comunidad.</p>
            </div>

            <div class="seccion-nosotros" id = "valores">
                <h2><span>VALORES</span></h2>
                <ul>
                    <li>Compromiso: Cada meta de nuestros miembros es nuestra prioridad.</li>
                    <li>Excelencia: Entrenadores y servicios diseñados para ofrecer la mejor experiencia.</li>
                    <li>Inclusión: Un espacio donde todos son bienvenidos, sin importar su nivel de entrenamiento.</li>
                    <li>Salud Integral: Promovemos hábitos que benefician cuerpo y mente.</li>
                    <li>Motivación: Inspiramos a nuestros miembros a superar cada reto con energía y entusiasmo.</li>
                    <li>Respeto: Valoramos la diversidad y fomentamos un ambiente de convivencia sana.</li>
                    <li>Honestidad: Actuamos con transparencia y ética en cada servicio que ofrecemos.</li>
                    <li>Seguridad: Garantizamos instalaciones seguras y un entorno confiable para todos.</li>
                    <li>Responsabilidad: Asumimos con seriedad el compromiso de cuidar la salud, bienestar y confianza de nuestros miembros.</li>
                </ul>
            </div>
        </div>
    </main>

           <?php include("elementos/footer.html");?>
    <link rel="stylesheet" href="elementos/footer.css">

    <?php include(SHARED_PATH . "/elementos/footer-vcard/footer.html");?>
</body>