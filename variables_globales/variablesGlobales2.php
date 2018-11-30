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
        if (isset($_COOKIE['user']) && isset($_COOKIE['psw'])) {
            echo 'Page 2 <br /><br />Nom d\'utilisateur: ' . $_COOKIE['user'] . '<br /> MDP : ' . $_COOKIE['psw'];
        } else {
            echo "Vous n'avez pas rempli correctement le formulaire de l'exercice 3.";
        }
    ?>
    <h2>Exercice 6</h2>
    <form method="POST" action="variablesGlobales2.php">
        <input type="text" name="user2" placeholder="Nouveau nom d'utilisateur">
        <input type="password" name="psw2" placeholder="Nouveau mot de passe">
        <input type="submit" value="Envoyer">
    </form>
    <?php
        if (isset($_POST['user2']) && isset($_POST['psw2'])) {
            setcookie('user', $_POST['user2']);
            setcookie('psw', $_POST['psw2']);

            echo 'Nouveau nom d\'utilisateur : ' . $_COOKIE['user'] . ' | Nouveau MDP : ' . $_COOKIE['psw'];
        }
    ?>
</body>
</html>