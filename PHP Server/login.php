<?php
$username=$_POST['u_name'];
$password=$_POST['pwd'];

@$con=mysql_connect("mysql8.000webhost.com","a8354107_savlba","sav140593") or die('Cannot connect' . mysql_error());
@mysql_select_db("a8354107_savlba");
$sql="SELECT * FROM users WHERE  u_name='".$username."'  AND pwd='".$password."'";
if(!$sql){
		die("Database Query Failed ".mysql_error());
	}
	$result=mysql_query($sql);
	while($row = mysql_fetch_array($result)){
	
		@$uname = $row['username'];
	}
	$count=mysql_num_rows($result);
	if($count==0){
		echo "<h3>You are NOT a Registered User!!</h3>";
		
	}else if($count==1){
	
		header('Location: adminui.html');
	}
	else{
		echo "Login Attempt Failed<br/><a href=\"../login.php\">Go Back</a>";
	}

?>