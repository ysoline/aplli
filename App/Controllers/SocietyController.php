<?php
namespace App\Controllers;

use App\Models\UserManager;
use App\Models\SocietyManager;
use Daveismyname\SqlImport\Import;

//Classe permettant de créer une nouvelle base de données pour l'ajout d'une société.
class SocietyController
{

    //Création de la base de données
    public function newBdd()
    {
        if (!empty($_POST['bdd_name']) && !empty($_POST['soc_name'])) {

            $societyManager = new SocietyManager;
            
            $check = $societyManager->checkBdd($_POST['bdd_name']);

            if ($check['bdd_name'] == $_POST['bdd_name']) {
                echo 'Impossible de créer la base de données <br /> <a href="bdd">Retour</a>';
            } else {

                $addBdd = $societyManager->newBdd($_POST['bdd_name']);
                $addSoc = $societyManager->addSociety($_POST['soc_name'], $_POST['bdd_name']);

                $filename = 'appli.sql';//Placer à la racine du site
                $username = 'root';
                $password = '';
                $database = $_POST['bdd_name'];
                $host = 'localhost';
                $dropTables = true;
                new Import($filename, $username, $password, $database, $host, $dropTables);
                header('Location: bdd');
            }
        } else {
            echo 'Veuillez remplir tous les champs';
        }
    }
//Permet la vérification avec AJAX, affichage ou non du select
    public function checkSociety()
    {
        if (!empty($_POST['email'])) {

            $userManager = new UserManager;

            $user = $userManager->getUser($_POST['email']);

            if (!empty($user['email'])) {

                $societyManager = new SocietyManager;
                $societys = $societyManager->checkSociety($user['id']);
               
                echo json_encode($societys);               
                
            } else {
                echo 'Failed';
            }
        } else {
            echo 'Veuillez remplir tous les champs';
        }
    }

    //Permet de lister les sociétés lié à un utilisateur
    public function getSocietys(){
        if (!empty($_POST['email'])) {

            $userManager = new UserManager;

            $user = $userManager->getUser($_POST['email']);

            if (!empty($user['email'])) {

                $societyManager = new SocietyManager;
                $societys = $societyManager->checkSociety($user['id']);
             
                return $societys;
                
            } else {
                echo 'Failed';
            }
        } else {
           echo 'Veuillez remplir tous les champs';
        }
    }

    public function getUserOfSociety(){

        $societyManager = new SocietyManager;
        $getUser = $societyManager->getUserOfSociety();
        require ('App/Views/temp.php');
    }

    //Récupération de la liste de toutes les enteprises
    public function getAllSocietys(){

        $societyManager= new SocietyManager;
        $societys = $societyManager->getSociety();
        require 'App/Views/entreprise.php';
    }

}
