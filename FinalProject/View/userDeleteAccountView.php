<?php
include_once("../MVC.php");
include_once("../Model/userModel.php");
session_start();
AutoTopNav();
if(!isset($_SESSION["isValid"])){
    //this will redirect to login page if user didn't logged in yet 
    redirect("./login.php");
    }
?>
<form action="../Controller/userDeleteAccountController.php" method="post">
    Password: <input type="password" name="password" id="password">
    <button type="submit" >delete</button>
</form>