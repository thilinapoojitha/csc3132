<?php
require_once 'dbconf.php';
require_once 'myfun.php';

if (isset($_GET['student_id'])) {
    $student_id = $_GET['student_id'];
    Studentdetails($student_id, $connect);
} else {
    echo "Student ID is missing!";
}
?>
