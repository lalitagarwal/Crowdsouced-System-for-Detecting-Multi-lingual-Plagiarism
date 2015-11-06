<!-- This file allows connection to the mysql database and handle any connection errors
-->
<?php require("constants.php");

	$connection= mysqli_connect(DB_SERVER, DB_USER, DB_PASS, False);
	if (!$connection){
		die("Database Connection falied: " . mysql_error());
	}
	
	mysqli_set_charset($connection,'utf8');
	
	$db_select=mysqli_select_db($connection, DB_NAME);
	if(!$db_select){
		die("Database selection failed: " . mysql_error());
	}
	
?>