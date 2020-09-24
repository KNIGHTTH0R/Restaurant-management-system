<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="../CSS/h.css">
</head>

<body>


    <h1>Sign In</h1>
    <form action="../Controller/loginController.php" method="post">

        <div class="login-box">
            


            <div class="user-box">
                <input type="email" name="email" required=" "><br>
                <label>EMAIL<label>

            </div>

            <div class="user-box">
                <input type="password" name="password" required=" "><br>
                <label>PASSWORD<label>
            </div>
            <input type="submit" name="login" value="LOGIN "><br><br>
            <a href="#" style="color:rgb(26, 255, 255);">Forgot password?</a>

            <br>
            <a href="./customerSignup.php" style="color:rgb(26, 255, 255);">Sign Up for a new account</a>

                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </a>
    </form>
    </div>

</body>

</html>