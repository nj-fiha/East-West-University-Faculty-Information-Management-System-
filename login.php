<?php
session_start();
include 'db.php';

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['role'] = $row['role'];
        header("Location: index.php");
        exit();
    }else{
        $error = "Invalid Login";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login | EWU System</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div id="wrapper">

    <div id="header">
        <h1>EWU Faculty Information Management</h1>
    </div>

    <div id="main-content">

        <h2 style="text-align:center;">Login</h2>

        <form class="post-form" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" required>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" required>
            </div>

            <input class="submit" type="submit" name="login" value="Login">

            <?php
            if(isset($error)){
                echo "<p style='color:red;text-align:center;'>$error</p>";
            }
            ?>
        </form>

    </div>
</div>

</body>
</html>
