<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercice PHP(Conditions)</title>
</head>
<body style="font-family: sans-serif;">
    <h1>Exercices pour apprendre le PHP (Conditions)</h1>
    <h2>Exercice 1</h2>
    <?php
        $age = "20";

        if ($age >= 18) {
            echo "Vous êtes majeur.";
        } else {
            echo "Vous êtes mineur.";
        };
    ?>
    <h2>Exercice 2</h2>
    <?php
        $isEasy = true;

        if ($isEasy == 1) {
            echo "C'est facile!!!";
        } else {
            echo "C'est difficile !!!";
        };
    ?>
    <h2>Exercice 3</h2>
    <?php 
        $genre = "Homme";
        $age = 20;

        if ($genre == "Homme") {
            if ($age >= 18) {
                echo "Vous êtes un homme et vous êtes majeur.";
            } else {
                echo "Vous êtes un homme et vous êtes mineur.";
            }
        } else {
            if ($age >= 18) {
                echo "Vous êtes une femme et vous êtes majeur.";
            } else {
                echo "Vous êtes une femme et vous êtes mineur.";
            }
        }
    ?>
    <h2>Exercice 4</h2>
    <?php 
        $magnitude = 7;

        switch ($magnitude) {
            case 1:
                echo "Micro-séisme impossible à ressentir.";
                break;
            case 2:
                echo "Micro-séisme impossible a ressentir mais enregistrable par les sismomètres.";
                break;
            case 3:
                echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
                break;
            case 4: 
                echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
                break;
            case 5:
                echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";
                break;
            case 6:
                echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
                break;
            case 7:
                echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
                break;
            case 8:
                echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
                break;
            case 9:
                echo "Séisme capable de tout détruire sur une très vaste zone.";
                break;
            default:
                echo "Aucun séisme n'a été ressenti.";
                break;
        };
    ?>
    <h2>Exercice 5</h2>
    <?php
        $maVariable = 'Homme';

        if ($maVariable == 'Homme') {
            echo "C'est un développeur!!!";
        } else {
            echo "C'est une développeuse!!!";
        };
    ?>
    <h2>Exercice 6</h2>
    <?php 
        $monAge = 15;

        if ($monAge >= 18) {
            echo "Tu es majeur.";
        } else {
            echo "Tu n'es pas majeur";
        }
    ?>
    <h2>Exercice 7</h2>
    <?php
        $maVariable = false;

        if ($maVariable == false) {
            echo "C'est pas bon!";
        } else {
            echo "C'est bon!";
        }
    ?>
    <h2>Exercice 8</h2>
    <?php
        $maVariable = null;

        if (isset($maVariable)) {
            echo "C'est bon!";
        } else {
            echo "C'est pas bon!";
        }
    ?>
</body>
</html>