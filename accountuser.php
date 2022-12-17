<?php 
  include 'components/header.php';
  include 'components/function.php';
  $conn = connection();
  session_start();
      $products= query("SELECT * FROM product");
      

      $id =  $_SESSION['id'];
      
      $Get = "SELECT * FROM user WHERE id = '$id'";
      $res = mysqli_query($conn, $Get);
      $row= mysqli_fetch_array($res);
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Order</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

     <!-- Favicons -->
     <link href="assets/img/favicon.png" rel="icon" />
     <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />
 
     <!-- Google Fonts -->
     <link href="https://fonts.gstatic.com" rel="preconnect" />
     <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />
 
     <!-- Vendor CSS Files -->
     <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
     <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
     <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
     <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet" />
     <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet" />
     <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
     <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet" />
 
     <!-- Template Main CSS File -->
     <link href="assets/css/style.css" rel="stylesheet" />
 
    <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  </head>

 <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
      <a href="usersetting.html" class="logo d-flex align-items-center">
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
    include ('dbconnect.php');
    // $query = mysqli_query($connection,"SELECT * FROM discount ORDER BY id DESC");
    ?>
   
<main id="main" class="main">
        <div class="pagetitle">
          <h3>Account</h3>
        </div>
        
        <!-- End Page Title -->

                <!-- Recent Sales -->
                <form>
                    <div >
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                        <input type="name" class="form-control" id="inputEmail3">
                        </div>
                      </div>
                    <div >
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Phone Number</label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3" placeholder="08xxxxxxxxxx">
                      </div>
                    </div>
                    <div>
                      <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                      </div>
                    </div>
                    
                    <fieldset class="form-group">
                      <div class="row">
                        <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                        <div class="col-sm-10">
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                            <label class="form-check-label" for="gridRadios1">
                              Male
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                            <label class="form-check-label" for="gridRadios2">
                             Female
                            </label>
                          </div>
                      </div>
                    </div>
                    <div>
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Change Password</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="inputPassword4" placeholder="Change Password">
                        </div>
                      </div><span></span>
                      <div> <td>File</td>
                <td>:</td>
                <td> <input type="file" name="userfile" /></td>
              </div>
                    <div class="form-group row">
                      <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Save</button>
                      </div> 
                    </div> 
                  
                    <tr>
              
            </tr>
                  </form>
                  
                     
                    </div>
                  </div>
                </div>
                <!-- End Recent Sales -->
                
  
  
 
  
      <!-- Template Main JS File -->
      <script src="assets/js/main.js"></script>
      <script src="assets/js/mdb.min.js.map"></script>
      <script src="assets/js/mdb.min"></script>
    </body>
  </html>
  
 