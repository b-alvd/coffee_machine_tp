<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votre café est prêt</title>
    <link rel="stylesheet" href="css/style.css">

    <?php 
        $dr=$_GET["drink"];
        $sg=$_GET["sugar"];
        $alt=$_GET["alt"];
        $img=$_GET["image"]
     ?>
</head>
<body class="ready">
    <h1>Voici votre <?php echo($dr);
        if ($sg > 0) {
        ?>
            avec <?php echo($sg) ?> sucre(s)
        <?php
        }
    ?></h1>
    <img src="<?php echo($img) ?>" alt="<?php echo($alt) ?>">
    <a href="boissons.php">Revenir au début</a>
</body>
</html>