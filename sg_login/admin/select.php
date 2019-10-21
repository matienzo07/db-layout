 <?php 

if(!isset($_SESSION)){
   	session_start();
}

   	if(isset($_SESSION['UserLogin'])){
       	echo "Welcome " .$_SESSION['UserLogin'];
        }else{
             echo "Welcom Guest";
        }
 ?> 


<?php include('../db_connect.php'); 
  $sql = mysqli_query($con, "SELECT * FROM employees");
?>

<?php include('../inc_header.php');?>
 	<div class="d-flex" id="wrapper">
 <?php include('../inc_sidebar.php');?>
    <div id="page-content-wrapper">
 <?php include('../inc_navbar.php'); ?>     
	<div class="container-fluid">
		<div class="container">
			<div class="card-body shadow-sm mb-4 bg-white mt-4">
				<div class="card-header bg-light border-white">
					<h3>Employees Details</h3>
						<a href="add.php" class="btn btn-success mb-2">Add New Employee</a>
				</div>
				<hr>
					<div class="table-responsive mt-4">
						<table class="table table-bordered table-striped table-hover">
							<thead>
								<tr>
									<th>ID#</th>
									<th>Name</th>
									<th>Address</th>
									<th>Salary</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>					
							<tbody>
								<tr>
									<?php 
									while ($row = $sql->fetch_assoc()) { 
										$id = $row['id'];
									?>
									
									<td><?= $row['id']?></td>
									<td><?= $row['name']?></td>
									<td><?= $row['address']?></td>
									<td ><?= number_format($row['salary'],2) ?></td>
									<td class="text-center">
										<a href="update.php?update=<?php echo $id?>">
											<button type="button" class="btn btn-success fa fa-edit mb-1"></button></a>
										<a href="delete.php?del=<?php echo $id?>">
											<button type="button" onclick="return confirm('Are you sure you want to delete this item?')" class="btn btn-danger fa fa-trash mb-1"></button></a>
									</td>
								</tr>
									<?php } ?>
							</tbody>
						</table>
					</div>
			</div>
				<!--End of Card-Body-->
		</div>
		<!--End of Container-->
	</div>
	<!--End of Container Fluid-->
	</div>                       
  </div>
 <?php include('../inc_footer.php'); ?>