<?php
include("include/config.php");

$select_imgquery = "SELECT images_path FROM  images_tbl limit 1";

$select_prod = "SELECT prod_name FROM  epds_products";


$sqlimg = mysqli_query($db,$select_imgquery);
//echo $sqlimg;
if ('$sqlimg' == 'FALSE')
{echo "I am in";}
else 
{echo "ahaan";}
?>
