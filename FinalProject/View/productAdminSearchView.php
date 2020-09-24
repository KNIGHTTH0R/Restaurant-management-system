<!--
    product:
    0           1           2               3             4                 5               6
productId , productName ,productCategory, price , productDescription ,availableQuantity, picture   

-->
<?php
include_once("../Model/productModel.php");
include_once("../MVC.php");
session_start();
if(!isset($_SESSION["isValid"])){
//this will redirect to login page if user didn't logged in yet 
redirect("login.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <title> Product List </title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>

<body>
<?php AutoTopNav()?>
    
    <br> <br>
    <a class="btn btn-green" href="index.php">Home</a>
    <a class="btn btn-blue" href="./productInsertView.php"> + Add New Product </a>

    <br> <br>
    <table align="center" width=90% id="tab">
        <tr>
            <th colspan="10" style="Text-align:center; font-size:2em;color:black;">
                Search Result
            </th>
        </tr>
        <tr>
            <th>
                product Id
            </th>

            <th>
                product Name
            </th>

            <th>
                Product Category
            </th>

            <th>
                price
            </th>

            <th>
                product Description
            </th>

            <th>
                available Quantity
            </th>
            <th>
                picture
            </th>
            <th>
                Actions
            </th>

        </tr>


        <?php

//product:
//    0           1           2               3             4                 5               6
//productId , productName ,productCategory, price , productDescription ,availableQuantity, picture   

$data=array();
$sql="select * from product where productName like'%".$_REQUEST["productName"]."%'";
//print_r($sql);
loadFromMySQL($sql);

     foreach($data as $v){ 
?>
        <tr>

            <td><?php echo $v["productId"]; ?></td>

            <td><?php echo $v["productName"]; ?></td>

            <td><?php echo $v["productCategory"]; ?></td>

            <td><?php echo $v["price"]; ?></td>

            <td><?php echo $v["productDescription"]; ?></td>

            <td><?php echo $v["availableQuantity"]; ?></td>

            <td>
                <img src="<?php echo $v['picture']; ?>" alt="picture missing" height="50px" width="50px">
            </td>

            <td>
                <?php
        
        $u="./productUpdateView.php?productId=".$v["productId"];
        $d="./productDeleteView.php?productId=".$v["productId"];
         ?>
                <a class="btn btn-blue" href=<?php echo"$u";?>>Edit</a>
                <a class="btn btn-red" href=<?php echo"$d";?>>Delete</a>

            </td>

        </tr>
        <?php
     }
    ?>
    </table>

</body>

</html>





<?php
	if(sizeof($data)==0)
		echo "No products found";

?>