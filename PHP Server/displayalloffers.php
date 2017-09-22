<html>
<body>
<?php
@$con = mysql_connect("mysql8.000webhost.com","a8354107_savlba","sav140593");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("a8354107_savlba", $con);

$result = mysql_query("SELECT *  FROM offer;");
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
while($row = mysql_fetch_array($result))
  {echo '
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
  <td> <img src="' .$row['o_photo']. '" width= 200 height= 150></td> 
</tr>';
  }
echo'</table> <br> <a href="adminui.html">Back To Admin UI</a><br>';
mysql_close($con);
?>
</body>
</html>