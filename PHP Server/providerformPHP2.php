<?php

@$con=mysql_connect("mysql8.000webhost.com","a8354107_savlba","sav140593") or die('Cannot connect' . mysql_error());
@mysql_select_db('a8354107_savlba');

$highest_id = mysql_result(mysql_query("SELECT MAX(p_id) FROM provider"),0);
$highest_id++;


@$pname= $_POST['p_name'];
@$paddress= $_POST['p_address'];
@$plat= $_POST['p_lat'];
@$plong= $_POST['p_long'];
@$pcontact= $_POST['p_contact'];
@$pcity= $_POST['p_city'];
@$pemail= $_POST['p_email'];
@$parea=  $_POST['p_area'];
@$pwebsite= $_POST['p_website'];

echo 'Name &nbsp ' . $pname . '<br>';
echo 'Address &nbsp'. $paddress . '<br>';
echo 'Latitude &nbsp'. $plat . '<br>';
echo 'Longitude &nbsp'. $plong . '<br>';

echo '
<script
src="http://maps.googleapis.com/maps/api/js">
</script>

<script>
var myCenter=new google.maps.LatLng('.$plat. ','.$plong.');

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

echo 'City &nbsp'. $pcity . '<br>';
echo 'Area &nbsp'. $parea . '<br>';
echo 'Contact &nbsp'. $pcontact . '<br>';
echo 'Email &nbsp'. $pemail . '<br>';
echo 'Website &nbsp' .$pwebsite . '<br>';
echo 'File Name &nbsp'. $_FILES['file_upload']['name'] .'<br>';
echo 'File Type &nbsp'. $_FILES['file_upload']['type'] .'<br>';
echo 'Temporary Name &nbsp'. $_FILES['file_upload']['tmp_name'] .'<br>';
echo 'File Size &nbsp'. $_FILES['file_upload']['size'] .'<br>';

$filename=$_FILES["file_upload"]["name"];
@$extension=end(explode(".", $filename));
$newfilename= $highest_id.".".$extension;

// Upload file
if(!move_uploaded_file($_FILES['file_upload']['tmp_name'], 'logo/' . $newfilename)){
    die('Error uploading file - check destination is writeable.');
}
echo 'File uploaded successfully.';

$sql = "INSERT INTO provider  VALUES (NULL, '" . $pname . "', '" . $paddress . "', '". $plat . "', '" . $plong . "','" . $pcity . "', '" . $parea . "', '" . $pcontact . "','" . $pemail . "','" . $pwebsite . "', 'http://savlbaservice.host22.com/logo/" . $newfilename . "');";


if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo '1 record added <br> <a href="adminui.html">Back To Admin UI</a><br>';
?>