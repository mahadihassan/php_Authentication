<?php
	include '../lib/Database.php';
?>
<?php
	if (isset($_GET['id'])) 
	{
		$id = $_GET['id'];
		$query = "DELETE FROM users WHERE id ='".$id."' ";
		$result = mysqli_query($connect, $query);

		if ($result)
		{
			header("location: index.php");
		}
		else
		{
			echo "Your Query is worng";
		}
	}
	else
	{
		header("location: index.php");
	}
?>