
<?php
$dbHost = '127.0.0.1:3306';
$dbName = 'school';
$dbUser = 'mariadb';
$dbPass = 'mariadb';

try {
	$connect = mysqli_connect($dbHost,$dbName,$dbUser,$dbPass);
	if (!$connect) {
		die("connection failed".mysqli_connect_error());
	} 
	else {
	
	}
} 
catch (Exception $e) {
	die($e->getMessage());
}



?>