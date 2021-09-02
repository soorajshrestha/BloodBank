<?php
$connection = mysqli_connect("localhost","root","","bbms");
$delete_id = $_GET['passid'];
$query = "delete from `reg_user` where `ID`='$delete_id'";
mysqli_query($connection,$query);
if(isset($_GET['msg']))
{
	echo "<p>Your data has been successfully deleted</p>";
	}

 ?>


<html>
<head>
<title>Update and Delete Users</title>
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








          
                <table border="1">
                </tr>
                <td>First Name</td>
                <td>Last Name</td>
                <td>Username</td>
                <td>Email Address</td>
                <td>Blood Group</td>
                <td>Age</td>
                <td>Contact Number</td>
                <td>Address</td>
                <td>Gender</td>
                <td>Action</td>
                </tr>
        <?php
		      
	   $query2 = "select * from `reg_user`";
	   $result = mysqli_query($connection, $query2);
	   while($data = mysqli_fetch_array($result))
	   {
	   ?>
    
       <tr>
       <td><?php echo $data['First_Name']; ?></td>
       <td><?php echo $data['Last_Name']; ?></td>
       <td><?php echo $data['Username']; ?></td>
       <td><?php echo $data['Email_Address']; ?></td>
       <td><?php echo $data['Blood_Group']; ?></td>
       <td><?php echo $data['Age']; ?></td>
       <td><?php echo $data['Contact_No']; ?></td>
       <td><?php echo $data['Address']; ?></td>
       <td><?php echo $data['Gender']; ?></td>
       <td><a href="delete.php?passid=<?php echo $data['ID']; ?> onclick="return confirm('Are you sure??')">DELETE</a> | <a href="edit.php?update_id=<?php echo $data['ID'] ?>">UPDATE</a></td>
       </tr>
      
       
     <?php
	   }
	   ?>
       </table>
    
       
            </div>
            </body>
            </html>
            
            

               