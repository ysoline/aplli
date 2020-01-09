<?php
ob_start();
$title = 'Ajout utilisateur';
?>

<form id="valid_register" action="register" method="POST">
    <label for="email">Email</label>
    <input type="email" name="email" id="email">
    <label for="username">Username</label>
    <input type="text" name='username' id="username">   
    <label for="pwd">Password</label>
    <input type="password" name='password' id="password">
   
    <input type="submit" class="btn btn-success" value="Register">
</form>
<div id="error_register" class="text-danger"></div>
<?php $content = ob_get_clean();
require('App/Views/template.php');
?>