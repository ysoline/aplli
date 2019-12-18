<?php

class SocietyManager extends Manager{

    private $sc;
    private $db;

    public function __construct()
    {
        $this->sc = Manager::serverConnect();
        $this->db = Manager::connectSociety();
    }
    //Permet de créer une nouvelle base de données
    public function newBdd(){

        $data=$this->sc->exec('CREATE DATABASE IF NOT EXISTS '.$_POST['bdd_name'].' DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci');        

        return $data;
    }

    //Ajoute la nouvelle société dans la base de données society (table society)
    public function addSociety(){

        $data=$this->db->prepare('INSERT INTO society(soc_name, bdd_name) VALUES(?,?)');
        $data->execute(array($_POST['soc_name'], $_POST['bdd_name']));

        return $data;
    }
}