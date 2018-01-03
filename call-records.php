<style type="text/css">
table {
	 border-collapse: collapse;
	background-color #fff;
	// width: 100%;
}
th {
    background-color: #4CAF50;
    color: white;
}
tr{
	text-align: left;
	//word-break: break-all;
	//word-break: normal;
	//display: table;
	//border: 1px solid blue;
}
//tr:hover {background-color: #f5f5f5}
tr:nth-child(even) {background-color: #f2f2f2}
th, td {
	border: 1px solid #e4e4e4;
	padding: 8px;
	vertical-align: center;
	border-bottom: 1px solid #ddd;
}
</style>
<?php

require('connect.php');

$result = mysql_query("SELECT * FROM thingsnetwork ORDER BY id DESC LIMIT 100");

echo "<table border='1'>
<tr>
<th>ID</th>
<th>value</th>
<th>Raw payload</th>
<th>Hex Payload</th>
<th>Extracted Hex Payload</th>
<th>Value(32bit int)</th>
<th>Time stamp</th>

</tr>";

while($row = mysql_fetch_array($result))
{

$id = $row['id'];
echo "<tr>";

echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['value2'] . "</td>";
echo "<td>" . $row['raw_payload'] . "</td>";
echo "<td>" . $row['hex_payload'] . "</td>";
echo "<td>" . $row['extracted_hex_payload'] . "</td>";
echo "<td>" . $row['value'] . "</td>";
echo "<td>" . $row['timestamp'] . "</td>";

echo "</tr>";
}
echo "</table>";

mysql_close();

?>
