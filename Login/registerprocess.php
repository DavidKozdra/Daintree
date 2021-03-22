<?php
    
    require("C:\\xampp\htdocs\DainTree\Depend\Config.php");
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql = "SELECT * FROM users where username= '$username' or email = '$email'";
    $result = $db->query($sql) or die($db->error);
    $row = $result->fetch_assoc();
    $count  = $result->num_rows;
    if($count > 0){
        echo "User name or email already in use";
        echo "<a href ='register.php'>Register</a>";
    }else{
        $sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";
        if ($db->query($sql) === TRUE) {
            echo "New record created successfully";
            $row = $result->fetch_assoc();
            $_SESSION['current_user'] = $row['user_id'];
        } else {
            echo "Error: " . $sql . "<br>" . $db->error;
        }
    }
?>