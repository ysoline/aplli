<?php 
namespace App\Models;

class AuthManager extends Manager{

    private $db;

    public function __construct()
    {        
        $this->db = Manager::connectSociety();
    }

    public function checkLogin(){
        
        $data = $this->db->prepare('SELECT name, password FROM users WHERE name = ?');
        $data->execute(array($_POST['username']));
        $response = $data->fetch();
        return $response;
    }

   /*  public function register($passHach){

        $data =$this->db->prepare('INSERT INTO users (name,firstname, password) VALUES(?,?,?)');
        $data->execute(array($_POST['username'],$_POST['firstname'], $passHach));

    } */
   
}