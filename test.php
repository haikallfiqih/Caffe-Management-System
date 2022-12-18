<?php 
/* code by webdevtrick ( https://webdevtrick.com ) */
session_start();
$connect = mysqli_connect("localhost", "root", "", "ssip");
 
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
				'item_name'			=>	$_POST["productName"],
				'item_price'		=>	$_POST["productPrice"],
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
			'item_name'			=>	$_POST["productName"],
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
<!DOCTYPE html>
<html>
	<head>
		<title>Shopping Cart In PHP and MySql | Webdevtrick.com</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
	<body>
		<br />
		<div class="container">
			<br />
			<br />
			<br />
			<h3 align="center">Shoping Cart With PHP And MySql | Source Code By <a href="https://webdevtrick.com">Webdevtrick.com</a></h3><br />
			<br /><br />
			\
			<div class="col-md-4">
				<form method="post" action="test.php?action=add&id=<?php echo $row["productId"]; ?>">
					<div style="border:3px solid #5cb85c; background-color:whitesmoke; border-radius:5px; padding:16px;" align="center">
						<img src="img/<?php echo $row["productImage"]; ?>" class="img-responsive" /><br />
 
						<h4 class="text-info"><?php echo $row["productName"]; ?></h4>
 
						<h4 class="text-danger">Rp <?php echo $row["productPrice"]; ?></h4>
 
						<input type="text" name="quantity" value="1" class="form-control" />
 
						<input type="hidden" name="hidden_name" value="<?php echo $row["productName"]; ?>" />
 
						<input type="hidden" name="hidden_price" value="<?php echo $row["productPrice"]; ?>" />
 
						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-primary" value="Buy" />
 
					</div>
				</form>
			</div>
			<?php
					}
				}
			?>

	</div>
	<br />
	</body>
</html>