<?php

mysql_connect("localhost", "username_sms", "####");
mysql_select_db("username_sms");

$sql = "SELECT * FROM smsinput";
$data = mysql_query($sql);

$var = array();
while($row = mysql_fetch_array($data)){
	
	$arrayName = array('from' => $row['from'],'keyword' => $row['keyword'],'text' => $row['text'], 
		'timestamp' => $row['timestamp'],);
	array_push($var, $arrayName);
}


echo json_encode($var);
?>