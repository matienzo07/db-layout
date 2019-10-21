<?php
include('db_connect.php');

if(isset($_POST['btnupdate'])){
	$id = $_GET['id'];
	$name = $_POST['name'];
	$address = $_POST['address'];
	$salary = $_POST['salary'];

	$sql = "UPDATE employees SET name = '".$name. "', address = '".$address. "', salary = '".$salary. "' WHERE id = '".$id. "'";
	$query = mysqli_query($con, $sql);
	if($query){
		header('location:select.php');
	}else{
		echo "Error";
	}
}else{
	header('location:select.php');
}



?>