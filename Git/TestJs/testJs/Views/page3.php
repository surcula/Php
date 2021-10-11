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
                    <?php
                    for ($i=0;$i<10;$i++){
                        echo 'Ceci est la ligne n° '.($i+1).'<br>';
                    }
                    ?>
                </article>
                <article class="col-sm-6">
                    <h2>Exercices 2</h2>
                    <ul>
                        <?php
                            for ($i=0;$i<10;$i++){
                                echo '<li>Ceci est la ligne n° '.($i+1).'</li>';
                            }
                        ?>
                    </ul>
                </article>
                <article class="col-sm-6">
                    <h2>Exercices 3</h2>
                    <table>
                        <caption>Table dynamique</caption>
                        <tr><th>#</th><th>Libellé</th></tr>
                        <?php
                        for ($i=0;$i<10;$i++){
                            echo '<tr><td>'.($i+1).'</td><td>Ceci est la ligne n° '.($i+1).'</td></tr>';

                        }
                        ?>
                    </table>

                </article>
                <article class="col-sm-6">
                    <h2>Exercices 4</h2>
                    <table>
                        <caption>Table dynamique</caption>
                        <tr><th>#</th><th>Libellé</th></tr>
                        <?php
                        for ($i=0;$i<10;$i++){
                            if ($i % 2 == 0) echo '<tr><td class ="red">'.($i+1).'</td><td class ="red">Ceci est la ligne n° '.($i+1).'</td></tr>';
                            else {
                                echo '<tr><td class ="blue">'.($i+1).'</td><td class ="blue">Ceci est la ligne n° '.($i+1).'</td></tr>';
                            }
                        }
                        ?>
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

