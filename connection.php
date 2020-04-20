<?php
      define('USER',"root");
      define('PASSWD',"");
      define('SERVER',"127.0.0.1");
      define('BASE',"mybdd");
      
      function getConnection(){
            $dsn="mysql:dbname=".BASE.";host:".SERVER;

            try{
                  $connection=new PDO($dsn,USER,PASSWD);
            }
            catch(PDOException $e){
                  printf("Echec de la connection %s",$e->getMessage);
                  exit();
            }
            return $connection;
     }

?>
<?php

?>