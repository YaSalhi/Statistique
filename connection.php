<?php
      define('USER',"root");
      define('PASSWD',"");
      define('SERVER',"127.0.0.1");
      define('BASE',"mybdd");
      
      function getConnection(){
            $dsn="mysql:dbname=".BASE.";host:".SERVER;

            try{
                  $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
                  $connection=new PDO($dsn,USER,PASSWD,  $pdo_options);
                  $connection->exec("SET NAMES 'UTF8'");
      }
            catch(PDOException $e){
                  printf("Echec de la connection %s",$e->getMessage);
                  exit();
            }
            return $connection;
     }

