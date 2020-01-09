<?php
ob_start();
$title = 'Vous n\'étes pas connecté';
?>
<h4>Vous n'êtes pas connecté</h4>
<?php $content = ob_get_clean();
require('App/Views/template.php');
?>