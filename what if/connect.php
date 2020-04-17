<?php
$n1=$_POST["coordinates"];

$conn = mysqli_connect('localhost', 'root','', 'ss');
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


if (mysqli_query($conn,"INSERT INTO `user` 
VALUES ('".$n1."')")) {
    echo "Successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>