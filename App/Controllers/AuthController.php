<?php

namespace App\Controllers;

use App\Models\Manager;
use App\Models\SocietyManager;

//Class d'authentification
class AuthController
{
    private $auth;

    public function __construct()
    {
        //Appel la connection à la base de données
        $db_temp = new Manager;
        $db = $db_temp->connectSociety();
        //Création de l'objet auth
        $this->auth = new \Delight\Auth\Auth($db);
    }

    public function register()
    {
        try {
            $userId = $this->auth->admin()->createUser($_POST['email'], $_POST['password'], $_POST['username']);

            echo 'We have signed up a new user with the ID ' . $userId;
            header('Location:index');
        } catch (\Delight\Auth\InvalidEmailException $e) {
            die('Invalid email address');
        } catch (\Delight\Auth\InvalidPasswordException $e) {
            die('Invalid password');
        } catch (\Delight\Auth\UserAlreadyExistsException $e) {
            die('User already exists');
        }
    }
    public function loginIn()
    {
        try {
            $this->auth->login($_POST['email'], $_POST['password']);

            echo 'User is logged in';

            if (isset($_POST['name_soc'])) {

                $_SESSION['db_name'] = $_POST['name_soc'];

                $newConnect = new Manager;
                $newConnect->connectToDb();

                header('Location:monCompte');
            } else {
                echo ('Connexion impossible à la base de données');
            }
        } catch (\Delight\Auth\InvalidEmailException $e) {
            die('Wrong email address');
        } catch (\Delight\Auth\InvalidPasswordException $e) {
            die('Wrong password');
        } catch (\Delight\Auth\EmailNotVerifiedException $e) {
            die('Email not verified');
        } catch (\Delight\Auth\TooManyRequestsException $e) {
            die('Too many requests');
        }
    }

    public function checkInfo()
    {
        if ($this->auth->isLoggedIn()) {
            $email = $this->auth->getEmail();

            $societyManager = new SocietyManager();
            $getDb = $societyManager->getDbConnect();

            require 'App/Views/account.php';
        } else {
            header('Location:notLog');
        }
    }

    public function logout()
    {

        $this->auth->logOut();
        $this->auth->destroySession();
        header('Location:index');
    }
}
