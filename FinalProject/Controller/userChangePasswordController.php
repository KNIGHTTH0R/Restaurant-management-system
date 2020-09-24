<?php
include_once("../MVC.php");
includeModel("userModel.php");

session_start();
if(!isset($_SESSION["isValid"])){
//this will redirect to login page if user didn't logged in yet 
redirectToView("login.php");
}


if(isset($_REQUEST["cpass"]) && isset($_REQUEST["npass"]) && isset($_REQUEST["rnpass"]))
{
    $oldPassword=$_SESSION['password']; // take password from session
    $email=$_SESSION['email'];      // take email from session

    //take data from form
    $oldPasswordTyped=$_REQUEST['cpass'];
    $newPassword=$_REQUEST['npass'];
    $retypedNewPassword=$_REQUEST['rnpass'];

   if($oldPassword==$oldPasswordTyped && $newPassword==$retypedNewPassword){
       
            

            $sql= "UPDATE user
            SET password='".$newPassword."' 
            WHERE email='".$email."'";
            
            $result=update($sql);
            if($result=true)
            {
                echo "<hr>";
                echo "<h1>Password Changed</h1>";
                echo "<hr>";
            }
            else 
            {
            echo "<hr>";
            echo "<h1> Database Error </h1>";
            echo "<hr>";
            }
   }
    else{
        if($oldPassword!=$oldPasswordTyped) echo"<h1>Wrong current password</h1>";  
        if($newPassword!=$retypedNewPassword) echo"<h1>Both new password didn't match </h1>"; 
       }
}
?>

</body>