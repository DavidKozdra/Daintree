<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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

    <div class="banner">
        <h2>Welcome to Daintree!</h2>
    </div>


    <form action="/action_page.php" method="get">
        <!-- Needs to work with some page -->
        <div class="boxed">
            Fill in all forms with a * to complete registration. <br>
            *Name: <input type="text" value="" required /> <br>
            *Email: <input type="text" value="" required /> <br>
            *Password: <input type="password" value="" required /> <br>
            *Re-enter Password: <input type="password" value="" required /> <br>
            <input type="submit"> <br>
            <a href='login.php'>Back to Login?</a>
        </div>
    </form>

</body>

</html>