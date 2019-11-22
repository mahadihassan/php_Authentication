<?php
	include 'header.php';
	include 'lib/Database.php';
?>
<?php
$message = '';
	if (isset($_POST['email']) && $_POST['password']) {
		$email = $_POST['email'];
		$pwd = $_POST['password'];
		$password = MD5($pwd);

		$query = "SELECT * FROM users WHERE email= '$email' AND passwords = '$password' ";
		$result = mysqli_query($connect, $query);
		if(mysqli_num_rows($result) > 0)
		{
			header("location: admin/dashboard.php");

		}
		else
		{
			$message = "Invalied email Or Password";
		}
	}
?>

<div class="card-header">
	<h4 class="text-center text-gray-dark">Login Form</h4>
	<div class="card-body">
		<div style="max-width: 600px; margin: 0 auto">
			<?php if (!empty($message)): ?>
				<div class="alert alert-danger">
					<?= $message; ?>
				</div>
			<?php endif; ?>
			<form action="" method="post">
				<div class="form-group">
					<label for="name">Email</label>
					<input type="text" name="email" class="form-control" placeholder="Please Enter Your email" required/>
				</div>
				<div class="form-group">
					<label for="username">Password</label>
					<input type="password" name="password" class="form-control" placeholder="Please Enter Your Password" required/>
				</div>
				<button type="submit" class="btn btn-info btn-block text-uppercase">login</button>
			</form>
		</div>
	</div>
</div>