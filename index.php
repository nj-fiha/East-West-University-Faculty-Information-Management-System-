

<?php
include 'header.php';
include 'db.php';

if(!isset($_SESSION['role'])){ header("Location: login.php"); }
?>

<div id="main-content">
<h2>Faculty List</h2>

<table cellpadding="7px">
<thead>
<th>ID</th>
<th>Name</th>
<th>Department</th>
<th>Designation</th>
<th>Email</th>
<th>Action</th>
</thead>

<tbody>
<?php
$sql = "SELECT * FROM instructor";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($result)){
?>
<tr>
<td><?php echo $row['instructor_id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['department']; ?></td>
<td><?php echo $row['designation']; ?></td>
<td><?php echo $row['email']; ?></td>
<td>
<?php if($_SESSION['role']=='admin'){ ?>
<a href="edit.php?id=<?php echo $row['instructor_id']; ?>">Edit</a>
<a href="delete-inline.php?id=<?php echo $row['instructor_id']; ?>">Delete</a>
<?php } else { echo "View Only"; } ?>
</td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
</div>
</body>
</html>
