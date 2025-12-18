<?php
include 'db.php';
include 'header.php';
?>

<div id="main-content">
<h2>Update Faculty</h2>

<!-- STEP 1: Enter ID -->
<form class="post-form" method="post">
    <div class="form-group">
        <label>Faculty ID</label>
        <input type="text" name="fid" required>
    </div>
    <input class="submit" type="submit" name="show" value="Show">
</form>

<?php
if(isset($_POST['show'])){
    $fid = $_POST['fid'];
    $sql = "SELECT * FROM instructor WHERE instructor_id = $fid";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
?>

<!-- STEP 2: Update Form -->
<form class="post-form" action="" method="post">

    <input type="hidden" name="id" value="<?php echo $row['instructor_id']; ?>">

    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" value="<?php echo $row['name']; ?>">
    </div>

    <div class="form-group">
        <label>Department</label>
        <input type="text" name="department" value="<?php echo $row['department']; ?>">
    </div>

    <div class="form-group">
        <label>Designation</label>
        <input type="text" name="designation" value="<?php echo $row['designation']; ?>">
    </div>

    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" value="<?php echo $row['email']; ?>">
    </div>

    <input class="submit" type="submit" name="update" value="Update Faculty">

</form>

<?php
    }
}
?>

<?php
if(isset($_POST['update'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $dept = $_POST['department'];
    $desig = $_POST['designation'];
    $email = $_POST['email'];

    $sql = "UPDATE instructor SET 
            name='$name',
            department='$dept',
            designation='$desig',
            email='$email'
            WHERE instructor_id=$id";

    mysqli_query($conn,$sql);
    echo "<p style='text-align:center;color:green;'>Updated Successfully</p>";
}
?>

</div>
</div>
</body>
</html>
