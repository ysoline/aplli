<?php
ob_start();
$title = 'Connexion';
?>
<h3>Connexion :</h3>

<div>
    <form action="auth" method="POST">
        <label for="username">Email</label>
        <input type="email" name="email" id='email'>
        <label for="pwd">password</label>
        <input type="password" name="password" id="password">
        <input type="submit" class='btn btn-success' id="valid_auth">

        <div id="society_selected" name='societyName'>       
             <select name="name_soc" id="nameOfSociety">        
            </select>
        </div>

    </form>
    <div class="error_society text-danger"></div>
</div>

<?php $content = ob_get_clean();
require('App/Views/template.php');
?>