<?php 
include('db_connect.php');
    if(!isset($_SESSION)){
        session_start();
                  }

        if(isset($_SESSION['UserLogin'])){
            echo "Welcome " .$_SESSION['UserLogin'];
               	}else{
             			echo "Welcom Guest";
                  }

              ?> 
<?php include('inc_header.php');?>
<div class="d-flex" id="wrapper">

<div id="page-content-wrapper">
<?php include('inc_navbar.php'); ?>