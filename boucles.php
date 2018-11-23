<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercices PHP(Boucles)</title>
</head>
<body style="font-family: sans-serif;">
    <h1>Exercices pour apprendre le PHP (Boucles)</h1>
    <h2>Exercice 1</h2>
    <?php
        $i = 0;

        while ($i < 10) {
            echo "$i </br>";
            $i++;
        }
    ?>
    <h2>Exercice 2</h2>
    <?php
        $i = 0;
        $y = 28;

        while ($i < 20) {
            $calcul = $i * $y;
            echo "$calcul </br>";
            $i++;
        }
    ?>
    <h2>Exercice 3</h2>
    <?php
        $i = 100;
        $y = 57;

        while ($i >= 10) {
            $calcul = $i * $y;
            echo "$calcul </br>";
            $i--;
        }
    ?>
    <h2>Exercice 4</h2>
    <?php
        $i = 1;

        while ($i <= 10) {
            echo "$i </br>";
            $i += $i/2;
        }
    ?>
    <h2>Exercice 5</h2>
    <?php
        for ($i = 1; $i <= 15; $i++) {
            echo "On y arrive presque. n°$i</br>";
        }
    ?>
    <h2>Exercice 6</h2>
    <?php
        for ($i = 20; $i >= 0; $i--) {
            echo "C'est presque bon. n°$i</br>";
        }
    ?>
    <h2>Exercice 7</h2>
    <?php
        for ($i = 1; $i <= 100; $i+=15) {
            echo "On tient le bon bout. n°$i</br>";
        }
    ?>
    <h2>Exercice 8</h2>
    <?php
        for ($i = 200; $i >= 0; $i-=12) {
            echo "Enfin!!! n°$i</br>";
        }
    ?>
</body>
</html>