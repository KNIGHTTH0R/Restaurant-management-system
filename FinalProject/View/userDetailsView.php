<?php 
include_once("../MVC.php");

session_start();
if(!isset($_SESSION["isValid"])){
    //this will redirect to login page if user didn't logged in yet 
    redirect("./login.php");
    }
//print_r($_SESSION);

?>
<body style="background-color:#f4a261;">
    <br>

    <div class="container">
        <div class="box-round">
            <div class="row">
                <h1 align="center">Account Information</h1>
            </div>

            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <img class="img-responsive img-rounded" src="<?php echo $_SESSION['picture'];?>"
                        alt="Profile Picture" width="300">
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    First Name: <?php echo $_SESSION["firstname"] ;?>
                    <br>
                    Last Name: <?php echo $_SESSION["lastname"] ;?>
                    <br>
                    Date of birth: <?php echo $_SESSION["date"]." ".$_SESSION["month"]." ".$_SESSION["year"] ;?>
                    <br>
                    Contact Number: <?php echo $_SESSION["phone"] ;?>
                    <br>
                    Personal Address: <?php echo $_SESSION["personalAddress"] ;?>
                    <br>
                    email: <?php echo $_SESSION["email"] ;?>
                    <br>
                    Sex: <?php echo $_SESSION["gender"] ;?>
                    <br>
                </div>
            </div>
        </div>
    </div>
</body>