<?php
//$page = $_GET['page'];
$stdno = $_GET['id'];

include('connect.php');
$sql = "DELETE FROM user_tb WHERE user_id='$stdno'";

if ($conn->query($sql) === TRUE) {
    header("location:view-user.php");
} else {
    header("location:view-user.php");
}

$conn->close();

?>