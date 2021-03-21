<?php
$message = "";
require("C:\\xampp\htdocs\DainTree\Depend\Config.php");
if (count($_POST) > 0) {
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $result = $db->query("SELECT * FROM users WHERE email ='" . $_POST["email"] . "' and password = '" . $_POST["password"] . "'") or die($db->error);
    $count  = $result->num_rows;
    if ($count == 0 ) {
        if($username == null){
            echo "No account found you sould regester";
            echo "<a href ='register.php'>Register</a>";
        }
        else{
        echo "New User"; // html
        $sql = $db->query("INSERT INTO users (email,password,name) VALUES($email,$password,$username)");
        }
        //"INSERT INTO users (email,password,name) VALUES ('$_POST["email"]','$_POST["password"]','$_POST["username"])'"
    } else {
        $message = "You are successfully authenticated!"; //html
    }
    echo $message;
}
