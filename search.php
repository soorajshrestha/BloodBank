<html>
<head>
<title>Search Blood</title>
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
      <div class="search">
      		<form method="POST" action="s_action.php">
            <table>
            <tr>
		<td>Search : </td>
        <td> <input type="text" name="search" placeholder="Search" style="background-color:#FCF" autofocus id="lo"/><span style="color:red" id="errlo"></span></td>
        </tr>
        
        <tr>
		<td><input type="submit" name="submit"  value="Search" onClick="return validate();">
        <td><input type="reset" value="Reset" >
        </td>
        </tr>
        
        </table>
        </form>
       </div>
       
       
       
  <script> function validate()
  {
	var lo=$('#lo').val();
	
	$('#errlo').html("");

	if(lo=='')
	{
		$('#errlo').html("*Please enter words for search !!");
		return false;
	}
  }
</script>   
           
     
            
            </div>
            </body>
            </html>