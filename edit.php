<?php
include 'header.php';
include 'db.php';
if(!isset($_SESSION['role']) || $_SESSION['role']!='admin'){ die("Access Denied"); }

$id = $_GET['id'];
$sql = "SELECT * FROM instructor WHERE instructor_id=$id";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
?>

<div id="main-content">
<h2>Update Faculty</h2>

<form class="post-form" action="updatedata.php" method="post">
<input type="hidden" name="id" value="<?php echo $row['instructor_id']; ?>"/>

<div class="form-group">
<label>Name</label>
<input type="text" name="name" value="<?php echo $row['name']; ?>"/>
</div>

<div class="form-group">
<label>Department</label>
<input type="text" name="department" value="<?php echo $row['department']; ?>"/>
</div>

<div class="form-group">
<label>Designation</label>
<input type="text" name="designation" value="<?php echo $row['designation']; ?>"/>
</div>

<div class="form-group">
<label>Email</label>
<input type="email" name="email" value="<?php echo $row['email']; ?>"/>
</div>

<input class="submit" type="submit" value="Update"/>
</form>
</div>
</div>
</body>
</html>
