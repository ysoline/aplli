<?php

namespace App\Models;

use PDO;

class Manager
{
    //Connexion pour application test  hors test equal
    protected function dbConnect()
    {
        $_bdd = new PDO('mysql:host=localhost;dbname=appli;charset=utf8', 'root', '');
        $_bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        return $_bdd;
    }

    //********************************************************EQUAL********************************************************
    //Connection pour création Base de données
    protected function serverConnect(){
        $sc = new PDO('mysql:host=localhost','root', '');
        $sc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $sc;
    }

    //Connexion pour test equal
    public function connectSociety(){
        $db = new PDO('mysql:host=localhost;dbname=equal;charset=utf8', 'root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        return $db;
    }

    //Connection à la base de données
    public function connectToDb(){

        $db_name = $_SESSION['db_name'];
        
        $useDb = new PDO('mysql:host=localhost;dbname='.$db_name.';charset=utf8', 'root', '');
        $useDb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        return $useDb;

    }
}
