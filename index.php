<html>

<head>
    <?php
    require("header.php");

    ?>
    <title> DainTree</title>
</head>
<style>
    * {
        color: white;

    }

    .p2 {
        color: purple;

    }

    .blacktext {
        color: black;
        background-color: white;
        font-size: large;
        font-weight: bold;
    }

    option {
        color: purple;

    }


    .RectItem {
        width: 100px;
        height: 100px;
        padding: 2px;
        border: groove;
        font-size: 20px;
        border-color: #2b2b2b;
    }

    .btn {
        background-color: DodgerBlue;
        border: none;
        color: white;
        padding: 12px 30px;
        cursor: pointer;
        font-size: 20px;
    }

    /* Darker background on mouse-over */
    .btn:hover {
        background-color: RoyalBlue;
    }
</style>

<body>
    <div>

        <?php
        require("Depend\Config.php");
        //echo $_SESSION['username'];
        $user =  $_COOKIE['current_user'];
        $sql = "SELECT * FROM catalog where user_id != $user Order by item_id Desc";
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



    </div>

</body>

</html>