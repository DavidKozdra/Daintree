<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>
        .banner {
            color: white;
            font-size: 40px;
            background-color: #2196F3;
            border-radius: 15px;
            text-align: center;
            padding-top: 1px;
            padding-right: 1px;
            padding-bottom: 1px;
            padding-left: 1px;
        }

        .boxed {
            text-align: center;
            font-size: 20px;
            padding-top: 20px;
            padding-right: 20px;
            padding-bottom: 20px;
            padding-left: 20px;
        }
    </style>
</head>

<body>

    <?php
        //session_start();
        //unset($_SESSION["current_user"]);
        //unset($_SESSION["username"]);
        //header("Location:login.php");
    ?>

    <div class="banner">
        <h2>Log into Daintree!</h2>
    </div>
    <form action="loginprocess.php" method="post">
        <!-- Needs to work with some page -->
        <div class="boxed">
            Email: <input type="email" value="realdude@legitdomain.com" name="email" /> <br>
            Password: <input type="password" value="Password" name="password" /> <br>
            <input type="submit"> <br>
            <a href='register.php'>Register</a> <br> <!-- Link to register-->
            <a href='forgotpass.php'>Forgot password?</a> <!-- Link to forgot password-->

        </div>
    </form>
</body>

</html>