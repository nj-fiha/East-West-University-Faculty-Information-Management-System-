<?php
include 'db.php';
$id = $_GET['id'];
$sql = "DELETE FROM instructor WHERE instructor_id = $id";
mysqli_query($conn,$sql);
header("Location: index.php");
?>
