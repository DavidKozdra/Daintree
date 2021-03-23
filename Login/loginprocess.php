<?php
    require("C:\\xampp\htdocs\DainTree\Depend\Config.php");
    $email = $_POST["email"];
    $password = $_POST["password"];
    $sql = "SELECT user_id FROM users where email = '$email' and password = '$password' LiMIT 1";

    $result = $db->query($sql) or die('<div><br><br> <h><b>Error</b> </h> <p>User not found</p> <a src = "login.php"> GO BACK </a></div>');
    $row = $result->fetch_assoc();
    setcookie("current_user", $row['user_id'], time() + (86400 * 30), "/"); //says value null?
    setcookie("username", $row['username'], time() + (86400 * 30), "/"); //says value null?
    setcookie("user_password", $row['password'], time() + (86400 * 30), "/"); //says value null?
    
    if($result->num_rows > 0){
        header("Location:..\index.php");
    }else{
        echo "<div><br><br> <h><b>Error</b> </h> <p>User not found</p> <a href = 'login.php'> GO BACK </a></div>";
    }
    exit();
?>