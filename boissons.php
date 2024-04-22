<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Choisissez votre Boisson</title>
        <link rel="stylesheet" href="css/style.css">

        <!-- VARIABLES -->
        <?php 
            $drinks = [
                [
                    "image" => "./imgs/coffee.webp",
                    "alt" => "Café",
                    "name" => "Café"
                ],
                [
                    "image" => "./imgs/coffee.webp",
                    "alt" => "Espresso",
                    "name" => "Espresso"
                ],
                [
                    "image" => "./imgs/coffee.webp",
                    "alt" => "Cappucino",
                    "name" => "Cappuccino"
                ],
                [
                    "image" => "./imgs/coffee.webp",
                    "alt" => "Latte",
                    "name" => "Latte"
                ],
                [
                    "image" => "./imgs/coffee.webp",
                    "alt" => "Thé",
                    "name" => "Thé"
                ],
                [
                    "image" => "./imgs/coffee.webp",
                    "alt" => "Chocolat Chaud",
                    "name" => "Chocolat Chaud"
                ],
                [
                    "image" => "./imgs/coffee.webp",
                    "alt" => "Mocha",
                    "name" => "Mocha"
                ],
                [
                    "image" => "./imgs/coffee.webp",
                    "alt" => "Macchiato",
                    "name" => "Macchiato"
                ],
                [
                    "image" => "./imgs/coffee.webp",
                    "alt" => "Americano",
                    "name" => "Americano"
                ],
                [
                    "image" => "./imgs/coffee.webp",
                    "alt" => "Eau",
                    "name" => "Eau"
                ],
            ]
        ?>
    </head>
    <body class="boissons">
        <h1>Choisissez votre boisson :</h1>
        <section class="sectionDrinks">
            <div class="allDrinks">
                <form action="sucre.php" method="GET">
                <?php
                foreach ($drinks as $drink) {
                ?>
                    <a href="<?php echo("sucre.php?drink=".$drink["name"]."&image=".$drink["image"]."&alt=".$drink["alt"]) ?>">
                        <img src="<?php echo($drink["image"]) ?>" alt="<?php echo($drink["alt"]) ?>">
                        <p><?php echo($drink["name"])?></p>
                    </a>
                <?php
                }
                ?>
                </form>
            </div>
        </section>
    </body>
</html>