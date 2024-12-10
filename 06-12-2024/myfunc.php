<?php
require_once 'dbconf.php';

function student($connect) {
    try {
        $sql = "SELECT student_id, name FROM students";
        $result = mysqli_query($connect, $sql);

        if (mysqli_num_rows($result) > 0) {
            echo "<table border=1>";

            $col = mysqli_fetch_fields($result);
            echo "<tr>";
            foreach ($col as $value) {
                echo "<td>" . $value->name . "</td>";
            }
            echo "<td>View details</td>";
            echo "</tr>";

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                foreach ($row as $key => $value) {
                    echo "<td>$value</td>";
                }
                $student_id = $row['student_id'];
                echo "<td><a href='printtable.php?student_id=$student_id'>View</a></td>";
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "No results";
        }
    } catch (Exception $e) {
        die($e->getMessage());
    }
}

function Studentdetails($student_id, $connect) {
    try {
        $sql = "SELECT * FROM students WHERE student_id = $student_id";
        $result = mysqli_query($connect, $sql);

        if (mysqli_num_rows($result) > 0) {
            echo "<table border=1>";

            $col = mysqli_fetch_fields($result);
            echo "<tr>";
            foreach ($col as $value) {
                echo "<td>" . $value->name . "</td>";
            }
            echo "</tr>";

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                foreach ($row as $key => $value) {
                    echo "<td>$value</td>";
                }
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "No results";
        }
    } catch (Exception $e) {
        die($e->getMessage());
    }
}
?>