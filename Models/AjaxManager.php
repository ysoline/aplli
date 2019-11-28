<?php

class AjaxManager extends Manager{
 private $_bdd;

        public function __construct()
        {
            $this->_bdd = Manager::dbConnect();
        }
    public function addValue(){
       $data = $this->_bdd->prepare('INSERT INTO ajax(test) VALUES(?)');
       $data->execute(array($_POST['nom']));
       return $data;
    }
}