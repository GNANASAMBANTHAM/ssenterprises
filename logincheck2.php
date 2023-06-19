<?php
	require_once 'connection.php';
	session_start();
	if(ISSET($_POST['submit'])){
		$email = $_POST['email'];
		$password = $_POST['password'];
	
		$query = mysqli_query($conn, "SELECT * FROM `logind` WHERE `email` = '$email' AND `password` = '$password'");
		$fetch = mysqli_fetch_array($query);
		$row = mysqli_num_rows($query);
		
		if($row > 0){
			$_SESSION['id']=$fetch['id'];
			header('location:index2.php');
		}else{
			echo "<script>alert('Invalid username or password')</script>";
			echo "<script>window.location='login.php'</script>";
		}
		
	}

?>