<?php
//mysql_select_db('SchoolPortal',  mysql_connect('localhost','root',''))or die(mysql_error());
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "police";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
