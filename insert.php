
<?php include('connection.php');
if(isset($_POST['submit']))
{
		$username = $_POST['username'];
		$password = $_POST['password'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$sql = "INSERT INTO `logind`(`id`,`username`,`password`, `phone`,`email`) VALUES (NULL,'$username','$password','$phone','$email')";
			if(mysqli_query($conn, $sql)){
			echo "<script>alert('Successfully Submitted!'); window.location.href='login.php';</script>";}
			else
			{
			echo "ERROR: Hush! Sorry" .$sql. " 
			". mysqli_error($conn);
			}
		// Close connection
		mysqli_close($conn);
	}
?>
