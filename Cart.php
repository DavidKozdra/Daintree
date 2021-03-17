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


        require("Config.php");
        echo "test";

        $res = $db->query('SELECT * FROM Cart where user_id = $current_user');


        if ($res !== false && $res->num_rows > 0) {
            while ($row = mysqli_fetch_assoc($res)) {
                /*
            if ($row['asset_extention'] == "png" || $row['asset_extention'] == "jpg") {

                //$data = base64_encode($row['FileContent']);
                $file_parts = pathinfo($filename);
                echo "<div class='p2'  > " . $row['FileName'] . " <img class='poster' src ='image.php?id=" . $row['asset_id'] . "'/> " . $row[''] . " "  . $row[''] . "<br/>" . "<a class='p2' href= 'image.php?id=" . $row['asset_id'] . "'  download  > Download </a>" . " </div>";
            } else {

                echo "<p> " . $row['FileContent'] . " </p>";
            }
 
            echo "\n";
            */
            }
        }

        $db->close();

        ?>

    </div>

</body>

</html>