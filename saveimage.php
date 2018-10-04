<?php

include("include/config.php");

 $flag = 0;

    function GetImageExtension($imagetype)

     {

       if(empty($imagetype)) return false;

       switch($imagetype)
       {

           case 'image/bmp': return '.bmp';

           case 'image/gif': return '.gif';

           case 'image/jpeg': return '.jpg';

           case 'image/png': return '.png';

           default: return false;

       }

     }
      
//   include("include/config.php");
   //session_start();
   
    // if(isset($_POST['save']))
	 
//echo "i am in";
	
		 
   //if($_SERVER["REQUEST_METHOD"] == "POST")  
	   
   	  $pstock = mysqli_real_escape_string($db,$_POST['pstock']); 
	  //echo "$pstock";
     $pname = mysqli_real_escape_string($db,$_POST['pname']);	
   $pselling = mysqli_real_escape_string($db,$_POST['pselling']);
   
	  $sqlupdtstk = "update epds_products set prod_stock=$pstock where prod_name = '$pname'";
	  $sqlins = "insert into epds_products (prod_name,prod_selling,prod_stock) values ('$pname','$pselling',$pstock)";
//	  echo "$sqlins";
	  $sqlpname = "select prod_id  from epds_products where prod_name='$pname'";
	 //echo "$sqlpname";
	 $resultpname = mysqli_query($db,$sqlpname);

	 $countpname = mysqli_num_rows($resultpname);
//echo "$countpname";
	 if ($countpname > 0)
	  {
		  $resultpstk = mysqli_query($db,$sqlupdtstk);
		  //$outmsg = "Already Product Exists with a same name!";
		  $flag = 1;
		  //echo "$flag";
		  echo "<script>alert('Already Product Exists with a same name! Hence the stock will be updated');</script>"; 
	//echo "$outmsg";  
	  }
	  else
		{
		  $resultpname = mysqli_query($db,$sqlins);
		  
		  $outmsg = "Product Save Success";
		  echo "<script>alert('Product Save Success');</script>";
		  //header("Refresh: 0; url= admindash.php");

		}
		
if ($flag != 1)	
{	
//echo "nan vandhuten";
		if (!empty($_FILES["uploadedimage"]["name"])) {

 

    $file_name=$_FILES["uploadedimage"]["name"];

    $temp_name=$_FILES["uploadedimage"]["tmp_name"];

    $imgtype=$_FILES["uploadedimage"]["type"];

    $ext= GetImageExtension($imgtype);

    $imagename=$file_name;
	$imagecon = substr($imagename, 0, -4);
    $target_path = "images/".$imagename;

if(move_uploaded_file($temp_name, $target_path)) {

    $query_upload="INSERT into images_tbl (images_path,images_name) VALUES('".$target_path."','".$imagecon."')";

    //mysqli_query($query_upload)
mysqli_query($db,$query_upload)
	
	or die("error in $query_upload == ----> ".mysqli_error($db)); 

}else{
   exit("Error While uploading image on the server");
}
}
}
		
?>
