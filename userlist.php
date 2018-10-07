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
<title>ePds Admin</title>
</head>
<body>
<div class="limiter">
		<div class="container-login101" style="background-image: url('images/img-01.jpg');">
				<div class="topright">
		<img src="images/epds.png" alt="AVATAR" height="100px" width="100px">
		<span class="login100-form-title">
						<a class="login102-form-title" href='admindash.php'>Back to admin</a>
					</span>
		</div>
		
<span class="login100-form-title p-t-20 p-b-45">
						User List
					</span>		
		<div style="width:1000px; height:500px; overflow: auto; overflow-x: hidden;" >
		

		<!----<div class="divLeft p-t-190 p-b-30">
				<form class="login100-form validate-form" id="form1" method="POST">--->
				<?php
				
				include("include/config.php");
										$result = mysqli_query($db,"SELECT  name as name, mobile_number as mobile,ration_id as card,aadhar_no as aadhar,type as Type from login_user where is_admin = 'N'");
$all_property = array();  

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
	$i=1;
    echo "<tr>";
    foreach ($all_property as $item) {
		if ($i==2)
		{
			echo'<td><a href="http://localhost/epds/usredit.php?mob=' . $row[$item] . '" style="color:black;">' . $row[$item] . '</a></td>';
			
			
		}
		
       // echo '<td><img src="' . $row[$item] . '" class="imgcircle" width="150px" height="100px"></td>'; //get items using property value
		else
		{
			echo '<td>' . $row[$item] . '</td>'; //get items using property value
			//echo $i;
		}
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

	









