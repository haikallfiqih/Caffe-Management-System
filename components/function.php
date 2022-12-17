<?php 

// connect to db
function connection(){
$conn = mysqli_connect('localhost', 'root', '', 'ssip') or die('Connection to database failure!');
return $conn;
}


function query($query){
    $conn = connection();
    $result = mysqli_query($conn, $query) or die('Query Failure'. mysqli_error($conn) );
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
    }

    return $rows;
}



function register($data){
    $conn = connection();

    $name = $data['name'];
    $username = $data['username'];
    $role = 'customer';
    $password = $data['password'];
    $nohp = $data['phoneNum'];



    // query insert data
    $query = "INSERT INTO user (id, name, username, role, password, nohp)
                VALUES(null, '$name', '$username', '$role', '$password',  '$nohp')";

    
    // insert data to user table
    mysqli_query($conn, $query) or die('Query Failure'.mysqli_error($conn));

    
    // return result
    return mysqli_affected_rows($conn);

} //end of add data func


function addProduct($data){
    $conn = connection();
    // data sanitation
    // $Title =mysqli_real_escape_string($conn, htmlspecialchars($data['Title']));
    // $Writer =mysqli_real_escape_string($conn, htmlspecialchars($data['Writer']));
    // $Publisher =mysqli_real_escape_string($conn, htmlspecialchars($data['Publisher']));
    // $Category =mysqli_real_escape_string($conn, htmlspecialchars($data['Category']));

    $productName = $data['productName'];
    $productDesc = $data['productDesc'];
    $productPrice = $data['productPrice'];
    $productQty = $data['productQty'];
    // $productImage = $data['productImage'];

    //upload iamge, sanitation
    $Image = upload();
    if(!$Image){
        return false;
    }

    // query insert data
    $query = "INSERT INTO product (productId, productName, productDesc, productPrice, productQty, productImage)
                VALUES(null, '$productName', '$productDesc', '$productPrice', '$productQty', '$Image' )";

    
    // insert data to book table
    mysqli_query($conn, $query) or die('Query Failure'.mysqli_error($conn));

    
    // return result
    return mysqli_affected_rows($conn);

}

function addDiscount($data){
    $conn = connection();

    $discountName = $data['discountName'];
    $discountCode = $data['discountCode'];
    $discountAmount = $data['discountAmount'];
    

    // query insert data
    $query = "INSERT INTO discount (discountId, discountName, discountCode, discountAmount)
                VALUES(null, '$discountName', '$discountCode', '$discountAmount')";

    
    // insert data to book table
    mysqli_query($conn, $query) or die('Query Failure'.mysqli_error($conn));

    
    // return result
    return mysqli_affected_rows($conn);

}

// add data
function add($data){
    $conn = connection();
    // data sanitation
    $Title =mysqli_real_escape_string($conn, htmlspecialchars($data['Title']));
    $Writer =mysqli_real_escape_string($conn, htmlspecialchars($data['Writer']));
    $Publisher =mysqli_real_escape_string($conn, htmlspecialchars($data['Publisher']));
    $Category =mysqli_real_escape_string($conn, htmlspecialchars($data['Category']));

    //upload image, sanitation
    $Image = upload();
    if(!$Image){
        return false;
    }

    // query insert data
    $query = "INSERT INTO book
                VALUES(null, '$Title', '$Writer', '$Publisher', '$Category', '$Image' )";

    
    // insert data to book table
    mysqli_query($conn, $query) or die('Query Failure'.mysqli_error($conn));

    
    // return result
    return mysqli_affected_rows($conn);

} //end of add data func



// delete function
function delete($Id){
    $conn = connection();

    // delete image if isn't default image (default.jpg)
    $book = query("SELECT * FROM book WHERE Id = $Id")[0];
    if ($book['Image'] !== 'default.jpg') {
        unlink('img/' . $book['Image'] );
    }


  mysqli_query($conn, "DELETE FROM book WHERE Id = $Id") or die('Query Failure'. mysqli_error($conn) );

    return mysqli_affected_rows($conn);
}



function edit($data){
    $conn = connection();

    // data sanitation
    $Id = $data['Id'];
    $Title =mysqli_real_escape_string($conn, htmlspecialchars($data['Title']));
    $Writer =mysqli_real_escape_string($conn, htmlspecialchars($data['Writer']));
    $Publisher =mysqli_real_escape_string($conn, htmlspecialchars($data['Publisher']));
    $Category =mysqli_real_escape_string($conn, htmlspecialchars($data['Category']));
    $oldImage =mysqli_real_escape_string($conn, htmlspecialchars($data['oldImage']));

    
    // upload image
    $Image = upload();

    
    // if there is no new image, use existing image (old image)
    if($Image === 'default.jpg'){
        $Image = $oldImage;
    } else {
        /*delete old image
          check if it default image, if yes don't delete
        */
        if ($oldImage !== 'default.jpg'){
            unlink('img/' . $oldImage);
        }
    }

    
    // query update data
    $query = "UPDATE book
            SET 
            Title = '$Title',
            Writer = '$Writer',
            Publisher = '$Publisher',
            Category = '$Category',
            Image = '$Image'
                WHERE Id = $Id
            ";

    
    // update data from book table
    mysqli_query($conn, $query) or die('Query Failure'.mysqli_error($conn));
    return mysqli_affected_rows($conn);
}



// upload function
function upload(){

    // Take Image data
    // $namaFile = $_FILES['Image']['name'];
    // $tipeFile = $_FILES['Image']['type'];
    // $ukuranFile = $_FILES['Image']['size'];
    // $error = $_FILES['Image']['error'];
    // $tmpName = $_FILES['Image']['tmp_name'];
    // $ekstensiFile = pathinfo($namaFile, PATHINFO_EXTENSION);

    $fileName = $_FILES['productImage']['name'];
    $fileType = $_FILES['productImage']['type'];
    $fileSize= $_FILES['productImage']['size'];
    $error = $_FILES['productImage']['error'];
    $tmpName = $_FILES['productImage']['tmp_name'];
    $fileExtention = pathinfo($fileName, PATHINFO_EXTENSION);

    
    //check if there any image uploaded
    if($error === 4){
        return 'default.jpg';
    }
    
    // check if the uploaded file is image (jpg, jpeg,png)
    $imageValidType = ['image/jpg', 'image/jpeg', 'image/png'];
    if(!in_array($fileType, $imageValidType)) {
        echo "<script>
                alert('File that you uploaded is not an image');  
              </script>";

            return false;
    }

    // check size of image
    if($fileSize> 2000000){
        echo "<script>
                alert('Image size is too large');   
              </script>";
    }  

    // Image ready to upload (no error)
    $newFileName = uniqid();
    $newFileName .= '.';
    $newFileName .= $fileExtention;

    // // upload Image
    move_uploaded_file($tmpName, 'img/');
    return $newFileName;
}

?>