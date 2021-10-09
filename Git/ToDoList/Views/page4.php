
<h2 text-align="center">ToDoList</h2>

<form method="post" accept-charset="utf-8">
    <p><input type="text" required name="choix"/> <input type="submit" name="valider" value="OK"/></p>
</form>

<div>
    <table>
        <?php
        if(isset($_POST['valider'])){
            $choix = $_POST['choix'];
            array_push($listeChoice,$choix);
            foreach ($listeChoice as $item){
                echo ' <tr><td>'.$item.'</td></tr> ';
            }
        }
        ?>
    </table>
</div>