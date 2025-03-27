<?php
    error_reporting(0); //https://support.hostinger.com/en/articles/1583189-how-to-hide-errors-and-warnings-on-your-website
    session_start();
    require "model.php";
// Case 1:
    if (empty($_POST['page'])) {
        include("view_startpage_student.php");
        exit();   
    } 
    
    if ($_POST['page'] == 'StartPage') {
        $command = $_POST['command'];  // In view_startpage.php, an input in a form, of which type is 'hidden' and name is 'command'.
        switch($command) {
//Case 2:
            case 'LogIn':
                //https://www.tutorialspoint.com/php/php_null_coalescing_operator.htm
                //Uses Null Coalescing Operator To safely pass values
                $result = checkCredentials($_POST['username'] ?? '', $_POST['password'] ?? '');
                if ($result) {
                    include "view_mainpage_student.php";
                    exit();
                } else {
                    //Show startpage and include errors
                    $error_name = "* Incorrect username or ";
                    $error_pass = "* Incorrect password";               
                    include "view_startpage_student.php";
                    session_unset();
                    exit();
                }
                exit();
            case 'SignUp':
                //New User Made... Just Kidding
                exit();
//Case 3:
            case 'SignOut':
                include "view_startpage_student.php";
                session_unset(); 
                session_destroy(); 
                exit();
            default:
                exit();
        }
    }

?>