<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercices PHP(Variables globales)</title>
</head>
<body style="font-family: sans-serif;">
    <h1>Exercices pour apprendre le PHP (Variables globales)</h1>
    <h2>Exercice 2</h2>
    <a href="variablesGlobales.php">Cliquez ici pour retourner sur la première page</a><br />
    <?php
        session_start();

        echo 'Page 2 <br /><br />Nom : ' . $_SESSION['nom'] . '<br /> Prénom : ' . $_SESSION['prenom'] . '<br /> Âge : ' . $_SESSION['age'];
    ?>
    <h2>Exercice 4</h2>
    <a href="variablesGlobales.php">Cliquez ici pour retourner sur la première page</a><br />
    <?php
        echo 'Page 2 <br /><br />Nom d\'utilisateur: ' . $_SESSION['user'] . '<br /> MDP : ' . $_SESSION['psw'];
    ?>
</body>
</html>