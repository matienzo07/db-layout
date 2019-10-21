<?php 
if(!isset($_SESSION)){
	session_start();
}

include("db_connect.php"); 

	if(isset($_POST['login'])){

		$username = $_POST['username'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
		$user = $con->query($sql) or die ($con->error);
		$row = $user->fetch_assoc();
		echo $total = $user->num_rows;

		if($total >0){
			$_SESSION['UserLogin'] = $row['username'];
			$_SESSION['Account_type'] = $row['account_type'];

			//echo $_SESSION['UserLogin'];
			header('location:./admin/select.php');
		}else{
			header('location:profile.php');
		}
		
	}

?>
<?php include('inc_header.php');?>
 <?php include('inc_navbar.php'); ?>  
	<div class="container ">
		<div class="row">
			<div class="col-md-12">
				<div class="card mt-4 mx-auto">
					<div class="card-header text-center border-white">
						<h3>Login</h3>
					</div>
					<div class="card-body">
						<form action="" method="POST">
								<div class="form-group">
									<input type="text" name="username"class="form-control" placeholder="Username">
								</div>
								<div class="form-group">
									<input type="password" name="password"class="form-control" placeholder="Password">
								</div>
								<div class="form-group form-check">
									<input type="checkbox" class="form-check-input">
										<label class="form-check-label">Remember Me</label>
								</div> 
								<input type="submit" name="login" class="btn btn-primary btn-block" value="Login">
						</form>	
					</div>
				</div>
			</div>
		</div>
	</div>