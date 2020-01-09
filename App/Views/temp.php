<?php
ob_start();
$title = 'Entreprise';
?>
<div class="m-2">
    <?php foreach ($getUser as $user) { ?>
        <p><?= $user['email'] ?></p>
    <?php } ?>
</div>
<?php $content = ob_get_clean();
require('App/Views/template.php');
?>