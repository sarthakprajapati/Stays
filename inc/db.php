<?php 

$db['db_host'] = 'localhost'; 
$db['db_user'] = 'root';
$db['db_pass'] = '';
$db['db_name'] = 'stays';

foreach ($db as $key => $value) {
	define(strtoupper($key), $value);
}

$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
$conn->set_charset("utf8"); //IMPORTANT
if(!$conn){
	die("Unable to connect");
}
?>