<?php
ob_start();
$title = 'Ajax';
?>



<button class='btn btn-primary m-5' data-toggle="modal" data-target="#exampleModal">Click me !</button>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal essaie refresh</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id='content'>
                    <?php foreach ($ajax as $test) { ?>
                        <p><?= $test['test'] ?> </p>
                    <?php } ?>                    
                </div>
                <button class='btn btn-info' data-toggle="modal" data-target="#ajoutForm">Ajouter une valeur</button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="ajoutForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Formulaire</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">                        
                <form>
                    <input type="text" name='nom' id='nom' required>
                    <button type='submit' id="submit" class='btn btn-primary'>Valider</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>

<?php $content = ob_get_clean();
require('App/Views/template.php');
?>