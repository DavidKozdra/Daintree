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
    $User_name =  $_COOKIE['username'];
    echo $user;
    $FileName = $_FILES["FileName"]["name"]; //fix this what is the file name 
    $File = file_get_contents($_FILES["FileName"]["tmp_name"]);
    //var_dump($File);
    echo "Extention:" . strtolower(pathinfo($FileName, PATHINFO_EXTENSION)) . "\n";
    $Extention = strtolower(pathinfo($FileName, PATHINFO_EXTENSION));
    //$date = date('Y-m-d H:i:s');
    $whitelist = array("jpg", "png");
    if (in_array($Extention, $whitelist)) {
        $sql = "INSERT INTO Catalog ( Image,Name,Description,Price,FileContent,user_id ) VALUES (:filecontent, '$UserName','item description ','1','$user')";
        //var_dump($sql);    
        $query = $db->prepare($sql);

        $query->bindParam(':filecontent', $File, SQLITE3_BLOB);
        if ($query->execute()) {
            //        	 	var_dump($File);
            echo "New record created successfully";
        } else {
            echo "Error: :( check the file type so sorry friend" . $sql;
            // $db->lastErrorCode() . $db->lastErrorMsg() 
        }
    } else {
        echo "sorry $FileName file type not yet supported contact david kozdra to add more file types";
    }
    sleep ( 12 );
    header("Location:..\index.php");
    ?>

    

</body>

</html>