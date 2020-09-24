<?php    
?>
<!--
    product:
    0           1           2               3             4                 5               6
productId , productName ,ProductCategory, price , productDescription ,availableQuantity, picture   

-->
<?php
include_once("../MVC.php");
include_once("../Model/productModel.php");
session_start();
AutoTopNav();

?>
<html>

<head>
    <title> Product List </title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>

<body>
    

    
    <table align="center" width=90% id="tab">
    <tr>
            <th colspan="10" style="Text-align:center; font-size:2em;color:black;">
                Products
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
                details
            </th>

        </tr>


        <?php

//product:
//    0           1           2               3             4                 5               6
//productId , productName ,ProductCategory, price , productDescription ,availableQuantity, picture   

$data=array();
$sql="select * from product ";
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
        
         $s="./productCustomerDetailsView.php?productId=".$v["productId"];
         ?>
                <a href=<?php echo"$s";?> class="btn btn-blue">Details</a>

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