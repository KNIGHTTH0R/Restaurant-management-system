<?php
/*
product:
    0           1           2               3             4                 5               6
productId , productName ,productCategory, price , productDescription ,availableQuantity, picture 
*/

function loadFromMySQL($sql){
   
    global $data;

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "final_project";
    try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);  
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    $data=array();
	while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		//print_r($row);
		$ar=array();
		$ar["productId"]=$row["productId"];
		$ar["productName"]=$row["productName"];
		$ar["productCategory"]=$row["productCategory"];
		$ar["price"]=$row["price"];
		$ar["productDescription"]=$row["productDescription"];
		$ar["availableQuantity"]=$row["availableQuantity"];
		$ar["picture"]=$row["picture"];
		$data[]=$ar;
    }
    
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
}

function insert($sql){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "final_project";
    try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);  
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->exec($sql);
    return true;
    } 
    catch(PDOException $e) { return false;}

    $conn = null;
	
}

function delete($sql){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "final_project";

    try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->exec($sql);
    echo "Record deleted successfully";
    } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
	
}

function update($sql){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "final_project";

    try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    if($stmt->rowCount() >0) return true;
    else return false;
} 
catch(PDOException $e) {
  return false;
}

$conn = null;
}



function availableQuantity($pid)
{  
    $sql="select availableQuantity from product where productId='".$pid."'";
	$conn = mysqli_connect("localhost", "root", "","final_project");
    $result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
    while($row = mysqli_fetch_assoc($result)) {
		$availableQuantity=$row["availableQuantity"];
	}
     return $availableQuantity;

}

function price($pid)
{
    $sql="select price from product where productId='".$pid."'";
	$conn = mysqli_connect("localhost", "root", "","final_project");
    $result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
    while($row = mysqli_fetch_assoc($result)) {
		$price=$row["price"];
	}
     return $price;
}

function isValidPid($pid)
{  
    $sql="select * from product where productId='".$pid."'";
	$conn = mysqli_connect("localhost", "root", "","final_project");
    $result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
    while($row = mysqli_fetch_assoc($result)) {
		return true;
	}
     return false;

}


?>