<?php
/*
 * Created on May 25, 2017
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

// db credentials  
	define('DB_HOST', 'localhost');
	define('DB_USER','root');
	define('DB_PASS','GW4627YK'); // GW4627YK
	define('DB_NAME','aus_php');

// Connect with the database.
	function connect()
	{
	  $connect = mysqli_connect(DB_HOST ,DB_USER ,DB_PASS ,DB_NAME);
	
	  if (mysqli_connect_errno($connect))
	  {
	    die("Failed to connect:" . mysqli_connect_error());
	  }
	
	  mysqli_set_charset($connect, "utf8");
		
	  return $connect;
	}

?>