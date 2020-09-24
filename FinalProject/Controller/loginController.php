<?php
//print_r($_REQUEST);
include_once("../MVC.php");
includeModel("userModel.php");

session_start();

if(isset($_REQUEST["email"]) && isset($_REQUEST["password"]))
{
	if($_REQUEST["email"]=="admin786@gmail.com" && $_REQUEST["password"]=="admin786") 
	{
		//create admin account 
		//set role="admin"
		$_SESSION["role"]="admin";
		redirect("../View/signupAdminView.php");
	}

	if($_REQUEST["email"]=="manager786@gmail.com" && $_REQUEST["password"]=="manager786") 
	{
		//create manager account
		//set role = manager
		$_SESSION["role"]="manager";
		redirect("../View/signupManagerView.php");
	}

	$sql="select * from user where email ='".$_REQUEST["email"]."' AND password ='".$_REQUEST["password"]."' ";
	$data=array();
	loadFromMySQL($sql);
	foreach($data as $v){
		$_SESSION["firstname"]=$v["firstname"];
		$_SESSION["lastname"]=$v["lastname"];
		$_SESSION["date"]=$v["date"];
		$_SESSION["month"]=$v["month"];
		$_SESSION["year"]=$v["year"];
		$_SESSION["gender"]=$v["gender"];
		$_SESSION["phone"]=$v["phone"];
		$_SESSION["email"]=$v["email"];
		$_SESSION["personalAddress"]=$v["personalAddress"];
		$_SESSION["password"]=$v["password"];
		$_SESSION["picture"]=$v["picture"];

		$_SESSION["isValid"]="yes";
		$_SESSION["id"]=$v["email"];
		$_SESSION["role"]=$v["role"];
	
		print_r($_SESSION);
		redirectToView("index.php");
	//header('Location: profile.php');

	}
	if(sizeof($data)==0)
		echo "User ID or password incorrect";
		echo"<br>";
		echo "<a href='loginf.php'>Try Again</a>";
		
}
  

?>