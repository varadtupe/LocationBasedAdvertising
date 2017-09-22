<?php 
@$con = mysql_connect("mysql8.000webhost.com","a8354107_savlba","sav140593") or die ('I cannot connect to the database because: ' . mysql_error()); 
$selected = mysql_select_db ('a8354107_savlba') 
or die ('Could not select database because: ' . mysql_error()); 


// PHP Search Script 

$sql = "select * from offer where o_id = '".$_POST['o_id']."' or o_title = '". $_POST['o_title'] ."' or o_city = '". $_POST['o_city'] ."'";
//$sql = "select * from student_database, where first_name = '".$_GET['seek']."' or last_name = '". $_GET['seek'] ."' or id_number = '". $_GET['seek'] ."' or grade = '". $_GET['seek'] ."' or grad_year = '". $_GET['seek'] ."' or student_email = '". $_GET['seek'] ."' or dob = '". $_GET['seek'] ."'"; 
// $sql = "select * from student_database, where first_name = '".$_POST['seek']."' or last_name = '". $_POST['seek'] ."' or id_number = '". $_POST['seek'] ."' or grade = '". $_POST['seek'] ."' or grad_year = '". $_POST['seek'] ."' or student_email = '". $_POST['seek'] ."' or dob = '". $_POST['seek'] ."'";
$result = mysql_query($sql,$con)or die (mysql_error()); 


if (mysql_num_rows($result)==0){ 
echo "No Match Found"; 
}else{ 
echo '<table border=1>
<tr> 
<th>Offer ID</th>
<th>Provider ID</th>
<th>Title</th>
<th>Description</th>
<th>Price</th>
<th>Discount</th>
<th>City</th>
<th>Area</th>
<th>Address</th>
<th>Latitude</th>
<th>Longitude</th>
<th>Contact</th>
<th>Category</th>
<th>Expiry Date</th>
<th>Valid</th>
<th>Link</th>
<th>Photo</th>
</tr>
';
while ($row = mysql_fetch_array($result)){ 
echo '
  <tr>
  <td>' .$row['o_id']. '</td> 
  <td>' .$row['op_id']. '</td>
  <td>' .$row['o_title']. '</td>
  <td>' .$row['o_description']. '</td>
  <td>' .$row['o_price']. '</td>
  <td>' .$row['o_discount']. '</td>

  <td>' .$row['o_city']. '</td>
  <td>' .$row['o_area']. '</td>
  <td>' .$row['o_address']. '</td>
  <td>' .$row['o_lat']. '</td>
  <td>' .$row['o_long']. '</td>
  <td>' .$row['o_contact']. '</td>
  <td>' .$row['o_category']. '</td>
  <td>' .$row['o_expiry']. '</td>
  <td>' .$row['o_valid']. '</td>
  <td>' .$row['o_link']. '</td>
  <td> <img src="' .$row['o_photo']. '" width= 300 height= 200></td> 
</tr>';
} 
} 

mysql_close(); 
?>