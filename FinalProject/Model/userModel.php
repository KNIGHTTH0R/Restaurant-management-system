<?php

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
      
        $ar=array();
        $ar["email"]=$row["email"];
        $ar["firstname"]=$row["firstname"];
        $ar["lastname"]=$row["lastname"];
        $ar["gender"]=$row["gender"];
        $ar["phone"]=$row["phone"];
        $ar["personalAddress"]=$row["personalAddress"];
        $ar["password"]=$row["password"];
        $ar["date"]=$row["day"];
        $ar["month"]=$row["month"];
        $ar["year"]=$row["year"];
        $ar["picture"]=$row["picture"];
        $ar["role"]=$row["role"];
        $data[]=$ar;
        }
    
    } 
    catch(PDOException $e) {
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

function delete($sql){
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "final_project";
  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // use exec() because no results are returned
    $conn->exec($sql);
    return true;
  } 
  catch(PDOException $e) {
    return false;
  }
  
  $conn = null;
}

function validate_phone_number($phone){
     // Allow +, - and . in phone number
     $filtered_phone_number = filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
     // Remove "-" from number
     $phone_to_check = str_replace("-", "", $filtered_phone_number);
     // Check the lenght of number
     // This can be customized if you want phone number from a specific country
     if (strlen($phone_to_check) < 11 || strlen($phone_to_check) > 13) {
        return false;
     } else {
       return true;
     }
}


?>