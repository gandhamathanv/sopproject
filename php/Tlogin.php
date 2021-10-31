<?php
include 'connection.php';

$email = $_POST["email"];
$password = $_POST['password'];
$sql = "select *from Tlogin where email = '$email' and password = '$password'";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);

if ($count == 1) {
    header('Location: ../teacherchoice.html');
} else {
    echo "failed";
}
