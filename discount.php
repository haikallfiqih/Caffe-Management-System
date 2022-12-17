<?php
session_start();
if (!isset($_SESSION['username'])){
	header("Location: login.php");
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Discount</title>
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
    include ('components/sidebar.php');
    include ('dbconnect.php');
    // $query = mysqli_query($connection,"SELECT * FROM discount ORDER BY id DESC");
    ?>
   
      <!-- End Sidebar-->
   
      <main id="main" class="main">
        <div class="pagetitle">
    <div><span><a href="adddiscount.php" class="text-danger">ADD</span></div>
          
        </div>
        
        <!-- End Page Title -->
        <h3>Discount</h3>
                <!-- Recent Sales -->
     
                      <table class="table table-borderless datatable">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Discount Name</th>
                            <th scope="col">Discount Code</th>
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
                          
                            <td><button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
                             Edit
                            </button><button type="button" class="btn btn-warning">Delete</button></td>
                            
                          </td>
                          </tr>
                          <tr>
                            <th scope="row"><a href="#">#2147</a></th>
                            <td>Bridie Kessler</td>
                            <td><a href="#" class="text-primary">Blanditiis dolor omnis similique</a></td>
                           
                            <td><button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
                              Edit
                             </button><button type="button" class="btn btn-warning">Delete</button></td>
                          </tr>
                          <tr>
                            <th scope="row"><a href="#">#2049</a></th>
                            <td>Ashleigh Langosh</td>
                            <td><a href="#" class="text-primary">At recusandae consectetur</a></td>
                           
                            <td><button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
                              Edit
                             </button><button type="button" class="btn btn-warning">Delete</button></td>
                          </tr>
                          <tr>
                            <th scope="row"><a href="#">#2644</a></th>
                            <td>Angus Grady</td>
                            <td><a href="#" class="text-primar">Ut voluptatem id earum et</a></td>
                           

                            <td><button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
                              Edit
                             </button><button type="button" class="btn btn-warning">Delete</button></td>
                          </tr>
                          <tr>
                            <th scope="row"><a href="#">#2644</a></th>
                            <td>Raheem Lehner</td>
                            <td><a href="#" class="text-primary">Sunt similique distinctio</a></td>
                           

                            <td><button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
                              Edit
                             </button><button type="button" class="btn btn-warning">Delete</button></td>
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
  
 