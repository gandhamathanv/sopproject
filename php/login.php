<?php
include 'connection.php';


$username = $_POST["username"];
$rollnumber = $_POST['rollnumber'];
session_start();
$_SESSION['roll'] = $rollnumber;
$sql = "select *from login where username = '$username' and rollnumber = '$rollnumber'";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);

if ($count == 1) {

    header("Location: ../choice.html");
} else {
    echo "failed";
}