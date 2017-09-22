<html>
<body>
<?php
@$con = mysql_connect("mysql8.000webhost.com","a8354107_savlba","sav140593") or die ('I cannot connect to the database because: ' . mysql_error()); 
$selected = mysql_select_db ('a8354107_savlba') 
or die ('Could not select database because: ' . mysql_error()); 


// PHP Search Script 

$sql = "select * from provider where p_id = '".$_POST['p_id']."' or p_name = '". $_POST['p_name'] ."' or p_city = '". $_POST['p_city'] ."'";
//$sql = "select * from student_database, where first_name = '".$_GET['seek']."' or last_name = '". $_GET['seek'] ."' or id_number = '". $_GET['seek'] ."' or grade = '". $_GET['seek'] ."' or grad_year = '". $_GET['seek'] ."' or student_email = '". $_GET['seek'] ."' or dob = '". $_GET['seek'] ."'"; 
// $sql = "select * from student_database, where first_name = '".$_POST['seek']."' or last_name = '". $_POST['seek'] ."' or id_number = '". $_POST['seek'] ."' or grade = '". $_POST['seek'] ."' or grad_year = '". $_POST['seek'] ."' or student_email = '". $_POST['seek'] ."' or dob = '". $_POST['seek'] ."'";
$result = mysql_query($sql,$con)or die (mysql_error()); 


if (mysql_num_rows($result)==0){ 
echo "No Match Found"; 
}else
{ 
echo '<table border=1>
<tr> 
<th>ID</th>
<th>Name</th>
<th>Address</th>
<th>Latitude</th>
<th>Longitude</th>
<th>City</th>
<th>Area</th>
<th>Email</th>
<th>Website</th>
<th>Logo</th>
</tr>
';
while($row = mysql_fetch_array($result))
  {echo '
  <tr>
  <td>' .$row['p_id']. '</td> 
  <td>' .$row['p_name']. '</td>
  <td>' .$row['p_address']. '</td>
  <td>' .$row['p_lat']. '</td>
  <td>' .$row['p_long']. '</td>
  <td>' .$row['p_city']. '</td>
  <td>' .$row['p_area']. '</td>
  <td>' .$row['p_email']. '</td>
  <td>' .$row['p_website']. '</td>
  <td> <img src="' .$row['p_logo']. '" width= 300 height= 200></td> 
</tr>';
  }

echo'</table> <br> <a href="adminui.html">Back To Admin UI</a><br>';
}
mysql_close($con);
?>
</body>
</html>