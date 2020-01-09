<?php
ob_start();
$title = 'Entreprise';
?>

<form action="getUserOfEntreprise" method="POST">
    <label for="soc_name">Entreprises :</label>
    <select name="soc_name" id="soc_name">
        <option value="">Choisir</option>
        <?php foreach($societys as $society){ ?>
            <option value="<?= $society['soc_name'] ?>"><?= $society['soc_name'] ?></option>
       <?php } ?>
    </select>
    <input type="submit" class="btn btn-success">
</form>

<?php $content = ob_get_clean();
require('App/Views/template.php');
?>