<?php 
//session_start();
if(isset($_SESSION['UserLogin'])){

}else{
  header('location:index.php');
}
?>


<?php include('inc_header.php');?>

  <div class="d-flex" id="wrapper">
      <!-- Sidebar -->
      <?php include('inc_sidebar.php');?>
      <!-- /#sidebar-wrapper -->
      <!-- Page Content -->
      <div id="page-content-wrapper">
          <?php include('inc_navbar.php'); ?>
          <div class="container-fluid d-flex h-100 align-items-center justify-content-center">  
            <h1 class="display-3 text-center"><span class="text-danger"><strong>PHP </strong></span> <span class="text-dark"><strong>CRUD CREATION</strong></h1>
          </div>
    </div>                       
  </div>
    <!-- /#page-content-wrapper -->
                

  <?php include('inc_footer.php') ?>