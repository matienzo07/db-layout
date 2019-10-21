

<?php include('../inc_header.php');?>
 	<div class="d-flex" id="wrapper">
 <?php include('../inc_sidebar.php');?>
    <div id="page-content-wrapper">
 <?php include('../inc_navbar.php'); ?>

	<div class="container">
		<div class="card-body shadow-sm mb-4 mt-3">
			<div class="card-header bg-white border-white">
				<h3 class="page-title">Add New Employee</h3>
			</div>	
			<hr class="mb-4">
			<div class="container">
				<form action="add_process.php" method="POST" autocomplete="off" id="form">
					<div class="form-group">
						<label>Name</label>
						<input type="text" name="name" placeholder="Enter Your Name" required class="form-control">
					</div>
					<div class="form-group">
						<label>Address</label>
						<input type="text" name="address" placeholder="Enter Your Address" required class="form-control">
					</div>
					<div class="form-group">
						<label>Salary</label>
						<input type="text" name="salary" placeholder="Enter Your Salary" required class="form-control">
					</div>
					<div class="form-group">
						<input type="submit" name="btnAdd" class="btn btn-primary btn-block" value="Add New Employee">
					</div>
					<div class="form-group">
						<a href="select.php" class="text-decoration-none">
							<button type="button" class="btn btn-success btn-block"><span class="fa fa-sign-out"> Back</span></button>
						</a>
					</div>
				</form>
			</div>
		</div>
		<!--end of card-body-->
	</div>
	<!--End of Container-->
<?php include('../inc_footer.php'); ?>