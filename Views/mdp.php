<?php
ob_start();
$title= 'Hashage mot de passe';
//Hashage du mot de passe
if (!empty($_POST['mdp_show'])) {
    $showMDP = $_POST['mdp_show'];
    $pass_hash = password_hash($showMDP, PASSWORD_BCRYPT);
} 
?>


    <h3 class="d-flex justify-content-center">Hasher un mot de passe</h3>
    <div class="d-flex justify-content-center">
        <form class="d-flex flex-column align-items-center" action='index.php' method="post">
            <label class="font-weight-bold" for="">Entrer un mot de passe :</label>
            <input name='mdp_show' class='m-2' required>
            <input type="submit" class="btn btn-primary">
        </form>
    </div>
    <?php if (!empty($_POST['mdp_show'])) { ?>
        <div class="d-flex flex-column align-items-center">
            <label class="font-weight-bold">Mot de passe :</label>
            <?= $_POST['mdp_show'] ?>
            <label class="font-weight-bold">Mot de passe haché :</label>

            <p class="text-center text-light bg-dark p-2" id='pass_hash'><?= trim($pass_hash) ?><input type="button" class="ml-2 btn btn-danger js-copy font-weight-bold" data-target="#pass_hash" value='Copier'></p>
        </div>
    <?php } ?>
<h5>Mot de passe hashé à vérifier</h5>
    <div class="d-flex justify-content-center">
        <form class="d-flex flex-column align-items-center" action='index.php' method="post">
            <label class="font-weight-bold" for="">Entrer un mot de passe hashé:</label>
            <input name='mdp_hash' class='m-2' required>
            <label class="font-weight-bold" for="">Entrer un mot de passe :</label>
            <input name='mdp_verif' class='m-2' required>
            <input type="submit" class="btn btn-primary">
        </form>
    </div>
    <?php
    if (!empty($_POST['mdp_hash']) && !empty($_POST['mdp_verif'])) {
        $mdp_verif = $_POST['mdp_verif'];
        $mdp_hash = $_POST['mdp_hash'];

        if (password_verify($mdp_verif, $mdp_hash)) {
            echo '<div class="text-success text-center font-weight-bold">Mot de passe valide</div>';
            var_dump(password_verify($mdp_verif, $mdp_hash));
        } else {
            echo '<div class="text-danger text-center font-weight-bold">Mot de passe invalide</div>';
        }
    }
    ?>
<h5>Comparaison entre 2 mots de passes hashés</h5>
    <div class="d-flex justify-content-center">
        <form class="d-flex flex-column align-items-center" action='index.php' method="post">
            <label class="font-weight-bold" for="">1er mot de passe</label>
            <input name='mdp_1' class='m-2' required>
            <label class="font-weight-bold" for="">2eme mot de passe</label>
            <input name='mdp_2' class='m-2' required>
            <input type="submit" class="btn btn-primary">
        </form>
    </div>
<?php 
if(!empty($_POST['mdp_1'])&& !empty($_POST['mdp_2'])){
    if($_POST['mdp_1'] === $_POST['mdp_2']){
        echo '<div class="text-center text-success font-weight-bold">mot de passe identique</div>';
    }else{
        echo '<div class="text-center text-danger font-weight-bold">mot de passe invalide</div>';
    }
}
?>

<?php $content = ob_get_clean();
require('Views/template.php');
?>