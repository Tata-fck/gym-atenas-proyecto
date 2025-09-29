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

        <div class="contenedor-1" id = "membresias">
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

        <div class="contenedor-2" id = "areas">
            <h2><span>ÁREAS</span></h2>
            <p>Nuestro gimnasio está cuidadosamente diseñado para ofrecer comodidad y funcionalidad:</p>
            <div class="areas">
                <div class="cont2-1">
                    <h3>Nivel 1:</h3>
                    <h4>Área de cardio y salón de usos múltiples.</h4>
                </div>
                <div class="cont2-2">
                    <h3>Nivel 2:</h3>
                    <h4>Peso integrado.</h4>
                </div>
                <div class="cont2-3">
                    <h3>Nivel 3:</h3>
                    <h4>Peso libre.</h4>
                </div>
            </div>
        </div>
        <div class="contenedor-4" id="estructura">
            <div class="separador"></div>
            <h2><span>ESTRUCTURA</span></h2>
            <p>Disponemos de:</p>
            <div class="contenedor-4_1">
                <h3>baños limpios</h3>
                <h3>vestidores</h3>
                <h3>regaderas limpias y equipadas</h3>
                <h3>estacionamiento propio</h3>
                <h3>wi-fi gratis</h3>
                <h3>exhibidor de complementos</h3>
            </div>
            <p>Asegurando que cada visita sea práctica y enfocada en tu bienestar.</p>
            <div class="separador"></div>
        </div>
        <div class="contenedor-3" id = "actividades">
             <div class="separador"></div>
            <h2><span>ACTIVIDADES</span></h2>
            <p>Ofrecemos una variedad de clases y actividades para todos los niveles y objetivos:</p>
            <h3>Taekwon-do:</h3>
                <p>Mejora tu disciplina, fuerza y coordinación.</p>
            <h3>Cardio Escaladoras:</h3>
                <p>Rutinas efectivas para resistencia y quema de calorías.</p>
             <h3>Jumping:</h3>
                <p>Ejercicios dinámicos que combinan fuerza y diversión.</p>
            <h3>Zumba:</h3>
                <p>Tonifica mientras disfrutas de la música y la energía del grupo.</p>
            <div class="separador"></div> 
        </div>
        
    </main>

           <?php include("elementos/footer.html");?>
    <link rel="stylesheet" href="elementos/footer.css">

    <?php include(SHARED_PATH . "/elementos/footer-vcard/footer.html");?>
</body>