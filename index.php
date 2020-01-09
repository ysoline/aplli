<?php

use App\Controllers\AuthController;
use App\Controllers\SocietyController;

require('vendor/autoload.php');
//require('Autoloader.php');

//Autoloader::register();
session_start();

$action = '';
if (isset($_GET['action'])) {
    $action = $_GET['action'];
}
try {
    switch ($action) {

        case '':
            require 'App/Views/index.php';
            break;

        case 'index':
            require 'App/Views/index.php';
            break;

        case 'dates':
            $date = new DatesController;
            $date->getDateC();
            break;

        case 'mdp':
            require 'App/Views/mdp.php';
            break;

        case 'addValue':
            $data = new AjaxController;
            $data->addValue($_POST['nom']);
            break;

        case 'ajoutDate':
            $rqDate = new DatesController;
            $rqDate->addDateC($_POST['datefr']);
            break;

        case 'ajax':
            $req = new AjaxController;
            $req->getValue();
            break;

        case 'datatable':
            require 'App/Views/datatable.php';
            break;

        case 'bdd':
            require 'App/Views/bdd.php';
            break;

        case 'utilisateurs':
            require 'App/Views/users.php';

            break;

        case 'addBdd':
            $addBdd = new SocietyController;
            $addBdd->newBdd($_POST['soc_name'], $_POST['bdd_name']);
            break;

        case 'checkSociety':
            $society = new SocietyController;
            $society->checkSociety();
            break;

        case 'auth':
            $userAuth = new AuthController;
            $userAuth->loginIn();
            break;

        case 'accueil':
            require 'App/Views/accueil.php';
            break;

        case 'enregistrement':
            require 'App/Views/register.php';
            break;

        case 'register':
            $newUser = new AuthController;
            $newUser->register();
            break;

        case 'monCompte':
            $newUser = new AuthController;
            $newUser->checkInfo();
            break;

        case 'deconnexion':
            $newUser = new AuthController;
            $newUser->logout();
            break;

        case 'entreprise':
            $societys = new SocietyController;
            $societys->getAllSocietys();
            break;

        case 'getUserOfEntreprise':
            $user = new SocietyController;
            $user->getUserOfSociety();
            break;

        case 'notLog':
            require('App/Views/notLog.php');
            break;

        default:
            require 'App/Views/404.php';
            break;
    }
} catch (Exception $e) {
    $errorMessage = $e->getMessage();
    require('Views/error.php');
}
