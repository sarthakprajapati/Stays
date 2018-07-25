<?php 

$db['db_host'] = 'sql212.epizy.com'; 
$db['db_user'] = 'epiz_22416885';
$db['db_pass'] = 'I0hrfuv978WwI';
$db['db_name'] = 'epiz_22416885_stays';

foreach ($db as $key => $value) {
	define(strtoupper($key), $value);
}

$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
$conn->set_charset("utf8"); //IMPORTANT
if(!$conn){
	die("Unable to connect");
}
?>