<!DOCTYPE html>
<html>

<head>

</head>


<body>

    <?php
    echo require("header.php");
    require("Depend\Config.php");
    $Search = $_POST['search'];
    echo "you searched for " . $Search;
    $sql = 'SELECT * FROM catalog
		WHERE Name LIKE \'%' . $Search . '%.\'
   		OR Description LIKE \'%' . $Search . '%\'
   		OR Price LIKE \'%' . $Search . '%\'';
    
        $result = $db->query($sql) or die($db->error);
        // echo "number of rows: " . $result->num_rows;
        if ($result !== false && $result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {

                echo "<div> <img class='poster' src='Depend\image.php?id=" . $row['Item_id'] . "'/> 
                 
                 <p class='blacktext'>Name: " . $row['Name'] . "</p>
                 <p class='blacktext'>Description: " . $row['Description'] . "</p>
                 <p class='blacktext'>Price: " . $row['Price'] . "</p>

                <a href='AddToCart.php?id=" . $row['Item_id'] . "'><button id = 'cart'> ADD to Cart </button> </a> </div>";
            }
        } else {
            echo "0 results";
        } 


    ?>


</body>

</html>