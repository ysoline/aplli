<?php

//Classe permettant de créer une nouvelle base de données pour l'ajout d'une société.
class SocietyController
{

    //Création de la base de données
    public function newBdd()
    {
        if (!empty($_POST['bdd_name']) && !empty($_POST['soc_name'])) {

            $societyManager = new SocietyManager;

            $addBdd = $societyManager->newBdd($_POST['bdd_name']);    

            $addSoc = $societyManager->addSociety($_POST['soc_name'], $_POST['bdd_name']);

            header('Location: bdd');
        } else {
            throw new exception('Veuillez remplir tous les champs');
        }
    }
}
