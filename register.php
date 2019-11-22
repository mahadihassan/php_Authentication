<?php
include 'header.php';
include 'lib/Database.php';
?>
<?php
	$message = '';
	if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {
		$firstName = $_POST['fname'];
		$lastName = $_POST['lname'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$pwd = $_POST['password'];
		$password = md5($pwd);

		$reg = ("INSERT INTO users(firstname, lastname, username, email, passwords) VALUES('$firstName', '$lastName', '$username', '$email', '$password')");
		$query =mysqli_query($connect, $reg);
		$message = "Registion Successfully";
	}
?>
<div class="card-header">
	<h4 class="text-center">Registion From </h4>
	<div class="card-body">
		<div style="max-width: 600px; margin: 0 auto">
			<?php if(!empty($message)): ?>
				<div class="alert text-center alert-success">
					<?= $message; ?>
				</div>
			<?php endif; ?>
			<form action="" method="post">
				<div class="form-group">
					<label for="name">First Name</label>
					<input type="text" name="fname" class="form-control" placeholder="First Name" required=""/>
				</div>
				<div class="form-group">
					<label for="username">Last Name</label>
					<input type="text" name="lname" class="form-control" placeholder="Last Name" required=""/>
				</div>
				<div class="form-group">
					<label for="username">UserName</label>
					<input type="text" name="username" class="form-control" placeholder="UserName" required=""/>
				</div>
				<div class="form-group">
					<label for="email">Email Address</label>
					<input type="text" name="email" class="form-control" placeholder="Email" required=""/>
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password" class="form-control" placeholder="Password" required=""/>
				</div>
				<button type="submit" name="register" class="btn btn-info btn-block">Register</button>
			</form>
		</div>
	</div>
</div>