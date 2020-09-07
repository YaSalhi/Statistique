<?php

use Controller\Frontend\NotesController;
use Controller\Frontend\LoginController;
require 'Controller/Frontend/NotesController.class.php';
require 'Controller/Frontend/LoginController.class.php';

try{

    $loginController = new LoginController();
    $notesController = new NotesController();

    if(!empty($_POST['email']) && !empty($_POST['password'])){

        $loginController->login();

    }elseif(isset($_GET['currentPage'])){

        if($_GET['currentPage'] == 'Services'){
            
            $notesController->Services();
            
        }elseif($_GET['currentPage'] == 'Login'){
        
            $loginController->showLoginForm();
        }

    }elseif(isset($_POST['logout']) && $_POST['logout'] == 'logout'){
        
        $loginController->logout();
        
    }elseif(isset($_GET['module'])){
        $notesController->Services();

    
    }else{

        $loginController->showLoginForm();

    }

}catch(Exception $e){
     
    echo 'Error : '.$e->getMessage();
    require 'view/errorView.php' ;
}