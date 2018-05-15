<?php
include_once('config.php');
include_once('system_session.php');
$username = $_SESSION['username'];
include "notifications.php";
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript">addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <script src="js/w3.js"></script>
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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/w3.js"></script>

    <div class="header-main" style=" width: 1200px">
        <div class="col-md-8" style="background-color: #A9A9A9; align-content: center">
            <h1><a href="home.php" style="color: #ffffff; align-content: center"><b>"TRANSLYSIS"</b> - Webhook Platform</a></h1>
        </div>

        <div class="col-md-1" style="background-color: #6699CC">
            <div class="profile_details_left"><!--notifications of menu start -->
                <ul class="nofitications-dropdown">
                    <li class="dropdown head-dpdn">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="badge"><?php echo $count; ?></span><i class="fa fa-newspaper-o"></i></a>
                        <!--This span is for number of notification-->
                        <ul class="dropdown-menu">
                            <li>
                                <div class="notification_header">
                                    <h3>You have <?php echo $count; ?> new files</h3>
                                </div>
                            </li>
                            <div>
                                <li class="odd"><a href="hidenotification.php">
                                        <div class="user_img"><img src="images/openfile.png" alt=""></div>
                                        <div class="notification_desc">
                                            <h5>View the received files</h5>
                                        </div>
                                        <div class="clearfix"></div></a>
                                </li>
                            </div>
                            <div class="notification_bottom">
                                <a href="#">End of notifications</a>
                            </div>
                            </li>
                        </ul>
                    </li>
                    <div class="clearfix"> </div>
                </ul>
                <div class="clearfix"> </div>
            </div>
            <!--notification menu end -->

            <div class="clearfix"> </div>
        </div>
        <div class="profile_details w3" style="background-color: #666699; width: 220px">
            <ul>
                <li class="dropdown profile_details_drop">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <div class="profile_img">
                            <span class="prfil-img"><img src="images/in4.jpg" alt=""> </span>
                            <div class="user-name">
                                <p><?php echo $username; ?></p>
                            </div>
                            <i class="fa fa-angle-down"></i>
                            <i class="fa fa-angle-up"></i>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                    <ul class="dropdown-menu drp-mnu">
                        <li> <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="clearfix"> </div>
    </div>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.js"></script>
    <script src="js/w3.js"></script>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/simplegrid.css"/>
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
</head>
</html>