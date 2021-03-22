<?php
$message = "";
require("C:\\xampp\htdocs\DainTree\Depend\Config.php");
if (count($_POST) > 0) {
    $email = $_POST["email"];
    if(isset($_POST["username"])){
        $username = $_POST["username"];
    }
    $password = $_POST["password"];
    $result = $db->query("SELECT * FROM users WHERE email =$email and password = $password");
    $count  = $result->num_rows;
    echo $count;
    if ($count == 0 ) {
        if($username == null){
            echo "No account found you sould regester";
            echo "<a href ='register.php'>Register</a>";
            return;
        }
        else{
            //same email error
            $message = "New User"; //html
            $sql = $db->query("INSERT INTO users (email,password,name) VALUES('$email','$password','$username')");
            echo "<a href ='..\index.php'>HomePage</a>";
        }
    } else {
        $message = "You are successfully authenticated!"; //html
        echo "<a href ='..\index.php'>HomePage</a>";
    }

    $_SESSION['current_user'] = $db->query("SELECT user_id FROM Users WHERE email=$email and password = $password ");
    echo $_SESSION['current_user'];
    echo $message;
}
