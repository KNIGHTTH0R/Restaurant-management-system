 <head>
     <link rel="stylesheet" href="../CSS/style.css">
 </head>
 <?php
include_once("../MVC.php");
include_once("../Model/userModel.php");
session_start();
AutoTopNav();

if(!isset($_SESSION["isValid"])){
    //this will redirect to login page if user didn't logged in yet 
    redirect("./login.php");
    }
//print_r($_SESSION)
?>
<div class="reg">
    <hr>
    <h2 style="text-align:center;">Change Profile Picture</h2>
    <hr>
<img src="<?php echo $_SESSION['picture'];?>" alt="Profile Picture" width="250">
<br>
<br>

<form action="../Controller/changePictureProcess.php" method="post" enctype="multipart/form-data">
    Select Picture: <br>
    <input type="file" name="picture">
    <br>
    <br>
    <input type="submit" name="submit" value="Update Picture" /><br>
</form>
</div>