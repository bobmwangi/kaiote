<?php

require('connect.php');
 
// Reads the variables sent via POST from the gateway

//$sessionId   = mysql_real_escape_string($_POST["sessionId"]);

//$val   = $_POST["sessionId"];
//$val="54";
$val1 = json_decode(file_get_contents('php://input'), true);
$val_raw = $val1['payload_raw'];
$value1 = $val1['payload_fields'];
$value = $value1['value'];

/*if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
  $val= json_decode(file_get_contents("php://input"));
  //print_r($val);
}*/


 date_default_timezone_set("Africa/Nairobi");
     $timestamp = date("M j, H:i");//
//     $timestamp="dsfdg";
if (!empty($val1)){

$sql = "insert into thingsnetwork(id, value, raw_payload, timestamp) values (NULL, '$value', '$val_raw ', '$timestamp')";
  if(mysql_query($sql)){
    echo 'success';
  }
  else{
    echo 'failure';
  }
  }
  else{
  echo "token not valid";
  }
  mysql_close();
  
?>