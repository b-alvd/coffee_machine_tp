<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Niveau de sucre</title>
    <link rel="stylesheet" href="css/style.css">

    <?php 
    $dr=$_GET["drink"]; 
    $alt=$_GET["alt"];
    $img=$_GET["image"]
    ?>
</head>
<body class="sucre">
    <h1>Vous avez choisis <?php echo("$dr") ?></h1>
    <form action="ready.php" method="GET">
    <?php
        if ($dr != "Eau") {
    ?>
            <h2>Voulez vous du sucre ?</h2>
            <span>0</span>
            <input type="range" name="sugar" min="0" max="10">
            <span>10</span>
    <?php
        } else {
    ?>
            <input type="hidden" name="sugar">
    <?php
        }
    ?>
    <input type="hidden" name="drink" value="<?php echo($dr) ?>">
    <input type="hidden" name="image" value="<?php echo($img) ?>">
    <input type="hidden" name="alt" value="<?php echo($alt) ?>">
    <button type="submit">Payer</button>
    </form>
    <a href="boissons.php">Annuler ma commande</a>
</body>
</html>