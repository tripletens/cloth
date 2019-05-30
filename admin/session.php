<?php
//Start session
//ini_set(varname, newvalue)
session_start();
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['id']) || (trim($_SESSION['id']) == '')) {
	 header("location:index.php");
    exit();
}
$session_id=$_SESSION['id'];
$session_ip=$_SESSION['ip_add'];
$session_name=$_SESSION['name'];
?>
