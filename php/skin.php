<?php

include "mysql_connect.php";
$skin_big = array();
$color				= mysql_query("Select * FROM SKIN WHERE ACTIVE = '1'");
	while($row      					= mysql_fetch_array($color)) 	{
	$skin_big["SKIN_BIG_MASTER_BG"]		= "". $row["SKIN_BIG_MASTER_BG"] ."";
	$skin_big["SKIN_BIG_DATE_TIME_BG"]	= "". $row["SKIN_BIG_DATE_TIME_BG"] ."";
	$skin_big["SKIN_BIG_DATE_TIME_FT"]	= "". $row["SKIN_BIG_DATE_TIME_FT"] ."";
	$skin_big["SKIN_BIG_EVENT_BG"]		= "". $row["SKIN_BIG_EVENT_BG"] ."";
	$skin_big["SKIN_BIG_EVENT_FT"]		= "". $row["SKIN_BIG_EVENT_FT"] ."";
	}

echo json_encode($skin_big);

?>

