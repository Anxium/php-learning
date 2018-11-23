<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercices PHP(Fonctions)</title>
</head>
<body style="font-family: sans-serif;">
    <h1>Exercices pour apprendre le PHP (Fonctions)</h1>
    <h2>Exercice 1</h2>
    <?php
        function firstFunction() {
           return true;
        }

        echo firstFunction();
    ?>
    <h2>Exercice 2</h2>
    <?php
        function characterChain($texte) {
            return $texte;
        }

        echo characterChain('Hello World!');
    ?>
    <h2>Exercice 3</h2>
    <?php
        function concatenateStrings($firstName, $name) {
            return "$firstName $name";
        }
        
        echo concatenateStrings('Axel', 'Avaux');
    ?>
    <h2>Exercice 4</h2>
    <?php
        function isBig($nb1, $nb2) {
            if ($nb1 > $nb2) {
                return "Nombre 1: $nb1 | Nombre 2: $nb2 </br> Le premier nombre est plus grand.";
            } elseif ($nb1 < $nb2) {
                return "Nombre 1: $nb1 | Nombre 2: $nb2 </br> Le premier nombre est plus petit.";
            } else {
                return "Nombre 1: $nb1 | Nombre 2: $nb2 </br> Les deux nombres sont identiques.";
            }
        }

        echo isBig(7,5);
    ?>
    <h2>Exercice 5</h2>
    <?php
        function concatenateTwop($int, $string) {
            return "$string $int";
        }

        echo concatenateTwop(8, 'Il y en a');
    ?>
    <h2>Exercice 6</h2>
    <?php
        function phrase($name, $firstname, $age) {
            return "Bonjour $firstname $name, tu as $age ans.";
        }

        echo phrase("Avaux", "Axel", 20);
    ?>
    <h2>Exercice 7</h2>
    <?php  
        function whatIs($genre, $age) {
            if ($genre == "Homme") {
                if ($age >= 18) {
                    return "Vous êtes un homme et vous êtes majeur.";
                } else {
                    return "Vous êtes un homme et vous êtes mineur.";
                }
            } else {
                if ($age >= 18) {
                    return "Vous êtes une femme et vous êtes majeur.";
                } else {
                    return "Vous êtes une femme et vous êtes mineur.";
                }
            }
        }
        
        echo whatIs("Homme", 20);
    ?>
    <h2>Exercice 8</h2>
    <?php
        function defaultParams($nb1 = 8, $nb2 = 2, $nb3 = 10) {
            return $nb1 + $nb2 + $nb3;
        }

        echo defaultParams(13);
    ?>
</body>
</html>