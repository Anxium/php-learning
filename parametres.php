<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercices PHP(Paramètres URL)</title>
</head>
<body style="font-family: sans-serif;">
    <h1>Exercices pour apprendre le PHP (Paramètres URL)</h1>
    <h2>Exercice 1</h2>
    <a href="parametres.php?nom=Avaux&amp;prenom=Axel">Premier paramètre</a><br />
    <?php
        if (isset($_GET['prenom']) && isset($_GET['nom'])) {
            echo "Bonjour " . $_GET['prenom'] . ' ' .  $_GET['nom'] . ' !';
        } else {
            echo 'Cliquez sur "Premier paramètre"';
        }
    ?>
    <h2>Exercice 2</h2>
    <?php
        if (isset($_GET['prenom']) && isset($_GET['nom']) && isset($_GET['age'])) {
            echo "Bonjour " . $_GET['prenom'] . ' ' .  $_GET['nom'] . ' vous êtes level ' . $_GET['age'] . ' !';
        } else {
            echo 'Aucun âge n\'est présent dans les paramètres. (En lien avec les premiers param)';
        }
    ?>
    <h2>Exercice 3</h2>
    <a href="parametres.php?dateDebut=2/05/2016&amp;dateFin=27/11/2016">Troisème paramètre</a><br />
    <?php
        if (isset($_GET['dateDebut']) && isset($_GET['dateFin'])) {
            echo 'La date de début est le : ' . $_GET['dateDebut'] . '<br />La date de fin est le : ' .  $_GET['dateFin'];
        } else {
            echo 'Cliquez sur "Troisième paramètre"';
        }
    ?>
    <h2>Exercice 4</h2>
    <a href="parametres.php?langage=PHP&amp;serveur=WAMP">Quatrième paramètre</a><br />
    <?php
        if (isset($_GET['langage']) && isset($_GET['serveur'])) {
            echo 'Le langage est: "' . $_GET['langage'] . '" hébergé grâce à: "' . $_GET['serveur'] . '".';
        } else {
            echo 'Cliquez sur "Quatrième paramètre"';
        }
    ?>
    <h2>Exercice 5</h2>
    <a href="parametres.php?semaine=12">Cinquième paramètre</a><br />
    <?php
        if (isset($_GET['semaine'])) {
            echo "Nous sommes la " . $_GET['semaine'] . 'e semaine du mois.';
        } else {
            echo 'Cliquez sur "Cinquième paramètre"';
        }
    ?>
    <h2>Exercice 6</h2>
    <a href="parametres.php?batiment=12&amp;salle=101">Sixième paramètre</a><br />
    <?php
        if (isset($_GET['batiment']) && isset($_GET['salle'])) {
            echo "Vous devez rejoindre la salle " . $_GET['salle'] . ' qui se trouve dans le batiment ' . $_GET['batiment'] . '.';
        } else {
            echo 'Cliquez sur "Sixième paramètre"';
        }
    ?>
</body>
</html>