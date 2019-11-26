
<?php
ob_start();
$title= 'Appli perso';
?>

<div>
    <h4>Mot de passe hash</h4>
 <p>Générateur de mot de passe hasher, test de mot de passe</p>
<a href="mdp" class='btn btn-primary'>Utiliser</a>
</div>
<div>
    <h4>Formattage de dates</h4>
<a href="dates" class='btn btn-primary'>Utiliser</a>
</div>

<?php $content = ob_get_clean();
require('Views/template.php');
?>