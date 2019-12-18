<?php

class AjaxController
{

    public function addValue()
    {
        if (isset($_POST['nom'])) {
            $ajaxManager = new AjaxManager;
            $ajaxManager->addValue($_POST['nom']);
            echo 'Success';
        } else {
            echo 'Failed';
            // throw new exception('Veuillez remplir le champs demandé');
        }
    }

    public function getValue()
    {

        $ajaxManager = new AjaxManager;
        $ajax=$ajaxManager->getAjax();

        require('Views/ajax.php');
        return $ajax;
    }
}
