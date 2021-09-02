<?php
$connection = mysqli_connect("localhost","root","","bbms");
?>

<html>
<head>
<title>Sales and purchases reports</title>
<script type="text/javascript" src="engine.js"></script>
<link type="text/css" rel="stylesheet" href="style.css"/>
</head>
<body>

<div class="wrapper">
 <div class="header">
	<img src="images/banner6.jpg" width="1000" height="200" alt="banner"/>
    </div>
    <div class="navigation2">
    		<ul>
        	<li><a href="admin.php">Home</a></li>
            <li><a href="DonorList2.php">Donor List</a></li>
            <li><a href="AddUser.php">Add User</a></li>
            <li><a href="Delete.php">Update/Delete User</a></li>
            <li><a href="changepassword1.php">Change Password</a></li>
            <li><a href="sales.php">Blood Sales</a></li>
            <li><a href="purchase.php">Blood Purchase</a></li>
            <li><a href="reports.php">Reports</a></li>
            <li><a href="stock.php">Blood Stock</a></li>
            <li><a href="search.php">Search</a></li>
            <li><a href="help2.php">Help</a></li>
            <li><a href="logout.php">Logout</a></li>
            </ul>
            </div>
           

          
<?php

$query2 = "select * from `blood_sales`";
$result = mysqli_query($connection, $query2);
while($data = mysqli_fetch_array($result))

?>	
				
           		<table>
                <table border="1">
                
                </tr>
                <td><h4>Blood Bank</h4></td>
                <td><h4>Blood Group</h4></td>
                <td><h4>Number of Bottle</h4></td>
                <td><h4>Date of Purchase</h4></td>
                <td><h4>Total Price</h4></td>
                </tr>
          
   
                
        <?php
		      
	   $query2 = "select * from `blood_purchase`";
	   $result = mysqli_query($connection, $query2);
	   while($data = mysqli_fetch_array($result))
	   {
	   ?>
    
       <tr>
       <td><?php echo $data['Blood_Bank']; ?></td>
       <td><?php echo $data['Blood_Group']; ?></td>
       <td><?php echo $data['Number_Bottle']; ?></td>
       <td><?php echo $data['Date_Purchase']; ?></td>
       <td><?php echo $data['Total_Price']; ?></td>
           
      <?php
	   }
	   ?>
   
       
       
        <h3>Purchase Reports:</h3> 
        	 <table border="1">
              
                </tr>
                <td><h4>Patient Name</h4></td>
                <td><h4>Blood Group</h4></td>
                <td><h4>Number of Bottle</h4></td>
                <td><h4>Date of Sale</h4></td>
                <td><h4>Total Price</h4></td>
                </tr>
              
                
        <?php
		      
	   $query2 = "select * from `blood_sales`";
	   $result = mysqli_query($connection, $query2);
	   while($data = mysqli_fetch_array($result))
	   {
	   ?>
    
       <tr>
       <td><?php echo $data['Patient_Name']; ?></td>
       <td><?php echo $data['Blood_Group']; ?></td>
       <td><?php echo $data['Number_Bottle']; ?></td>
       <td><?php echo $data['Date_Sale']; ?></td>
       <td><?php echo $data['Total_Price']; ?></td>
           
      <?php
	   }
	   ?>
 <h3>Sales Reports:</h3>
 
 
 
 
 
</table>
</div>
</body>
</html>