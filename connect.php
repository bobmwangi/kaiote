<?php
$connection = mysql_connect('localhost', 'mamacare_bobapp', 'kenyatta47');
if (!$connection){
    die("Database Connection Failed" . mysql_error());
}
$select_db = mysql_select_db('mamacare_bob');
if (!$select_db){
    die("Database Selection Failed" . mysql_error());
}
?>