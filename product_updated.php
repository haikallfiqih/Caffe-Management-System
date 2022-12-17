<?php

include("dbconnect.php");
$productId = $_POST['productId'];
    $productName = $_POST['productName'];
    $productDesc = $_POST['productDesc'];
    $productPrice = $_POST['productPrice'];
    $productQty = $_POST['productQty'];
    $productImage = $_POST['productImage'];
$sql = "UPDATE product SET productId = '$productId', name ='$productName', productDesc ='$productDesc', productPrice ='$productPrice',  productQty ='$productQty', productImage ='$productImage', WHERE id = '$id'";
$result = mysqli_query($conn, $sql);

?>

<?php
if ($result) {
    echo "Update Succeed";
}
// if fail
else {
    echo "Update Fail";
}

?>

<h2>Student List</h2>
<table border="1">
    <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Qty</th>
            <th>Image</th>

    </tr>
    <?php
    $sql = mysqli_query($conn, "SELECT * from product");
    $no = 1;
    foreach ($sql as $row) {

        echo
            "<tr>
           <td>$no</td>
           <td>" . $row['productId'] . "</td>
            <td>" . $row['productName'] . "</td>
            <td>" . $row['productDesc'] . "</td>
            <td>" . $row['productPrice'] . "</td>
            <td>" . $row['productQty'] . "</td>
            <td>" . $row['productImage'] . "</td>
            <td> <a href=product_delete.php?id=" . $row['productId'] . "> Delete </a> &nbsp;
             <a href=product_update.php?id=" . $row['productId'] . "> Update </a> </td>
            </tr>
           ";

        $no++;
    }

    ?>

    </tbody>

</table>