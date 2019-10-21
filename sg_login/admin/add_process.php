<?php
include('db_connect.php');

	$name = $_POST['name'];
	$address = $_POST['address'];
	$salary = $_POST['salary'];

	$sql = "INSERT INTO employees (id, name, address, salary) VALUES(null, '$name', '$address', '$salary')";
	if(mysqli_query($con, $sql)){
		header('location:select.php');
	}else{
		echo "Error";
	}

?>