<?php
// Evita que se acceda directamente al archivo
if (basename(__FILE__) == basename($_SERVER['SCRIPT_FILENAME'])) {
    die('Acceso directo no permitido.');
}

$ruta_script = str_replace('\\', '/', $_SERVER['SCRIPT_FILENAME']);
$marcador = '/public/';
$posicion_marcador = strpos($ruta_script, $marcador);
$slug_cliente = null;

if ($posicion_marcador !== false) {
    $ruta_relativa = substr($ruta_script, $posicion_marcador + strlen($marcador));
    $partes = explode('/', $ruta_relativa, 2); 
    $slug_cliente = $partes[0];
}

if (is_null($slug_cliente) || $slug_cliente === '') {
    $url_sitio_web = '#error-ruta-no-valida';
    $mostrar_qr = false;
    $ruta_logo = '';

} else {
    // --- URL CORRECTA PARA EL QR Y BOTÓN ---
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
    $host = $_SERVER['HTTP_HOST'];
    $base_path = dirname($_SERVER['SCRIPT_NAME']); 
    $url_sitio_web = $protocol . "://" . $host . $base_path . "/index.php";
    
    $mostrar_qr = true;

    /* LOCAL */
    $ruta_logo ='/gym-atenas-proyecto/' . $marcador . $slug_cliente . '/img/logo.webp';
}
?>

<div id="modal-qr-overlay">
    <div id="modal-qr-contenido">
        
        <?php if ($mostrar_qr && $ruta_logo !== ''): ?>
            <img src="<?php echo htmlspecialchars($ruta_logo); ?>" alt="Logo Cliente" class="qr-logo-cliente">
        <?php endif; ?>

        <h4>Escanéa para visitar el Sitio Web</h4>
        
        <div id="qr-code-placeholder"></div>
        
        <small><?php echo htmlspecialchars($url_sitio_web); ?></small>
        
        <div class="botones">
            <button id="btn-compartir-pagina" class="btn-qr">
                Compartir Página
            </button>
        </div>
    </div>
</div>

<div class="footer-vcard">
    <div class="grupo-2">
        <small>© 2025 <b>NexoCard</b> - Todos los Derechos Reservados.</small>
        <button id="btn-abrir-modal-qr" class="btn-qr">Generar QR del sitio</button>
    </div>
</div>

<style>
    /* ... (Tu CSS existente) ... */
    .footer-vcard, #modal-qr-overlay {
        font-family: Verdana, Geneva, sans-serif !important;
    }
    .grupo-2 {
        background-color: #81b29a;
        padding: 10px;
        text-align: center;
        color: #000;
        margin: 0;
    }
    .grupo-2 small {
        font-size: 12px;
        margin-bottom: 8px; 
    }
    .btn-qr {
        background-color: #6d4c41;
        color: #fff;
        border: none;
        padding: 10px 12px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 12px;
    }
    .btn-qr:hover {
        background-color: #533e37;
    }

    #modal-qr-overlay {
        display: none; 
        position: fixed; 
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.75);
        z-index: 1000;
        justify-content: center;
        align-items: center;
    }
    #modal-qr-contenido {
        background-color: #fff;
        color: #333;
        padding: 25px;
        border-radius: 8px;
        text-align: center;
        box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        width: 300px;
    }
    #modal-qr-contenido h4 {
        margin: 0 0 15px 0;
        font-size: 16px;
    }
    #modal-qr-contenido small {
        font-size: 12px;
        color: #555;
        margin-top: 10px;
        display: block;
        word-wrap: break-word;
    }
    #qr-code-placeholder {
        margin: 0 auto; 
        width: 200px;  
        height: 200px; 
    }
    #qr-code-placeholder canvas {
        margin: 0 auto;
    }
    .qr-logo-cliente {
        max-width: 120px; 
        height: auto;
        object-fit: contain;
        margin-bottom: 10px;
    }
    .botones {
        margin-top: 20px;
    }
    .btn-qr:disabled {
        background-color: #aaa; 
        cursor: not-allowed;
    }
</style>

<script src="https://cdn.jsdelivr.net/npm/qrcodejs/qrcode.min.js"></script>

<script>
(function() {
    // --- Variables ---
    const btnAbrir = document.getElementById('btn-abrir-modal-qr');
    const overlay = document.getElementById('modal-qr-overlay');
    const qrPlaceholder = document.getElementById('qr-code-placeholder');
    const qrUrl = "<?php echo $url_sitio_web; ?>";
    let qrCodeGenerado = false; 
    
    // Referencia al ÚNICO botón
    const btnCompartirPagina = document.getElementById('btn-compartir-pagina'); 

    // --- Abrir/Cerrar Modal (Sin cambios) ---
    btnAbrir.addEventListener('click', function() {
        if (!qrCodeGenerado) {
            new QRCode(qrPlaceholder, {
                text: qrUrl,
                width: 200, height: 200,
                colorDark: "#000000", colorLight: "#ffffff",
                correctLevel: QRCode.CorrectLevel.H
            });
            qrCodeGenerado = true;
        }
        overlay.style.display = 'flex';
    });

    overlay.addEventListener('click', function(e) {
        if (e.target.id === 'modal-qr-overlay') {
            overlay.style.display = 'none';
        }
    });

    // --- LÓGICA DEL BOTÓN ÚNICO: COMPARTIR ENLACE ---
    // Este script NO toma screenshot. Solo comparte la URL.
    btnCompartirPagina.addEventListener('click', async function() {
        
        // Cambiamos el texto para que veas que es el script nuevo
        btnCompartirPagina.textContent = 'Compartiendo...';
        btnCompartirPagina.disabled = true;

        const shareData = {
            title: 'Atenas Industria Gym',
            text: '¡Echa un vistazo a la web de Atenas Industria Gym!',
            url: qrUrl
        };

        try {
            if (navigator.share) {
                await navigator.share(shareData);
            } else if (navigator.clipboard) {
                await navigator.clipboard.writeText(qrUrl);
                alert('¡Enlace copiado al portapapeles!');
            } else {
                alert('No se puede compartir. Copia el enlace: ' + qrUrl);
            }
        } catch (err) {
            console.log('Usuario canceló o hubo un error:', err);
        } finally {
            // Regresamos el botón a la normalidad
            btnCompartirPagina.textContent = 'Compartir Página';
            btnCompartirPagina.disabled = false;
        }
    });

})();
</script>