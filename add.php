<?php
include 'header.php';
include 'db.php';
if(!isset($_SESSION['role']) || $_SESSION['role']!='admin'){ die("Access Denied"); }
?>

<div id="main-content">
<h2>Add New Faculty</h2>

<form class="post-form" action="savedata.php" method="post">
<div class="form-group">
<label>Name</label>
<input type="text" name="name" required />
</div>

<div class="form-group">
<label>Department</label>
<input type="text" name="department" required />
</div>

<div class="form-group">
<label>Designation</label>
<input type="text" name="designation" required />
</div>

<div class="form-group">
<label>Email</label>
<input type="email" name="email" required />
</div>

<input class="submit" type="submit" value="Save Faculty" />
</form>
</div>
</div>
</body>
</html>
