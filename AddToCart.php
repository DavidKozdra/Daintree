<!DOCTYPE html>
<html>

<head>
<!DOCTYPE HTMLPUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
</head>


<body>


<?php

    require("Depend\Config.php");
    $user =  $_COOKIE['current_user'];
    $User_name = $_COOKIE['username'];
    $id = $_GET['id'];
    echo $user;
    
    $sql = "INSERT INTO cart (Item_id,user_id) VALUES ('$id','$user')";
    var_dump($db->query($sql));

    header("Location:index.php");
?>



</body>

</html>