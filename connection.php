<?php

$host = "sql6.freesqldatabase.com";
$user = "sql6447894";
$password = "CE3N52fdqM";
$db = "sql6447894";

$conn = mysqli_connect($host, $user, $password, $db);

if (mysqli_connect_error()) {
    echo "error";
}
