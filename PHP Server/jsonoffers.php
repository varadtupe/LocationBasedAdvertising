<?php

@$con = mysql_connect("mysql8.000webhost.com","a8354107_savlba","sav140593");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("a8354107_savlba", $con);


$result = mysql_query("SELECT * FROM offer");


while($row = mysql_fetch_assoc($result))
  {
	$output[]=$row;
  }

print(json_encode($output));
mysql_close($con);


?>