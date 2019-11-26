<?php
ob_start();
$title = 'Dates Format';
?>

<form action="ajoutDate" method="POST">
    <div class="form-group col-md-2">
        <label for="date">Veuillez saisir une date : </label>
        <input class="form-control" id="datepicker" name="datefr" type="text" required autocomplete="off">
        <input type="submit" class="btn btn-primary m-2">
    </div>
</form>

<div>
    <table class="table">
        <thead>
            <tr>
                <td>
                    Dates FR
                </td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($date as $newDate) { ?>
                <tr>
                    <td>
                        <?= $newDate['dte']; ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>



<?php $content = ob_get_clean();
require('Views/template.php');
?>