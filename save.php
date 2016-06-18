<?php
	$operation = $_POST['operation'];

	if($operation == "save"){

		$name = $_POST['Name'];
		$email = $_POST['Email'];
		$message = $_POST['Message'];

		$con = mysqli_connect('localhost','root','','demo');
		$query = "INSERT INTO modaltable(name,email,message) VALUES('".$name."','".$email."','".$message."')";
		$result = mysqli_query($con,$query);
		echo $result;
	}

?>