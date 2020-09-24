<?php
include_once("../Model/productModel.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Product List </title>
        <link rel="stylesheet" href="../CSS/style.css">
    </head>
<body>    
<br> <br>
      <a class="btn btn-green"href="index.php">Home</a>
<br> <br>

<?php

if(isset($_REQUEST["productId"]) && isset($_REQUEST["productName"]) && isset($_REQUEST["productCategory"])&& isset($_REQUEST["price"])&& isset($_REQUEST["productDescription"])&& isset($_REQUEST["availableQuantity"]))
{

    //no new picture 
    if(empty($_FILES["newpicture"]["name"])==1) // 1 output means no new pic chosen)
    {
       $sql= " UPDATE product 
        SET productName='".$_REQUEST["productName"]."',productCategory='".$_REQUEST["productCategory"]."',price='".$_REQUEST["price"]."',productDescription='".$_REQUEST["productDescription"]."',availableQuantity='".$_REQUEST["availableQuantity"]."',picture='".$_REQUEST["picture"]."' 
        WHERE productId='".$_REQUEST["productId"]."'";
	    //print_r($sql);
	    $result=update($sql);
        if($result=true)
        {
            echo "<hr>";
            echo "<h1>successfully Updated </h1>";
            echo "<hr>";
        }
        else 
        {
        echo "<hr>";
        echo "<h1>Update Failed</h1>";
        echo "<hr>";   
        }



    }
    else // new pic chosen
    {
        //uploading picture
        $source=$_FILES['newpicture']['tmp_name']; // upload pic temporary in php server
        $target="productImages/".$_FILES['newpicture']['name']; // target will hold image directory 
        if(move_uploaded_file($source,$target))
            {
                //echo $target;
                $picture=$target;
                //echo $picture;
            }
        //updating database 
        $sql= " UPDATE product 
        SET productName='".$_REQUEST["productName"]."',productCategory='".$_REQUEST["productCategory"]."',price='".$_REQUEST["price"]."',productDescription='".$_REQUEST["productDescription"]."',availableQuantity='".$_REQUEST["availableQuantity"]."',picture='".$picture."' 
        WHERE productId='".$_REQUEST["productId"]."'";
	    //print_r($sql);
	    $result=update($sql);
        if($result=true)
        {
            echo "<hr>";
            echo "<h1>successfully Updated </h1>";
            echo "<hr>";
        }
        else 
        {
        echo "<hr>";
        echo "<h1>Update Failed</h1>";
        echo "<hr>";
        }
    }

}

?>

</body>