<head>
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<?php
include_once("../MVC.php");
include_once("../Model/userModel.php");
session_start();
if(!isset($_SESSION["isValid"])){
//this will redirect to login page if user didn't logged in yet 
redirect("./login.php");
}

echo "<pre>";
//print_r($_SESSION);
echo "</pre>";
if(isset($_SESSION["isValid"]) && $_SESSION["isValid"]=="yes" )
{
AutoTopNav();

$v["firstname"]=$_SESSION["firstname"];
$v["lastname"]=$_SESSION["lastname"];
$v["date"]=$_SESSION["date"];
$v["month"]=$_SESSION["month"];
$v["year"]=$_SESSION["year"];
$v["gender"]=$_SESSION["gender"];
$v["phone"]=$_SESSION["phone"];
$v["email"]=$_SESSION["email"];
$v["personalAddress"]=$_SESSION["personalAddress"];
$v["password"]=$_SESSION["password"];
$v["picture"]=$_SESSION["picture"];


//separating day month and year from date 
//$dob=explode(" ",$v["dateOfBirth"]);
//$v["day"]=$dob[0];
//$v["month"]=$dob[1];
//$v["year"]=$dob[2];


//print_r($v);
?>
<div class="reg">
<hr>
<h1 align="center">Update Account Information</h1>
<hr>

<form action="../Controller/userUpdateController.php" method="post">
    First name:<br>
    <input type="text" name="firstname" value=<?php echo $v["firstname"];?>><br><br>
    Last name:<br>
    <input type="text" name="lastname" value=<?php echo $v["lastname"];?>><br><br>


    Gender:<br>
    <input type="radio" name="gender" value="male" <?php if($v["gender"]=="male") echo "checked";?>> Male<br>
    <input type="radio" name="gender" value="female" <?php if($v["gender"]=="female") echo "checked";?>> Female<br>
    <input type="radio" name="gender" value="other" <?php if($v["gender"]=="other") echo "checked";?>> Other<br><br>


    Phone:<br>
    <input type="text" name="phone" value=<?php echo $v["phone"];?>><br><br>

    <label>Date Of Birth </label><br>
    <select name="date" id="k" class="date">
        <option value="0">---Day---</option>
        <?php for ($i=1;$i<=31;$i++){
                                    if($i==$v["date"] ) echo "<option selected value='".$i."'>".$i."</option>";
                                    else echo "<option  value='".$i."'>".$i."</option>";
                                    } ?>
    </select>

    <select name="month" id="k">
        <option value="0">---Month---</option>
        <option <?php if($v["month"]=="january") echo "selected";?> value="january">january</option>
        <option <?php if($v["month"]=="february") echo "selected";?> value="february">february</option>
        <option <?php if($v["month"]=="march") echo "selected";?> value="march">march</option>
        <option <?php if($v["month"]=="april") echo "selected";?> value="april">april</option>
        <option <?php if($v["month"]=="may") echo "selected";?> value="may">may</option>
        <option <?php if($v["month"]=="june") echo "selected";?> value="june">june</option>
        <option <?php if($v["month"]=="july") echo "selected";?> value="july">july</option>
        <option <?php if($v["month"]=="august") echo "selected";?> value="august">august</option>
        <option <?php if($v["month"]=="september") echo "selected";?> value="september">september</option>
        <option <?php if($v["month"]=="october") echo "selected";?> value="october">october</option>
        <option <?php if($v["month"]=="november") echo "selected";?> value="november">november</option>
        <option <?php if($v["month"]=="december") echo "selected";?> value="december">december</option>
    </select>


    <select name="year" id="k">
        <option value="0">---Year---</option>
        <?php for ($i=2020;$i>=1960;$i--){
                                 if($i==$v["year"] ) echo "<option selected value='".$i."'>".$i."</option>";
                                 else echo "<option  value='".$i."'>".$i."</option>";
                                 } ?>
    </select><br><br>

    Email: <?php echo $v["email"];?> <br><br>

    personal Address: <br>
    <textarea name="personalAddress" cols="50" rows="10%"><?php echo $v["personalAddress"]?> </textarea>
    <br /> <br />
    <input type="submit" value="Update" name="submit">

</form>
</div>
<?php
}
?>