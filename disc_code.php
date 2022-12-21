<?php
$Total = 500;
$arr=file("flatFile1.txt");

foreach($arr as $str){
    list($code,$amount)=explode("|",$str);
}
if (isset($_POST['disCode'])) {
    $disCode = $_POST['disCode'];

    if ($disCode == $code)
    {
        $Total -= $amount;
    }
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<div id="disDiv"><form action="carttest" method="post">
    
        <input type="text" name="disCode"/><br /><br />
        
        <input TYPE="image" SRC="discountBtn.png"
        BORDER="0" name="discountCode" id="disCount" class="disCount" /></form></div><br />
        
        
        <?php echo $Total; ?>
</body>
</html> 