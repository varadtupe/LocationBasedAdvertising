<?php

@$con = mysql_connect("mysql8.000webhost.com","a8354107_savlba","sav140593");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("a8354107_savlba", $con);

$highest_id = mysql_result(mysql_query("SELECT MAX(o_id) FROM offer"),0);
$highest_id++;

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

echo 'Provider ID &nbsp'. $op_id . '<br>';
echo 'Title &nbsp'.$otitle . '<br>';
echo 'Description &nbsp'. $odescription . '<br>';
echo 'Price &nbsp'. $oprice . '<br>';
echo 'Discount &nbsp'. $odiscount. '<br>';
echo 'City &nbsp'. $ocity . '<br>';
echo 'Area &nbsp'. $oarea . '<br>';
echo 'Address &nbsp'. $oaddress . '<br>';
echo 'Latitude &nbsp'. $olat . '<br>';
echo 'Longitude &nbsp'. $olong . '<br>';
echo '
<script
src="http://maps.googleapis.com/maps/api/js">
</script>

<script>
var myCenter=new google.maps.LatLng('.$olat. ','.$olong.');

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:15,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,
  });

marker.setMap(map);
}

google.maps.event.addDomListener(window, "load", initialize);
</script>


<div id="googleMap" style="width:500px;height:380px;"></div>';


echo 'Contact &nbsp'. $ocontact . '<br>';
echo 'Category &nbsp'. $ocategory . '<br>';
echo 'Expiry &nbsp'. $oexpiry . '<br>';
echo 'Validity &nbsp'. $ovalid . '<br>';
echo 'Link &nbsp'. $olink . '<br>';
$ophoto = $_FILES['file_upload']['name'];
echo 'File Name &nbsp'. $_FILES['file_upload']['name'] .'<br>';
echo 'File Type &nbsp'. $_FILES['file_upload']['type'] .'<br>';
echo 'Temporary Name &nbsp'. $_FILES['file_upload']['tmp_name'] .'<br>';
echo 'File Size &nbsp'. $_FILES['file_upload']['size'] .'<br>';

$filename=$_FILES["file_upload"]["name"];
@$extension=end(explode(".", $filename));
$newfilename= $highest_id.".".$extension;

// Upload file
if(!move_uploaded_file($_FILES['file_upload']['tmp_name'], 'images/' . $newfilename)){
    die('Error uploading file - check destination is writeable.');
}




echo 'File uploaded successfully.';


$sql = "INSERT INTO offer (o_id, op_id, o_title, o_description, o_price, o_discount, o_photo, o_city, o_area, o_address, o_lat, o_long, o_contact, o_category, o_expiry, o_valid, o_link)VALUES (NULL, '" . $op_id . "', '" . $otitle . "', '". $odescription . "', '" . $oprice . "','" . $odiscount . "', 'http://savlbaservice.host22.com/images/" . $newfilename . "', '" . $ocity . "','" . $oarea . "','" . $oaddress . "', '" . $olat . "', '" . $olong . "', '" . $ocontact . "', '" . $ocategory . "' , '" . $oexpiry . "' , '" . $ovalid . "', '" . $olink . "');";


if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo '1 record added <br> <a href="adminui.html">Back To Admin UI</a><br>'; 

?>