<!DOCTYPE html>
<html>

<head>

</head>


<body>

    <?php
    echo require("header.php");
    require("Config.php");
    $Search = $_POST['search'];

    echo "you searched for " . $Search;
    $res = $db->query('SELECT * FROM items
		WHERE Name LIKE \'%' . $Search . '%.\'
   		OR Description LIKE \'%' . $Search . '%\'
   		OR Price LIKE \'%' . $Search . '%\'');
    if ($res !== false && $res->num_rows > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
            //	var_dump($row);  

            // }
            echo "\n";
        }
    }


    ?>


</body>

</html>