<?php
$page_title = "Gym Atenas Industria";

require_once __DIR__ . '../../../bootstrap.php';

include(SHARED_PATH . "/elementos/head-vcard/head.php");
?>

<body>
    <main>
        <?php include("elementos/header.php");?>
        <link rel="stylesheet" href="elementos/header.css?v=<?php echo $version; ?>">
        
    </main>

           <?php include("elementos/footer.html");?>
    <link rel="stylesheet" href="elementos/footer.css?v=<?php echo $version; ?>">

    <?php include(SHARED_PATH . "/elementos/footer-vcard/footer.php");?>
</body>