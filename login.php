<?php 
include_once("config.php");
session_start();        //start session
$_SESSION['user_login_status'] = "alreadylogedin";
$username = $_POST['username'];     //get username
$password=$_POST['password'];       //get password
$password = md5($password);         //encryption

$statement = $mysqli->prepare("SELECT * from user where username =? and password =?");    //user details
$statement->bind_param('ss',$username,$password);
$statement->execute();
$results=$statement->get_result();
$num_rows = mysqli_num_rows($results);
if ($num_rows==1) {
    $obj = $results->fetch_object();
           
    $_SESSION['user_login_status'] = "alreadylogedin";
    $_SESSION['sessionStartTime'] = time();
    $_SESSION['username'] = $obj->username;

    //redirect to home
    print('<script> window.location="home.php"; </script> ');
}else {
    if(isset($_SESSION['user_login_status'])) {
        unset($_SESSION['user_login_status']);
        unset($_SESSION['user_login_id']);
        unset($_SESSION['indexNo']);
    }
    mysqli_close($mysqli);      //close database connection
    $error_msg=md5("wrongUsernamePassword");
    redirect("index.php?error=".$error_msg);
}

function redirect($url){
    if (headers_sent()){
        die('<script type="text/javascript">window.location.href=' . $url . '</script>');
    }else{
        header('Location: ' . $url);
        die();
    }
}
?>