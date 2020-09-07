<?php 

namespace Model ;

session_start();
class Connection extends \PDO{

    private $user ;
    private $password ;
    private $server ;
    private $base ;
    private $charset ;
    private $dsn ;

    public function __construct($user ="root", $password ="", $server ="127.0.0.1", $base="mybdd", $charset="UTF8"){

        $this->hydrate($user, $password, $server, $base, $charset);

        $options = [
            \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
            \PDO::ATTR_EMULATE_PREPARES   => false,
         ];
         
        parent::__construct($this->dsn, $this->user, $this->password,  $options);

    }

    private function hydrate($user, $password, $server, $base, $charset){

        $this->user = $user ;
        $this->password = $password ;
        $this->server = $server ;
        $this->base = $base ;
        $this->charset = $charset ;
        $this->dsn = 'mysql:host='.$server.';dbname='.$base.';charset='.$charset ;
    }

}