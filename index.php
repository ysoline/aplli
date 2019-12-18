<?php
use Daveismyname\SqlImport\Import;
require('vendor/autoload.php');
require('Autoloader.php');
Autoloader::register();
session_start();

$action = '';
if (isset($_GET['action'])) {
    $action = $_GET['action'];
}
try {
    switch ($action) {

        case '':
            require 'Views/index.php';
            break;

        case 'index':
            require 'Views/index.php';
            break;

        case 'dates':
            $date = new DatesController;
            $date->getDateC();
            break;

        case 'mdp':
            require 'Views/mdp.php';
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
            require 'Views/datatable.php';
            break;

        case 'bdd':
            require 'Views/bdd.php';
            break;

        case 'addBdd':
            $addBdd = new SocietyController;
            $addBdd->newBdd($_POST['soc_name'], $_POST['bdd_name']);      
            
            //Permet l'import d'une base de données (avec données quand données stockées)
            $filename = 'appli.sql';
            $username = 'root';
            $password = '';
            $database = $_POST['bdd_name'];
            $host = 'localhost';
            $dropTables = true;

            $newImport = new Import($filename, $username, $password, $database, $host, $dropTables);
            break;

        default:
            require 'Views/404.php';
            break;
    }
} catch (Exception $e) {
    $errorMessage = $e->getMessage();
    require('Views/error.php');
}
