<?php
	session_start();
	include_once 'class.user.php';
	$user = new User();

	if (isset($_REQUEST['submit'])) { 
		extract($_REQUEST);   
	    $login = $user->check_login($username, $password);
	    if ($login) {
	        // Registration Success
	       header("location:user.php");
	    } else {
	        // Registration Failed
	        echo 'Wrong username or password';
	    }
	}
?>

<html>
<head>
<title>Login Page</title>
<link type="text/css" rel="stylesheet" href="style.css"/>
<script type="text/javascript" src="engine.js"></script>
</head>
<body>



<div class="wrapper">
	<div class="header">
    <img src="images/banner3.jpg" width="1000" height="200" alt="banner"/>
    </div>
    <div class="navigation">
    		<ul>
        	<li><a href="index.php">Home</a></li>
            <li><a href="DonorList.php">Donor List</a></li>
            <li><a href="Help.php">Help</a></li>
            <li><a href="AboutUs.php">About Us</a></li>
            <li><a href="Login.php">Login</a></li>
            <li><a href="Register.php">Register</a></li>
            </ul>
            </div>


<div class="login_reg">
<form action="" method="POST">

<table>
<tr>
<td>Username : </td>
<td><input type="text" name="username" placeholder="Enter username" style="background-color:#FCF" autofocus id="un"/><span style="color:red" id="errun"></span></td>
</tr>


<tr>
<td> Password : </td>
<td><input type="password" name="password" placeholder="Enter password" style="background-color:#FCF" id="pw"/><span style="color:red" id="errpw"></span></td>
</tr>

<tr>
<td colspan="2">
<input type="submit" value="Login" name="submit" onClick="return validate()"/>
<input type="reset" value="Reset" name="rset"/>
</td>
</tr>
</form>
</table>

<p>Don't have an account ? <a href="register.php">Sign up now</a></p>
</div>


<script>
function validate()
{
	var un=$('#un').val();
	var pw=$('#pw').val();
	
	$('#errun').html("");
	$('#errpw').html("");
	
	if(un=='')
	{
		$('#errun').html("*Please enter username!!");
		return false;
		}
	if(pw=='')
	{
		$('#errpw').html("*Please enter password!!");
		return false;
		}
	}
</script>

</body>
</html>
