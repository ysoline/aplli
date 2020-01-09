<?php
ob_start();
$title = 'Mon compte';
?>

<p>Email : <?= $email ?></p>

<p>Connecté à : 
    <?php 
    foreach($getDb as $db){ ?>
 <?= $db['name'] ?>
    <?php } ?></p>

<?php $content = ob_get_clean();
require('App/Views/template.php');
?>