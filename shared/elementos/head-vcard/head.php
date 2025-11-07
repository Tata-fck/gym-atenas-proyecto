<?php
if (!defined('SHARED_PATH')) {
    die('Error de configuración: El archivo bootstrap no está cargado.');
}

// --- LÓGICA DE URL PARA META TAGS ---
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
$host = $_SERVER['HTTP_HOST'];
$current_page_url = $protocol . "://" . $host . $_SERVER['SCRIPT_NAME'];

// --- RUTA A TU IMAGEN DE PREVIEW ---
// Asegúrate de crear esta imagen y subirla a esta ruta.
$ruta_base_proyecto = rtrim(BASE_URL_ASSETS, '/'); 
$imagen_preview_url = $protocol . "://" . $host . $ruta_base_proyecto . "/public/atenas-industria-gym/img/compartir-preview.png";

// --- TÍTULO Y DESCRIPCIÓN PARA COMPARTIR ---
$og_title = isset($page_title) ? $page_title : "Atenas Industria Gym";
$og_description = "¡Echa un vistazo al mejor gimnasio de la zona! Más de 100 máquinas.";
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <base href="<?php echo dirname($_SERVER['SCRIPT_NAME']) . "/"?>">
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title><?php echo isset($page_title) ? $page_title : "NexoCard - vCard";?></title>
        
        <link rel="icon" type="image/png" href="<?php echo BASE_URL_ASSETS; ?>/shared/img-empresa/favicon-vcard.png"> 
        
        <meta property="og:title" content="<?php echo htmlspecialchars($og_title); ?>">
        <meta property="og:description" content="<?php echo htmlspecialchars($og_description); ?>">
        <meta property="og:image" content="<?php echo htmlspecialchars($imagen_preview_url); ?>">
        <meta property="og:url" content="<?php echo htmlspecialchars($current_page_url); ?>">
        <meta property="og:type" content="website">

        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="<?php echo htmlspecialchars($og_title); ?>">
        <meta name="twitter:description" content="<?php echo htmlspecialchars($og_description); ?>">
        <meta name="twitter:image" content="<?php echo htmlspecialchars($imagen_preview_url); ?>">

        </head>
    <style>
        body {
            margin: 0;
            padding: 0;
        }
    </style>
</html>