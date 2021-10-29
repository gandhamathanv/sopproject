
<?php
include 'connection.php';

$username = $_POST["username"];
$rollnumber = $_POST['rollnumber'];
$sql = "select *from login where username = '$username' and rollnumber = '$rollnumber'";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);

if ($count == 1) {
    echo "login successful";
} else {
    echo "failed";
}
?>