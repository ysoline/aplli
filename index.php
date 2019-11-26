<?php
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

        case 'ajoutDate':
            $rqDate = new DatesController;
            $rqDate->addDateC($_POST['datefr']);
        break;

        default:
            require 'Views/404.php';
            break;
    }
} catch (Exception $e) {
    $errorMessage = $e->getMessage();
    require('Views/error.php');
}
