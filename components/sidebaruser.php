<?php 
  include 'components/header.php';
  include 'components/function.php';
  $conn = connection();
  session_start();
  
    $id =  $_SESSION['id'];
      
      $qGet = "SELECT * FROM user WHERE id = '$id'";
      $result = mysqli_query($conn, $qGet);
      $row= mysqli_fetch_array($result);
  ?>

<aside id="sidebar" class="sidebar">
      
      <div class="row">
      <div class="col-lg-12">
          <div class="card-body text-center">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
              <h5>  <?php echo $row['username'] ?> </h5>
            <p>  <?php echo $row['role'] ?> </p>
        </div>  

      <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link" href="dashboarduser.php">
              <i class="bi bi-grid"></i>
              <span>Menu</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="orderuser.php">
              <i class="bi bi-grid"></i>
              <span>My Order</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="accountuser.php">
              <i class="bi bi-grid"></i>
              <span>Account</span>
            </a>
          </li>
        <!-- End Login Page Nav -->
      </ul>
      <a href="logout.php" type="button" class="btn btn-danger" data-mdb-toggle="modal"
                        data-mdb-target="#exampleModal">
                    Log Out
                  </a>
      
    </aside>