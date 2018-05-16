<!DOCTYPE HTML>
<html>
<head>
<title>Translysis</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="css/jquery-ui.css"> 
<!-- jQuery -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
</head> 
<body>
	<div class="main-wthree">
	<div class="container">
	<div class="sin-w3-agile">
		<h2>Sign In</h2>
        <!--login form-->
		<form action="login.php" method="post">
            <?php
            //error display
            if(isset($_GET['error']))
            {
                $userId="has-error";
                $arrived_msg=$_GET['error'];
            }
            else
            {
                $userId="";
                $arrived_msg=""; }

            if($userId!='') {
                if($arrived_msg==md5("wrongUsernamePassword"))
                { ?>
                    <label style="width:100%; margin: 0 auto;text-align:center; position: relative;  float: none;"> <p>Username or Password is incorrect</p></label>
                    <?php
                }
                elseif($arrived_msg==md5("waitForActivation"))
                {
                    ?>
                    <label class="control-label" for="inputError" style="width:100%; margin: 0 auto;text-align:center; position: relative;  float: none;"><p>Please.. Wait for the activation </p></label>
                    <?php
                }
                else
                {
                    ?>
                    <label class="control-label" for="inputError" style="width:100%; margin: 0 auto;text-align:center; position: relative;  float: none;"><p>Could not Login to Account! </p></label>
                    <?php
                }}
            ?>

			<div class="username">
				<span class="username">Username:</span>
				<input id = "username" type="text" name="username" class="name" placeholder="" required="">
				<div class="clearfix"></div>
			</div>

			<div class="password-agileits">
				<span class="username">Password:</span>
				<input id = "password" type="password" name="password" class="password" placeholder="" required="">
				<div class="clearfix"></div>
			</div>

            <div class="login-w3">
					<input type="submit" class="login" value="Sign In">
			</div>
			<div class="clearfix"></div>
		</form>
				<div class="back">
					<a href="signup.php">Don't have an Account? Signup</a>
				</div>
				<div class="footer">
					<p>&copy; 2018 VSolv. All Rights Reserved
				</div>
	</div>
	</div>
	</div>
</body>
</html>
