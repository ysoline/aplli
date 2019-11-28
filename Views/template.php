<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
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
                <a class="nav-link active" href="mdp">Mot de passe</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="dates">Dates</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="ajax">Ajax</a>
            </li>
        </ul>
    </nav>

    <?= $content ?>
</body>
<script src="https://kit.fontawesome.com/1853202903.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js""></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<script src="https://unpkg.com/gijgo@1.9.13/js/messages/messages.fr-fr.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="public/script.js"></script>
</body>

</html>