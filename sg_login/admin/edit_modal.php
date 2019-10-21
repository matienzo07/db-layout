<?php
include('db_connect.php');
error_reporting(0);
$id = $_GET['update'];

$sql = "SELECT * FROM employees WHERE id = '".$id. "' ";
$query = mysqli_query($con, $sql);
while($row=mysqli_fetch_array($query)){

	$id = $row['id'];
	$name = $row['name'];
	$address = $row['address'];
	$salary = $row['salary'];
}
?>
 
	<div class="container">
		<div class="card-body shadow-sm mb-4 mt-3">
			<div class="card-header bg-white border-white">
				<h1 class="page-title">Update</h1>
			</div>
			<hr>
			<div class="container">
				<form action="update_process.php?id=<?php echo $id?>" method="POST">
					<div class="form-group">
						<label>Id</label>
							<input type="text" name="id" value="<?php echo $id ?>" class="form-control" readonly>
					</div>
					<div class="form-group">
						<label>Name</label>
							<input type="text" name="name" value="<?php echo $name ?>" class="form-control">
					</div>
					<div class="form-group">
						<label>Address</label>
							<input type="text" name="address" value="<?php echo $address ?>" class="form-control">
					</div>
					<div class="form-group">
						<label>Salary</label>
							<input type="text" name="salary" value="<?php echo $salary ?>" class="form-control">
					</div>
					<div class="form-group">
						<button name="btnupdate" class="btn btn-primary btn-block">Update Employee Record</button>
					</div>
					<div class="form-group">
						<a href="select.php" class="text-decoration-none">
							<button type="button" class="btn btn-success btn-block">
								<span class="fa fa-sign-out">Back</span>
							</button>
						</a>
					</div>
				</form>
			</div>
		</div>
		<!--End of Card-body -->
	</div>
	<!--End of Container -->
<?php include('inc_footer.php'); ?>