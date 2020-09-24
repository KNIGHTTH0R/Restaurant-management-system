<?php
include_once("../MVC.php");
include_once("../Model/productModel.php");
session_start();
?>
<!DOCTYPE html>

<head>
    <title> Edit </title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>

<body>
    <?php AutoTopNav();?>
    <?php 
$data=array();
if(isset($_REQUEST["productId"])){
	$sql="SELECT * FROM product WHERE productId ='".$_REQUEST["productId"]."'";
	//print_r($sql);
    loadFromMySQL($sql);
	//print_r($data);
	foreach($data as $v){
?>

    <!--
    product:
        0           1           2               3             4                 5               6
    productId , productName ,productCategory, price , productDescription ,availableQuantity, picture   

     attribute: enctype="multipart/form-data". It specifies which content-type to use when submitting the form

-->
    <div class="reg">
        <form action="../Controller/productUpdateController.php" method="post" enctype="multipart/form-data" name="nfm">
            <br>
            Product ID: <br>
            <input type="text" name="productId" value=<?php echo $v["productId"];?>>
            <br>
            Product Name: <br>
            <input type="text" name="productName" value=<?php echo $v["productName"];?>>
            <br>
            Product Category: <br>
            <input type="text" name="productCategory" value=<?php echo $v["productCategory"];?>>
            <br>
            product Price:<br>
            <input type="text" name="price" value=<?php echo $v["price"];?>>
            <br>
            Product Description: <br>
            <input type="text" name="productDescription" value=<?php echo $v["productDescription"];?>>
            <br>
            available Quantity: <br>
            <input type="text" name="availableQuantity" value=<?php echo $v["availableQuantity"];?>>
            <br>

            Old Picture Directory <br>
            <input type="text" name="picture" value=<?php echo $v["picture"];?>> <br>
            Change Picture: <br>
            <input type="file" name="newpicture" value=<?php echo $v["picture"];?>>
            <br>
            <br>
            <input type="submit" name="submit" value="Update Product" /><br>

        </form>
    </div>
    <?php
    }
}
?>