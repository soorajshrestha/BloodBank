<?php
$connection = mysqli_connect("localhost","root","","bbms");
echo $update_id = $_GET['update_id'];
$query = "select * from `reg_user` where id='$update_id'";
$res = mysqli_query($connection, $query);
$data = mysqli_fetch_array($res);


 ?>
 <form method="post" action="edit_action.php">
 <table>
 <tr>
 <td>First Name: </td>
 <td><input type="text" name="fname" value="<?php echo $data['First_Name']; ?>" /></td>
 </tr>
 
 <tr>
  <td>Last Name: </td>
 <td><input type="text" name="lname" value="<?php echo $data['Last_Name']; ?>" /></td>
 </tr>
 
 <tr>
  <td>Username: </td>
 <td><input type="text" name="username" value="<?php echo $data['Username']; ?>" /></td>
 </tr>
 <tr>
  <td>Email Address: </td>
 <td><input type="text" name="email" value="<?php echo $data['Email_Address']; ?>" /></td>
 </tr>
 
 <tr>
  <td>Blood Group: </td>
 <td><input type="text" name="bg" value="<?php echo $data['Blood_Group']; ?>" /></td>
 </tr>
 
 <tr>
  <td>Age: </td>
 <td><input type="text" name="age" value="<?php echo $data['Age']; ?>" /></td>
 </tr>
 
 <tr>
  <td>Contact Number: </td>
 <td><input type="text" name="cn" value="<?php echo $data['Contact_No']; ?>" /></td>
 </tr>
 
 <tr>
  <td>Address: </td>
 <td><input type="text" name="address" value="<?php echo $data['Address']; ?>" /></td>
  </tr>
  
  <tr>
  <td>Gender: </td>
  <td><input type="text" name="gen" value="<?php echo $data['Gender']; ?>" /></td>
  </tr>

<tr>
 <td><input type="hidden" name="id" value="<?php echo $data['ID'] ?>" /></td>
 <td><input type="submit" /></td>
 </tr>
 
 </table>
 </form>