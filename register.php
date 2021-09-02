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
        $register = $user->register_user($fname, $lname,$username, $password, $email, $bg, $age, $cn, $address, $gen);
        if ($register) {
            // Registration Success
            echo 'Registration  successful <a href="login.php">Click here</a> to login';
        } else {
            // Registration Failed
            echo 'Registration failed. Email or Username already exits please try again';
        }
    }
?>


<html>
<head>
<title>Registration Page</title>
<script type="text/javascript" src="engine.js"></script>
<link type="text/css" rel="stylesheet" href="style.css"/>
</head>
<body>

<div class="wrapper">
 <div class="header">
	<img src="images/banner2.jpg" width="1000" height="200" alt="banner"/>
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
    <form action="" method="post">
                
  <table>
                    
   <tr>
    <td>First Name:</td>
 <td><input type="text" name="fname" placeholder="Enter first name" style="background-color:#FCF" maxlength="15" id="fname" autofocus/><span style="color:red" id="errfname"></span></td>
        </tr>
                        
       <tr>
       <td>Last Name:</td>
 <td><input type="text" name="lname" placeholder="Enter last name" maxlength="15" style="background-color:#FCF" id="lname" /> <span style="color:red" id="errlname"></span></td>
   </tr>
                        
	<tr>
   <td>Username:</td>
   <td><input type="text" name="username" placeholder="Enter username" maxlength="25" style="background-color:#FCF" id="un"/> <span style="color:red" id="errun"></span></td>
   </tr>
                        
       <tr>
       <td>Password:</td>
    <td><input type="password" name="password" placeholder="Enter password" maxlength="30" style="background-color:#FCF" id="pw"/><span style="color:red" id="errpw"></span></td>
  </tr>
                        
   <tr>
<td>Confirm Password:</td>
  <td><input type="password" name="cpassword" placeholder="Enter confirm password" maxlength="30" style="background-color:#FCF" id="pwd" /><span style="color:red" id="errpwd"></span></td>
   </tr>
                        
       <tr>
   <td>Email Address:</td>
<td><input type="email" name="email" placeholder="Enter email address" maxlength="25" style="background-color:#FCF" id="me"/><span style="color:red" id="errme"></span></td>
  </tr>
                        
 <tr>
 <td>Blood Group:</td>
  <td><select name="bg" style="background-color:#fcf" id="blg_val">
 <option>-----------Select Blood Group------------</option>
<option>O +ve</option>
<option>O -ve</option>
<option>A +ve</option>
<option>A -ve</option>
<option>B +ve</option>
<option>B -ve</option>
<option>AB +ve</option>
<option>AB -ve</option>
</select>
<span style="color:red" id="errblg_val"></span></td>
</tr>
                        
   <tr>
<td>Age:</td>
<td><input type="text" name="age" placeholder="Enter age" maxlength="2" style="background-color:#FCF" id="ag"/><span style="color:red" id="errag"></span></td>
 </tr>
                        
<tr>
<td>Contact Number:</td>
 <td><input type="text" name="cn" placeholder="Enter contact number" maxlength="10" style="background-color:#FCF" id="con"/><span style="color:red" id="errcon"></span></td>
</tr>
                        
 <tr>
<td>Address:</td>
 <td><input type="text" name="address" placeholder="Enter address" maxlength="25" style="background-color:#FCF" id="add"/><span style="color:red" id="erradd"></span>
  </td>
</tr>
                        
                        
<tr>
<td>Gender:</td>
          <td><select name="gen" style="background-color:#FCF" id="gen_val"/>
           <option>--------------Select Gender---------------</option>
<option>Male</option>
<option>Female</option>
<option>Others</option>
</select>
<span style="color:red" id="errgen_val"></span>
</td>
  </tr>
                        
              <tr>
              	<td colspan="2">
                	<input type="submit" name="submit" value="Register" onClick="return validate()"/>
                    <input type="reset" value="Reset" />  
                    </td>
                    </tr>
                        
                        
                    </table>
                
                </form>
                
                <p>Already have an account ? <a href="login.php">Sign in now</a></p>
                
            </div>
           </div>
       
       <script> 
	   function validate()
{
	var fname=$('#fname').val();
	var lname=$('#lname').val();
	var un=$('#un').val();
	var pw=$('#pw').val();
	var pwd=$('#pwd').val();
	var me=$('#me').val();
	var blg_val=$('#blg_val').val();
	var ag=$('#ag').val();
	var con=$('#con').val();
	var add=$('#add').val();
	var gen_val=$('#gen_val').val();
	
	$('#errfname').html("");
	$('#errlname').html("");
	$('#errun').html("");
	$('#errpw').html("");
	$('#errpwd').html("");
	$('#errme').html("");
	$('#errblg_val').html("");
	$('#errag').html("");
	$('#errcon').html("");
	$('#erradd').html("");
	$('#errgen_val').html("");
	
	
	
	
	if(fname=='')
	{
		$('#errfname').html("*Please enter first name !!");
		return false;
	}
	
		if(lname=='')
	{
		$('#errlname').html("*Please enter last name !!");
		return false;
	}
	

	if(un=='')
	{
		$('#errun').html("*Please enter username !!");
		return false;
	}
	if(pw=='')
	{
		$('#errpw').html("*Please enter password !!");
		return false;
	}
	if(pwd=='')
	{
		$('#errpwd').html("*Please enter confirm password !!");
		return false;
	}	
	
	if(pw!=pwd)
	{
		$('#errpwd').html("*Password do not match !!");
		return false
	}
	
	if(me=='')
	{
		$('#errme').html("*Please enter email address !!");
		return false;
	}
	
	var me_check=/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,6}$/i;
	if(!me_check.test(me))
		{
		 	$('#errme').html("**Email is not in correct format!!");
			return false;
		}
	
	if(blg_val=='-----------Select Blood Group------------')
	{
		$('#errblg_val').html("*Please select blood group !!");
		return false
	}
	
	if(ag=='')
	{
		$('#errag').html("*Please enter age !!");
		return false;
	}
	
  var ag_check=/^[0-9]/i;
	if(!ag_check.test(ag))
		{
		 	$('#errag').html("**Please put integer value only !!");
			return false;
		}
	
	if(con=='')
	{
		$('#errcon').html("*Please enter contact number !!");
		return false;
	}
	
	var con_check=/^[0-9]/i;
	if(!con_check.test(con))
		{
		 	$('#errcon').html("**Please enter numbers only !!");
			return false;
		}
	
	if(add=='')
	{
		$('#erradd').html("*Please enter address !!");
		return false;
	}
	
	if(gen_val=='--------------Select Gender---------------')
	{
		$('#errgen_val').html("*Please select gender !!");
		return false;
	}
		
}

</script>



</body>
</html>

