<!DOCTYPE html>
<html>

<head>
    <!DOCTYPE HTMLPUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
</head>


<body>


    <?php

    require("Depend\Config.php"); //db connection 

    //cookies
    $user =  $_COOKIE['current_user'];
    $User_name = $_COOKIE['username'];
    echo $user;

    //Form data
    $FileName = $_FILES["FileName"]["name"];
    $desc = $_POST['Description'];
    $price = $_POST['Price'];
    $name = $_POST['Name'];
    //var_dump($File); //debug
    //get the extetion
    echo "Extention:" . strtolower(pathinfo($FileName, PATHINFO_EXTENSION)) . "\n";
    $Extention = strtolower(pathinfo($FileName, PATHINFO_EXTENSION));

    $whitelist = array("jpg", "png"); //array for images
    if (in_array($Extention, $whitelist)) {
        $image = addslashes(file_get_contents($_FILES["FileName"]["tmp_name"])); //prep as blob

        $sql = "INSERT INTO catalog (Image,Name,Description,Price,user_id) VALUES ('$image', '$name','$desc','$price','$user')";

        var_dump($db->query($sql));
    } else {
        echo "sorry $FileName file type not yet supported contact david kozdra to add more file types";
        echo "<a href='Useritems.php'> Back </a>";
    }
    header("Location:Useritems.php");
    ?>



</body>

</html>