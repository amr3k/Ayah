<?php
$db_host 		= '127.0.0.1';
$db_name 		= 'Holy Quran';
$db_username	= 'root';
$db_password	= ''; 
$db				= mysqli_connect($db_host,$db_username,$db_password,$db_name);
mysqli_set_charset($db, "utf8");
if ($db -> connect_errno) {
	echo "Failed to connect to MySQL: (".$db->connect_errno.")".$db->connect_error;
}
#echo $db->host_info . "\n";
