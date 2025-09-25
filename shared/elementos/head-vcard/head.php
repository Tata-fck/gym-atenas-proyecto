<?php
if (!defined('SHARED_PATH')) {
    die('Error de configuración: El archivo bootstrap no está cargado.');
}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <base href="<?php echo dirname($_SERVER['SCRIPT_NAME']) . "/"?>">
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title><?php echo isset($page_title) ? $page_title : "NexoCard - vCard";?></title>
        
        <link rel="icon" type="image/png" href="<?php echo BASE_URL_ASSETS; ?>/shared/img-empresa/favicon-vcard.png">  
    </head>
    <style>
        body {
            margin: 0;
            padding: 0;
        }
    </style>
</html>