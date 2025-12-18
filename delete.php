<?php
include 'header.php';
include 'db.php';
if(!isset($_SESSION['role']) || $_SESSION['role']!='admin'){ die("Access Denied"); }
?>

<div id="main-content">
<h2>Delete Faculty</h2>

<form class="post-form" action="delete-inline.php" method="get">
<div class="form-group">
<label>Faculty ID</label>
<input type="text" name="id"/>
</div>
<input class="submit" type="submit" value="Delete"/>
</form>
</div>
</div>
</body>
</html>
