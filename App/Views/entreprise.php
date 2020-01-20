<?php
ob_start();
$title = 'Entreprise';
?>

<form action="getUserOfEntreprise" method="POST">
    <label for="soc_name">Entreprises :</label>
    <select name="soc_name" id="soc_name">
        <option value="">Choisir</option>
        <?php foreach ($societys as $society) { ?>
            <option value="<?= $society['soc_name'] ?>"><?= $society['soc_name'] ?></option>
        <?php } ?>
    </select>
    <input type="submit" class="btn btn-success">
</form>

<button class="btn btn-primary" href='addUserSociety' data-toggle="modal" data-target="#addUser_modal"><i class="fas fa-user-plus"></i></button>

<!-- Modal -->
<div class="modal fade" id="addUser_modal" tabindex="-1" role="dialog" aria-labelledby="addUser_modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addUser_modalLabel">Ajouter un utilisateur</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="addUserSoc">
                    <div>
                        <label for="soc_name">Entreprise</label>
                        <select name="soc_name" id="soc_name1">
                            <option value="">Choisir</option>
                            <?php foreach ($societys as $society) { ?>
                                <option value="<?= $society['soc_name'] ?>"><?= $society['soc_name'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div>
                        <label for="user" >Nom :</label>
                        <input type="text" name='user'id="user">
                    </div>
                    <input type="submit" class="btn btn-success" value="Ajouter">
                </form>
            </div>
        </div>
    </div>
</div>
<?php $content = ob_get_clean();
require('App/Views/template.php');
?>