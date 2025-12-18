<?php
include 'db.php';
$name = $_POST['name'];
$department = $_POST['department'];
$designation = $_POST['designation'];
$email = $_POST['email'];
$sql = "INSERT INTO instructor(name,department,designation,email) VALUES ('$name','$department','$designation','$email')";
mysqli_query($conn,$sql);
header("Location: index.php");
?>
