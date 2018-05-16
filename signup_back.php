<?php
include_once("config.php");
error_reporting(E_ALL);
ini_set('display_errors', 1);
//get inputs
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $platform = $_POST['platform'];
    $erreturn_value="username=".$username;

    if($password==$confirmPassword) //check passwords
    {
        $password = md5($password);
        $results=$mysqli->query("SELECT count(username) as count from user where username ='".$username."'");
        $obj = $results->fetch_object();
        if ($obj->count == 0){
            $results=$mysqli->query("INSERT INTO user (`username`,`name`,`email`,`password`,`platform`) VALUES('$username','$name','$email','$password','$platform')");
            if($results){
                echo '<meta http-equiv="refresh" content="0; URL=signup.php?success=saved">';
            } else {
                echo '<meta http-equiv="refresh" content="0; URL=signup.php?databaseError;">';
            }
        } else {
            echo '<meta http-equiv="refresh" content="0; URL=signup.php?err=duplicate&'.$erreturn_value.'"">';
        }
    }else
    {
        echo '<meta http-equiv="refresh" content="0; URL=signup.php?err=passMissMatch&'.$erreturn_value.'"">';
    }
?>