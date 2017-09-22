<html>
<body>
<?php
/*
@$op_id= mysql_real_escape_string($_POST['op_id']);
@$otitle= mysql_real_escape_string($_POST['o_title']);
@$odescription= mysql_real_escape_string($_POST['o_description']);
@$oprice= mysql_real_escape_string($_POST['o_price']);
@$odiscount= mysql_real_escape_string($_POST['o_discount']);
@$ocity= mysql_real_escape_string($_POST['o_city']);
@$oarea= mysql_real_escape_string($_POST['o_area']);
@$oaddress= mysql_real_escape_string($_POST['o_address']);
@$olat= mysql_real_escape_string($_POST['o_lat']);
@$olong= mysql_real_escape_string($_POST['o_long']);
@$ocontact= mysql_real_escape_string($_POST['o_contact']);
@$ocategory= mysql_real_escape_string($_POST['o_category']);
@$oexpiry= mysql_real_escape_string($_POST['o_expiry']);
@$ovalid= mysql_real_escape_string($_POST['o_valid']);
@$olink= mysql_real_escape_string($_POST['o_link']);


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
*/
echo $_FILES['file_upload']['name'];
/*
if(isset($_FILES['file_upload']['name'])){ $ophoto = $_FILES['file_upload']['name']; } 

if(!move_uploaded_file($_FILES['file_upload']['tmp_name'], 'Images/' . $_FILES['file_upload']['name'])){
    die('Error uploading file - check destination is writeable.');
}

die('File uploaded successfully.');
@$con=mysql_connect('localhost','root','') or die('Cannot connect' . mysql_error());
@mysql_select_db('lbaservice');
$sql = "INSERT INTO offer VALUES (NULL, '" . $op_id . "', '" . $otitle . "', '". $odescription . "', '" . $oprice . "','" . $odiscount . "', 'Images/" . $ophoto . "', '" . $ocity . "','" . $oarea . "','" . $oaddress . "', '" . $olat . "', '" . $olong . "', '" . $ocontact . "', '" . $ocategory . "' , '" . $oexpiry . "' , '" . $ovalid . "', '" . $olink . "');";


if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo '1 record added <br> <a href="adminui.html">Back To Admin UI</a><br>'; 
*/
?>

</body>
</html>

