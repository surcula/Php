<?php
    $jours = array("un"=>"lundi",
                'deux'=>"mardi",
                'trois'=>"mercredi",
                'quattre'=>"jeudi",
                'cinq'=>"vendredi",
                'six'=>"samedi",
                'sept'=>"dimanche"
    );
    $etat = array ("Ecole","Maison");
?>
<div class="container-fluid">
    <div class="row">
        <header id="header" class="col-lg-10 offset-3">

        </header>
    </div>
</div>
<div class="container">

    <div class="row">
        <section class="col-lg-10">
            <div class="row">
                <article class="col-sm-6">
                    <h2>Exercices 1</h2>
                    <!-- Faire un tableau qui boucle sur les jours de la semaine situés dans un tableau !-->
                    <table>
                        <caption> Jour de la semaine</caption>
                        <thead>
                            <tr>
                                <th>Jour</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $i = 0;
                                foreach ($jours as $key=>$value){

                                    if ( ($i % 2) == 0) {
                                    echo '<tr class="Gray"><td>'.$value.'</td></tr>';
                                    }else {
                                        echo '<tr><td>'.$value.'</td></tr>';
                                    }
                                    $i++;
                                }
                            ?>
                        </tbody>

                    </table>

                </article>
                <article class="col-sm-6">
                    <h2>Exercices 2</h2>
                    <!-- Faire un tableau qui boucle sur les jours de la semaine situés dans un tableau
                     + condition pour indiquer si on va à l'école ou non. (réponse stockée dans un tableau)   !-->
                    <table>
                        <caption> Jour de la semaine</caption>

                        <thead>
                        <tr>
                            <th colspan="2">Jour</th>
                        </tr>
                        </thead>
                        <tbody>
                    <?php
                    $i = 0;
                    foreach ($jours as $key=>$value){

                        if ( ($i % 2) == 0) {
                            if ($value != 'samedi' && $value != 'dimanche')
                            {
                                echo '<tr class="Gray"><td>'.$value.'</td><td>'.$etat[0].'</td></tr>';
                            }else {
                                echo '<tr class="Gray"><td>'.$value.'</td><td>'.$etat[1].'</td></tr>';
                            }

                        }else {
                            if ($value != 'samedi' && $value != 'dimanche')
                            {
                                echo '<tr><td>'.$value.'</td><td>'.$etat[0].'</td></tr>';
                            }else {
                                echo '<tr><td>'.$value.'</td><td>'.$etat[1].'</td></tr>';
                            }
                        }
                        $i++;
                    }
                    ?>
                        </tbody>
                    </table>
                </article>
                <article class="col-sm-6">
                    <h2>Exercices 3</h2>
                    <!-- Faire un tableau de 52 semaines qui boucle sur les jours de la semaine situés dans un tableau
                     + condition pour indiquer si on va à l'école ou non. (réponse stockée dans un tableau) !-->
                    <table>
                        <caption> Jour de la semaine</caption>
                        <thead>
                        <tr>
                            <th colspan="3">Jour</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            $i = 0;
                            for ($j=0;$j<52;$j++) {
                                echo '<tr><td rowspan="8">'.($j+1).'</tr></td>';
                                foreach ($jours as $key => $value) {

                                    if (($i % 2) == 0) {
                                        if ($value != 'samedi' && $value != 'dimanche') {
                                            echo '<tr class="Gray"><td>' . $value . '</td><td>' . $etat[0] . '</td></tr>';
                                        } else {
                                            echo '<tr class="Gray"><td>' . $value . '</td><td>' . $etat[1] . '</td></tr>';
                                        }

                                    } else {
                                        if ($value != 'samedi' && $value != 'dimanche') {
                                            echo '<tr><td>' . $value . '</td><td>' . $etat[0] . '</td></tr>';
                                        } else {
                                            echo '<tr><td>' . $value . '</td><td>' . $etat[1] . '</td></tr>';
                                        }
                                    }
                                    $i++;
                                }
                            }
                        ?>
                        </tbody>
                    </table>

                </article>

            </div>
        </section>
        <aside class="col-lg-2">
            <h2>Fil d'actualité</h2>
            <ul>
                <li>Aujourd'hui à 21:07 VIDÉO | Des feux d’artifice «silencieux» au nouvel an pour respecter les animaux?</li>
                <li>Aujourd'hui à 21:04 Liban: le Premier ministre démissionnaire à Paris</li>
                <li>Aujourd'hui à 21:02 Charles Michel avec des étudiants Erasmus en Suède</li>
                <li>Aujourd'hui à 20:47 Accident avec un taxi: on recherche le témoin</li>
                <li>Aujourd'hui à 20:26 Drame à Huccorgne: une maman et une fillette décédées</li>

            </ul>
        </aside>
    </div>
</div>

<div class="container-fluid">
    <div class="row">

