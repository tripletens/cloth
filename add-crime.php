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
                    <li><a href="login.php">Logout</a></li>
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
            <a href="#">New Crime</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Crime Registration Form</h2>

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
                            <div>
                                <span style="color:red;">Maximun Image Size 100KB</span><br/><br/>
                                <input type="file" name="myfile" class="form-control"  required/>
                            </div> 
                            <br/>
                            <div class="form-group">
                                <label for="sname">Suspect Name</label>
                                <input type="text" class="form-control" id="sname" name="sname" placeholder="Suspect Name" required>
                            </div>
                            <div class="form-group">
                                <label for="sex">Gender</label>
                                <select class="form-control" name="sex">
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="address" name="address" placeholder="Address" required>
                            </div>
                            <div class="form-group">
                                <label for="address">Age</label>
                                <input type="number" class="form-control" id="age" name="age">
                            </div>
                            <div class="form-group">
                                <label for="mStatus">Marital Status</label>
                                <select class="form-control" name="mStatus">
                                    <option>Married</option>
                                    <option>Single</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="mState">State of Origin</label>
                                <select class="form-control" name="mState">
                                    <option>ABUJA FCT</option>
                                    <option>ABIA</option>
                                    <option>ADAMAWA</option>
                                    <option>AKWA IBOM</option>
                                    <option>ANAMBRA</option>
                                    <option>BAUCHI</option>
                                    <option>BAYELSA</option>
                                    <option>BENUE</option>
                                    <option>BORNO</option>
                                    <option>CROSS RIVER</option>
                                    <option>DELTA</option>
                                    <option>EBONYI</option>
                                    <option>EDO</option>
                                    <option>EKITI</option>
                                    <option>ENUGU</option>
                                    <option>GOMBE</option>
                                    <option>IMO</option>
                                    <option>JIGAWA</option>
                                    <option>KADUNA</option>
                                    <option>KANO</option>
                                    <option>KATSINA</option>
                                    <option>KEBBI</option>
                                    <option>KOGI</option>
                                    <option>KWARA</option>
                                    <option>LAGOS</option>
                                    <option>NASSARAWA</option>
                                    <option>NIGER</option>
                                    <option>OGUN</option>
                                    <option>ONDO</option>
                                    <option>OSUN</option>
                                    <option>OYO</option>
                                    <option>PLATEAU</option>
                                    <option>RIVERS</option>
                                    <option>SOKOTO</option>
                                    <option>TARABA</option>
                                    <option>YOBE</option>
                                    <option>ZAMFARA</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="crimeC">Crime Committed</label>
                                <textarea class="form-control" id="crimeC" name="crimeC"></textarea>
                                
                            </div>
                            <div class="form-group">
                                <label for="cname">Complainant Name</label>
                                <input type="text" class="form-control" id="cname" name="cname" placeholder="Complainant Name" required>
                            </div>
                            <div class="form-group">
                                <label for="cAddess">Complainant Address</label>
                                <textarea class="form-control" id="cAddess" name="cAddess"></textarea>                     
                            </div>
                            <div class="form-group">
                                <label for="cPhone">Complainant Phone</label>
                                <input type="text" class="form-control" id="cPhone" name="cPhone" placeholder="Complainant Phone" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="cname">Case Type</label>
                                <input type="text" class="form-control" id="caseType" name="caseType" placeholder="Complainant Name" required>
                            </div>
                            <div class="form-group">
                                <label for="cStatement">Complainant Statemet</label>
                                <textarea class="form-control" id="cStatement" name="cStatement"></textarea>
                                
                            </div>
                        </div>
                    </div>

                    
                     
                    <button type="submit" name="save" class="btn btn-primary">Add Crime</button>
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
                    $sname=$_POST['sname'];
                    $sex=$_POST['sex'];
                    $address=$_POST['address'];
                    $age=$_POST['age'];
                    $mStatus=$_POST['mStatus'];
                    $mState=$_POST['mState'];
                    $crimeC=$_POST['crimeC'];
                    $cname=$_POST['cname'];
                    $cAddess=$_POST['cAddess'];
                    $cPhone=$_POST['cPhone'];
                    $caseType=$_POST['caseType'];
                    $cStatement=$_POST['cStatement'];
                    
                    $userid=rand('100','999').'-'.rand('1000','9999');
                    $sql="INSERT INTO crime_tb (cirme_id,name,sex,address,age,marital_status,state_origin,crime,complainant_address,complainant,complainant_phone,type_case,complainant_statement,date_added,byWho,Picture) 
                    VALUES ('$userid','$sname','$sex','$address','$age','$mStatus','$mState','$cname','$crimeC','$cAddess','$cPhone','$caseType','$cStatement',now(),'$session_name','$url')";
                     $result2=mysqli_query($conn,$sql);
                    if($result2){
                                         mysqli_query($conn,"Insert into logs_tb(user_id,ip,command,description,date_accessed) VALUES('$session_id','$session_ip','Registration','Add a new Crime',now())") or die(mysqli_error($conn));

                                        echo '<script>alert("Crime Added Successfully")</script>';
                                        $URL="add-crime.php";
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

