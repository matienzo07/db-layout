<?php include('inc_header.php');?>

  <!-- Table Page Content -->
<nav class="navbar navbar-dark bg-light border-bottom rounded-left shadow mb-4 bg-white">
    <button id="menu-toggle" class="navbar-toggler">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="d-line">
        <a class="text-white  m-4 pb-4 text-decoration-none" href="#" data-toggle="tooltip" title="Hooray!">
            <i class="fa fa-bell"></i>
        </a>
        <a class="text-white  m-4 pb-4 text-decoration-none" href="#" data-toggle="tooltip" title="Hooray!">
            <i class="fa fa-key"></i>
        </a>
        <a class="text-white  m-4 pb-4 text-decoration-none" href="#" data-toggle="tooltip" title="Hooray!">
            <i class="fa fa-book"></i>
        </a>
        <?php if(isset($_SESSION['UserLogin'])){?>
            <a class="text-white  m-4 pb-4 text-decoration-none" href="logout.php" data-toggle="tooltip" title="Babye!">
            <i class="fa fa-sign-out"></i>Log out
        </a>
        <?php } else{ ?>

        <a class="text-white  m-4 pb-4 text-decoration-none" href="login.php" data-toggle="tooltip">
            <i class="fa fa-sign-out"></i>Login
        </a>
       <?php }?>
    </div>
</nav>
<?php include('inc_footer.php');?>