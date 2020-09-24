<head>
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<?php
include("../Model/orderModel.php");
include_once("../MVC.php");
session_start();
if(!isset($_SESSION["isValid"])){
//this will redirect to login page if user didn't logged in yet 
redirect("login.php");
}

//if(isset($_SESSION["isValid"]) && $_SESSION["isValid"]=="yes")
{
    AutoTopNav();
    
   // include("userHeader.php");
        /*
                1	    2 *        3     4    5     6     7        8           9      
            orderNo, orderID , userid, pid, qty, name, price, qtyXprice, isDelivered 
        */
?> 
<div class="reg">

<?php
        if(count($_COOKIE) > 0)
        {
            
            echo " <hr>";
            echo "<h1 align=center>CART</h1>";
            echo"<hr>";
        //$orderNo=uniqid("ordNo-");
        $totalprice=0;

        foreach ($_COOKIE as $key => $value) {
            
            if(isValidPid($key))
            {
          //  $orderID=uniqid("PK-");
            //$userid=$_SESSION["id"];
            $pid=$key;
            $qty=$value;
            $name=name($pid);
            $price=price($pid);
            $qtyXprice= (int)($qty) * (int)($price);
            $totalprice+=$qtyXprice;

            ?>
            <table style="color:white;width:100%;border:1px solid white;text-align:left;  ">
                <tr>
                    <th> Name </th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Quantity X Price</th>
                </tr>
                 <tr>
                     <td><?php echo $name;?></td>
                    <td> <?php echo $qty;?></td>
                    <td><?php echo $price;?></td>
                    <td><?php echo $qtyXprice;?></td>
                    </tr>   
            </table>
            <?php
            
            




            //$isDelivered="no";

            //$sql="INSERT INTO `order`(`orderNo`, `orderID`, `userid`, `pid`, `qty`, `name`, `price`, `qtyXprice`, `isDelivered`) 
            //VALUES ( '".$orderNo."','". $orderID."' , '".$userid."', '".$pid."' , '".$qty."' , '".$name."', '".$price."', '".$qtyXprice."', '".$isDelivered."' )";

            //$result=insert($sql);
            //if($result=true)
        


         }
        }

        echo " <h2>total price :".$totalprice."</h2>";

        echo "<a href='../Controller/orderCheckoutController.php' id='link' class='btn btn-green'>checkout</a> ";
        echo "<a href='../Controller/orderClearController.php' id='link' class='btn btn-red'> clear cart and signout</a>";


        }

        else {
            echo " No Product Selected To Check Out.";
        }



    }
?>

</div>