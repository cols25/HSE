<?php
/*
 * Created on May 20, 2017
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 
require 'connect.php';
	
	$con = connect();
	$url ='index.php';
	
	$jobno = $_POST['jobno'];
	$analyst = $_POST['analyst'];
	$client = $_POST['client'];
	$address = $_POST['address'];
	$date = $_POST['analysisdate'];
	$reportno = $_POST['reportNo'];
	$clientrefno = $_POST['clientRefNo'];
	 
	$sql="INSERT INTO client_info (job_no,analyst,client,address,date,report_no,client_ref_no) " .
			"VALUES ('$jobno','$analyst','$client','$address','$date','$reportno','$clientrefno')";
	 echo $sql;
	if (!mysqli_query($con,$sql))
	  {
	  	die('Failed to insert: ' . mysqli_error($con));
	  }
	echo "1 record added";
 	set_time_limit(15000);
	mysqli_close($con);
	//sleep(10000);
	header('Location: ' . $url);
    die();
    
?>