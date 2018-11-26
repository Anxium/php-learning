<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercices PHP(Formulaires)</title>
</head>
<body style="font-family: sans-serif;">
    <h1>Exercices pour apprendre le PHP (Formulaires)</h1>
    <h2>Exercice 1</h2>
    <form method="GET" action="form.php">
        <input type="text" name="name" placeholder="Votre nom">
        <input type="text" name="firstName" placeholder="Votre prénom">
        <input type="submit" value="Envoyer">
    </form>
    <h2>Exercice 2</h2>
    <form method="POST" action="form.php">
        <input type="text" name="name" placeholder="Votre nom">
        <input type="text" name="firstName" placeholder="Votre prénom">
        <input type="submit" value="Envoyer">
    </form>
    <h2>Exercice 3</h2>
    <?php
        if (isset($_GET['firstName']) && isset($_GET['name'])) {
            echo "Prénom et nom transmis dans l'exercice 1 : " . $_GET['firstName'] . ' ' . $_GET['name'];
        } else {
            echo "Validez les paramètres dans l'exercice 1";
        }
    ?>
    <h2>Exercice 4</h2>
    <?php
        if (isset($_POST['firstName']) && isset($_POST['name'])) {
            echo "Prénom et nom transmis dans l'exercice 2 : " . $_POST['firstName'] . ' ' . $_POST['name'];
        } else {
            echo "Validez les paramètres dans l'exercice 2";
        }
    ?>
    <h2>Exercice 5</h2>

    <?php if (!isset($_POST['firstName2']) && !isset($_POST['name2']) && !isset($_POST['civi2'])) { ?>
    <form method="POST" action="form.php" enctype="multipart/form-data">
        <select name="civi2" required>
            <option value="chooseGenre">Sélectionnez votre civilité</option>
            <option value="Mlle">Mademoiselle</option>
            <option value="Mme">Madame</option>
            <option value="Mr">Monsieur</option>
        </select>
        <input type="text" name="name2" placeholder="Votre nom" required>
        <input type="text" name="firstName2" placeholder="Votre prénom" required>
        <input type="file" name="userFile" accept=".pdf" required>
        <input type="submit" value="Envoyer">
    </form>
    <?php } else {
        echo "Vous êtes ; " . $_POST['civi2'] . ' ' . $_POST['name2'] . ' ' . $_POST['firstName2'] . ' et le fichier uploadé est le suivant : ' . $_FILES['userFile']['name'] . '<br />';
    } ?>
</body>
</html>