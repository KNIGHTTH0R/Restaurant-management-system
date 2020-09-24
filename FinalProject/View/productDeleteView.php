<?php
include_once("../MVC.php");
include_once("../Model/productModel.php");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Confirm Delete</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>

<body>
<?php AutoTopNav();?>

<?php

$data=array();

if(isset($_REQUEST["productId"])){
	$sql="select * from product where productId ='".$_REQUEST["productId"]."'";
	//print_r($sql);
	loadFromMySQL($sql);
	foreach($data as $v){

?>
    <div id="border"> 
        <h1 class="title"> Product Description</h1>
        <br>
    Product ID:
<?php echo $v["productId"]; ?>
<br>

Product Name:
<?php echo $v["productName"]; ?>

<br>
Product Category:
<?php echo $v["productCategory"]; ?>
<br>

Product Price:
<?php echo $v["price"]." tk"; ?>

<br>
Product description: 
<?php echo $v["productDescription"]; ?>

<br>
Quantity Available:
<?php echo $v["availableQuantity"]." PCS"; ?>
<br>
Product Picture: 
    <img src="<?php echo $v['picture']; ?>" alt="item picture" height="200px" width="200px">
<br/>
    <?php
   $s="../Controller/productDeleteController.php?productId=".$v["productId"]; 
    ?>
    </div>
    <h2 >
    <a class="btn btn-red" href=<?php echo"$s";?> >Confirm Delete</a>
    </h2>
</body>
</html>

<?php 
    }
}

?>