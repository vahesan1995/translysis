<?php
ob_start();
if(session_id() == '') {
    session_start();    //start session
}
 
if(isset($_SESSION['user_login_status'])){
	if($_SESSION['user_login_status']!='alreadylogedin'){   //not logged in
		header("location:http://localhost/translysis/index.php?msg=Please Login First");
	}
}
else {  //logged in
    print('<script> window.location="index.php?msg=Please Login First"; </script> ');
}

ob_end_flush();
?>