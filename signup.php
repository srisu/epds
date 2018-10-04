<?php
   include("include/config.php");
     if(isset($_POST['register']))
		 {
		 
   if($_SERVER["REQUEST_METHOD"] == "POST")  
   {
	   
      // username and password sent from form 
      
      $mobil = mysqli_real_escape_string($db,$_POST['mobilenumber']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']);
	  $usrname = mysqli_real_escape_string($db,$_POST['username']);
	  $aadhar = mysqli_real_escape_string($db,$_POST['anumber']);
	  $rnumber = mysqli_real_escape_string($db,$_POST['rnumber']);
	  
	  $sqlins = "insert into login_user (name,mobile_number,password,ration_id,aadhar_no) values ('$usrname','$mobil','$mypassword','$rnumber','$aadhar')";
	  
	  $sqlmobile = "select name  from login_user where mobile_number='$mobil'";
	  $sqlaadhar = "select name  from login_user where aadhar_no='$aadhar'";
	  $sqlrnumber = "select name  from login_user where ration_id='$rnumber'";
	  //echo "$sqlmobile";
	  //echo "$sqlins";
	  $resultmob = mysqli_query($db,$sqlmobile);
	  $resultaadhar = mysqli_query($db,$sqlaadhar);
	  $resultrnumber = mysqli_query($db,$sqlrnumber);
	  $countmob = mysqli_num_rows($resultmob);
	  $countaadhar = mysqli_num_rows($resultaadhar);
	  //echo "$countaadhar";
	  $countrnumber = mysqli_num_rows($resultrnumber);
	  
	  if ($countmob > 0)
	  {
		  $outmsg = "Entered Mobile Number already Exists!";
	  }
	  else if ($countaadhar > 0)
	  {
		  $outmsg = "Entered Aadhar Number already Exists!";
	  }
	 
	 else if ($countrnumber > 0)
	  {
		  $outmsg = "Entered Ration card Number already Exists!";
	  }
	  else 
	  {
		  $resultins = mysqli_query($db,$sqlins);
		  $outmsg = "";
		  header("Refresh: 0; url= index.php"); 
echo "<script>alert('Your registation is successful');</script>";
	  }
   }
   else
   {}
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
<title>Register with ePds</title>
</head>
<body>	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/img-01.jpg');">
			<div class="wrap-login100 p-t-190 p-b-30">
				<form class="login100-form validate-form" method="POST">
					<div class="login100-form-avatar">
						<img src="images/epds.png" alt="AVATAR">
					</div>

					<span class="login100-form-title p-t-20 p-b-45">
						Signup to ePds
					</span>
	

<div class="container-login100-form-btn">
						<span style="color:red"><?php 
								if(isset($_POST['register']))
									{ //echo "summa";
									 //echo "$error";	
								if(isset($outmsg))
									{
			
									echo "$outmsg";
		}
	}
    ?>
    </span>
						</div>
 
	
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
						<input id="Username" class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-mobile-phone"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Mobile No. is required">
						<input id="mobilenumber" class="input100"  type="number" name="mobilenumber" placeholder="Mobile Number">
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
					
					<!---div class="wrap-input100 validate-input m-b-10" data-validate = "Confirm Password is required">
						<input id="cpassword" class="input100" type="password"  name="cpassword" placeholder="Confirm Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div--->
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Ration card No is required">
						<input id="rnumber" class="input100" type="text" name="rnumber" placeholder="Ration Card Number">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-mobile-phone"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Aadhar No. is required">
						<input id="anumber" class="input100" type="number" name="anumber" placeholder="Aadhar Number">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-mobile-phone"></i>
						</span>
					</div>


					<div class="container-login100-form-btn p-t-10" >
						<button name="register" class="login100-form-btn">
							Register
						</button>
					</div>
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
