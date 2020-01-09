<form action="add_society">
    <label for="name_soc">Entreprise</label>
    <div class="m-2">
        <select name="name_soc">
            <?php foreach ($societys as $society) { ?>
                <option value="default">Choisir</option>
                <option value="<?= $society['soc_name'] ?>"><?= $society['soc_name'] ?></option>
            <?php } ?>
        </select>
    </div>
    <input type="submit" class="btn btn-success">
</form>