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

$statement=$mysqli->prepare("SELECT * from user where username =?");      //getting user details
$statement->bind_param('s',$username);
$statement->execute();
$results=$statement->get_result();
$obj=$results->fetch_object();
$pass=$obj->password;
$named =$obj-> name;

if($password==$pass) {
    if ($name!=$named){     //name change
        $statement1=$mysqli->prepare("Update user set name=? WHERE username='$username'");
        $statement1->bind_param('s',$name);
        if($statement1->execute()){
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