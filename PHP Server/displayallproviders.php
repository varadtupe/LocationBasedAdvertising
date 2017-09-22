<html>
<body>
<?php
@$con = mysql_connect("mysql8.000webhost.com","a8354107_savlba","sav140593");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("a8354107_savlba", $con);

$result = mysql_query("SELECT *  FROM provider;");
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
mysql_close($con);
?>
</body>
</html>