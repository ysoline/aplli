<?php

class AjaxManager extends Manager
{
    private $_bdd;

    public function __construct()
    {
        $this->_bdd = Manager::dbConnect();
    }

    public function addValue()
    {
        $data = $this->_bdd->prepare('INSERT INTO ajax(test) VALUES(?)');
        $data->execute(array($_POST['nom']));
        return $data;
    }

    public function getAjax()
    {
        $data = $this->_bdd->prepare('SELECT * FROM ajax ORDER BY id DESC LIMIT 0,5');
        $data->execute();
        $datas=$data->fetchAll();
        return $datas;
    }
}
