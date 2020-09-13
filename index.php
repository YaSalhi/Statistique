<?php

use Controller\Frontend\NotesController;
use Controller\Frontend\LoginController;
require 'Controller/Frontend/NotesController.class.php';
require 'Controller/Frontend/LoginController.class.php';

try{

    $loginController = new LoginController();

    if(!empty($_POST['email']) && !empty($_POST['password'])){

        $loginController->login();

    }elseif(isset($_GET['currentPage'])){

        if($_GET['currentPage'] == 'Login'){
        
            $loginController->showLoginForm();

        }elseif($_GET['currentPage'] == 'Services'){
            
            (new NotesController())->Services();
            
        }elseif($_GET['currentPage'] == 'GeneralStatistics'){

            (new NotesController())->GeneralStatistics();

        }

    }elseif(isset($_GET['student'])){

        (new NotesController())->studentData();

    }elseif(isset($_POST['logout']) && $_POST['logout'] == 'logout'){
        
        $loginController->logout();
        
    }elseif(isset($_GET['module'])){
            
        (new NotesController())->Services();

    }else{

        $loginController->showLoginForm();

    }

}catch(Exception $e){
     
    echo 'Error : '.$e->getMessage();
    require 'view/errorView.php' ;
}