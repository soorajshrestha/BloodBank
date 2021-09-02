<?php

    include_once 'class.user.php';
    $user = new User();

    // Checking for user logged in or not
    /*if (!$user->get_session())
    {
       header("location:index.php");
    }*/
    if (isset($_REQUEST['submit'])){
        extract($_REQUEST);
        $sales = $user->sales_user($Patient_Name, $Blood_Group,$Number_Bottle, $Date_Sale, $Total_Price);
		     if ($sales) {
            // Data successfully inserted
            echo 'Data successfully inserted';
        }
      
    }
?>




<html>
<head>
<title>Sales Report</title>
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
            
            
            <div class="sales">
            
            
                <form action="" method="post">
                
  <table>
                    
   <tr>
    <td>Patient Name:</td>
 <td><input type="text" name="Patient_Name" placeholder="Enter patient name"  autofocus maxlength="30" style="background-color:#FCF" id="pn" /> <span style="color:red" id="errpn"></span></td>
        </tr>
        
        
         <tr>
 <td>Blood Group:</td>
  <td><select name="Blood_Group" style="background-color:#fcf" id="bg">
 <option>-----------Select Blood Group------------</option>
<option>O +VE</option>
<option>O -VE</option>
<option>A +VE</option>
<option>A -VE</option>
<option>B +VE</option>
<option>B -VE</option>
<option>AB +VE</option>
<option>AB -VE</option>
</select>
<span style="color:red" id="errbg"></span></td>
</tr>
        
        
        
  <tr>
    <td>Number of Bottles:</td>
 <td><input type="text" name="Number_Bottle" placeholder="Enter number of bottles" maxlength="5" style="background-color:#FCF" id="nb" /> <span style="color:red" id="errnb"></span></td>
        </tr>
        
             <tr>
    <td>Date of Sales:</td>
 <td><input type="date" name="Date_Sale" maxlength="15" style="background-color:#FCF" id="ds" /> <span style="color:red" id="errds"></span></td>
        </tr>
        
    <tr>
    <td>Total Price:</td>
 <td><input type="text" name="Total_Price" placeholder="Enter total price" maxlength="10" style="background-color:#FCF" id="tp" /> <span style="color:red" id="errtp"></span></td>
        </tr>
        
          <tr>
              	<td colspan="2">
                	<input type="submit" name="submit" value="Save" onClick="return validate()"/>
                    <input type="reset" value="Reset" />  
                    </td>
                    </tr>
    
        
        </table>
        </form>
            
            
 <script> 
	   function validate()
{
	var pn=$('#pn').val();
	var bg=$('#bg').val();
	var nb=$('#nb').val();
	var ds=$('#ds').val();
	var tp=$('#tp').val();
	

	
	$('#errpn').html("");
	$('#errbg').html("");
	$('#errnb').html("");
	$('#errds').html("");
	$('#errtp').html("");
	
	
	
	if(pn=='')
	{
		$('#errpn').html("*Please enter patient name !!");
		return false;
	}
	
	if(bg=='-----------Select Blood Group------------')
	{
		$('#errbg').html("*Please select blood group !!");
		return false
	}
	

	if(nb=='')
	{
		$('#errnb').html("*Please enter number of bottles!!");
		return false;
	}
	
	  var nb_check=/^[0-9]/i;
	if(!nb_check.test(nb))
		{
		 	$('#errnb').html("**Please put integer value only !!");
			return false;
		}
	
	
	if(ds=='')
	{
		$('#errds').html("*Please enter date of sales !!");
		return false;
	}
	if(tp=='')
	{
		$('#errtp').html("*Please enter total price !!");
		return false;
	}	
	  var tp_check=/^[0-9]/i;
	if(!tp_check.test(tp))
		{
		 	$('#errtp').html("**Please put integer value only !!");
			return false;
		}
}
	
</script>
	
            
            
            
            
            </div>
            </body>
            </html>