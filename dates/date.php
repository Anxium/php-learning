<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercices PHP(Dates)</title>
</head>
<body style="font-family: sans-serif;">
    <h1>Exercices pour apprendre le PHP (Dates)</h1>
    <h2>Exercice 1</h2>
    <?php
        echo date("d/m/Y");
    ?>
    <h2>Exercice 2</h2>
    <?php
        echo date("d-m-y");
    ?>
    <h2>Exercice 3</h2>
    <?php
        setlocale(LC_ALL, 'fr_FR.utf8');

        echo strftime("%A %d %B %Y")
    ?>
    <h2>Exercice 4</h2>
    <?php
        $timestamp_actuel = strtotime('today'); //ou 'time()' qui retourne l'heure et les secondes avec tandis que celle-ci retourne le jour depuis l'heure minuit
        $timestamp = mktime(15, 00, 00, 8, 2, 2016); //strtotime peut aussi être utilisé ici

        echo 'Timestamp actuel : ' . $timestamp_actuel . '<br />Timestamp du 2 Août 2016 à 15h : ' . $timestamp;
    ?>
    <h2>Exercice 5</h2>
    <?php
        $today = strtotime('today');
        $date = strtotime('16 may 2016');
        $mkToday = mktime(0,0,0,date('m'),date('d'),date('Y'));
        $mkDate = mktime(0,0,0,5,16,2016);
        $ecartEnJour = round(($mkToday-$mkDate)/86400); //24h représente 86400 secondes

        echo 'Il y a ' . $ecartEnJour . ' Jours entre aujourd\'hui et le 16 Mai 2016.';
    ?>
    <h2>Exercice 6</h2>
    <?php
        echo 'Il y a exactement ' . date('t', mktime(0,0,0,2,1,2017)) . ' Jours dans le mois de ' . strftime('%B %Y', mktime(0,0,0,2,1,2017)) . '.';
    ?>
    <h2>Exercice 7</h2>
    <?php
        echo strftime('%A %#d %B', mktime(0,0,0,date('m'),date('d')+20,date('Y'))) . ' | Date + 20 jours';
    ?>
    <h2>Exercice 8</h2>
    <?php
        echo strftime('%A %#d %B', mktime(0,0,0,date('m'),date('d')-22,date('Y'))) . ' | Date - 22 jours';
    ?>
</body>
</html>