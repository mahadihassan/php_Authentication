<?php
	include 'header.php';
	include '../lib/Database.php';
?>

<?php
	$query = "SELECT * FROM users";
	$result =mysqli_query($connect, $query);
?>

<div class="container">
	<div class="row text-center">
		<table class="table table-striped table-bordered">
			<tr>
				<th>Id</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>UserName</th>
				<th>Email</th>
				<th>Action</th>
			</tr>
			<?php while ($row = mysqli_fetch_assoc($result)) {
				$id = $row['id'];
				$firstName =  $row['firstname'];
				$lastName = $row['lastname'];
				$userName = $row['username'];
				$email = $row['email'];
			?>
			<tr>
				<td><?php echo $id; ?></td>
				<td><?php echo $firstName; ?></td>
				<td><?php echo $lastName; ?></td>
				<td><?php echo $userName; ?></td>
				<td><?php echo $email; ?></td>
				<td>
					<a onclick="return confirm('Are you sure delete')" href="delete.php?id=<?php echo $id ?>" class="btn btn-danger">Delete</a>
				</td>
			</tr>
			<?php } ?>
		</table>
	</div>
</div>
