<html>
<head>
<title>Change Password</title>
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
            
            
            
            <div class="changepassword">
<table>

		<form method="POST" action="">
        <tr>
		<td>Current Password: </td>
        <td><input type="password" name="cup" placeholder="Enter current password" style="background-color:#FCF" autofocus id="cup"/><span style="color:red" id="errcup"></span>
        </td>
        </tr>
        
        <tr>
		<td>New Password: </td>
        <td> <input type="password" name="nep" placeholder="Enter new password" style="background-color:#FCF" autofocus id="nep"/><span style="color:red" id="errnep"></span>
        </td>
        </tr>
        
        <tr>
        <td>Confirm New Password: </td>
        <td><input type="password" name="cop" placeholder="Enter confirm password" style="background-color:#FCF" autofocus id="cop"/><span style="color:red" id="errcop"></span></td>
        </tr>
        
       
		<td><input type="submit" name="submit"  value="Change" onClick="return validate()">    
       <input type="submit" name="reset" value="Reset"></td>
       
    
        </form>
        </table>
        
        </div>
        </div>

     
     
        
 <script>
function validate()
{
	var cup=$('#cup').val();
	var nep=$('#nep').val();
	var cop=$('#cop').val();
	
	$('#errcup').html("");
	$('#errnep').html("");
	$('#errcop').html("");
	
	if(cup=='')
	{
		$('#errcup').html("*Please enter current password!!");
		return false;
		}
	if(nep=='')
	{
		$('#errnep').html("*Please enter new password!!");
		return false;
		}
	if(cop=='')
	{
		$('#errcop').html("*Please enter confirm password!!");
		return false;
		}
	if(nep!=cop)
	{
		$('#errcop').html("*Password do not match !!");
		return false
	}
	}
</script>
            
            </div>
            </body>
            </html>