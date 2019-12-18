<?php
class Manager
{
    protected function dbConnect()
    {
        $_bdd = new PDO('mysql:host=localhost;dbname=appli;charset=utf8', 'root', '');
        $_bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        return $_bdd;
    }

    //Connection pour création Base de données
    protected function serverConnect(){
        $sc = new PDO('mysql:host=localhost','root', '');
        $sc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $sc;
    }

    protected function connectSociety(){
        $db = new PDO('mysql:host=localhost;dbname=equal;charset=utf8', 'root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        return $db;
    }
}
