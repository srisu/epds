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
<title>ePds Admin</title>
</head>
<body>
<div class="limiter">
		<div class="container-login101" style="background-image: url('images/img-01.jpg');">
				<div class="topright");">
		<img src="images/epds.png" alt="AVATAR" height="100px" width="100px">
		<span class="login100-form-title">
						<a class="login102-form-title" href='admindash.php'>Back to admin</a>
					</span>
		</div> 
		<!--<div class="wrap-login100 p-t-190 p-b-30">			
		<form class="login100-form validate-form" id="form1" method="POST">	
		<div class="container-login100-form-btn p-t-10">
						<span class="login100-form-title p-t-20 p-b-45">
						Add New Product
					</span>
					</div>
		<div class="wrap-login100 p-t-10">
		<input type="file" name="upload image" accept="image/*"></div>
			<div class="wrap-input100 validate-input m-b-10" data-validate = "Mobile No. is required">
					<input id="pname" class="input100" type="text" name="pname" placeholder="Product Name">
			</div>
			<div class="wrap-input100 validate-input m-b-10" data-validate = "Mobile No. is required">
				<input id="pselling" class="input100" type="number" min="0.00" max="10000.00" step="0.50" name="pname" placeholder="Selling Price">
			</div>
			<div class="container-login100-form-btn p-t-10">
						<button name="SaveProduct" class="login100-form-btn">
							Save
						</button>
					</div>
				
		
		</div>		
		</div>-->
		<form action="saveimage.php"  enctype="multipart/form-data" method="post">
		<span class="login100-form-title p-t-20 p-b-45">
						Add New Product
					</span>
<div class="wrap-input100 validate-input m-b-10" data-validate = "Mobile No. is required">
						<input id="mobilenumber" class="input100" type="text" name="pname" placeholder="Product Name" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-mobile-phone"></i>
						</span>
					</div>
<div class="wrap-input100 validate-input m-b-10" data-validate = "Mobile No. is required">
						<input id="mobilenumber" class="input100" type="number" name="pselling" placeholder="Selling Price" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-mobile-phone"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Mobile No. is required">
						<input id="pstock" class="input100" type="number" name="pstock" placeholder="Stock" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-mobile-phone"></i>
						</span>
					</div>

<div class="container-login100-form-btn p-t-10">
						<input name="uploadedimage" type="file" accept="image/*">
					</div>

<div class="container-login100-form-btn p-t-10">
						<button name="save" class="login100-form-btn">
							Save
						</button>
					</div>
</form>

		</div>
	
	
</body>
</html>
