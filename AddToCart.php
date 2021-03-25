<!DOCTYPE html>
<html>

<head>
<!DOCTYPE HTMLPUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
</head>


<body>
<?php

/*
require("header.php");

if (($_FILES['fname']['name']!="")){
// Where the file is going to be stored
$target_dir = "Assets/";
$file = $_FILES['fname']['name'];
$path = pathinfo($file);
$filename = $path['filename'];
$ext = $path['extension'];
$temp_name = $_FILES['fname']['tmp_name'];
$path_filename_ext = $target_dir.$filename.".".$ext;

// Check if file already exists
if (file_exists($path_filename_ext)) {
echo "Sorry, file already exists.";
}else{
move_uploaded_file($temp_name,$path_filename_ext);
echo "Congratulations! File Uploaded Successfully.";
}
}
*/
?>

<?php

    require("Depend\Config.php");
    $user =  $_COOKIE['current_user'];
    $User_name = $_COOKIE['username'];
    $id = $_GET['id'];
    echo $user;
    //you keep your column name setting for insertion. I keep image type Blob.

    $sql = "INSERT INTO cart (Item_id,user_id) VALUES ('$id','$user')";
    //   $query = "INSERT INTO products (id,image) VALUES('','$image')";
    var_dump($db->query($sql));

    //$db->query($sql);

    //sleep ( 3 );
    header("Location:index.php");
?>



</body>

</html>