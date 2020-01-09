<?php
namespace App\Controller;
use App\Models\UserManager;

class UserController{

    public function getUsers(){

        $userManager = new UserManager;
        $users = $userManager->getUser($_POST['email']);      
      
        
        require('Views/users.php');        
    }

   
}