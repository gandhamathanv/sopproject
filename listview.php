<?php
include 'connection.php';

$result = mysqli_query($conn, "SELECT * FROM login;");
mysqli_close($conn);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAP PROTOCOL</title>
</head>

<body>
    <table align="center" border="2px">
        <tr>
            <th colspan="2">participation list</th>
        </tr>
        <tr>
            <th>NAME</th>
            <th>rollnumber</th>
            <th>check deatils</th>
        </tr>
        <?php
        while ($rows = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $rows['username']; ?></td>
            <td><?php echo $rows['rollnumber']; ?></td>
            <td align="center"><button href="check.php">check</button></td>

        </tr>
        <?php      }
        ?>
    </table>
</body>

</html>