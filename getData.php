<?php
/*
 * Created on May 20, 2017
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
require 'connect.php';

$postdata = file_get_contents("php://input");
$request     = json_decode($postdata);

// $clientRefNo  = preg_replace('/[^a-zA-Z ]/','',$request->clientRefNo);
$client  = $request->client;

$clientInfo = array();

$con = connect();
 
$sql="select job_no,analyst,client,address,date,report_no,client_ref_no from client_info where client = '$client'";
// echo $sql; 
if($result = mysqli_query($con,$sql))
{
  $count = mysqli_num_rows($result);

  $cr = 0;
  while($row = mysqli_fetch_assoc($result))
  {
      $clientInfo[$cr]['job_no']    = $row['job_no'];
      $clientInfo[$cr]['analyst']  = $row['analyst'];
      $clientInfo[$cr]['client']  = $row['client'];
      $clientInfo[$cr]['address']  = $row['address'];
      $clientInfo[$cr]['date']  = $row['date']; //date('m/d/Y',strtotime($row['date']));
      $clientInfo[$cr]['report_no']  = $row['report_no'];
      $clientInfo[$cr]['client_ref_no']  = $row['client_ref_no'];
      $cr++;
  }
}
$json = json_encode($clientInfo);
echo $json;
 
mysqli_close($con)
?>
