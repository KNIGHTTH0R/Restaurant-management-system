<?php
include_once("../MVC.php");
includeModel("userModel.php");


session_start();
unset($_SESSION["isValid"]);
unset($_SESSION["uname"]);
unset($_SESSION["isAdmin"]);
unset($_SESSION["role"]);
session_destroy();

redirectToView("login.php");
?>