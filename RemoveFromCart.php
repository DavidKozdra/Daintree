<!DOCTYPE html>
<html>

<head>
<!DOCTYPE HTMLPUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
</head>


<body>
<?php

?>

<?php

    require("Depend\Config.php");
    $user =  $_COOKIE['current_user'];
    $User_name = $_COOKIE['username'];
    $id = $_GET['id'];
    echo $user;
    //you keep your column name setting for insertion. I keep image type Blob.

    $sql = "Delete From cart where Item_id = $id Limit 1";
    //   $query = "INSERT INTO products (id,image) VALUES('','$image')";
    var_dump($db->query($sql));

    //$db->query($sql);

    //sleep ( 3 );
    header("Location:Cart.php");
?>



</body>

</html>