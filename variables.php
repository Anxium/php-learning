<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="font-family: sans-serif;">
    <h1>Exercices pour apprendre le PHP (Variables)</h1>
    <h2>Exercice 1</h2>
    <?php
        $nom = "Avaux";
        $prenom = "Axel";
        $age = "20";

        echo "Bonjour $prenom, enfant de la famille $nom ayant atteint le level $age!";
    ?>
    <h2>Exercice 2</h2>
    <?php
        $km = 1;
        echo "$km </br>";
        $km = 3;
        echo "$km </br>";
        $km = 125;
        echo "$km </br>";
    ?>
    <h2>Exercice 3</h2>
    <?php
        $myString = "Hello World!";
        $myInteger = 7;
        $myFloat = 7.1;
        $myBoolean = true;

        echo "$myString </br> $myInteger </br> $myFloat </br> $myBoolean";
    ?>
    <h2>Exercice 4</h2>
    <?php
        $myEmptyInteger = null;
        echo "$myEmptyInteger </br>";
        $myEmptyInteger = 8;
        echo "$myEmptyInteger </br>";
    ?>
    <h2>Exercice 5</h2>
    <?php
        $firstResult = 3 + 4;
        $secondResult = 5 * 20;
        $thirdResult = 45 / 5;
        echo "$firstResult </br> $secondResult </br> $thirdResult"
    ?>
    <h2>Exercice 6</h2>
    <?php
        $price = 785;
        $percent = $price / 10 * 3; // Ceci fait 30% du prix
        $toPay = $price - $percent;

        echo "Prix de départ : $price € </br> Ristourne : $percent € </br> Prix à payer : $toPay €"
    ?>
</body>
</html>