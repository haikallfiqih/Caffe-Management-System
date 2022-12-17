<?php 
  include 'components/header.php';
  include 'components/function.php';
  
  session_start();
  if (!isset($_SESSION['username'])){
    if($_SESSION['role'] == 'admin'){
     header("Location: dashboardadmin.php");
    } elseif ($_SESSION['role'] == 'cashier'){
     header("Location: dashboardcashier.php");
    } else{
     header("Location: login.php");
    }
  }
 

  $conn = connection();

      $products= query("SELECT * FROM product");
      

      $id =  $_SESSION['id'];
      
      $Get = "SELECT * FROM user WHERE id = '$id'";
      $res = mysqli_query($conn, $Get);
      $row= mysqli_fetch_array($res);
  ?>



<!DOCTYPE html>
<html lang="en">


  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
      <div class="d-flex align-items-center justify-content-between">
        <a href="index.php" class="logo d-flex align-items-center">
          <img src="assets/img/logo.png" alt="" />
          <span class="d-none d-lg-block">PRES U Caffe</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
      </div>
      <!-- End Search Bar -->

      <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">
          <li class="nav-item d-block d-lg-none">
            <a class="nav-link nav-icon search-bar-toggle" href="#">
              <i class="bi bi-search"></i>
            </a>
          </li>
          <!--End Search Icon-->
 
          <!-- End Profile Nav -->
        </ul>
      </nav>
      <!-- End Icons Navigation -->
    </header>
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <?php 
    include ('components/sidebaruser.php');
    ?>
    <!-- End Sidebar-->
 
    <main id="main" class="main">
      <div class="pagetitle">
        <h3> Hello, <span  class="text-primary"><?php echo $row['username'] ?>!</span> Please Choice your Order! </h3>
      </div>
      <!-- End Page Title -->

    
<h4>Food</h4> 
<div class="col-lg-12">
<div class="row">
      <div class="card-body">
                  
                    <div class="col-xxl-4 col-md-3">
                    <?php foreach( $products as $p) : ?>
                  <img src='pictureshow.php?productId=<?= $p ?>'  alt=""/>
                     <p><?php echo $p['productName']  ?></p>
                     <h5 class="card-title"><?php echo $p['productPrice']  ?></h5>
                     </div>
                     <a href="orderuser.php" class="btn btn-primary">Order</a>
                     <?php endforeach ?>    
                </div>
          </div>
          </div>  
          </div>
         <h4>Drink</h4>

         <div class="col-lg-12">
            <div class="row">
   
       <div class="col-xxl-4 col-md-3">
           <img src="assets/img/lemon.png" alt="" width="150px" height="150px">
           <p>Lemon Tea</p>
           <p>Rp. 10.000</p>
           <p>5</p>
       </div>
       <div class="col-xxl-4 col-md-3">
           <img src="assets/img/thai.png" alt="" width="150px" height="150px">
           <p>Thai Tea Original</p>
           <p>Rp. 25.000</p>
           <p>4</p>
       </div>
       <div class="col-xxl-4 col-md-3">
           <img src="assets/img/coffee.png" alt="" width="150px" height="150px">
           <p>Coffee</p>
           <p>Rp. 30.000</p>
           <p>5</p>
       </div>
      <div class="col-xxl-4 col-md-1">
           <img src="assets/img/avocado.png" alt="" width="150px" height="150px">
           <p>Avocado Juice</p>
           <p>Rp. 20.000</p>
           <p>5</p>
       </div>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

     <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.min.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
