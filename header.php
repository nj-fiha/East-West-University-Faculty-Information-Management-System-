<?php
if(session_status() === PHP_SESSION_NONE){
    session_start();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>EWU Faculty Course Assignment System</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div id="wrapper">

<div id="header">
    <h1>EWU Faculty Information Management</h1>
</div>

<div id="menu">
    <ul>
        <li><a href="index.php">Faculty</a></li>

        <?php if(isset($_SESSION['role']) && $_SESSION['role']=='admin'){ ?>
            <li><a href="add.php">Add Faculty</a></li>
            <li><a href="update.php">Update Faculty</a></li> 
<li><a href="delete.php">Delete Faculty</a></li> 

        <?php } ?>

        <li><a href="logout.php">Logout</a></li>
    </ul>
</div>
