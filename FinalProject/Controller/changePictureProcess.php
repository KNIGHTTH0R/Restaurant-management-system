<?php 
include_once("../MVC.php");
includeModel("userModel.php");

session_start();
if(!isset($_SESSION["isValid"])){
//this will redirect to login page if user didn't logged in yet 
redirectToView("login.php");
}
//print_r($_REQUEST);
print_r($_FILES);

if(empty($_FILES['picture']['tmp_name']))
    {
      echo"<p style='color:red'>Picture is required </p><br/>";
      
    }
else
{
        //Uploading image in UserImage Folder 
        $source=$_FILES['picture']['tmp_name']; // upload pic temporary in php server
        $target="../staticFile/userImages/".$_FILES['picture']['name']; // target will hold image directory 
        if(move_uploaded_file($source,$target)) $Picture=$target; else echo "<h1 style='color:red;'>File with same name exist</h1>";
        
        $sql="UPDATE user 
        SET picture='".$Picture."' 
        WHERE email='".$_SESSION["id"]."'";
        $result=update($sql);

        if($result==true)
        {
            echo " <h1> Successfully Updated </h1> ";
    
            $_SESSION["picture"]=$Picture;
        }
   }

?>