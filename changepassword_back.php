<?php
include_once("config.php");
include_once ("system_session.php");
$username = $_SESSION['username'];  //username of current user

error_reporting(E_ALL); //reporting errors to front end
ini_set('display_errors', 1);
$password = $_POST['password'];     //password obtained
$password = md5($password);     //encryption

$newpassword = $_POST['newpassword'];
$newpassword = md5($newpassword);       //encryption
$conpassword = $_POST['conpassword'];
$conpassword = md5($conpassword);       //encryption

$erreturn_value="username=".$username;

$results=$mysqli->query("SELECT * from user where username ='".$username."'");      //getting details from user table
$obj=$results->fetch_object();
$pass=$obj->password;

if($password==$pass) {
    if ($newpassword==$conpassword){
        $query=$mysqli->query("Update user set password='$newpassword' WHERE username='$username'");
        if($query==true){
            echo '<meta http-equiv="refresh" content="0; URL=changepassword.php?success=saved">';   //pasword changed
        } else {
            echo '<meta http-equiv="refresh" content="0; URL=changepassword.php?databaseError;">';  //unable to save in database
        }
    } else {
        echo '<meta http-equiv="refresh" content="0; URL=changepassword.php?err=duplicate&'.$erreturn_value.'"">';  //new passwords mismatch
    }
}else
{
    echo '<meta http-equiv="refresh" content="0; URL=changepassword.php?err=passMissMatch&'.$erreturn_value.'"">';  //incorrect password
}
?>