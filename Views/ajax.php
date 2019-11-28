<?php
ob_start();
$title = 'Ajax';
?>


<form>
    <input type="text" name='nom' id='nom' required>
    <button type='submit' id="submit" class='btn btn-primary'>Valider</button>
</form>

<?php $content = ob_get_clean();
require('Views/template.php');
?>