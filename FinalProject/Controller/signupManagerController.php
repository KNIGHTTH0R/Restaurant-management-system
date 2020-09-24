<?php
       include_once("../MVC.php");
       includeModel("userModel.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" ) 
{
   print_r($_REQUEST);
    if (empty($_POST["email"])) 
    {
       echo"<p style='color:red'>email is required </p><br/>";
       $v1=0;
    } 
    else 
    {
      $email = $_POST["email"];
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
         echo("The email ".$email." is not a valid email.");
         $v1=0;	
       } 
       else {
         $v1=1;
       }
    }


    if (empty($_POST["firstname"])) 
    {
       echo"<p style='color:red'>firstname is required </p><br/>";
       $v2=0;
    } 
    else 
    {
       $firstname = $_POST["firstname"];
       $v2=1;	
    }

     if (empty($_POST["lastname"])) 
    {
       echo"<p style='color:red'>lastname is required </p><br/>";
       $v3=0;
    } 
    else 
    {
       $lastname = $_POST["lastname"];
       $v3=1;	
    }
    
	  if (empty($_POST["gender"])) 
    {
       echo"<p style='color:red'>gender is required </p><br/>";
       $v4=0;
    } 
    else 
    {
       $gender = $_POST["gender"];
       $v4=1;	
    }
	
	  if (empty($_POST["phone"])) 
    {
       echo"<p style='color:red'>phone is required </p><br/>";
       $v5=0;
    } 
    else 
    {
      $phone = $_POST["phone"];
      if (validate_phone_number($phone) == true) {
         $v5=1;
      } else {
        echo "Invalid phone number"; $v5=0;
      }
    }
	
	  if (empty($_POST["personalAddress"])) 
    {
       echo"<p style='color:red'>personalAddress is required </p><br/>";
       $v6=0;
    } 
    else 
    {
       $personalAddress = $_POST["personalAddress"];
       $v6=1;	
    }
	
	  if (empty($_POST["password"]) || empty($_POST["cpassword"])) 
    {
       echo"<p style='color:red'>password is required </p><br/>";
       $v7=0;
    } 
    else 
    {
       if($_POST["password"]==$_POST["cpassword"]){
       $password = $_POST["password"];
       $v7=1;
       }
       else {
          $v7=0;
          echo"<p style='color:red'>password mismatched </p><br/>";
       }	
    }
	
	
	
	  if (empty($_POST["date"])) 
    {
       echo"<p style='color:red'>date is required </p><br/>";
       $v8=0;
    } 
    else 
    {
       $date = $_POST["date"];
       $v8=1;	
    }
	
	
	  if (empty($_POST["month"])) 
    {
       echo"<p style='color:red'>month is required </p><br/>";
       $v9=0;
    } 
    else 
    {
       $month = $_POST["month"];
       $v9=1;	
    }
	
	
	  if (empty($_POST["year"])) 
    {
       echo"<p style='color:red'>year is required </p><br/>";
       $v10=0;
    } 
    else 
    {
       $year = $_POST["year"];
       $v10=1;	
    }

    if(empty($_FILES['picture']['tmp_name']))
    {
      echo"<p style='color:red'>Picture is required </p><br/>";
      $v11=0;
    }
   else{
      $v11=1;
   }

    if($v1==1 && $v2==1 && $v3==1 && $v4==1 && $v5==1 && $v6==1 && $v7==1 && $v8==1 && $v9==1 && $v10==1 && $v11==1){

      //Uploading image in UserImage Folder 
      $source=$_FILES['picture']['tmp_name']; // upload pic temporary in php server
      $target="../staticFile/userImages/".$_FILES['picture']['name']; // target will hold image directory 
      if(move_uploaded_file($source,$target)) $Picture=$target;

      //database Work 

               //INSERT INTO `customer`(`email`, `firstname`, `lastname`, `gender`, `phone`, `shippingAddress`, `password`, `date`, `month`, `year`, `picture`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11])
               $role="manager";
               $sql="INSERT INTO `user`(`firstname`, `lastname`, `day`, `month`, `year`, `gender`, `phone`, `email`, `personalAddress`, `password`, `picture`, `role`)
               VALUES ('".$firstname."', '".$lastname."', '".$date."', '".$month."', '".$year."', '".$gender."', '".$phone."',  '".$email."', '".$personalAddress."','".$password."','".$Picture."','".$role."')";
               //VALUES ('".$email."', '".$firstname."', '".$lastname."', '".$gender."', '".$phone."', '".$shippingAddress."', '".$password."',  '".$date."', '".$month."','".$year."','".$Picture."','".$role."')";
            
               print_r($sql);
               $result=insert($sql);
               print_r($result);
               if($result==true){
                  echo "<h1>Successfully inserted</h1>";
               }
               else {  
                     echo"<p style='color:red'>Already have Account with same email address</p>";
                  }
               }
    else echo"<p style='color:red'>Form Not Validated</p>";

}

//print_r($_REQUEST);
//print_r($_FILES)

?>