<?php

namespace Controller\Frontend;

use Model\NotesManager;
use Model\Connection ;

class NotesController {

    public function Services()
    {
        $pdo = new Connection();

        if(!isset($_SESSION["auth"] ) ){

            header('location: index.php?currentPage=Login');

        }else{

            require 'functions.inc.php';

            require 'Model/NotesManager.class.php';
            $notesManager = new NotesManager();

            $resultSet = $notesManager->getNotes();

            $module='POO';
            if(isset($_GET['module']) ) $module = $_GET['module']; 

            list($PV, $PNV, $PAJ) = calculePourcentage($resultSet ,$module);
            require 'view/frontend/afficheServices.php';
        }
    }
}
  