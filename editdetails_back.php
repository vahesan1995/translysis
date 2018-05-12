<?php
include_once("config.php");
include_once ("system_session.php");
$username = $_SESSION['username'];

error_reporting(E_ALL);
ini_set('display_errors', 1);

$name = $_POST['name'];
$password = $_POST['password'];
$password = md5($password);

$erreturn_value="username=".$username;

$results=$mysqli->query("SELECT * from user where username ='".$username."'");
$obj=$results->fetch_object();
$pass=$obj->password;
$named =$obj-> name;

if($password==$pass) {
    if ($name!=$named){
        $query=$mysqli->query("Update user set name='$name' WHERE username='$username'");
        if($query==true){
            echo '<meta http-equiv="refresh" content="0; URL=editdetails.php?success=saved">';
        } else {
            echo '<meta http-equiv="refresh" content="0; URL=editdetails.php?databaseError;">';
        }
    } else {
        echo '<meta http-equiv="refresh" content="0; URL=editdetails.php?err=duplicate&'.$erreturn_value.'"">';
    }
}else
{
    echo '<meta http-equiv="refresh" content="0; URL=editdetails.php?err=passMissMatch&'.$erreturn_value.'"">';
}
?>