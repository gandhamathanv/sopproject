<?php
include 'connection.php';
$event = $_POST["event"];
$date = $_POST["date"];
session_start();
$name = $_SESSION["username"];
$roll = $_SESSION["rollnumber"];
$mysql = "INSERT INTO events (rollnumber,eventname,date,proof,verified) VALUES ('$roll','$event','$date','7889','NO');";
mysqli_query($conn, $mysql);
if (mysqli_error($conn)) {
    echo mysqli_error($conn);
} else {
    header("Location: ../choice.html");
}