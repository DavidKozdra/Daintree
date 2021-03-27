<?php
    require("C:\\xampp\htdocs\DainTree\Depend\Config.php"); // mysql connection

    //form data
    $email = $_POST["email"];
    $password = $_POST["password"];

    // look for users with this user credential
    $sql = "SELECT * FROM users where email = '$email' and password = '$password' LiMIT 1";

    //check if there was an error
    $result = $db->query($sql) or die('<div><br><br> <h><b>Error</b> </h> <p>User not found</p> <a src = "login.php"> GO BACK </a></div>');
    //get the resulting table as an array
    $row = $result->fetch_assoc();
    //var_dump($row); // debug

    //setting current user cookie to access site wide
    setcookie("username", $row['username'], time() + (86400 * 30), "/"); 
    setcookie("current_user", $row['user_id'], time() + (86400 * 30), "/"); 
    setcookie("user_password", $row['password'], time() + (86400 * 30), "/"); 

    // any users that matched our query
    if($result->num_rows > 0){
        header("Location:..\index.php"); // go to index
    }else{
        echo "<div><br><br> <h><b>Error</b> </h> <p>User not found</p> <a href = 'login.php'> GO BACK </a></div>"; // error page
    }
    exit();
?>