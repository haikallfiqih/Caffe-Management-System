<?php
 include 'components/header.php';
 include ('components/sidebar.php');

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

 $discount = query("SELECT * FROM discount");

?>


<!DOCTYPE html>
<html lang="en">
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

   
      <main id="main" class="main">
    <div class="pagetitle">
        <h3>Discount</h3>
    </div>
    <!-- End Page Titsle -->
    <a href="adddiscount.php"  type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
        ADD
    </a>
        
        <!-- End Page Title -->
  
                <!-- Recent Sales -->
     
                      <table class="table table-borderless datatable">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Discount Name</th>
                            <th scope="col">Discount Code</th>
                            <th scope="col">Discount Amount</th>
                            <th scope="col">Action</th>
                           
                          </tr>
                        </thead>

                        <tbody>
                          <tr>
                            <?php foreach( $discount as $a) : ?>
                            <?php static $discountNum = 0; $discountNum++; ?>
                            <th scope="row"><a href="#"><?php echo $discountNum ?></a></th>
                            <td><?php echo $a['discountName'] ?></td>
                            <td><?php echo $a['discountCode'] ?></td>
                            <td><?php echo $a['discountAmount' ]?>% </td>
                          
                            <td><a href="editdiscount.php?discountId=<?php echo $a['discountId'] ?>" type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
                             Edit
                            </a><a href="deleteDiscount.php" type="button" class="btn btn-warning">Delete</a></td>
                            
                          </td>
                          </tr>
                          <?php endforeach; ?>
                            
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
  
 