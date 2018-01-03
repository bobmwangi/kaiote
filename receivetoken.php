<?php

require('connect.php');
 
// Reads the variables sent via POST from the gateway

//receive the POST data; encode to json
$val1 = json_decode(file_get_contents('php://input'), true);

//extract the raw payload
$val_raw = $val1['payload_raw'];

//extract the object payload_files
$value1 = $val1['payload_fields'];
//access the value
$value = $value1['value'];

//base64 to HEX
$binary = base64_decode($val_raw);
$hex = bin2hex($binary);
//Truncate the HEX to remove 0x01
$trunc_hex= substr($hex,0,8);

//convert the hex to int
$int_value = hexdec($trunc_hex);
//echo $new_int;



 date_default_timezone_set("Africa/Nairobi");
     $timestamp = date("M j, H:i");//
//     $timestamp="dsfdg";
if (!empty($val1)){

$sql = "insert into thingsnetwork(id, value, raw_payload, hex_payload, extracted_hex_payload, value2, timestamp) values (NULL, '$int_value', '$val_raw', '$hex', '$trunc_hex', '$value', '$timestamp')";
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
