<?php

use Daveismyname\SqlImport\Import;

namespace App\Models;

class SocietyManager extends Manager
{

    private $sc;
    private $db;
    private $getdb;

    public function __construct()
    {
        $this->sc = Manager::serverConnect();
        $this->db = Manager::connectSociety();
    }
    //Permet de créer une nouvelle base de données
    public function newBdd()
    {

        $data = $this->sc->exec('CREATE DATABASE IF NOT EXISTS ' . $_POST['bdd_name'] . ' DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci');

        return $data;
    }

    //Ajoute la nouvelle société dans la base de données society (table society)
    public function addSociety()
    {

        $data = $this->db->prepare('INSERT INTO society(soc_name, bdd_name) VALUES(?,?)');
        $data->execute(array($_POST['soc_name'], $_POST['bdd_name']));

        return $data;
    }

    public function checkBdd()
    {
        $data = $this->db->prepare('SELECT bdd_name FROM society WHERE bdd_name=?');
        $data->execute(array($_POST['bdd_name']));
        $result=$data->fetch();

        return $result;
    }

    public function getSociety(){

        $data = $this->db->prepare('SELECT soc_name FROM society');
        $data->execute();
        $result=$data->fetchAll();

        return $result;     
    }

    public function accessSociety(){
        $data = $this->db->prepare('INSERT INTO access(id_soc, id_user) VALUES(?,?)');
        $data->execute(array($_POST['id_soc'], $_POST['id_user']));
    }

    public function checkSociety($user){

        $data=$this->db->prepare('SELECT users.id as id_user, society.id as id_soc, soc_name FROM access INNER JOIN users ON users.id = access.id_user INNER JOIN society ON society.id = access.id_soc WHERE id_user = ?');
        $data->execute(array($user));

        $result = $data->fetchAll();
        return $result;
    }

    public function getDbConnect(){

        $this->getdb = Manager::connectToDb();

        $data=$this->getdb->prepare('SELECT name FROM db_name');
        $data->execute();
        $result =$data->fetchAll();

        return $result;
    }

    public function getUserOfSociety(){
        
        $data=$this->db->prepare('SELECT users.id, username, email, soc_name, society.id FROM access INNER JOIN society ON society.id = id_soc INNER JOIN users ON users.id = id_user WHERE soc_name = ?');
        $data->execute(array($_POST['soc_name']));
        $result =$data->fetchAll();

        return $result;
    }

    /**
     * Récupère les utilisateurs d'une société
     *
     * @param [string] $soc_name  Nom de société
     * @param [string] $username Nom d'utilisateur
     * @return void
     */
    public function userOfSociety($soc_name, $username){
        $data= $this->db->prepare('SELECT users.id, username, email, soc_name, society.id FROM access INNER JOIN society ON society.id = id_soc INNER JOIN users ON users.id = id_user WHERE soc_name = ? AND username = ?');
        $data->execute(array($soc_name, $username));
        $result = $data->fetch();

        return $result;
    }

    /**
     * Ajout un utilisateur à une societé
     *
     * @param [type] $id_soc_name Id de société
     * @param [type] $id_user   Id de l'utilisateur
     * @return void
     */
    public function addUserSoc($id_soc_name, $id_user){
        $data=$this->db->prepare('INSERT INTO access(id_soc, id_user)  VALUES(?,?)');
        $data->execute(array($id_soc_name, $id_user));
    }

    /**
     * Permet de récupéré l'id d'une société
     *
     * @return void
     */
    public function getId($soc_name){
        $data=$this->db->prepare('SELECT id FROM society WHERE soc_name = ?');
        $data->execute(array($soc_name));
        $result = $data->fetch();

        return $result;
    }
}
