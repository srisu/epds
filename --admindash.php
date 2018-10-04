<?php
include("include/config.php");

$select_imgquery = "SELECT images_path FROM  images_tbl limit 1";

$select_prod = "SELECT prod_name FROM  epds_products limit 1";


$sqlimg = mysqli_query($db,$select_imgquery);
$rowimg = mysqli_fetch_object($sqlimg);
$sqlprod = mysqli_query($db,$select_prod);
$rowprod = mysqli_fetch_object($sqlprod);

//echo "$row->images_path";

?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!==-->	
	<link rel="icon"  href="epds_favicon.ico"/>
<!--!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!==-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!==-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!==-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!==-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!==-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!==-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!==-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!==-->
<title>ePds Admin</title>
</head>
<body>
<div class="limiter">
		<div class="container-login101" style="background-image: url('images/img-01.jpg');">
				<div class="topright");">
		<img src="images/epds.png" alt="AVATAR" height="100px" width="100px">
		</div>
		<div class="divLeft p-t-190 p-b-30">
				<form class="login100-form validate-form" id="form1" method="POST">
					<div class="login100-form-avatar">
						<?php 
						$select_imgquery = "SELECT images_path FROM  images_tbl limit 1 offset 0";

$sqlimg = mysqli_query($db,$select_imgquery);
$rowimg = mysqli_fetch_object($sqlimg);

//if ($sqlimg != '')
							echo "<img src='$rowimg->images_path' width='150px' height='150px'>";
						?>
</div>

					<span class="login100-form-title p-t-20 p-b-45">
						<?php 
						$select_prod = "SELECT prod_name FROM  epds_products limit 1 offset 0";
						$sqlprod = mysqli_query($db,$select_prod);
$rowprod = mysqli_fetch_object($sqlprod);

//if ($sqlprod != 'TRUE')

							echo $rowprod->prod_name;
							?>
					</span>
						</form>
					</div>
					<!---end of form1--->
					
					
				<div class="divLeft p-t-190 p-b-30">
				<form class="login100-form validate-form" id="form1" method="POST">
						</form>
					</div>
	
					
					
					<!---this is form 2 --->
					<div class="divCen p-t-190 p-b-30">
				<form class="login100-form validate-form" id="form2" method="POST">
					<div class="login100-form-avatar">
						<?php 
						$select_imgquery = "SELECT images_path FROM  images_tbl limit 1 offset 1";

$sqlimg = mysqli_query($db,$select_imgquery);
$rowimg = mysqli_fetch_object($sqlimg);

//if ($sqlimg != '')
							echo "<img src='$rowimg->images_path' width='150px' height='150px'>";
						?>
</div>

					<span class="login100-form-title p-t-20 p-b-45">
						<?php 
						$select_prod = "SELECT prod_name FROM  epds_products limit 1 offset 1";
						$sqlprod = mysqli_query($db,$select_prod);
$rowprod = mysqli_fetch_object($sqlprod);

//if ($sqlimg != '')

echo $rowprod->prod_name;
						?>
					</span>
					</div>

					
					
				<!---end of form2 --->
<div class="divLeft p-t-190 p-b-30">
				<form class="login100-form validate-form" id="form1" method="POST">
						</form>
					</div>
	<!--- start of form 3--->				
					
					<div class="divCen p-t-190 p-b-30">
				<form class="login100-form validate-form" id="form2" method="POST">
					<div class="login100-form-avatar">
						<?php 
						$select_imgquery = "SELECT images_path FROM  images_tbl limit 1 offset 2";

$sqlimg = mysqli_query($db,$select_imgquery);
$rowimg = mysqli_fetch_object($sqlimg);

						//if ($sqlimg != '')
						
							echo "<img src='$rowimg->images_path' width='150px' height='150px'>";
					
						?>
</div>

					<span class="login100-form-title p-t-20 p-b-45">
						<?php 
						$select_prod = "SELECT prod_name FROM  epds_products limit 1 offset 2";
						$sqlprod = mysqli_query($db,$select_prod);
$rowprod = mysqli_fetch_object($sqlprod);

//if ($sqlimg != ''){
echo $rowprod->prod_name;
						?>
					</span>
					</div>
					
					
					</div></div></body>
					</html>

	








