<?php include("config.php") ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Sign Up</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
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
		<h2>Translysis-Sign Up</h2>

        <form  method = "post" action = "signup_back.php">
<?php if(isset($_GET['err']))
{
    if($_GET['err']=='passMissMatch')
    {
        echo "<p class='text-danger' style='text-align: center;'> Password does not match.</p>";
    }
    else if($_GET['err']=='indexNoLen')
    {
        echo "<p class='text-danger' style='text-align: center;'> Something wrong with your index number, Please Check!</p>";
    }
    else if($_GET['err']=='indexNotNo')
    {
        echo "<p class='text-danger' style='text-align: center;'> Something wrong with your index number, Please Check!</p>";
    }
    else if($_GET['err']=='duplicate')
    {
        echo "<p class='text-danger' style='text-align: center;'> You are already registered, Please Check!</p>";
    }
}

else if(isset($_GET['success']))
{
    if($_GET['success']=='saved')
    {
        echo "<p class='text-success' style='text-align: center;'> Thank you for the Registration. <a href='index.php' style='color:#FFFAF0'> Go to Login </a></p>";
    }
} ?>
			<div class="username">
				<span class="username">Name:</span>
				<input onkeyup="name()" id="name"  type="text" name="name" class="name" placeholder="" required="">
				<div class="clearfix"></div>
			</div>
			
			<div class="username">
				<span class="username">Username:</span>
				<input id="username" type="text" name="username" class="name" placeholder="" required="">
				<div class="clearfix"></div>
			</div>
			<div class="username">
				<span class="username">Email Address:</span>
				<input id="email"  type="email" name="email" class="name" placeholder="" required="">
				<div class="clearfix"></div>
			</div>

			<div class="password-agileits">
				<span class="username">Password:</span>
				<input onkeyup="password()" id="password" type="password"  name="password" class="name" placeholder="" required="">
				<div class="clearfix"></div>
			</div>
			<div class="password-agileits">
				<span class="username">Confirm Password:</span>
				<input onkeyup="password()" id="confirmpassword" type="password"  name="confirmPassword" class="name" placeholder="" required="">
				<div class="clearfix"></div>
			</div>
            <div class="password-agileits">
                <span class="username">Analytical Platform:</span>
                <select id="platform" placeholder= " Select Platform" name="platform" style = "min-width: 400px; padding-bottom: 10px; padding-top: 10px">
                    <option value="1">  Platform 1  </option>
                    <option value="2">  Platform 2  </option>
                    <option value="3">  Platform 3  </option>
                </select>
            <div class="clearfix"></div>

        </div>
            <div class="login-w3">
					<input type="submit" class="login" value="Sign Up" style="margin-top: 30px">
			</div>
			<div class="clearfix"></div>
		</form>
    </div>
		<div class="back">
						<a href="index.php"> Already Signed up??? Login </a>
				</div>
				<div class="footer">
					<p>&copy; 2018 VSolv . All Rights Reserved
				</div>
	</div>
	</div>
    </div>
</body>
</html>

<!--Validation code-->
//script for phone inputs
<script>
    function name() {
        var content = document.getElementById("firstname").value;
        var subcontent = content.substring(content.length - 1);
        var regex = /^[a-zA-Z]+$/;


        if (subcontent != ".") {
            if (!subcontent.match(regex)) {
                if (content.length > 0) {

                    alert("Must input Text in Customer Name");
                    content = content.substring(0, content.length - 1);
                    document.getElementById("name").value = content;
                }
            }
        }
    }
    function lastname() {
        var content=document.getElementById("lastname").value;
        var subcontent=content.substring(content.length-1);
        var regex=/^[a-zA-Z]+$/;



        if(subcontent!="."){
            if (!subcontent.match(regex)) {
                if (content.length>0) {

                    alert("Must input Text in Customer Name");
                    content = content.substring(0, content.length - 1);
                    document.getElementById("lastname").value = content;
                }
            }
        }
    }

    function password() {
        var pword = document.getElementById("password").value;
        var cpword = document.getElementById("confirmpassword").value;
        var ok = true;
        if (cpword.length == 0) {
            document.getElementById('message').innerHTML = '';

        }
        if (pword.length < cpword.length) {
            document.getElementById('message').style.color = 'red';
            document.getElementById('message').innerHTML = '!!!';
        }
        for (count = 0; count < cpword.length; count++) {
            if (pword[count] != cpword[count]) {
                document.getElementById('message').style.color = 'red';
                document.getElementById('message').innerHTML = '!!!';

            }
            else {
                document.getElementById('message').innerHTML = '';
            }
            if (cpword.length == 0) {
                document.getElementById('message').innerHTML = '';

            }
        }
        if (pword == cpword) {
            document.getElementById('message').style.size = '4';
            document.getElementById('message').style.color = 'green';
            document.getElementById('message').innerHTML = 'ok';
        }
    }
</script>