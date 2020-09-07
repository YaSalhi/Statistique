<?php

namespace Model;

// require 'Model/Connection.class.php';
use Model\Connection ;

class NotesManager {

    public function getNotes(){

        $cnx = new Connection();
        $orderSql = "select * from gi";
        $prepared = $cnx->prepare($orderSql);

        $prepared->execute();
    
        $cnx = null ;
        return $prepared->fetchAll();
    }

}