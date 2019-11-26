<?php ob_start(); 
$title= '404';
?>


<div id='oopss'>
    <div id='error-text'>
        <span>404</span>
        <p>Page introuvable !</p>
        <a class='btn btn-outline-danger btn-lg mt-3' href="./">Accueil</a>
    </div>
</div>

<?php $content = ob_get_clean();
require('Views/template.php');
?>