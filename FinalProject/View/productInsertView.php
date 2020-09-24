<?php
include_once("../MVC.php");
include_once("../Model/productModel.php");
session_start();
?>
<!DOCTYPE html>
<head> 
<link rel="stylesheet" href="../CSS/style.css">
</head>
<body>	
      <?php AutoTopNav();?>  
      <div class="reg">
            <form action="../Controller/productInsertController.php" method="post" enctype="multipart/form-data" name="nfm">
                  <br>
                  Product Name: <br>
                  <input type="text" name="productName" placeholder="Product Name" required >
                  <br>
                  Product Category: <br>
                  <input type="text" name="productCategory" placeholder="Product Category" required >
                  <br>
                  product Price:<br>
                  <input type="text" name="price" placeholder="Product Price" required >
                  <br>
                  Product Description: <br>
                  <input type="text" name="productDescription" placeholder="Product Description" required >
                  <br>
                  available Quantity: <br>
                  <input type="text" name="availableQuantity" placeholder="Available Quantity" required >
                  <br>
                  product Picture: <br>
                  <input type="file" name="picture" accept="image/*">
                  <br> <br>
                  <input type="submit"  name="sbt" value="Add Product" /><br><br>
                        <span id="msg"></span>
            </form>
            </div>
</body>