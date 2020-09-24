<head>
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<?php
include_once("../MVC.php");
include_once("../Model/productModel.php");
//print_r($_REQUEST);
//product:
//    0           1           2               3             4                 5               6
//productId , productName ,ProductCategory, price , productDescription ,availableQuantity, picture   
session_start();
if(!isset($_SESSION["isValid"])){
    //this will redirect to login page if user didn't logged in yet 
    redirect("./login.php");
    }
if(isset($_SESSION["isValid"]) && $_SESSION["isValid"]=="yes" )
{
    AutoTopNav();
$data=array();
if(isset($_REQUEST["productId"])){
	$sql="select * from product where productId ='".$_REQUEST["productId"]."'";
	//print_r($sql);
	loadFromMySQL($sql);
	foreach($data as $v){

?>
<div id="border">
    <div class="reg">
    <h1> Product Description</h1>
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
    
    <img src="<?php echo $v['picture']; ?>" alt="item picture" height="200px" width="200px">
    
    <br />Product Picture
    <?php
    //$s="../usr_AddToCart/addToCart.php";
   $s="./productCustomerAddToCartView.php?productId=".$v["productId"]; 

    ?>
    <br>
    <a href=<?php echo"$s";?> id="addtocart" class="btn btn-red">Add to Shopping cart</a>
    </div>




</div>

<?php 
    }
}
}
?>