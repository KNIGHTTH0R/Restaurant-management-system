<?php
include_once("../Model/productModel.php");
?>
<!DOCTYPE html>
<head>
    <title>Confirm Delete</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>

<body>

<br> <br>
      <a class="btn btn-green"href="index.php">Home</a>
<br> <br>

<?php
if(isset($_REQUEST["productId"])){
	$sql="DELETE FROM product WHERE productId='".$_REQUEST["productId"]."'";
	//print_r($sql);
	$result=delete($sql);
    if($result=true)
    {
        echo "<h1>successfully deleted</h1>";
    }
    else 
        echo "<h1>Not successful</h1>";
}
?>
</body>