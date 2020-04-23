<?php

    function SignUp()
    {
        require 'AfficheInscription.php';

    }
    function SignIn()
    {
        require 'AfficheInscription.php';

    }
    function Home()
    {
        require 'afficheHome.php';
    }

    function Services()
    {

        require 'functions.inc.php';

        require 'modele.php';
        $resultSet = getNotes();

        $module='POO';
        if(isset($_GET['module']) ) $module = $_GET['module']; 

        list($PV, $PNV, $PAJ) = calculePourcentage($resultSet ,$module);
        require 'afficheServices.php';

  }
  