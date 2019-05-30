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
                <span>Crime Records</span></a>

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
            <a href="#">New Member</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-6">
        <img src="img/police.jpg" width="670">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">

                <h2><i class="glyphicon glyphicon-edit"></i> Member Registration Form</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <form role="form" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="m_id">MemberID</label>
                                <input type="text" class="form-control" id="m_id" name="m_id" value="<?Php echo 'MID-'.rand(10000,99999);?>" required>
                            </div>
                            <div class="form-group">
                                <label for="ip_address">IP Address</label>
                                <input type="text" class="form-control" id="ip_address" name="ip_address" placeholder="192.68.0.1" value="192.68.0.1" required>
                            </div>
                            <div class="form-group">
                                <label for="fname">Fullname</label>
                                <input type="text" class="form-control" id="fname" name="fname" placeholder="Fullname" required>
                            </div>
                            <div class="form-group">
                                <label for="address">address</label>
                                <textarea class="form-control" id="address" name="address"></textarea>
                             
                            </div>
                            <div class="form-group">
                                <label for="sex">Sex</label>
                                <select class="form-control" id="sex" name="sex">
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                                
                            </div>
                            <div class="form-group">
                                <label for="dob">Date of Birth</label>
                                <input type="date" class="form-control" id="dob" name="dob"">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email"">
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="dob">Phone No</label>
                                <input type="text" class="form-control" id="phone" name="phone"">
                            </div>
                           <div class="form-group">
                                <label for="m_status">Marital Status</label>
                                
                                <select class="form-control" id="m_status" name="m_status">
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="rank">Rank</label>
                                <select class="form-control" id="rank" name="rank">
                                    <option value="IG">IG</option>
                                    <option value="AIG">AIG</option>
                                    <option value="ISP">ISP</option>
                                    <option value="DPO">DPO</option>
                                    <option value="Inspector">Inspector</option>
                                    <option value="Sergent">Sergent</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="qualification">Qualification</label>
                                <select class="form-control" id="qualification" name="qualification">
                                    <option value="OLevel">OLevel</option>
                                    <option value="Bsc">Bsc</option>
                                    <option value="Msc">Msc</option>
                                    <option value="Phd">Phd</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="dept">Department</label>
                                <select class="form-control" id="dept" name="dept">
                                    <option value="Admin">Admin</option>
                                    <option value="ICT">ICT</option>
                                    <option value="Presecution">Presecution</option>
                                    <option value="Record Unit">Record Unit</option>
                                    <option value="Accounting Unit">Accounting Unit</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="password" required>
                            </div>
                            <div>
                                <span style="color:red;">Maximun Image Size 100KB</span><br/><br/>
                                <input type="file" name="myfile" class="form-control"  required/>
                            </div> 
                        </div>
                        
                    </div>
                    
                   
                    
                    <button type="submit" name="save" class="btn btn-default">Submit</button>
           <?php
    include('connect.php');
    $output_dir = "uploads/";
    $allowedExts = array("jpg", "jpeg", "gif", "png","JPG");
    $extension = @end(explode(".", $_FILES["myfile"]["name"]));
        if(isset($_POST['save']))
        {
            //Filter the file types , if you want.
            if ((($_FILES["myfile"]["type"] == "image/gif")
                || ($_FILES["myfile"]["type"] == "image/jpeg")
                || ($_FILES["myfile"]["type"] == "image/JPG")
                || ($_FILES["myfile"]["type"] == "image/png")
                || ($_FILES["myfile"]["type"] == "image/pjpeg"))
                && ($_FILES["myfile"]["size"] < 504800)
                && in_array($extension, $allowedExts)) 
            {
                  if ($_FILES["myfile"]["error"] > 0)
                    {
                    echo "Return Code: " . $_FILES["myfile"]["error"] . "<br>";
                    }
                if (file_exists($output_dir. $_FILES["myfile"]["name"]))
                  {
                  unlink($output_dir. $_FILES["myfile"]["name"]);
                  } 
                    else
                    {
                    $pic=$_FILES["myfile"]["name"];
                    $conv=explode(".",$pic);
                    $ext=$conv['1'];    
                    $rand="p_".rand(1000,1999);   
                    //move the uploaded file to uploads folder;
                    move_uploaded_file($_FILES["myfile"]["tmp_name"],$output_dir.$rand.".".$ext);
                    $pics=$output_dir.$rand.".".$ext;
                    $url=$rand.".".$ext;
                    $m_id=$_POST['m_id'];
                    $ip_address=$_POST['ip_address'];
                    $fname=$_POST['fname'];
                    $sex=$_POST['sex'];
                    $dob=$_POST['dob'];
                    $m_status=$_POST['m_status'];
                    $phone=$_POST['phone'];
                    $email=$_POST['email'];
                    $rank=$_POST['rank'];
                    $qualification=$_POST['qualification'];
                    $dept=$_POST['dept'];
                    $username=$_POST['username'];
                    $password=$_POST['password'];

                    $sql="INSERT INTO user_tb (user_id,ip,fullname,gender,dob,marital_status,phone,email,rank,qualification,dept,username,password,Picture) 
                    VALUES ('$m_id', '$ip_address','$fname', '$sex','$dob', '$m_status','$phone', '$email','$rank', '$qualification','$dept', '$username','$password','$url')";
                     $result2=mysqli_query($conn,$sql);
                    if($result2){
                                        
                                        mysqli_query($conn,"Insert into logs_tb(user_id,ip,command,description,date_accessed) VALUES('$session_id','$session_ip','Registration','Add a new User',now())") or die(mysqli_error($conn));
                                        echo '<script>alert("Member Added Successfully")</script>';
                                        $URL="add-user.php";
                                        echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
                                        echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
                    }else{
                    //echo '<p class="alert alert-danger">Input_Error: Failed to update this account</p>';
                      echo die(mysqli_error($conn));          
                    }
                                    
                    
                    
                    }
                    
            }   
            else{
            
                echo  '<b>Warning !</b>  File not Uploaded, Check image' ;
                }
       }  
         mysqli_close($conn);     
 ?>
                </form>

            </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->

    <!-- content ends -->
    </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->



    <hr>

    

    <footer class="row">
      <p class="col-md-9 col-sm-9 col-xs-12 copyright">&copy; <a href="#" target="_blank">Copyright</a> 2018 | All right Reserved</p>
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

