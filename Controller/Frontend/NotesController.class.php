<?php

namespace Controller\Frontend;

use Model\NotesManager;
use Model\Connection ;
require 'functions.inc.php';
require 'Model/NotesManager.class.php';

class NotesController {

    function __construct(){
        
        if(!isset($_SESSION["auth"] ) ){

            header('location: index.php?currentPage=Login');

        }
    }

    public function Services()
    {
        $pdo = new Connection();

        $notesManager = new NotesManager();

        $resultSet = $notesManager->getNotes('GI');

        $module='POO';
        if(isset($_GET['module']) ) $module = $_GET['module']; 

        list($PV, $PNV, $PAJ) = modulePourcentage($resultSet ,$module);
        require 'view/frontend/afficheServices.php';
    }

    public function GeneralStatistics()
    {
        $pdo = new Connection();

        $notesManager = new NotesManager();

        $resultSet = $notesManager->getNotes('GI');

        if(isset($_GET['module']) ) $module = $_GET['module']; 

        list($PV, $PNV, $PAJ) = AnnéePourcentage($resultSet);
        require 'view/frontend/GeneralStatistics.php';
    }

    function studentData(){

        $pdo = new Connection();
        $orderSql = "SELECT * FROM GI WHERE codeApogee=".$_GET['student'];
        $prepared = $pdo->prepare($orderSql);

        $prepared->execute();
    
        $pdo = null ;
        $student = $prepared->fetchAll()[0];

        $nbrMV = 0; // nombre de modules validée
        $nbrMA = 0;// nombre de modules ajournée
        $nbrMR = 0;// nombre de modules rattrapage

        foreach ($student as $key => $value) {

            if(is_int($value) && !strstr($key, 'codeApogee') && !strstr($key, 'moyenneGenerale')){

                if($value >= 10){
                    $nbrMV++; 
                }elseif($value >= 5){
                    $nbrMR++;
                }else{
                    $nbrMA++;
                }
            }
        }
        require 'view/frontend/student.php';

    }
}
  