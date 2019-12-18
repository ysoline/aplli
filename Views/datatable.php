<?php
ob_start();
$title = 'Datatable';
?>
<table id="exemple">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Age</th>
        </tr>
    </thead>
</table>
<?php $content = ob_get_clean();
require('Views/template.php');
?>