<?php
include_once("config.php");
include_once('system_session.php');
$userName = $_SESSION['username'];
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>View File Details</title>
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
    <!-- tables -->
    <link rel="stylesheet" type="text/css" href="css/table-style.css" />
    <link rel="stylesheet" type="text/css" href="css/basictable.css" />
    <script type="text/javascript" src="js/jquery.basictable.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#table').basictable();

            $('#table-breakpoint').basictable({
                breakpoint: 768
            });

            $('#table-swap-axis').basictable({
                swapAxis: true
            });

            $('#table-force-off').basictable({
                forceResponsive: false
            });

            $('#table-no-resize').basictable({
                noResize: true
            });

            $('#table-two-axis').basictable();

            $('#table-max-height').basictable({
                tableWrapper: true
            });
        });
    </script>
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
                <li class="breadcrumb-item"><a href="#">File Details</a><i class="fa fa-angle-right"></i></li>
            </ol>
            <div class="agile-grids">
                <!-- table-->
                <div class="agile-tables">
                    <div class="w3l-table-info">
                        <h2>Received File Details</h2>
                        <table id="table">
                            <thead>
                            <tr>
                                <th>Serial</th>
                                <th>File Name</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Size</th>
                                <th>Download</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $fileQuery = "SELECT * from files where username='$username' ORDER BY date DESC ";  //get file details
                            $fileQuery = $mysqli->query($fileQuery);
                            $count=0;
                            while($fileObj = $fileQuery->fetch_object()){
                                $filename = $fileObj->filename;
                                $date = $fileObj->date;
                                $size=$fileObj->size;
                                $link=$fileObj->link;
                                $count+=1;

                                $date = strtotime(str_replace(',', '', $date));
                                $day = date('F d Y',$date);
                                $time = date('h:i A',$date);
                                ?>
                                <tr>
                                    <td><?php echo $count ?></td>
                                    <td ><?php echo $filename ?></td>
                                    <td ><?php echo $day?></td>
                                    <td><?php echo $time?></td>
                                    <td ><?php echo $size?></td>
                                    <td><div class="row">
                                            <!--download file-->
                                            <div class="col-sm-8 col-sm-offset-1">
                                                <a href = <?php echo $link?>><button class="btn-primary btn" id="download">Download <i class="fa fa-download" style="color: #FFFFFF"></i></button> </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
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
                <!--inner block start here-->
                <div class="inner-block">

                </div>
                <!--inner block end here-->
                <!--copy rights start here-->
                <div class="copyrights">
                    <p>© 2018 VSolv. All Rights Reserved</p>
                </div>
                <!--COPY rights end here-->
            </div>
        </div>
        <!--//content-inner-->
        <!--/sidebar-menu-->

        <div class="clearfix"></div>
    </div>
    <!--js -->
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
    <script src="js/jquery.nicescroll.js"></script>
    <script src="js/scripts.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- /Bootstrap Core JavaScript -->
</body>
</html>