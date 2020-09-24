<?php
include_once("../MVC.php");
includeModel("userModel.php");

session_start();
//print_r($_SESSION);
if(!isset($_SESSION["isValid"])){
//this will redirect to login page if user didn't logged in yet 
redirectToView("login.php");
}
if(isset($_SESSION["isValid"]) && $_SESSION["isValid"]=="yes" )
{
	print_r($_REQUEST);
if(isset($_REQUEST["firstname"])&& isset($_REQUEST["lastname"]) && isset($_REQUEST["gender"]) && isset($_REQUEST["phone"]) && isset($_REQUEST["personalAddress"])){

//UPDATE `userdb` SET `uname`=[$_REQUEST["uname"]],`pass`=[$_REQUEST["uname"]],`email`=[$_REQUEST["uname"]] WHERE uname='$_REQUEST["uname"]'

    $sql="UPDATE user 
    
    SET firstname='".$_REQUEST["firstname"]."',lastname='".$_REQUEST["lastname"]."',gender='".$_REQUEST["gender"]."',phone='".$_REQUEST["phone"]."',personalAddress='".$_REQUEST["personalAddress"]."' 
    
    WHERE email='".$_SESSION["id"]."'";
    


	print_r($sql);
	$result=update($sql);
	print_r($result);
    if($result==true)
    {
        echo " <h1> Successfully Updated </h1> ";

        $_SESSION["firstname"]=$_REQUEST["firstname"];
		$_SESSION["lastname"]=$_REQUEST["lastname"];
		$_SESSION["date"]=$_REQUEST["date"];
		$_SESSION["month"]=$_REQUEST["month"];
		$_SESSION["year"]=$_REQUEST["year"];
		$_SESSION["gender"]=$_REQUEST["gender"];
		$_SESSION["phone"]=$_REQUEST["phone"];
		//$_SESSION["email"]=$_REQUEST["email"];
		$_SESSION["personalAddress"]=$_REQUEST["personalAddress"];
		//$_SESSION["password"]=$_REQUEST["password"];
		//$_SESSION["picture"]=$_REQUEST["picture"];
    }
    else 
    echo "<h1> Update Failed</h1>";
	
}


}
?>