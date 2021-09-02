



<html>
<head>
<title>Change Password</title>
<link type="text/css" rel="stylesheet" href="style.css"/>
<script type="text/javascript" src="engine.js"></script>
</head>
<body>

<div class="wrapper">
 <div class="header">
	<img src="images/banner4.jpg" width="1000" height="200" alt="banner"/>
    </div>
    <div class="navigation1">
    		<ul>
        	<li><a href="Menu.php">Main Menu</a></li>
            <li><a href="DonorList1.php">Donor List</a></li>
            <li><a href="ChangePassword.php">Change Password</a></li>
            <li><a href="Help1.php">Help</a></li>
            <li><a href="AboutUs1.php">About Us</a></li>
            <li><a href="Logout.php">Logout</a></li>
            </ul>
            </div>
 



<div class="changepassword">
<table>
<h3>Change Password</h3>
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
</body>
</html>
