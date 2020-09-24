<?php
    include_once("../MVC.php");
    session_start();
    if(!isset($_SESSION["isValid"])){
    //this will redirect to login page if user didn't logged in yet 
    redirect("login.php");
    }

    

    //print_r($_SESSION);

?>
<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equive="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/index.css">
    <script src="../JS/index.js"></script>
</head>

<body>


    <?php

        //print_r($_SESSION);
        AutoSideNav();
        AutoTopNav();
    ?>


    <div id="main">
        <span style="font-size:30px;cursor:pointer;color:deeppink;font-family: 'Pacifico', cursive;" onclick="openNav()">&#9776; Account </span>
        <h1 class=''> Welcome! "<?php echo $_SESSION['firstname']; ?> "</h1>
        <div class="container">
        <div class="box-round">
            <p id="demo"></p>
            <p> Rate for your satisfaction but not mendatory 1 to 5:</p>
            <input id="numb">
            <button class="btn btn-red" type="button" onclick="myFunction()">Submit</button>
            <p id="dm"></p>
            </div>
        </div>
       




        <div style="font-size:30px;cursor:pointer">
            <?php
        include_once("./partialView/aboutPartialView.php"); 
        ?>
        </div>
    </div>


   
</body>




<?php


  