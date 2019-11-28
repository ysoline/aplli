<?php 

$value = 'test';

if(isset($_POST['nom'])){
    if($_POST["nom"] == $value){

        echo 'Success';
    }else{
        echo 'Failed';
    }
}