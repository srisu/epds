<?php
include("include/config.php");
$mob = $_GET['mob'];
//echo "$mob";
$sqlselect = "select * from login_user WHERE mobile_number = '$mob'";
$resultselect = mysqli_query($db,$sqlselect);
	  $row = mysqli_fetch_object($resultselect);
if(isset($_POST['save'])) {
		 
   if($_SERVER["REQUEST_METHOD"] == "POST")  
   {
	   
      // username and password sent from form 
	  //$type=0;
      $type = mysqli_real_escape_string($db,$_POST['seltype']);
      
	  //echo "$type";
	  $sqlupdt = "update login_user set type='$type' WHERE mobile_number = '$mob'";
	  
	  $resultupdt = mysqli_query($db,$sqlupdt);	  
	  echo "<script>alert('Changes are saved');</script>";
	  header("Refresh: 0; url= userlist.php");
	  

	  
   }
}






?>
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
<title>ePDS Users</title>
</head>
<body>
	<!-- user login form -->
	<div class="limiter">
		<div class="container-login101" style="background-image: url('images/img-01.jpg');">
			<div class="wrap-login100 p-t-190 p-b-30">
				<form class="login100-form validate-form" id="form1" method="POST">
					<div class="login100-form-avatar">
						<img src="images/epds.png" alt="AVATAR">
					</div>

					<span class="login100-form-title p-t-20 p-b-45">
						User Edit
					</span>

					
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Mobile No. is required">
						<input id="username" class="input100" type="text" name="username" value="<?php echo"$row->name"; ?>" placeholder="User Name" readonly>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-mobile-phone"></i>
						</span>
					</div>
					
					
					
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Mobile No. is required">
						<input id="mobilenumber" class="input100" type="number" name="mobilenumber" value="<?php echo"$mob"; ?>" placeholder="Mobile Number" readonly>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-mobile-phone"></i>
						</span>
					</div>


					<div class="wrap-input100 validate-input m-b-10" data-validate = "Aadhar No. is required">
						
						
<select class="input101" name="seltype" required>
 
    <option selected disabled hidden><?php echo"$row->type"; ?></option>
    <option  style="color:green" value="green">Green Card</option>
    <option style="color:#C2B280"  value="Khaki">Khaki Card</option>
    <option style="color:blue" value="blue">Blue Card</option>
    <option style="color:white" value="white">White Card</option>
    <option style="color:white" value="whitenc">White Card - No Commodity</option>

</select>
			</div>
				
					<div class="container-login100-form-btn p-t-10">
						<button name="save" class="login100-form-btn">
							Save Changes
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

