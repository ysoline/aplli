<?php
class Manager
{
    protected function dbConnect()
    {
        $_bdd = new PDO('mysql:host=localhost;dbname=appli;charset=utf8', 'root', '');
        $_bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        return $_bdd;
    }
}
