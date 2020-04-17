<?php
$n1=$_POST["message"];
$n2=$_POST["name"];
$n3=$_POST["email"];
$n4=$_POST["subject"];
$n5=$_POST["coordinates"];



$conn = mysqli_connect('localhost', 'root','', 'ss');
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


if (mysqli_query($conn,"INSERT INTO `regii` 
VALUES ('".$n1."', '".$n2."', '".$n3."', '".$n4."' ,'".$n5."')")) {
    echo "Successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>