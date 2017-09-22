<?php

@$op_id= $_POST['op_id'];
@$otitle= $_POST['o_title'];
@$odescription= $_POST['o_description'];
@$oprice= $_POST['o_price'];
@$odiscount= $_POST['o_discount'];
@$ocity= $_POST['o_city'];
@$oarea= $_POST['o_area'];
@$oaddress= $_POST['o_address'];
@$olat= $_POST['o_lat'];
@$olong= $_POST['o_long'];
@$ocontact= $_POST['o_contact'];
@$ocategory= $_POST['o_category'];
@$oexpiry= $_POST['o_expiry'];
@$ovalid= $_POST['o_valid'];
@$olink= $_POST['o_link'];

echo $op_id . '<br>';
echo $otitle . '<br>';
echo $odescription . '<br>';
echo $oprice . '<br>';
echo $odiscount. '<br>';
echo $ocity . '<br>';
echo $oarea . '<br>';
echo $oaddress . '<br>';
echo $olat . '<br>';
echo $olong . '<br>';
echo $ocontact . '<br>';
echo $ocategory . '<br>';
echo $oexpiry . '<br>';
echo $ovalid . '<br>';
echo $olink . '<br>';
$ophoto = $_FILES['file_upload']['name'];
echo $_FILES['file_upload']['name'] .'<br>';
echo $_FILES['file_upload']['type'] .'<br>';
echo $_FILES['file_upload']['tmp_name'] .'<br>';
echo $_FILES['file_upload']['size'] .'<br>';
/*
$filename=$_FILES["file_upload"]["name"];
@$extension=end(explode(".", $filename));
$newfilename="$_POST[op_id]" .".".$extension;

// Upload file
if(!move_uploaded_file($_FILES['file_upload']['tmp_name'], 'images/' . $newfilename)){
    die('Error uploading file - check destination is writeable.');
}




echo 'File uploaded successfully.';

@$con=mysql_connect('localhost','root','') or die('Cannot connect' . mysql_error());
@mysql_select_db('lbaservice');
$sql = "INSERT INTO offer (o_id, op_id, o_title, o_description, o_price, o_discount, o_photo, o_city, o_area, o_address, o_lat, o_long, o_contact, o_category, o_expiry, o_valid, o_link)VALUES (NULL, '" . $op_id . "', '" . $otitle . "', '". $odescription . "', '" . $oprice . "','" . $odiscount . "', 'Images/" . $newfilename . "', '" . $ocity . "','" . $oarea . "','" . $oaddress . "', '" . $olat . "', '" . $olong . "', '" . $ocontact . "', '" . $ocategory . "' , '" . $oexpiry . "' , '" . $ovalid . "', '" . $olink . "');";


if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo '1 record added <br> <a href="adminui.html">Back To Admin UI</a><br>'; 
*/
?>