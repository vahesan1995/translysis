<?php
include_once("config.php");
include_once ("system_session.php");
$username = $_SESSION['username'];      //username of current user
$query=$mysqli->query("Update files set notification=0 WHERE username='$username'");    //changing notification flag

//redirect
echo "<script language='javascript'> window.location = 'viewFiles.php'</script>";