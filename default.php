<?php
include("include/config.php");
session_start();
$mobil=$_SESSION["usrmob"];

$select_usr = "SELECT * from login_user where mobile_number = '$mobil'";

$sqlusr = mysqli_query($db,$select_usr);
$rowusr = mysqli_fetch_object($sqlusr);
$typ=$rowusr->type;
$select_typ = "SELECT * from card_colors where name = '$typ'";

$sqltyp = mysqli_query($db,$select_typ);
$rowtyp = mysqli_fetch_object($sqltyp);





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
	<link rel="stylesheet" type="text/css" href="css/tables.css">
<!--!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!=!==-->
<title>Welcome to ePDS</title>
</head>
<body>
<div class="limiter">
		<div class="container-login100" style="background-image: url('images/img-01.jpg');">
				<div class="topright">
		<img src="images/epds.png" alt="AVATAR" height="100px" width="100px">
		<span class="login100-form-title">
						<a class="login100-form-title" href='logout.php'>Logout</a>
					</span>
		</div>

					<span class="login101-form-title">
						Logged in with <?php echo "$mobil"; ?>
					</span>
		
					<span class="login101-form-title">
						Your Card Type is <?php echo "$rowtyp->prod_desc"; ?>
					</span>
					
					
					
					
					<span class="login100-form-title p-t-20 p-b-45">
						Your Quotta
					</span>
						
		<div style="width:1000px; height:300px; overflow: auto; overflow-x: hidden;" >
		

		<!----<div class="divLeft p-t-190 p-b-30">
				<form class="login100-form validate-form" id="form1" method="POST">--->
				<?php
										$result = mysqli_query($db,"SELECT  name as Type,prod_desc as description, riceq as rice, wheatq as wheat, sugarq as sugar, uradq as uraddall, toorq as toordall,palmq as oil,kerosene from card_colors where name='$rowtyp->name'; ");
$all_property = array();  
$i=1;
//showing property
echo '<table>
        <tr>';  //initialize table tag
		
 $i=1;
while ($property = mysqli_fetch_field($result)) {
    echo '<th>' . $property->name . '</th>';  //get field name for header
	
 
    array_push($all_property, $property->name);  //save those to array
}

echo '</tr>'; //end tr tag
//showing all data
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    foreach ($all_property as $item) {
		if (($i%4)==200)
		
        echo '<td><img src="' . $row[$item] . '" class="imgcircle" width="150px" height="100px"></td>'; //get items using property value
		else
			echo '<td>' . $row[$item] . '</td>'; //get items using property value
			//echo $i;
		
		$i=$i+1;
    }
	    echo '</tr>';
		
	
}
echo "</table>";
?>

<!--</form>-->
					</div>

		<span class="login100-form-title p-t-20 p-b-45">
						Product List
					</span>		
		<div style="width:1000px; height:500px; overflow: auto; overflow-x: hidden;" >
		

		<!----<div class="divLeft p-t-190 p-b-30">
				<form class="login100-form validate-form" id="form1" method="POST">--->
				<?php
										$result = mysqli_query($db,"SELECT  prod_name as name, prod_selling as selling,  prod_stock as stock, images_path as preview FROM epds_products left join images_tbl on prod_id=images_id; ");
$all_property = array();  
$i=1;
//showing property
echo '<table>
        <tr>';  //initialize table tag
		
 $i=1;
while ($property = mysqli_fetch_field($result)) {
    echo '<th>' . $property->name . '</th>';  //get field name for header
	
 
    array_push($all_property, $property->name);  //save those to array
}

echo '</tr>'; //end tr tag
//showing all data
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    foreach ($all_property as $item) {
		if (($i%4)==0)
		
        echo '<td><img src="' . $row[$item] . '" class="imgcircle" width="150px" height="100px"></td>'; //get items using property value
		else
			echo '<td>' . $row[$item] . '</td>'; //get items using property value
			//echo $i;
		
		$i=$i+1;
    }
	    echo '</tr>';
		
	
}
echo "</table>";
?>

<!--</form>-->
					</div>

</div></body>
					</html>

	









