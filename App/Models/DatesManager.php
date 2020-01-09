<?php

class DatesManager extends Manager
{
    private $_bdd;

    public function __construct()
    {
        $this->_bdd = Manager::dbConnect();
    }


    public function addDates($datemodif)
    { 
        $data=$this->_bdd->prepare('INSERT INTO dates_format(date_brut) VALUES(?)');
        $data->execute(array($datemodif));

        return $data;
    }

    public function getDate(){
        $data=$this->_bdd->prepare('SELECT DATE_FORMAT(date_brut, "%d/%m/%Y") as dte FROM dates_format');
        $data->execute();
        $date=$data->fetchAll();
        return $date;
    }
}
