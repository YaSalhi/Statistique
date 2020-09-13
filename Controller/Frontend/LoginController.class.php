<?php 

namespace Controller\Frontend;

require 'Model/Connection.class.php';
use Model\Connection ;

class LoginController {

     /**
     * Show the application's login form.
     *
     */
    public function showLoginForm()
    {

        if (isset($_SESSION["auth"])) {
           
            header("Location: index.php?currentPage=Services");
            
        }else{
        
            require 'view/frontend/afficheLogin.php';
        }
    }

    
    /**
     * Handle a login request to the application.
     *
     */
    public function login()
    {

        if(!$this->validateLogin()){

            $this->sendFailedLoginResponse();
            return;
        }

        try{

            $pdo = new Connection();

            if ( isset($_POST['email']) && isset($_POST['password']) && !isset($_SESSION["auth"])) {

                //Retrieve data from post method
                $email = $_POST['email'];
                $password = $_POST['password'];
                
                // check if user exist or not using sql statement
                $stmt = $pdo->prepare("SELECT count(*) FROM users WHERE email = ? and password = ?");
                $stmt->execute([$email,$password]);
                $count = $stmt->fetchColumn();

                if ($count==1) {
                    
                    $stmt = $pdo->prepare("SELECT * FROM users WHERE email=:email and password=:password ");
                    $stmt->execute(['email' => $email,'password' => $password]);
                    $user = $stmt->fetch();
                    // $_SESSION["state"] = 'auth';
                    $_SESSION["auth"] = $user['id'];

                    header("Location: index.php?currentPage=GeneralStatistics");
                    
                }else {
                    
                   $this->sendFailedLoginResponse();
                }


            }else {
                header("Location: index.php");
            }

        }catch(Exception $e){

            echo 'error : '.$e->getMessage();
            
        }finally{

            // close connection
            $pdo = null ;
            
        }
    }

    /**
     * Validate the user login request.
     *
     */
    protected function validateLogin()
    {
        if(isset($_POST['email']) && isset($_POST['password'])){

            $_POST['email'] = htmlspecialchars($_POST['email']);

            // checking if email's valid or not 
            if(preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#i", $_POST['email'])){
                 return true ;
            }
        }
            return false ;
    }
   
    /**
     * If the login attempt was unsuccessful we will redirect the user back to the login form
     * 
     */ 
    protected function sendFailedLoginResponse(){

        header("Location: index.php?tst=false");
        ?><script>
            document.getElementsByTagName('small').classList.toggle('hidden');
            console.log( document.getElementsByTagName('small'));
        </script><?php
        
    } 

    /**
     * Log the user out of the application.
     *
     */
    public function logout()
    {
        if(isset($_POST['logout']) && $_POST['logout'] == 'logout'){
        
            session_destroy();
            $_SESSION["state"] = 'guest';

            header("Location: index.php?currentPage=Login");
        }

    }
}