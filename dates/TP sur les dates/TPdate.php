<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TP sur les dates en PHP</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2>TP date PHP</h2>
    <form action="TPdate.php" method="POST">
        <select name="month">
            <?php 
                setlocale(LC_ALL, 'fr_FR.utf8');

                $tab_mois = array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre');

                foreach($tab_mois as $nbMois => $mois) {
                    echo '<option value="' . ($nbMois+1) . '" id="' . $mois .'">' . $mois . '</option>'; // Affiche chaque mois dans le formulaire
                }
            ?>
        </select>
        <select name="years">
            <?php 
                $anneeActuel = date('Y');

                for ($annee = $anneeActuel; $annee >= 1950; $annee--) {
                    echo '<option value="' . $annee . '">' . $annee . '</option>'; // Affiche chaque année depuis 1950 jusqu'à maintenant dans le formulaire
                }
            ?>
        </select>
        <input type="submit" value="Confirmer">
    </form>

    <table>
        <caption><?php // Vérifie si des dates ont été entrée sinon met l'actuelle + inscrit le mois et l'année dans le titre du tableau
            if (!isset($_POST['month']) && !isset($_POST['years'])) {
                $date_mois = date('m');
                $date_annee = date('Y');
            }else{
                $date_mois = $_POST['month'];
                $date_annee = $_POST['years'];
            }

            echo strftime('%B %Y', mktime(0,0,0,$date_mois, 1, $date_annee)); 
         ?></caption> 
        <thead>
            <tr>
                <?php
                    $tab_jours = array('Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche');

                    foreach($tab_jours as $jour) {
                        echo '<th>' . $jour . '</th>'; // Affiche chaque jour dans l'entête du tableau
                    }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php 
                $nbJours = date('t', mktime(0,0,0,$date_mois,1,$date_annee)); // Nombre de jours dans le mois
                $nbDayinWeek = date('w', mktime(0,0,0,$date_mois,1,$date_annee)-1); // Numéro du jour dans la semaine
                $flag = 0;
                
                echo '<tr>';
                if ($nbDayinWeek != 7) { // Si le premier jour est un Lundi alors évite la boucle sinon crée une rangée en trop
                    for ($i = 1; $i <= $nbDayinWeek; $i++) { // Retourne quel jour commence la semaine et place les dates à partir de là grâce à des 'td' vide
                        echo '<td></td>';
                        $flag = $nbDayinWeek;
                    }
                }

                for ($y = 1; $y <= $nbJours; $y++) { // Rempli le calendrier avec les dates en s'assurant de ne pas dépasser les colonnes de 7
                    if ($flag >= 7) {
                        echo '</tr><tr>';
                        $flag = 0;
                    }
                    echo '<td>'.$y.'</td>';
                    $flag++;
                }

                $ok = 6 - $flag; // Fini le 'calendrier' avec des td vide
                for ($t = 0; $t <= $ok; $t++) {
                    echo '<td></td>';
                }
                echo '</tr>'
            ?>
        </tbody>
    </table>
</body>
</html>