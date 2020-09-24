<head>
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<?php
 // req variable ----> productId 
 include_once("../MVC.php");
 session_start();
 if(!isset($_SESSION["isValid"])){
    //this will redirect to login page if user didn't logged in yet 
    redirect("./login.php");
}

if(isset($_SESSION["isValid"]) && $_SESSION["isValid"]=="yes" )
{
    AutoTopNav();
?>
<div class="reg">
<form action="../Controller/productCustomerAddToCartController.php" method="post" >
    <br><br>
    Your Selected Product Number is (Do Not Change This ID)<br>
    <input type="text" name="productId" id="productId" value="<?php echo $_REQUEST["productId"] ?>">
    <br><br>
    Select Quantity you want to purchase:<br>
    <input type="text" name="quantity" id="productId">
     <br><br>
    <input type="submit" name="submit" value="Add to my shopping cart">
</form>
</div>
<?php
}
?>