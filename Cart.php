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
        echo $user;
        $sql = " SELECT * FROM Cart where user_id = $user ";
        $result = $db->query($sql) or die($db->error);
        echo "number of rows: " . $result->num_rows;
        if ($result !== false && $result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "  <div>   <div>";
            }
        } else {
            echo "0 results";
        }
        $db->close();

        ?>

    </div>

</body>

</html>