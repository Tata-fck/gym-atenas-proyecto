<?php 
$page_title = "Gym Atenas Industria";

// 1. Cargar la configuración de forma segura.
// Esta ruta es relativa al archivo actual y siempre funcionará dentro del paquete.

//-1. Creé una clase llamada top-line, para llamarla en css 
//-2. Metí el menu de hamburguesa, despliegue de opciones. Funciona con codigo JavaScript, cree las clases menu-toggle
require_once __DIR__ . '..\..\..\bootstrap.php';

include(SHARED_PATH . "/elementos/head-vcard/head.php");
?>

<body>
    <div class="top-line"></div> 
    <?php// Simula cada linea del menú de opciones, por eso son 3  ?>
     <div class="menu-toggle" id="menuToggle">
        <div class="hamburger"></div>
        <div class="hamburger"></div>
        <div class="hamburger"></div>
    </div>

    <nav class="side-menu" id="sideMenu">
        <div class="close-btn" id="closeMenu">&times;</div>
        <ul class="menu-list">
            <li><a href="nosotros.php">Nosotros</a></li>
            <li><a href="servicios.php">Servicios</a></li>
            <li><a href="ubicacion.php">Ubicación</a></li>
            <li><a href="horario.php">Horario</a></li>
            <li><a href="contactos.php">Contactos</a></li>
        </ul>
    </nav>

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

    <script>
          // Espera a que el contenido del documento se cargue completamente antes de ejecutar el script.
        document.addEventListener('DOMContentLoaded', function() {
                        // Obtiene los elementos del DOM por su ID.
            const menuToggle = document.getElementById('menuToggle');
            const sideMenu = document.getElementById('sideMenu');
            const closeMenu = document.getElementById('closeMenu');

            // Agrega un "escuchador de eventos" para detectar clics en el botón de menú.
            menuToggle.addEventListener('click', function() {
            // Alterna la clase "open" en el menú lateral. El CSS se encarga de mostrarlo u ocultarlo
                sideMenu.classList.toggle('open');
            });
    
            closeMenu.addEventListener('click', function() {
                 // Remueve la clase "open" para ocultar el menú.
                sideMenu.classList.remove('open');
            });

            document.addEventListener('click', function(event) {
               // Verifica si el clic no fue dentro del menú ni del botón, y si el menú está abierto.
                if (!sideMenu.contains(event.target) && !menuToggle.contains(event.target) && sideMenu.classList.contains('open')) {
                     // Si se cumplen las condiciones, cierra el menú.
                    sideMenu.classList.remove('open');
                }
            });
        });
    </script>
</body>
</html>