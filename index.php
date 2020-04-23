<?php
    require 'controller.php';
    if(isset($_GET['currentPage'])){

        if($_GET['currentPage'] == 'Home')
        Home();
        elseif($_GET['currentPage'] == 'Services' || isset($_GET['module']))
        Services();
        elseif($_GET['currentPage'] == 'SignIn')
        SingIn();
        elseif($_GET['currentPage'] == 'SignUp')
        SingUp();

    }else{
        Home();
    }