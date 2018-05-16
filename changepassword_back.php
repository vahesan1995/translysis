<?php
include_once("config.php");
include_once ("system_session.php");
$username = $_SESSION['username'];

error_reporting(E_ALL);
ini_set('display_errors', 1);

$password = $_POST['password'];
$password = md5($password);

$newpassword = $_POST['newpassword'];
$newpassword = md5($newpassword);
$conpassword = $_POST['conpassword'];
$conpassword = md5($conpassword);

$erreturn_value="username=".$username;

$results=$mysqli->query("SELECT * from user where username ='".$username."'");
$obj=$results->fetch_object();
$pass=$obj->password;
$named =$obj-> name;

if($password==$pass) {
    if ($newpassword==$conpassword){
        $query=$mysqli->query("Update user set password='$newpassword' WHERE username='$username'");
        if($query==true){
            echo '<meta http-equiv="refresh" content="0; URL=changepassword.php?success=saved">';
        } else {
            echo '<meta http-equiv="refresh" content="0; URL=changepassword.php?databaseError;">';
        }
    } else {
        echo '<meta http-equiv="refresh" content="0; URL=changepassword.php?err=duplicate&'.$erreturn_value.'"">';
    }
}else
{
    echo '<meta http-equiv="refresh" content="0; URL=changepassword.php?err=passMissMatch&'.$erreturn_value.'"">';
}
?>