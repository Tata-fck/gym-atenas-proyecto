<?php
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
    $url_corta = '#error-ruta-no-valida';
    $mostrar_qr = false;
    $ruta_logo = '';

} else {
    $url_corta = "https://nexocard.tech/" . $slug_cliente;
    $mostrar_qr = true;

    /* LOCAL */
    $ruta_logo ='/gym-atenas-proyecto/' . $marcador . $slug_cliente . '/img/logo.webp';
    /* PRODUCCION */
    /*$ruta_logo = $marcador . $slug_cliente . '/img/logo.webp';*/
}
?>

<div id="modal-qr-overlay">
    <div id="modal-qr-contenido">
        
        <?php if ($mostrar_qr && $ruta_logo !== ''): ?>
            <img src="<?php echo htmlspecialchars($ruta_logo); ?>" alt="Logo Cliente" class="qr-logo-cliente">
        <?php endif; ?>

        <h4>Escanéa para compartir esta vCard</h4>
        
        <div id="qr-code-placeholder"></div>
        
        <small><?php echo htmlspecialchars($url_corta); ?></small>
        <div class="botones">
            <button id="btn-compartir-vcard" class="btn-qr">Compartir Enlace</button>
        </div>
    </div>
</div>

<div class="footer-vcard">
    <div class="grupo-2">
        <small>&copy; 2025 <b>NexoCard</b> - Todos los Derechos Reservados.</small>
        <button id="btn-abrir-modal-qr" class="btn-qr">Generar QR del sitio</button>
    </div>
</div>

<style>
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
    }
    #qr-code-placeholder {
        margin: 0 auto; 
        width: 200px;  
        height: 200px; 
    }
    .qr-logo-cliente {
    max-width: 120px; 
    object-fit: contain;
    }

    #modal-qr-contenido h4 {
        margin: 0 0 15px 0;
        font-size: 16px;
    }

    .btn-qr:disabled {
        background-color: #aaa; 
        cursor: not-allowed;
    }
</style>

<script src="https://cdn.jsdelivr.net/npm/qrcodejs/qrcode.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/qrcodejs/qrcode.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/qrcodejs/qrcode.min.js"></script>

<script>
(function() {
    // --- Variables ---
    const btnAbrir = document.getElementById('btn-abrir-modal-qr');
    const overlay = document.getElementById('modal-qr-overlay');
    const qrPlaceholder = document.getElementById('qr-code-placeholder');
    const qrUrl = "<?php echo $url_corta; ?>";
    let qrCodeGenerado = false; 
    const btnCompartir = document.getElementById('btn-compartir-vcard'); 

    // --- Abrir Modal ---
    btnAbrir.addEventListener('click', function() {
        if (!qrCodeGenerado) {
            new QRCode(qrPlaceholder, {
                text: qrUrl,
                width: 200, 
                height: 200, 
                colorDark: "#000000",
                colorLight: "#ffffff",
                correctLevel: QRCode.CorrectLevel.H
            });
            qrCodeGenerado = true;
        }
        overlay.style.display = 'flex';
    });

    // --- Cerrar Modal ---
    overlay.addEventListener('click', function(e) {
        if (e.target.id === 'modal-qr-overlay') {
            overlay.style.display = 'none';
        }
    });

    // --- Lógica para Compartir  NO ENCUENTRO COMO MANDAR UNA SCRENSHOT DE LA TARJETA GENERADA---
    btnCompartir.addEventListener('click', function() {
        
        // Opción 1: API Nativa de "Compartir" (Móviles en HTTPS)
        if (navigator.share) {
            navigator.share({
                title: 'Mi vCard de NexoCard',
                text: '¡Aquí te comparto mi tarjeta de presentación digital!',
                url: qrUrl
            })
            .catch((error) => console.log('Error al compartir:', error));
        } 
        // Opción 2: Fallback para PC (Copiar al portapapeles en HTTPS)
        else if (navigator.clipboard) {
            navigator.clipboard.writeText(qrUrl).then(() => {
                const originalText = btnCompartir.textContent;
                btnCompartir.textContent = '¡Enlace Copiado!';
                btnCompartir.disabled = true;
                
                setTimeout(() => {
                    btnCompartir.textContent = originalText;
                    btnCompartir.disabled = false;
                }, 2000);
            })
            .catch(err => {
                console.error('Fallo al copiar (probable HTTP):', err);
                alert('No se pudo copiar. Asegúrate de estar en un sitio seguro (https).');
            });
        }
        else {
            alert('Esta función no es compatible con tu navegador. Copia el enlace manualmente.');
        }
    });

})();
</script>