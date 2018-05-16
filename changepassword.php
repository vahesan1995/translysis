<?php
include_once("config.php");
include_once('system_session.php');
$userName = $_SESSION['username'];
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Change Password</title>
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
<div class="page-container">
    <!--/content-inner-->
    <div class="left-content">
        <div class="mother-grid-inner">
            <?php
            include_once("notificationbar.php");
            include_once("sidebar.php");
            ?>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="home.php">Home</a><i class="fa fa-angle-right"></i>Change Password</li>
            </ol>
            <!--grid-->
            <div class="validation-system">
                <div class="validation-form">
                    <!-- password change form-->
                    <form action="changepassword_back.php" method="post" name="form1">
                        <!--password comparision outputs-->
                        <?php if(isset($_GET['err']))
                        {
                            if($_GET['err']=='passMissMatch')
                            {
                                echo "<p class='text-danger' style='text-align: center;'> Current Password Incorrect.</p>";
                            }
                            else if($_GET['err']=='duplicate')
                            {
                                echo "<p class='text-danger' style='text-align: center;'> New Passwords Mismatch</p>";
                            }
                        }
                        else if(isset($_GET['success']))
                        {
                            if($_GET['success']=='saved')
                            {
                                echo "<p class='text-success' style='text-align: center;'>Password Changed</p>";
                            }
                        } ?>
                        <div class="clearfix"> </div>
                        <div class=" col-md-12 password-agileits form-group1">
                            <label class="control-label">Current Password</label><br>
                            <input onkeyup="password()" id="password" type="password"  name="password" placeholder="" required="">
                        </div>

                        <div class="clearfix"> </div>
                        <div class=" col-md-12 password-agileits form-group1">
                            <label class="control-label">New Password</label><br>
                            <input onkeyup="password()" id="newpassword" type="password"  name="newpassword" placeholder="" required="">
                        </div>

                        <div class="clearfix"> </div>
                        <div class=" col-md-12 password-agileits form-group1">
                            <label class="control-label">Confirm Password</label><br>
                            <input onkeyup="password()" id="conpassword" type="password"  name="conpassword" placeholder="" required="">
                        </div>

                        <div class="clearfix"> </div><br>
                        <div class="col-md-12 form-group">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="viewdetails.php"><button type="button" class="btn btn-default">Back</button></a>
                        </div>

                        <div class="clearfix"> </div>
                    </form>
                    <!---->
                </div>
            </div>
            <!--//grid-->
            <!-- script-for sticky-nav -->
            <script>
                $(document).ready(function() {
                    var navoffeset=$(".header-main").offset().top;
                    $(window).scroll(function(){
                        var scrollpos=$(window).scrollTop();
                        if(scrollpos >=navoffeset){
                            $(".header-main").addClass("fixed");
                        }else{
                            $(".header-main").removeClass("fixed");
                        }
                    });
                });
            </script>
            <!-- /script-for sticky-nav -->
            <!--copy rights start here-->
            <div class="copyrights">
                <p>© 2018 VSolv. All Rights Reserved </p>
            </div>
            <!--COPY rights end here-->
        </div>
    </div>
    <!--/sidebar-menu-->
    <div class="clearfix"></div>
</div>
<!--script for side bar contraction and expansion-->
<script>
    var toggle = true;

    $(".sidebar-icon").click(function() {
        if (toggle)
        {
            $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
            $("#menu span").css({"position":"absolute"});
        }
        else
        {
            $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
            setTimeout(function() {
                $("#menu span").css({"position":"relative"});
            }, 400);
        }
        toggle = !toggle;
    });
</script>
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<!-- /Bootstrap Core JavaScript -->
</body>
</html>