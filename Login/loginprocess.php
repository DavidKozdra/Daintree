<?php
    require("C:\\xampp\htdocs\DainTree\Depend\Config.php");
    $email = $_POST["email"];
    $password = $_POST["password"];
    $sql = "SELECT user_id FROM users where email = '$email' and password = '$password' LiMIT 1";
    var_dump($sql);
    $result = $db->query($sql) or die('<div><br><br> <h><b>Error</b> </h> <p>User not found</p> <a src = "login.php"> GO BACK </a></div>');
    $row = $result->fetch_assoc();
    $_SESSION['current_user'] = $row['user_id'];
    $_SESSION['username'] = $row['username'];

    setcookie("current_user", $row['user_id'], time() + (86400 * 30), "/");
    var_dump($result);
    echo $_SESSION['current_user'];
    if($result->num_rows > 0){
        header("Location:..\index.php");
    }else{
        echo "<div><br><br> <h><b>Error</b> </h> <p>User not found</p> <a href = 'login.php'> GO BACK </a></div>";
    }
    exit();
?>