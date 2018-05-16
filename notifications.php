<?php
include_once ("config.php");
include_once('system_session.php');
$username = $_SESSION['username'];  //get the username of the user

$notiquery = "SELECT count(fileid) as count from files where notification=1 and username='$username'"; //count=num of new files
$notiquery =mysqli_query($mysqli,$notiquery);
$result=mysqli_fetch_array($notiquery);
$count=$result['count'];    //new files count
