<?php
    error_reporting(0); //https://support.hostinger.com/en/articles/1583189-how-to-hide-errors-and-warnings-on-your-website
    session_start();
    require "model.php";
// Case 1:
    if (empty($_POST['page'])) {
        include("sign_in_page_view.php");
        exit();   
    } 
    
    if ($_POST['page'] == 'SignInPage') {
        $command = $_POST['command'];  // In view_startpage.php, an input in a form, of which type is 'hidden' and name is 'command'.
        switch($command) {
//Case 2:
            case 'SignIn':
                //https://www.tutorialspoint.com/php/php_null_coalescing_operator.htm
                //Uses Null Coalescing Operator To safely pass values
                // $result = checkCredentials($_POST['username'] ?? '', $_POST['password'] ?? '');
                if ($result) {
                    // include "view_mainpage_student.php";
                    exit();
                } else {
                    //Show SignIn Page and include errors
                    //
                    //           
                    include "sign_in_page_view.php";
                    session_unset();
                    exit();
                }
                exit();
            case 'SignUp':
                //New User Made
                exit();
            default:
                exit();
        }
    }

?>