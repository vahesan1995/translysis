<?php
    include_once('system_session.php');
    include_once('config.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<!--Sidebar contents starts here-->
<div class="sidebar-menu">
    <header class="logo1">
        <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a>
    </header>
    <div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
    <div class="menu">
        <ul id="menu" >
            <li><a href="home.php" id="home"><i class="fa fa-home"></i> <span>HOME</span><div class="clearfix"></div></a></li>
            <li ><a href="viewdetails.php" id="viewdetails"><i class="fa fa-file-text-o" aria-hidden="true"></i><span> VIEW DETAILS</span><div class="clearfix"></div></a></li>
            <li ><a href="editdetails.php" id="editdetails"><i class="fa fa-edit" aria-hidden="true"></i><span> CHANGE DETAILS</span><div class="clearfix"></div></a></li>
            <li ><a href="viewFiles.php" id="viewfiles"><i class="fa fa-file-pdf-o" aria-hidden="true"></i><span> VIEW RESULTS </span> <div class="clearfix"></div></a></li>
            <li ><a href="changepassword.php" id="changepassword"><i class="fa fa-key" aria-hidden="true"></i><span> CHANGE PASSWORD </span> <div class="clearfix"></div></a></li>
            <li ><a href="logout.php" id="logout"><i class="fa fa-sign-out" aria-hidden="true"></i><span> LOGOUT</span> <div class="clearfix"></div></a></li>
        </ul>
    </div>
</div>
</body>
</html>