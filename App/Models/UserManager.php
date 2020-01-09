<?php
namespace App\Models;

class UserManager extends Manager{

    private $db;

    public function __construct()
    {        
        $this->db = Manager::connectSociety();
    }
    
    public function getUser(){
        
        $data=$this->db->prepare('SELECT id, email FROM users WHERE email=?');
        $data->execute(array($_POST['email']));
        $result = $data->fetch();
        return $result;
    }
    
}