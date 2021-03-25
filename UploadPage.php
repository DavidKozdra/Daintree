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
    echo $user;
    $FileName = $_FILES["FileName"]["name"]; //fix this what is the file name 
    $desc = $_POST['Description'];
    //var_dump($File);
    echo "Extention:" . strtolower(pathinfo($FileName, PATHINFO_EXTENSION)) . "\n";
    $Extention = strtolower(pathinfo($FileName, PATHINFO_EXTENSION));
    //$date = date('Y-m-d H:i:s');
    $whitelist = array("jpg", "png");
    if (in_array($Extention, $whitelist)) {
        $image = addslashes(file_get_contents($_FILES["FileName"]["tmp_name"]));
        //you keep your column name setting for insertion. I keep image type Blob.
        
        $sql = "INSERT INTO catalog (Image,Name,Description,Price,user_id) VALUES ('$image', '$FileName','$desc','1','$user')";
     //   $query = "INSERT INTO products (id,image) VALUES('','$image')";
        var_dump($db->query($sql));

        //$db->query($sql);
    } else {
        echo "sorry $FileName file type not yet supported contact david kozdra to add more file types";
    }
    //sleep ( 3 );
    //header("Location:Useritems.php");
    ?>

    

</body>

</html>