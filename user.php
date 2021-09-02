
<?php
    session_start();
    include_once 'class.user.php';
    $user = new User();

    $ID = $_SESSION['ID'];

    if (!$user->get_session()){
       header("location:login.php");
    }

    if (isset($_GET['q'])){
        $user->user_logout();
        header("location:login.php");
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
            
    <div class="one">
   <img src="images/blood.jpg" width="300" height="200" alt="banner"/>
   <table>
   <tr>
   <h3>Why should we donate blood ? </h3>
   <td>Blood contains many life-saving components that can help to treat different illnesses and injuries. For many people, blood donors are their life savers. Blood donation gives a proud feeling of touching someone's life in such a beautiful way. It's an experience that no words can define. You have to donate blood yourself to find out. You also benefit in other ways by donating blood as it reduces the chances of ischemic heart diseases (beginning of heart problems) as frequent donations reduce the accumulated and unwanted iron load from the body. Your blood donation will also get you your blood insurance from us. By keeping the blood line flowing, you will greatly contribute towards a healthier, happier society. Do remember, any one may require blood any time including ourselves and our dear ones</td>
   </tr></table>
   </div>
   
   <div class="two">
    <img src="images/amount.jpg" width="300" height="200" alt="banner"/>
   <table>
   <tr>
   <h3>How much Blood and how often can I donate?</h3>
   <td>You can donate blood every 12 weeks, up to 4 times a year. Eligible donors (any body between 18 to 60 years of age and leading a healthy life) with weight above 50 kgs. can donate up to 450 ml of blood. Your body can replenish this volume within 24 hours.</td>
   </tr> 
   </table>
     </div>
   
      <div class="three">
    <img src="images/rejected.jpg" width="300" height="200" alt="banner"/>
   <table>
   <tr>
   <h3>When not to donate blood ?</h3>
   <td>You should not give blood if you have: Autoimmune diseases such as SLE, Rheumatoid Arthritis, Thyrotoxicosis.Been infected by HIV or are at risk of getting HIV (e.g. have had sexual contact with a HIV-positive person, have multiple sex partners or patronized sex workers);Previous history of drug abuse (either oral or intravenous); Serious chronic illnesses such as diseases of the heart or lung (those with well-controlled asthma can still donate blood).Ever had Hepatitis B or C; Previous or current history of cancer. </td>
   </tr> 
   </table>
   </div>  
            
            </div>
            </body>
            </html>