<?php
include 'connection.php';
$username = $_POST["username"];
$rollnumber = $_POST['rollnumber'];
$sql = "select *from login where rollnumber = '$rollnumber'";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);

if ($count != 0) {
    echo "user exist";
} else {
    $mysql = "INSERT INTO login (username,rollnumber) VALUES ('$username','$rollnumber')";
    if ($result = mysqli_query($conn, $mysql)) {
        //creating a database
        $sql = "CREATE TABLE $rollnumber (
        rollnumber VARCHAR(8) DEFAULT '$rollnumber',
        eventname  VARCHAR(30) NOT NULL,
        reg_date DATE ,
        verified CHAR(1) DEFAULT 'F'
        )";

        if ($res = mysqli_query($conn, $sql)) {
            echo "file created";
        } else {

            echo "error:" . mysqli_error($conn);
        }
    } else {

        echo "error:" . mysqli_error($conn);
    }
}