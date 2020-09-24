<?php
include_once("../Model/orderModel.php"); 
include_once("../MVC.php");
session_start();
if(!isset($_SESSION["isValid"])){
//this will redirect to login page if user didn't logged in yet 
redirect("login.php");
}
	//if(isset($_SESSION["isAdmin"]) && $_SESSION["isAdmin"]=="yes" )
	{
		//include("adminHeader.php");
?>

<head>
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body>
    <?php AutoTopNav()?>
<hr>
<h1 align="center">Order History</h1>
<hr>
<table border="1px" id="tab">
<tr>
        <th>
            Order No
        </th>
        <th>
            Order ID
        </th>
        <th>
            Ordered By
        </th>
        <th>
        Product ID
        </th>
        <th>
        Ordered Quantity
        </th>
        <th>
        Product Name
        </th>
        <th>
        Price
        </th>
        <th>
        Quantity x Price
        </th>
        <th>
        is Delivered
        </th>
    </tr>
    <?php    
    $data=array();
  
    
	$sql="SELECT * FROM `order`";
	//print_r($sql);
	loadFromMySQL($sql);
	foreach($data as $ar){
		//orderNo, orderID , userid, pid, qty, name, price, qtyXprice, isDelivered 
        ?>
        
    
    <tr>
        <td>
            <?php echo $ar["orderNo"]?>
        </td>
        <td>
            <?php echo $ar["orderID"]?>
        </td>
        <td>
            <?php echo $ar["userid"]?>
        </td>
        <td>
           <?php echo $ar["pid"]?>
        </td>
        <td>
            <?php echo $ar["qty"]?>
        </td>
        <td>
            <?php echo $ar["name"]?>
        </td>
        <td>
            <?php echo $ar["price"]?>
        </td>
        <td>
            <?php echo $ar["qtyXprice"]?>
        </td>

        <td>
            <?php echo $ar["isDelivered"]?>
        </td>
    </tr>


    <?php
		
	}
	if(sizeof($data)==0)
		echo "Not found";

}
    
?>
</table>
</body>