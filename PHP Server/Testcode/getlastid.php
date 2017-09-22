<?php

@$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("lbaservice", $con);


$highest_id = mysql_result(mysql_query("SELECT MAX(o_id) FROM offer"), 0);

echo $highest_id;
mysql_close($con);


?>