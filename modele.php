<?php
    function getNotes(){

        require 'connection.php';

        $cnx=getConnection();
        $orderSql="select * from gi";
        $prepared = $cnx->prepare($orderSql);

        $prepared->execute();
    
        return $prepared->fetchAll();
    }
