<?php
define('HOST', 'localhost');
define('USERNAME', 'root');
define('PASS','');
define('DB', 'p1');

$conn = new mysqli(HOST,USERNAME,PASS,DB);
$conn->set_charset('utf8');
if(!$conn){
	echo $conn -> connect_error;
};

