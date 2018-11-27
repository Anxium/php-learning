<h2>TP</h2>
    <form action="TPdate.php" method="GET">
        <select name="month">
            <?php 
                setlocale(LC_ALL, 'fr_FR');

                $tab_mois = array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre');

                foreach($tab_mois as $nbMois => $mois) {
                    echo '<option value="' . ($nbMois+1) . '">' . $mois . '</option>';
                }
            ?>
        </select>
        <select name="years">
            <?php 
                $anneeActuel = date('Y');

                for ($annee = $anneeActuel; $annee >= 1950; $annee--) {
                    echo '<option value="' . $annee . '">' . $annee . '</option>';
                }
            ?>
        </select>
        <input type="submit" value="Confirmer">
    </form>

    <table>
        <caption><?php echo strftime('%B %Y', mktime(0,0,0,$_GET['month'], 1, $_GET['years'])); ?></caption>
        <thead>
            <tr>
                <?php
                    $tab_jours = array('Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche');

                    foreach($tab_jours as $jour) {
                        echo '<th>' . $jour . '</th>';
                    }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php 
                $date_mois = $_GET['month'];
                $date_annee = $_GET['years'];
                $nbJours = date('t', mktime(0,0,0,$date_mois,1,$date_annee));
                $firstDay = strftime('%A', mktime(0,0,0,$date_mois,1,$date_annee));
                $nbDayinWeek = strftime('%u', mktime(0,0,0,$date_mois,1,$date_annee)-1); // Numéro jour dans la semaine
                $flag = 0;

                switch ($firstDay) {
                    case 'lundi' :
                        $flag = 1;
                        break;
                    case 'mardi':
                        for ($i = 1; $i <= $nbDayinWeek; $i++) {
                            echo '<td></td>';
                        }
                        $flag = 2;
                        break;
                    case 'mercredi':
                        for ($i = 1; $i <= $nbDayinWeek; $i++) {
                            echo '<td></td>';
                        }
                        $flag = 3;
                        break;
                    case 'jeudi' :
                        for ($i = 1; $i <= $nbDayinWeek; $i++) {
                            echo '<td></td>';
                        }
                        $flag = 4;
                        break;
                    case 'vendredi' :
                        for ($i = 1; $i <= $nbDayinWeek; $i++) {
                            echo '<td></td>';
                        }
                        $flag = 5;
                        break;
                    case 'samedi' :
                        for ($i = 1; $i <= $nbDayinWeek; $i++) {
                            echo '<td></td>';
                        }
                        $flag = 6;
                        break;
                    case 'dimanche' :
                        for ($i = 1; $i <= $nbDayinWeek; $i++) {
                            echo '<td></td>';
                        }
                        $flag = 7;
                        break;
                }

                for ($y = 1; $y <= $nbJours; $y++) {
                    if ($flag >= 8) {
                        echo '</tr><tr>';
                        $flag = 1;
                    }
                    echo '<td>'.$y.'</td>';
                    $flag++;
                }
                echo '</tr>'
            ?>
        </tbody>
    </table>