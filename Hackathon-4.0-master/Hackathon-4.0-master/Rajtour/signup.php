<?php
include("conn.php");
$name = mysqli_real_escape_string($con, isset($_POST['name']) ? $_POST['name'] : '');
$mob = mysqli_real_escape_string($con, isset($_POST['mob']) ? $_POST['mob'] : '');
$country = mysqli_real_escape_string($con, isset($_POST['country']) ? $_POST['country'] : '');
$city = mysqli_real_escape_string($con, isset($_POST['city']) ? $_POST['city'] : '');
$pass = mysqli_real_escape_string($con, isset($_POST['pass']) ? $_POST['pass'] : '');



$cmd = "INSERT INTO signup(name,mob,country,city,pass) VALUES('$name', $mob, '$country', '$city', '$pass')";

if (!mysqli_query($con, $cmd)) {
	echo "<script> alert(\"Data is not inserted pleaet contact to your database administrator...\"); </script>";
}
else {
	header("refresh:0;url=login.php");
}

?>