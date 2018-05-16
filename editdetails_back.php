<?php
include_once("config.php");
include_once ("system_session.php");
$username = $_SESSION['username'];

error_reporting(E_ALL);     //reporting errors regarding inputs
ini_set('display_errors', 1);

$name = $_POST['name'];
$password = $_POST['password'];
$password = md5($password);     //encryption

$erreturn_value="username=".$username;

$results=$mysqli->query("SELECT * from user where username ='".$username."'");      //getting user details
$obj=$results->fetch_object();
$pass=$obj->password;
$named =$obj-> name;

if($password==$pass) {
    if ($name!=$named){     //name change
        $query=$mysqli->query("Update user set name='$name' WHERE username='$username'");
        if($query==true){
            echo '<meta http-equiv="refresh" content="0; URL=editdetails.php?success=saved">';      //name changed
        } else {
            echo '<meta http-equiv="refresh" content="0; URL=editdetails.php?databaseError;">';     //database error
        }
    } else {
        echo '<meta http-equiv="refresh" content="0; URL=editdetails.php?err=duplicate&'.$erreturn_value.'"">';     //no change
    }
}else
{
    echo '<meta http-equiv="refresh" content="0; URL=editdetails.php?err=passMissMatch&'.$erreturn_value.'"">';     //wrong password
}
?>