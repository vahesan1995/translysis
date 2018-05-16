<?php
ob_start();
session_start();
if(isset($_SESSION['user_login_status']))
{
    if($_SESSION['user_login_status']=="alreadylogedin")        //check whether user is already signed in
    {
        header("location:index.php");       //redirect to home
    }
}
?>