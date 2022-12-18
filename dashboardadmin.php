<?php
 include 'components/header.php';
 
 session_start();
 if (!isset($_SESSION['username'])){
  header("Location: login.php");

  } elseif(isset($_SESSION['username'])){
   if($_SESSION['role'] === 'customer'){
     header("Location: dashboarduser.php");
    }  elseif ($_SESSION['role'] === 'cashier'){
      header("Location: dashboardcashier.php");
    }
 } 

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
    include ('components/sidebar.php')
    
    ?>
    <!-- End Sidebar-->
 
    <main id="main" class="main">
      <div class="pagetitle">
        <h2 class="text-primary">Dashboard</h2>
      </div>
      <!-- End Page Title -->

    

      <section class="section dashboard">
        <div class="row">
          <!-- Left side columns -->
          <div class="col-lg-12">
            <div class="row">
              <!-- Sales Card -->
              <div class="col-xxl-4 col-md-4">
                <div class="card-pu info-card sales-card">
                  

                  <div class="card-body">
                    <h5 class="card-title">Your Product</h5>

                    <div class="d-flex align-items-start">
                      <div class="ps-3">
                        <h1>145</h1>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Sales Card -->

              <!-- Sales Card -->
              <div class="col-xxl-4 col-md-4">
                <div class="card-pu info-card sales-card">
                 

                  <div class="card-body">
                    <h5 class="card-title">Sales Made</h5>

                    <div class="d-flex align-items-start">
                      <div class="ps-3">
                        <h1>145</h1>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Sales Card -->
              <!-- Customers Card -->
              <div class="col-xxl-4 col-xl-4">
                <div class="card-pu info-card customers-card">
      
                  <div class="card-body">
                    <h5 class="card-title">Employee</h5>

                    <div class="d-flex align-items-center">
                      <div class="ps-3">
                        <h1>1244</h1>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Customers Card -->


      <!-- End Left side columns -->
        

              <!-- Recent Sales -->
            
              <h4>Transactions</h4>

<p class="date">Kamis, 16 desember 2022</p>

<div class="col-lg-12">
<div class="row">

<div class="col-xxl-4 col-md-1">
   <p>Picture</p>
   <p>Picture2</p>

 </div>

 <div class="col-xxl-4 col-md-2">
   <p>Halal Pork Pizza</p>
   <p>Red Baby Cake</p>
 </div>

 <div class="col-xxl-4 col-md-3">
   <p>Success</p>
 </div>

 <div class="col-xxl-4 col-md-3">
   <p>Receipt.jpg</p>
   <p>Receipt.jpg</p>
 </div>

 <div class="col-xxl-4 col-md-2">
   <p>+Rp.120.000</p>
   <p>+Rp.130.000</p>
 </div>
 
<p class="date">Kamis, 15 desember 2022</p>

<div class="col-lg-12">
<div class="row">

<div class="col-xxl-4 col-md-1">
   <p>Picture</p>
   <p>Picture2</p>
 </div>

 <div class="col-xxl-4 col-md-2">
   <p>Black Burger</p>
   <p>Cilok Goreng</p>
 </div>

 <div class="col-xxl-4 col-md-3">
   <p>Success</p>
   <p>Success</p>
 </div>

 <div class="col-xxl-4 col-md-3">
   <p>Receipt.jpg</p>
   <p>Receipt.jpg</p>
 </div>

 <div class="col-xxl-4 col-md-2">
   <p>+Rp.110.000</p>
   <p>+Rp.120.000</p>
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
