<?php
include "config.php";

$notiquery = "SELECT count(fileid) as count from files where notification=1";
$notiquery =mysqli_query($mysqli,$notiquery);
$result=mysqli_fetch_array($notiquery);
$count=$result['count'];
