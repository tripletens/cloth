<?php include('connect.php'); ?>
<?php include('session.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
    <title>Crime Record System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">

    <!-- The styles -->
    <link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="css/charisma-app.css" rel="stylesheet">
    <link href='bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='css/jquery.noty.css' rel='stylesheet'>
    <link href='css/noty_theme_default.css' rel='stylesheet'>
    <link href='css/elfinder.min.css' rel='stylesheet'>
    <link href='css/elfinder.theme.css' rel='stylesheet'>
    <link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='css/uploadify.css' rel='stylesheet'>
    <link href='css/animate.min.css' rel='stylesheet'>

    <!-- jQuery -->
    <script src="bower_components/jquery/jquery.min.js"></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="img/favicon.ico">

</head>

<body>
    <!-- topbar starts -->
    <div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"> <img alt="Charisma Logo" src="img/logo20.png" class="hidden-xs"/>
                <span>Crime Record</span></a>

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"> Welcome <?php echo $session_name;?></span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <!--<li><a href="#">Profile</a></li>
                    <li class="divider"></li>-->
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->

            <!-- theme selector starts -->
            <div class="btn-group pull-right theme-container animated tada">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-tint"></i><span
                        class="hidden-sm hidden-xs"> Change Theme / Skin</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" id="themes">
                    <li><a data-value="classic" href="#"><i class="whitespace"></i> Classic</a></li>
                    
                    <li><a data-value="cyborg" href="#"><i class="whitespace"></i> Cyborg</a></li>
                    <!-- <li><a data-value="simplex" href="#"><i class="whitespace"></i> Simplex</a></li>
                    <li><a data-value="cerulean" href="#"><i class="whitespace"></i> Cerulean</a></li>
                    <li><a data-value="darkly" href="#"><i class="whitespace"></i> Darkly</a></li>
                    <li><a data-value="lumen" href="#"><i class="whitespace"></i> Lumen</a></li>
                    <li><a data-value="slate" href="#"><i class="whitespace"></i> Slate</a></li>
                    <li><a data-value="spacelab" href="#"><i class="whitespace"></i> Spacelab</a></li>
                    <li><a data-value="united" href="#"><i class="whitespace"></i> United</a></li>-->
                </ul>
            </div>
            <!-- theme selector ends -->

           

        </div>
    </div>
    <!-- topbar ends -->
<div class="ch-container">
    <div class="row">
        
 <?php include('side_bar.php');?>


       

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
                <div>
        <ul class="breadcrumb">
            <li>
                <a href="#">Home</a>
            </li>
            <li>
                <a href="#">View Crime</a>
            </li>
        </ul>
    </div>

    <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-user"></i> View Crime Records</h2>

        <div class="box-icon">
            <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </div>
   <div class="row">
        <div class="col-md-6">
             <div class="box-content">
    <div class="alert alert-info">Recorded Convict</div>
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
     <?php
            $get_id=$_GET['id'];
            $query = mysqli_query($conn,"select * from crime_tb WHERE cirme_id='$get_id'") or die(mysqli_error());
             while ($row = mysqli_fetch_array($query)) {
                $userid=$row['cirme_id'];
               
                                       
        ?>  
    <tr>
        <th>Passport</th>
        <td class="center"><img src="uploads/<?php echo $row['Picture']; ?>" width="60" hieght="60"></td>
    </tr>
    <tr>
        <th>Crime ID</th>
         <td class="center"><?php echo $row['cirme_id']; ?></td>
    </tr>
    <tr>
        <th>Suspect Fullname</th>
        <td class="center"><?php echo $row['name']; ?></td>
    </tr>
    <tr>
        <th>Age</th>
        <td class="center"><?php echo $row['age']; ?></td>
    <tr>
        <th>Sex</th>
        <td class="center"><?php echo $row['sex']; ?></td>
    </tr>
    <tr>
        <th>Marital Status</th>
        <td class="center"><?php echo $row['marital_status']; ?></td>
    </tr>
    <tr>
        <th>Address</th> 
        <td class="center"><?php echo $row['address']; ?></td>
    </tr>
    <tr>
        <th>State of Origin</th>
        <td class="center"><?php echo $row['state_origin']; ?></td>
    </tr>
    <tr>
        <th>Crime Commited</th>
        <td class="center"><?php echo $row['crime']; ?></td>
    </tr>
    <tr>
        <th>Complainant</th>
         <td class="center"><?php echo $row['complainant']; ?></td>
    </tr>
    <tr>
        <th>Complainant Address</th>
        <td class="center"><?php echo $row['complainant_address']; ?></td>
    </tr>
    <tr>
        <th>Complainant Phone</th>
        <td class="center"><?php echo $row['complainant_phone']; ?></td>
    </tr>
    <tr>
        <th>Type of Case</th>
        <td class="center"><?php echo $row['type_case']; ?></td>
    </tr>
    <tr>
        <th>Complainant Statement</th>
        <td class="center"><?php echo $row['complainant_statement']; ?></td>
    </tr>
    <tr>
        <th>Date Added</th>
        <td class="center"><?php echo $row['date_added']; ?></td>
    </tr>
 
     <?php } ?>
    </table>
    </div>
    </div>
        </div>
       
   </div>
    </div>
    <!--/span-->

    </div><!--/row-->

  

    

    <hr>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3>Settings</h3>
                </div>
                <div class="modal-body">
                    <p>Here settings can be configured...</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                    <a href="#" class="btn btn-primary" data-dismiss="modal">Save changes</a>
                </div>
            </div>
        </div>
    </div>

    <footer class="row">
        <p class="col-md-9 col-sm-9 col-xs-12 copyright">&copy; <a href="#" target="_blank">Copyright</a> 2018 | All Right Reserved</p>
    </footer>


</div><!--/.fluid-container-->

<!-- external javascript -->

<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- library for cookie management -->
<script src="js/jquery.cookie.js"></script>
<!-- calender plugin -->
<script src='bower_components/moment/min/moment.min.js'></script>
<script src='bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
<!-- data table plugin -->
<script src='js/jquery.dataTables.min.js'></script>

<!-- select or dropdown enhancer -->
<script src="bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="bower_components/colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="bower_components/responsive-tables/responsive-tables.js"></script>
<!-- tour plugin -->
<script src="bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
<!-- star rating plugin -->
<script src="js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="js/charisma.js"></script>


</body>
</html>
