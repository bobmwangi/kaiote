<?php

header('Content-Type: application/json');
   
require('connect.php');

    //fetch table rows from mysql db
    $sql = "SELECT value, timestamp from (SELECT * FROM thingsnetwork WHERE id % 20 =0 ORDER BY id DESC LIMIT 20) sub ORDER BY id ASC";
    
    $result = mysql_query( $sql) or die("Error in Fetching " . mysql_error());

    //create an array
    $emparray= array();
    while($row =mysql_fetch_assoc($result))
    {
        $emparray[] = $row;
    }
    echo json_encode($emparray);

    //close the db connection
    //mysql_close();
?>