<?php include('db_connect.php');
	if(isset($_GET['del'])){
		$id = $_GET['del'];
		$sql = "DELETE FROM employees WHERE id = '". $id. "' ";
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

