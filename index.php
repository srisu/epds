<?php
   include("include/config.php");
   session_start();
   
     if(isset($_POST['login'])) {
		 
   if($_SERVER["REQUEST_METHOD"] == "POST")  
   {
	   
      // username and password sent from form 
      
      $mobil = mysqli_real_escape_string($db,$_POST['mobilenumber']);
	  //$mobil='9095177782';
	  //echo "$mobil";
	  
      $mypassword = mysqli_real_escape_string($db,$_POST['password']);
		//$mypassword= 'Sri2596su';
      //echo "$mypassword";
      $sqlpass = "SELECT name FROM login_user WHERE mobile_number = '$mobil' and password = '$mypassword'";
	  $sqlmob = "SELECT name FROM login_user WHERE mobile_number = '$mobil'";
	  $sqlisadmin = "SELECT is_admin FROM login_user WHERE mobile_number = '$mobil'";
	  
      $resultpass = mysqli_query($db,$sqlpass);
	  $resultmob = mysqli_query($db,$sqlmob);
	  $resultisadmin = mysqli_query($db,$sqlisadmin);
	  
      $rowpass = mysqli_fetch_array($resultpass,MYSQLI_ASSOC);
	  $rowmob = mysqli_fetch_array($resultmob,MYSQLI_ASSOC);
	  $rowisadmin = mysqli_fetch_object($resultisadmin);
	  
      
      $countpass = mysqli_num_rows($resultpass);
	  $countmob = mysqli_num_rows($resultmob);
	  $countisadmin = mysqli_num_rows($resultisadmin);
	  //echo "$countpass";
      //echo "$countmob";
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($countpass == 1) 
	  {
         //session_register("mobil");
         //$_SESSION['login_user'] = $mobil;
         
         //You need to redirect
		 
		 if ("$rowisadmin->is_admin" == '1')
		 {
		 echo "adhu nane";
		 header("location: admindash.php");
		 }
		else 
		header("location: home.php");	

	 }
	  
	  else if ( $countmob == 1 && $countpass == 0 ) 
	  
	  {
         $error = "Your Mobile number or Password is invalid";
		 //echo "$error";
      }
	  else 
	  {
         //You need to redirect to user signup
		 
		 //header("location: signup.php");
  
 
header("Refresh: 0; url= signup.php"); 
echo "<script>alert('Entered Mobile Number is not registered, please signup to continue');</script>"; 
//echo "<script>alert('Your Mobile number or Password is invalid');</script>";

	  }
	  
   }
		
		else
        {
             //do nothing
         }

	 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon"  href="epds_favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<title>Welcome to ePds</title>
</head>
<body>
	<!-- user login form -->
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/img-01.jpg');">
			<div class="wrap-login100 p-t-190 p-b-30">
				<form class="login100-form validate-form" id="form1" method="POST">
					<div class="login100-form-avatar">
						<img src="images/epds.png" alt="AVATAR">
					</div>

					<span class="login100-form-title p-t-20 p-b-45">
						Sign In to ePds
					</span>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Mobile No. is required">
						<input id="mobilenumber" class="input100" type="number" name="mobilenumber" placeholder="Mobile Number">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-mobile-phone"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
						<input id="password" class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>

					<div class="container-login100-form-btn p-t-10">
						<button name="login" class="login100-form-btn">
							Sign In
						</button>
					</div>
					
					<div class="container-login100-form-btn p-t-10">
 <span>
    <?php 
	if(isset($_POST['login']))
	{ //echo "summa";

//echo "$error";
		if(isset($error))
		{
			
    //echo "$error";
	echo "<script>alert('Your Mobile number or Password is invalid');</script>";
	die;
		}
	}
    ?>
    </span></div>
 
				<!--		<div class="text-center w-full p-t-25 p-b-230">
						<a href="#" class="txt1">
							Forgot Username / Password?
						</a><br> 
					</div> --> 

				</form>
			</div>
		</div>
	</div> 
	
	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
