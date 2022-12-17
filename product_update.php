<?php
include("dbconnect.php");
$productId = $_GET['productId'];

$sql = "SELECT * FROM product WHERE productId= '$productId'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Products</title>
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
      <a href="index.html" class="logo d-flex align-items-center">
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
  <aside id="sidebar" class="sidebar">

      
      <div class="row">
      <div class="col-lg-12">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3">Jessie U.</h5>
            <p class="text-muted mb-1">Admin</p>
       
          </div>
        </div>  

        <ul class="sidebar-nav" id="sidebar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.html">
              <i class="bi bi-grid"></i>
              <span>Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="products.html">
              <i class="bi bi-grid"></i>
              <span>Products</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="usersetting.html">
              <i class="bi bi-grid"></i>
              <span>User Settings</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="discount.html".html">
              <i class="bi bi-grid"></i>
              <span>Discount</span>
            </a>
          </li>
        <li class="nav-item">
          <a class="nav-link" href="sell.html".html">
            <i class="bi bi-grid"></i>
            <span>Seller</span>
          </a>
        </li>
        <!-- End Login Page Nav -->
    
        <button type="button" class="btn btn-danger">Log Out</button>
      </aside>
      <!-- End Sidebar-->
   
      <main id="main" class="main">
        <div class="pagetitle">
          <h3>Product</h3>
        </div>
        <div><button margin="50" type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
         ADD
         </button></div>
        <!-- End Page Title -->

                <!-- Recent Sales -->
     
                      <table class="table table-borderless datatable">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Type</th>
                            <th scope="col">Qty</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <!-- Button trigger modal -->

<!-- Modal -->
                        <tbody>
                          <tr>
                            <th scope="row"><a href="#">#2457</a></th>
                            <td>Brandon Jacob</td>
                            <td><a href="#" class="text-primary">At praesentium minu</a></td>
                            <td>Food</td>
                            <td>10</td>
                            <td><button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
                             Edit
                            </button></td>
                            <td><button type="button" class="btn btn-warning">Delete</button></td>
                            
                          </td>
                          </tr>
                          <tr>
                            <th scope="row"><a href="#">#2147</a></th>
                            <td>Bridie Kessler</td>
                            <td><a href="#" class="text-primary">Blanditiis dolor omnis similique</a></td>
                            <td>Food</td>
                            <td>10</td>

                            <td><button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
                              Edit
                             </button></td>
                             <td><button type="button" class="btn btn-warning">Delete</button></td>
                          </tr>
                          <tr>
                            <th scope="row"><a href="#">#2644</a></th>
                            <td>Angus Grady</td>
                            <td><a href="#" class="text-primar">Ut voluptatem id earum et</a></td>
                            <td>Food</td>
                            <td>10</td>

                            <td><button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
                              Edit
                             </button></td>
                             <td><button type="button" class="btn btn-warning">Delete</button></td>
                          </tr>
                          <tr>
                            <th scope="row"><a href="#">#2644</a></th>
                            <td>Angus Grady</td>
                            <td><a href="#" class="text-primar">Ut voluptatem id earum et</a></td>
                            <td>Food</td>
                            <td>10</td>

                            <td><button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
                              Edit
                             </button></td>
                             <td><button type="button" class="btn btn-warning">Delete</button></td>
                          </tr>
                          <tr>
                            <th scope="row"><a href="#">#2644</a></th>
                            <td>Raheem Lehner</td>
                            <td><a href="#" class="text-primary">Sunt similique distinctio</a></td>
                            <td>Food</td>
                            <td>10</td>

                            <td><button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
                              Edit
                             </button></td>
                             <td><button type="button" class="btn btn-warning">Delete</button></td>
                          </tr>
                        </tbody>
                      </table>
                      <nav  aria-label="Page navigation example">
                        <ul align="center" class="pagination">
                          <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                      </nav>
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