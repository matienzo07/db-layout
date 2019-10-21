<?php 
if(!isset($_SESSION)){
  session_start();
}

include("db_connect.php"); 

  $email = $password ="";
  $emailErr = $passwordErr = "";

  if(isset($_POST["login"])){
    if(empty($_POST["email"])){
        $emailErr = "Email is required!";
    }else{
        $email = $_POST["email"];
    }

    if(empty($_POST["password"])){
      $passwordErr = "Password is required!";
    }else{
      $password = $_POST["password"];
    }

    if($email && $password){
      $check_email = mysqli_query($con, "SELECT * FROM users WHERE email = '$email'");
      $check_email_row = mysqli_num_rows($check_email);
      if($check_email_row > 0){
        $row = mysqli_fetch_assoc($check_email);
        $db_password = $row["password"];
        $account_type = $row["account_type"];

        if($password == $db_password){
            if($account_type == 1){
              //redirect to admin
            }else{
              //redirect to users
            }
        }else{
            $passwordErr = "Password is incorrect!";
        }

      }else{
        $emailErr = "Email is not registered!";
      }
    }
}

?>
<?php include('inc_header.php');?>
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
                  <span class="text-danger"><?php echo $emailErr ?></span>
                </div>
                <div class="form-group">
                  <input type="password" name="password"class="form-control" placeholder="Password">
                </div>
                <div class="form-group">
                  <span class="text-danger"><?php echo $passwordErr ?></span>
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