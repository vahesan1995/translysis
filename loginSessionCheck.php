<?php
ob_start();
session_start();
if(isset($_SESSION['user_login_status']))
{
    if($_SESSION['user_login_status']=="alreadylogedin")
    {
        header("location:index.php");
    }
}
?>