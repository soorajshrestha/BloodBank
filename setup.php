<?php
$conn = mysqli_connect("localhost","root","") or die("could not connect to the database");
$db_check = mysqli_select_db($conn, "bbms");


if(!$db_check)
{
	// if database not found. using for the first time;
	header("location:db_setup.php");
}
else
{
	echo "ok";
	
}

 ?>
