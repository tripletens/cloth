<?php 
    session_start();
    session_regenerate_id();
?>
<?php 
function get_client_ip_server() {
    $ipaddress = '';
    if ($_SERVER['HTTP_CLIENT_IP'])
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    
    else if($_SERVER['REMOTE_ADDR'])
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
 
    return $ipaddress;
}


 ?>
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
<div class="ch-container" style="background: black;">
    <div class="row">
        <center><img src="img/admin.jpg" width="670"></center>
    <div class="row">
        <div class="col-md-12 center login-header">
            <h2>User's Login Page</h2>
            <button class="btn btn-default"><a href="admin">Login Admin</a></button>
        </div>
        <!--/span-->
    </div><!--/row-->

    <div class="row">
        <div class="well col-md-5 center login-box">
            <div class="alert alert-info">
                Please login with your Username and Pass Code From the system Admin.
            </div>
            <form class="form-horizontal" action="" method="post">
                <fieldset>
                     <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                        <input type="text" class="form-control" name="username" placeholder="Enter Username">
                    </div>
                    <div class="clearfix"></div><br>

                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>
                        <input type="password" class="form-control" name="password" placeholder="Enter Password">
                    </div>
                    
                    <div class="clearfix"></div><br>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>
                        <input type="text" class="form-control" name="ip_add" value="<?php echo '192.68.0.1'; ?>" >
                    </div>
                    <div class="clearfix"></div><br>
                    

                    <p class="center col-md-5">
                        <button type="submit" name="login" class="btn btn-primary">Login</button>
                    </p>
                </fieldset>
                <?php 
 if(isset($_POST['login'])){
include('connect.php');
    $username=$_POST['username'];
    $password=$_POST['password'];
    $ip_add=$_POST['ip_add'];
      $query="select * from user_tb where username='$username' AND password='$password'" or die(mysqli_error());
$result = mysqli_query($conn,$query);
      $count = mysqli_num_rows($result);
                        $row = mysqli_fetch_array($result);
      if ($count > 0) {
                            $ids=$row['user_id'];
                           // $ips=$row['ip'];
                            $_SESSION['id'] = $row['user_id'];
                            $_SESSION['ip_add'] = $row['ip'];
                            $_SESSION['name'] = $row['fullname'];
                           // header('location:login_home.php');
                            mysqli_query($conn,"Insert into logs_tb(user_id,ip,command,description,date_accessed) VALUES('$ids','$ip_add','Login','Login as User',now())") or die(mysqli_error($conn));
                $URL="dashboard.php";
              echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
              echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
                           session_write_close();
                           exit();
                        } else {
                            session_write_close();
                           echo '<p class="alert alert-danger">Access Denied. An error occured while trying to login</p>';
               //echo die(mysql_error()); 
                            exit();
                        }
                    
 

  }
  
?>
            </form> 
        </div>
        <!--/span-->
    </div><!--/row-->
</div><!--/fluid-row-->

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
