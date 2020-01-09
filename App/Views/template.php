<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"/>
    <link href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css"/>
    <link href="https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css"/>
    <link rel='stylesheet' href='public/style.css'>

    <title><?= $title ?></title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-light">
    <a class="navbar-brand" href="index"><i class="fas fa-home"></i>Accueil</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="mdp">Mot de passe</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="dates">Dates</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="ajax">Ajax</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="datatable">Datatable</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="bdd">BDD</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="utilisateurs">Connexion</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="enregistrement">Ajout utilisateur</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="monCompte">Mon compte</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="deconnexion">Déconnexion</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="entreprise">Entreprise</a>
            </li>
        </ul>
    </nav>

    <?= $content ?>
</body>
<script src="https://kit.fontawesome.com/1853202903.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<script src="https://unpkg.com/gijgo@1.9.13/js/messages/messages.fr-fr.js" type="text/javascript"></script>


<!-- <script type="text/javascript" src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.1.2/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/select/1.1.2/js/dataTables.select.min.js"></script>
<script type="text/javascript" src="https://editor.datatables.net/extensions/Editor/js/dataTables.editor.min.js"></script>
<script src="public/datatable.js"></script> -->

<script src="public/script.js"></script>
</body>
</html>