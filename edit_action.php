
<?php 
$connection = mysqli_connect("localhost","root","","bbms");


$fname = $_POST['First_Name'];

$id = $_POST['ID'];

$query = "UPDATE `reg_user` SET `First_Name` = '$fname' WHERE `ID` ='$ID'";
mysqli_query($connection, $query);
header("location:delete.php");
?>