 

<?php
include("include/config.php");

$select_query = "SELECT images_path FROM  images_tbl limit 1";
$sql = mysqli_query($db,$select_query);
$row = mysqli_fetch_object($sql);
//echo "$row->images_path";

?>
<html>
<body>
<table style="border-collapse: collapse; font: 12px Tahoma;" border="1" cellspacing="5" cellpadding="5">
<tbody><tr>
<td>

<?php 
echo "<img src='$row->images_path' width='100px' height='100px'>";
?>
</td>
</tr>
</tbody></table>
</body>
</html>
