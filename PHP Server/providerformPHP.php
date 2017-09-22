<html>
<body>
<?php
@$pname= $_POST['p_name'];
@$paddress= $_POST['p_address'];
@$plat= $_POST['p_lat'];
@$plong= $_POST['p_long'];
@$pcontact= $_POST['p_contact'];
@$pcity= $_POST['p_city'];
@$pemail= $_POST['p_email'];
@$parea=  $_POST['p_area'];
@$pwebsite= $_POST['p_website'];

echo 'Name ' . $pname . '<br>';
echo $paddress . '<br>';
echo $plat . '<br>';
echo $plong . '<br>';
echo $pcity . '<br>';
echo $parea . '<br>';
echo $pcontact . '<br>';
echo $pemail . '<br>';
echo $pwebsite . '<br>';
$ophoto = $_FILES['file_upload']['name'];
echo $_FILES['file_upload']['name'] .'<br>';
echo $_FILES['file_upload']['type'] .'<br>';
echo $_FILES['file_upload']['tmp_name'] .'<br>';
echo $_FILES['file_upload']['size'] .'<br>';


/*
@$con=mysql_connect('localhost','root','') or die('Cannot connect' . mysql_error());
@mysql_select_db('lbaservice');
$sql = "INSERT INTO provider  VALUES (NULL, '" . $pname . "', '" . $paddress . "', '". $plat . "', '" . $plong . "','" . $pcity . "', '" . $parea . "', '" . $pcontact . "','" . $pemail . "','" . $pwebsite . "', '" . $newfile . "');";


if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo '1 record added <br> <a href="adminui.html">Back To Admin UI</a><br>';
*/
?>

</body>
</html>

