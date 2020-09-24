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
?>

<body>
<div class="reg">
    <hr>
    <h2 style="text-align:center;">Change Password</h2>
    <hr>
    <form action="../Controller/userChangePasswordController.php" method="post">

        current password:<br>

        <input type="password" name=" cpass" placeholder=""><br><br>

        new password:<br>
        <input type="password" name="npass" placeholder=""><br><br>

        Retype-new password:<br>
        <input type="password" name="rnpass" placeholder=""><br><br>

        <input type="submit" name="pass" value="submit ">

    </form>
    </div>
</body>