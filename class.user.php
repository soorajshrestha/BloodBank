<?php 
	include "db_config.php";
	
	
	class User{
		
		public $db;
		public function __construct(){
			$this->db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
		
			if(mysqli_connect_errno()) {
	 
				echo "Error: Could not connect to database.";
	 
			exit;
 
			}
		}

//for inserting data into blood sales table
public function sales_user($Patient_Name, $Blood_Group,$Number_Bottle, $Date_Sale, $Total_Price)
{


$query="INSERT INTO blood_sales SET Patient_Name='$Patient_Name', Blood_Group='$Blood_Group', Number_Bottle='$Number_Bottle', Date_Sale='$Date_Sale', Total_Price='$Total_Price'";
		$result = mysqli_query($this->db,$query) or die(mysqli_connect_errno()."Data cannot inserted");
        		return $result;
			}
			
//for inserting data into purchase table
public function purchase_admin($Blood_Bank, $Blood_Group,$Number_Bottle, $Date_Purchase, $Total_Price)
{


$query1="INSERT INTO blood_purchase SET Blood_Bank='$Blood_Bank', Blood_Group='$Blood_Group', Number_Bottle='$Number_Bottle', Date_Purchase='$Date_Purchase', Total_Price='$Total_Price'";
		$result = mysqli_query($this->db,$query1) or die(mysqli_connect_errno()."Data cannot inserted");
        		return $result;
			}			

			
	

		/*** for registration process ***/
		public function register_user($firstname,$lastname,$username,$password,$emailaddress,$bloodgroup,$age,$contactno,$address,$gender){

			
			$password = md5($password);
			$sql="SELECT * FROM reg_user WHERE Username='$username' OR Email_Address='$emailaddress'";
			
			//checking if the username or email is available in db
			$check =  $this->db->query($sql) ;
			$count_row = $check->num_rows;

			//if the username is not in db then insert to the table
			if ($count_row == 0){
				$sql1="INSERT INTO reg_user SET Username='$username', Password='$password', First_Name='$firstname', Email_Address='$emailaddress', Last_Name='$lastname', Blood_Group='$bloodgroup', Age='$age', Contact_No='$contactno', Address='$address', Gender='$gender'";
				$result = mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Data cannot inserted");
        		return $result;
			}
			else { return false;}
		}


		/*** for login process ***/
		public function check_login($user, $pass){
        	
        	$pass = md5($pass);
			$sql2="SELECT ID from reg_user WHERE Username='$user' and Password='$pass'";
					
			//checking if the username is available in the table
        	$result = mysqli_query($this->db,$sql2);
        	$user_data = mysqli_fetch_array($result);
        	$count_row = $result->num_rows;
		
	        if ($count_row == 1) {
	            // this login var will use for the session thing
	            $_SESSION['login'] = true; 
	            $_SESSION['ID'] = $user_data['ID'];
	            return true;
	        }
	        else{
			    return false;
			}
    	}

    	/*** for showing the username or fullname ***/
    	public function get_fullname($ID){
    		$sql3="SELECT First_Name FROM reg_user WHERE ID = $ID";
	        $result = mysqli_query($this->db,$sql3);
	        $user_data = mysqli_fetch_array($result);
	        echo $user_data['First_Name'];
    	}
  
    	/*** starting the session ***/
	    public function get_session(){    
	        return $_SESSION['login'];
	    }

	    public function user_logout() {
	        $_SESSION['login'] = FALSE;
	        session_destroy();
	    }

	}
	
	
	
?>




