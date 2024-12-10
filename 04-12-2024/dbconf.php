<?php
define('SERVERNAME', '127.0.0.1:3306');
define('USERNAME', 'root');
define('PASSWORD', 'mariadb');
define('DBNAME', 'School');

try {
    $connect = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);
    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
    }
} catch (Exception $e) {
    die($e->getMessage());
}
?>