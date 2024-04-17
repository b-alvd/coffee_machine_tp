<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choisissez votre Boissons</title>
    <link rel="stylesheet" href="css/style.css">

    <?php 
        $drinks = [
            [
                "image" => "",
                "alt" => "Café",
                "name" => "Café"
            ],
            [
                "image" => "",
                "alt" => "Espresso",
                "name" => "Espresso"
            ],
            [
                "image" => "",
                "alt" => "Cappucino",
                "name" => "Cappuccino"
            ],
            [
                "image" => "",
                "alt" => "Latte",
                "name" => "Latte"
            ],
            [
                "image" => "",
                "alt" => "Thé",
                "name" => "Thé"
            ],
            [
                "image" => "",
                "alt" => "Chocolat Chaud",
                "name" => "Chocolat Chaud"
            ],
            [
                "image" => "",
                "alt" => "Mocha",
                "name" => "Mocha"
            ],
            [
                "image" => "",
                "alt" => "Macchiato",
                "name" => "Macchiato"
            ],
            [
                "image" => "",
                "alt" => "Americano",
                "name" => "Americano"
            ],
            [
                "image" => "",
                "alt" => "Eau",
                "name" => "Eau"
            ],
        ]
    ?>
</head>
<body>
    <h1>Choisissez votre boisson :</h1>
    <div class="allDrinks">
    <form action="traitement.php" method="post">
        <?php
        foreach ($drinks as $index => $drink) {
            echo '<button type="submit" name="bouton' . $index . '">';
            echo '<img src="' . $drink['image'] . '" alt="' . $drink['alt'] . '">';
            echo $drink['name'];
            echo '</button>';
        }
        ?>
    </div>
</body>
</html>