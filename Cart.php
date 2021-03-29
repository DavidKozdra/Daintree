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
        $user =  $_COOKIE['current_user'];
        //echo $user;


        $sql = "SELECT item_id FROM cart WHERE user_id = $user";
        //$sql = "SELECT * FROM  catalog WHERE item_id = (SELECT item_id FROM cart where user_id = $user LIMIT 1)";
        //Cannot do sum unless we get this ^ 

        $result = $db->query($sql) or die($db->error);
        //echo "number of rows: " . $result->num_rows;
        echo "<a href='Removeallfromcart.php'><button id = 'button'> Checkout </button> </a> </div>";

        if ($result !== false && $result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                //var_dump($row);
                echo "<div> <img class='poster' src='Depend\image.php?id=" . $row['item_id'] . "'/> 

                <p>" . $row['Name'] . "</p>
                <p>" . $row['Price'] . "</p>

                <a href='RemoveFromCart.php?id=" . $row['item_id'] . "'><button id = 'cart'> Remove From Cart </button> </a> </div>";
            }
        } else {
            echo "0 results";
        }




        $db->close();

        ?>

    </div>



</body>

</html>