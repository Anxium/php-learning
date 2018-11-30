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
    <h2>Exercice 1</h2>
    <?php
        echo "Navigateur utilisé : " . $_SERVER['HTTP_USER_AGENT'] . "<br /> IP du client : " . $_SERVER['REMOTE_ADDR'] . '<br /> Nom du serveur connecté : ' . $_SERVER['SERVER_NAME'];
    ?>
    <h2>Exercice 2</h2>
    <a href="variablesGlobales2.php">Cliquez ici pour aller sur la seconde page</a><br />
    <?php
        session_start();

        echo 'Page 1 - Variables établie sur cette page';

        $_SESSION['nom'] = 'Avaux';
        $_SESSION['prenom'] = 'Axel';
        $_SESSION['age'] = 20;
    ?>
    <h2>Exercice 3</h2>
    <form method="POST" action="#">
        <input type="text" name="user" placeholder="Nom d'utilisateur">
        <input type="password" name="psw" placeholder="Mot de passe">
        <input type="submit" value="Envoyer">
    </form>
    <?php
        if (isset($_POST['user']) && isset($_POST['psw'])) {
            setcookie('user', $_POST['user']);
            setcookie('psw', $_POST['psw']);
        }
    ?>
    <h2>Exercice 4</h2>
    <a href="variablesGlobales2.php">Cliquez ici pour aller sur la seconde page</a><br />
    <?php
        echo 'Page 1';
    ?>
</body>
</html>