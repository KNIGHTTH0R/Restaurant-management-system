<head>
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<?php  

session_start();
include_once("../MVC.php");
include_once("../Model/userModel.php");
if(isset($_SESSION["role"]) && $_SESSION["role"]=="admin" )
{
    AutoTopNav();
    $data=array();
    
    
	$sql="select * from user where role='admin'";
	//print_r($sql);
	loadFromMySQL($sql);

?>

<table align="center" width=90% border="1px" id="tab">
    <tr>
        <th colspan="10" style="Text-align:center; font-size:2em;color:deeppink;">
            All Admin Accounts
        </th>
    </tr>

    <tr>
        <th>
            First Name
        </th>

        <th>
            Last Name
        </th>

        <th>
            dateOfBirth
        </th>

        <th>
            gender
        </th>

        <th>
            phone
        </th>

        <th>
            email
        </th>
        <th>
            Shipping Address
        </th>
        <th>
            password
        </th>
        <th>
            Profile Picture
        </th>
    </tr>


    <?php
     foreach($data as $v){ 
?>
    <tr>

        <td><?php echo $v["firstname"]; ?></td>

        <td><?php echo $v["lastname"]; ?></td>

        <td><?php echo $v["date"]." ".$v["month"]." ".$v["year"]; ?></td>

        <td><?php echo $v["gender"]; ?></td>

        <td><?php echo $v["phone"]; ?></td>

        <td><?php echo $v["email"]; ?></td>

        <td><?php echo $v["personalAddress"]; ?></td>

        <td> <?php echo $v["password"]; ?></td>

        <td>
            <img src="<?php echo $v['picture']; ?>" alt="picture missing" height="50px" width="50px">
        </td>

    </tr>
    <?php
     }
    ?>
</table>

<?php

	if(sizeof($data)==0)
		echo "Not found";
    
}
?>