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
        echo "file added";
    } else {
        echo "error:" . mysqli_error($conn);
    }
}
