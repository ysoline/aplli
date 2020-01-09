 <?php
ob_start();
$title = 'Ajout d\'une BDD';
?>
<h2>Ajout d'une société</h2>

    <form action="addBdd" method='POST'>
<div class='d-flex flex-column align-items-center'>
        <label for="bdd_name">Nom de la base de donnée</label>
        <input type="text" name=bdd_name>
 
        <label for="table_name">Nom de la société</label>
        <input type="text" name="soc_name">

        <input type="submit" class='btn btn-primary mt-2' value="Valider">
</div>
    </form>

<?php $content = ob_get_clean();
require('App/Views/template.php');
?> 

