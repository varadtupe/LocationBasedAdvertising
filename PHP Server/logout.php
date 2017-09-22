<?php

	echo "Logged out successfully";
    
    session_start();
	unset($_SESSION["username"]);
	session_destroy();

?>
<html>
<body>
<a href="home.html">Login Again</a>
</body>
</html>