<?php
    require("C:\\xampp\htdocs\DainTree\Depend\Config.php");
    $email = $_POST["email"];
    $password = $_POST["password"];
    $sql = "SELECT user_id FROM users where email = '$email' and password = '$password' LiMIT 1";
    var_dump($sql);
    $result = $db->query($sql) or die('<div><br><br> <h><b>Error</b> </h> <p>User not found</p></div>');
    $row = $result->fetch_assoc();
    $_SESSION['current_user'] = $row['user_id'];
    var_dump($result);
    echo $_SESSION['current_user'];

    header("Location:..\index.php");
    exit();
?>