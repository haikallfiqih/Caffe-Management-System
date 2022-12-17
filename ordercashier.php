<?php 

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
  
  <!-- End Header -->

    <!-- ======= Sidebar ======= -->
   <?php     include 'components/header.php';   ?>
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
<body>

<?php include 'components/sidebarcashier.php'; ?>
<main id="main" class="main">
        <div class="pagetitle">
          <h3>Order</h3>
        </div>
     
        <!-- End Page Title -->

                <!-- Recent Sales -->
     
                      <table class="table table-borderless datatable">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Customer Name</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Delivery Mode</th>
                            <th scope="col">Purchase</th>
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
                            <td>Home Delivery</td>
                            <td>screenshot.pdf</td>
                            <td>10</td>
                            <td><button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
                                Accept
                               </button>
                               <button type="button" class="btn btn-danger">Deny</button>
                               <button type="button" class="btn btn-warning">View</button>
                              </td>
                          </tr>
                          <tr>
                            <th scope="row"><a href="#">#2147</a></th>
                            <td>Bridie Kessler</td>
                            <td><a href="#" class="text-primary">Blanditiis dolor omnis similique</a></td>
                            <td>Home Delivery</td>
                            <td>screenshot.pdf</td>
                            <td>10</td>
                            <td><button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
                              Accept
                             </button><button type="button" class="btn btn-danger">Deny</button>
                             <button type="button" class="btn btn-warning">View</button></td>
                          </tr>
                          <tr>
                            <th scope="row"><a href="#">#2644</a></th>
                            <td>Angus Grady</td>
                            <td><a href="#" class="text-primar">Ut voluptatem id earum et</a></td>
                            <td>Home Delivery</td>
                            <td>screenshot.pdf</td>
                            <td>10</td>

                            <td><button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
                               Accept
                               </button>
                               <button type="button" class="btn btn-danger">Deny</button>
                               <button type="button" class="btn btn-warning">View</button>
                              </td>
                          </tr>
                          <tr>
                            <th scope="row"><a href="#">#2644</a></th>
                            <td>Angus Grady</td>
                            <td><a href="#" class="text-primar">Ut voluptatem id earum et</a></td>
                            <td>Home Delivery</td>
                            <td>screenshot.pdf</td>
                            <td>10</td>
                            <td><button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
                              Accept
                             </button>
                             <button type="button" class="btn btn-danger">Deny</button>
                             <button type="button" class="btn btn-warning">View</button>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row"><a href="#">#2644</a></th>
                            <td>Raheem Lehner</td>
                            <td><a href="#" class="text-primary">Sunt similique distinctio</a></td>
                            <td>Home Delivery</td>
                            <td>screenshot.pdf</td>
                            <td>10</td>

                            <td><button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
                                Accept
                               </button>
                               <button type="button" class="btn btn-danger">Deny</button>
                               <button type="button" class="btn btn-warning">View</button>
                              </td>
                          </tr>
                        </tbody>
                      </table>
                      <nav  aria-label="Page navigation example">
                        <ul  class="pagination">
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