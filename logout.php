<?php
ob_start();
session_start();
if(isset($_SESSION['user_login_status']))
{
    //unset all the session details
    unset($_SESSION['user_login_status']);
    unset($_SESSION['userId']);
    unset($_SESSION['position']);
    unset($_SESSION['username']);
    //session_destroy();
    header("Location: index.php");  //redirect to login page
}
else
{
    header("Location:index.php");
}

ob_end_flush();
?>