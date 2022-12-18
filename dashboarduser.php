<?php 
  include 'components/header.php';
  include 'components/function.php';
  
  session_start();
  if (!isset($_SESSION['username'])){
   header("Location: login.php");
 
   } elseif(isset($_SESSION['username'])){
    if($_SESSION['role'] === 'admin'){
      header("Location: dashboardadmin.php");
     }  elseif ($_SESSION['role'] === 'cashier'){
       header("Location: dashboardcashier.php");
      };
 
  } 
 

  $conn = connection();

      $products= query("SELECT * FROM product");
      $food= query("SELECT * FROM product WHERE productType = 'food'");
      $drink= query("SELECT * FROM product WHERE productType = 'drink'");

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
    if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
        // Product
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
            
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["productQty"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}
 
if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="orderuser.php"</script>';
			}
		}
	}
}
    ?>
    <!-- End Sidebar-->
 
    <main id="main" class="main">
      <div class="pagetitle">
        <h3> Hello, <span  class="text-primary"><?php echo $row['username'] ?>!</h3>
        </span> Please Choice your Order🍕</span>
      </div>
      <!-- End Page Title -->

    
<h4>Food</h4> 
<div class="col-lg-12">
<div class="row">
  <?php foreach( $food as $p) : ?>
    <div class="card" style="width: 18rem;">
    <form method="post" action="dashboarduser.php?action=add&id=<?php echo $p["productId"]; ?>">
      <div style="width: 200px; height: 200px">
      <img class="card-img-top img-fluid "  src="img/<?php echo $p['productImage'] ?>" alt="<?php echo $p['productName']  ?>">
      </div>
      <div class="card-body">
    
        <p class="text-primary h5"><?php echo $p['productName']  ?></p>
        <p class="card-text">Rp <?php echo $p['productPrice']  ?></p>
        <input type="text" name="quantity" value="1" class="form-control" />
 
						<input type="hidden" name="hidden_name" value="<?php echo $p["productName"]; ?>" />
 
						<input type="hidden" name="hidden_price" value="<?php echo $p["productPrice"]; ?>" />
 
						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-primary" value="Buy" />
      </div>
    </div>
  <?php endforeach ?>
      <h4>Drink</h4>

    <div class="col-lg-12">
      <div class="row">
        <?php foreach( $drink as $p) : ?>
          <div class="card" style="width: 18rem;">
            <form method="post" action="dashboarduser.php?action=add&id=<?php echo $p["productId"]; ?>">
          <div style="width: 200px; height: 200px">
          <img class="card-img-top img-fluid "  src="img/<?php echo $p['productImage'] ?>" alt="<?php echo $p['productName']  ?>">
          </div>
          <div class="card-body">
        
            <p class="text-primary h5"><?php echo $p['productName']  ?></p>
            <p class="card-text">Rp <?php echo $p['productPrice']  ?></p>
            
            <input type="text" name="quantity" value="1" class="form-control" />
 
						<input type="hidden" name="hidden_name" value="<?php echo $p["productName"]; ?>" />
 
						<input type="hidden" name="hidden_price" value="<?php echo $p["productPrice"]; ?>" />
 
						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-primary" value="Buy" />
            </form>
          </div>
        </div>
      <?php endforeach ?>
       
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
