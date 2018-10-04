<?php
include("include/config.php");


if(isset($_POST['addprod'])) {
	header("Refresh: 0; url= addprod.php");
}
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
				<div class="topright">
		<img src="images/epds.png" alt="AVATAR" height="100px" width="100px">
		</div>

		<form class="login100-form" id="addprodf" method="POST">
		<div class="container-login100-form-btn p-t-10">
						<button name="addprod" class="login101-form-btn" height="100px" width="100px">
							Add Product
						</button>
					</div>
		</form>
		
		
		
		<div class="divLeft p-t-190 p-b-30">
				<form class="login100-form validate-form" id="form1" method="POST">
				<?php
										$result = mysqli_query($db,"SELECT  prod_name as name, ' ', prod_selling as selling, ' ', prod_stock as stock FROM epds_products");
$all_property = array();  
$i=1;
//showing property
echo '<table class="data-table">
        <tr class="data-heading">';  //initialize table tag
		
 
while ($property = mysqli_fetch_field($result)) {
    echo '<td>' . $property->name . '</td>';  //get field name for header
	//echo '<td>' . $i .'</td>';
 
    array_push($all_property, $property->name);  //save those to array
}

echo '</tr>'; //end tr tag
//showing all data
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    foreach ($all_property as $item) {
		
        echo '<td>' . $row[$item] . '</td>'; //get items using property value
		
    }
	echo '<td>' . $i .'</td>';
    echo '</tr>';
	$i+1;
}
echo "</table>";
?>
</form>
					</div></div></body>
					</html>

	








