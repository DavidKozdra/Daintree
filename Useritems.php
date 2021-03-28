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
        echo "test";
        $user =  $_COOKIE['current_user'];
        echo $user;
        $sql = " SELECT * FROM Catalog where user_id = $user ";

        $res = $db->query($sql) or die($db->error);
        if ($res !== false && $res->num_rows > 0) {
            while ($row = mysqli_fetch_assoc($res)) {
                echo "<div> <img class='poster' src='Depend\image.php?id=" . $row['Item_id'] . "'/>  <button id = 'cart'> Remove </button> </div>";
            }
        }

        $db->close();

        ?>

    </div>


    <div class="position-sticky" style="height:60%" id="side-panel">
        <h3> Upload Your Own </h3>
        <form action="UploadPage.php" method="post" enctype="multipart/form-data">
            <div id="panel">
                <h2> Select image to upload:</h2>
                <div class="form-group">

                    <label for="nametext">Name</label>
                    <input name="Name" type="text" class="form-control" id="nametext" placeholder="Enter Name ...">

                    <label for="nametext">Price</label>
                    <input name="Price" type="text" class="form-control" id="nametext" placeholder="Enter Price ...">

                    <label for="nametext">Description </label>
                    <input name="Description" type="text" class="form-control" placeholder="This item ...">
                </div>
                <input type="file" name="FileName" id="fileToUpload" />
                <input class="p2" type="submit" value="Upload" name="submit" />
        </form>
    </div>


    <script>
        //animation code 

        $(document).ready(function() {
            $(".position-sticky").click(function(e) {
                console.log(this);
                if ($(e.target).is("input")) return;
                if ($("#side-panel").hasClass('dontshow')) {
                    $("#side-panel").stop().animate({
                        height: "60%",
                        width: "40%"
                    }, 500).removeClass('dontshow');
                } else {
                    $("#side-panel").stop().animate({
                        height: "5%",
                        width: "20%"
                    }, 500).addClass('dontshow');
                }

            });
        });
    </script>

</body>

</html>