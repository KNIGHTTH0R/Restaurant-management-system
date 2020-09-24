<head>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/t.css">

</head>

<body>
<?php 
session_start();
include_once("../MVC.php");
include_once("../Model/userModel.php");
if(isset($_SESSION["role"]) && $_SESSION["role"]=="admin" )
{
    AutoTopNav();
}
if(isset($_SESSION["role"]) && $_SESSION["role"]=="manager" )
{
    AutoTopNav();
}
?>
    <h1 class="glow">Registration</h1>

    <div class="reg">
        <form action="../Controller/signupCustomerController.php" method="post" id="reg" enctype="multipart/form-data">
            <label>email</label> <br>
            <input type="email" name="email" id="n" placeholder="example@exmaple.com"><br><br>

            <label>firstname</label><br>
            <input type="text" name="firstname" id="n" placeholder="first Name"><br><br>

            <label>lastname</label><br>
            <input type="text" name="lastname" id="n" placeholder="last Name"><br><br>

            <label>gender</label><br>
            <input type="radio" name="gender" value="male" checked> Male
            <input type="radio" name="gender" value="female"> Female
            <input type="radio" name="gender" value="other"> Other<br><br>

            <label>phone Number</label><br>
            <input type="text" name="phone" id="n" placeholder="+88017XXXXXXXX"><br><br>

            <label>Personal Address</label><br>
            <input type="text" name="personalAddress" id="n" placeholder="personalAddress"><br><br>

            <label>password</label><br>
            <input type="password" name="password" id="n" placeholder="password"><br><br>

            <label>Confirm password</label><br>
            <input type="password" name="cpassword" id="n" placeholder="Confirm password"><br><br>


            <label>Date Of Birth </label><br>
            <select name="date" id="k" class="date">
                <option value="0">---Day---</option>
                <?php for ($i=1;$i<=31;$i++){echo "<option value='".$i."'>".$i."</option>";} ?>
            </select>

            <select name="month" id="k">
                <option value="0">---Month---</option>
                <option value="january">january</option>
                <option value="february">february</option>
                <option value="march">march</option>
                <option value="april">april</option>
                <option value="may">may</option>
                <option value="june">june</option>
                <option value="july">july</option>
                <option value="august">august</option>
                <option value="september">september</option>
                <option value="october">october</option>
                <option value="november">november</option>
                <option value="december">december</option>
            </select>

            <select name="year" id="k">
                <option value="0">---Year---</option>
                <?php for ($i=2020;$i>=1960;$i--){echo "<option value='".$i."'>".$i."</option>";} ?>
            </select><br><br>

            <label>Your Picture: </label><br>
            <input type="file" name="picture" accept="image/*"> <br><br><br>
            <input type="submit" name="Register" id="sub" value="Register">
            <h2>Already have account?<a href="login.php">Sign In</a></h2>

        </form>
    </div>

</body>