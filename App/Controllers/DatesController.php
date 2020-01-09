<?php

class DatesController{

    public function addDateC(){

        if(!empty($_POST['datefr'])){

            $date = $_POST['datefr'];
            $datemodif= strtotime($date);
            $newformat= date('Y/m/d', $datemodif);

            $dateManager = new DatesManager;
            $addDate = $dateManager->addDates($newformat);
            return $addDate;
            header('Location:dates');
        }else{
            throw new exception('Veuillez remplir le champs demandé');
        }
    }

    public function getDateC(){
        
        $data = new DatesManager;
        $date=$data->getDate();
        
        require('Views/dates.php');
        return $date;
    }
}