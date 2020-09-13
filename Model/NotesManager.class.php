<?php

namespace Model;

// require 'Model/Connection.class.php';
use Model\Connection ;

class NotesManager {

    public function getNotes($licence){

        $cnx = new Connection();
        $orderSql = "select * from $licence";
        $prepared = $cnx->prepare($orderSql);

        $prepared->execute();
    
        $cnx = null ;
        return $prepared->fetchAll();
    }

}