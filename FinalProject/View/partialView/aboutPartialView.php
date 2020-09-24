<br>
<div class="">
<div class="container">
    <div class="box-round">
        <div class="row">
            
            <h1 style="text-align:center;"> Account Information</h1>
            <br>
        </div>

        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <img class="img-responsive img-rounded" src="<?php echo $_SESSION['picture'];?>" alt="Profile Picture"
                    width="300">
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
                Shipping Address: <?php echo $_SESSION["personalAddress"] ;?>
                <br>
                email: <?php echo $_SESSION["email"] ;?>
                <br>
                Sex: <?php echo $_SESSION["gender"] ;?>
                <br>
            </div>
        </div>
    </div>
</div>
</div>