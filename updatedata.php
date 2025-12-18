<?php
include 'db.php';
$id = $_POST['id'];
$name = $_POST['name'];
$department = $_POST['department'];
$designation = $_POST['designation'];
$email = $_POST['email'];

$sql = "UPDATE instructor SET name='$name', department='$department', designation='$designation', email='$email' WHERE instructor_id=$id";
mysqli_query($conn,$sql);
header("Location: index.php");
?>
