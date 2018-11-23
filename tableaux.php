<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercices PHP(Tableaux)</title>
</head>
<body style="font-family: sans-serif;">
    <h1>Exercices pour apprendre le PHP (Tableaux)</h1>
    <h2>Exercice 1</h2>
    <?php
        $mois = array('Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Aout','Septembre','Octobre','Novembre','Décembre');
        echo "Création d'un tableau. (Voir code)"
    ?>
    <h2>Exercice 2</h2>
    <?php
        echo "$mois[2] </br>";
        echo "$mois[5] </br>";
        $mois[7] = 'Août';
        echo "$mois[7]";
    ?>
    <h2>Exercice 3</h2>
    <?php
        $départements = array(
            01 => 'Ain',
            03 => 'Allier',
            07 => 'Ardèche',
            15 => 'Cantal',
            26 => 'Drôme',
            38 => 'Isère',
            42 => 'Loire',
            43 => 'Haute-Loire',
            63 => 'Puy-de-Dôme',
            69 => 'Rhône',
            73 => 'Savoie',
            74 => 'Haute-Savoie'
        );

        echo "$départements[69] </br>";
        $départements[57] = 'Metz'; // Ajoute Metz dans le tableau avec la clé 57
        ksort($départements); // Trie les clés dans l'ordre

        foreach ($départements as $key => $value) {
            echo "Le département de $value porte le numéro $key </br>";
        }
    ?>
    <h2>Exercice 4</h2>
    <?php
        $prénoms = array("Alex", "Max", "Dominique", "Claude", "Leslie", "Charlie", "Lou");

        foreach($prénoms as $value) {
            echo "Salut $value, devine quoi ! Je me marie dans samedi dans deux semaines ! J'espère te compter parmi les invités ! Gros bisous :) </br>";
        }
    ?>
</body>
</html>