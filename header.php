<?php
//This page adds the nav bar and search bar to every page

//add bootstrap and extra crap
require("Depend\Dependencies.php");
require("Depend\Config.php");
        //echo $_SESSION['username'];
$user =  $_COOKIE['current_user'];
$username =  $_COOKIE['username'];
$sql = " SELECT * FROM Cart where user_id = $user ";
$result = $db->query($sql) or die($db->error);
        
?>



<style>
    /* extra specific style code for links and active header */
    .active {
        text-decoration: underline;
    }

    a {
        color: white;

    }

    p {
        color: purple;
    }
</style>

<script>
    //code to add undreline to current item

    $(document).ready(function() {
        var url = window.location.href;
        let me = $('ul a');
        //using jquery map
        $(me).map(function(id, elem) {
            if (url.includes($(elem).attr("href"))) {
                $(elem).addClass("active");
            }
        });
        //minimal changes to your co
    });
</script>

<!--bootstrap navbar -->
<nav class="navbar sticky-top navbar-expand-lg" style="background-color:#2196F3 ">
    <a href="index.php"><img class="navbar-brand" src=""></img></a>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <a class="nav-item " href="index.php">Home</a>
            <a class="nav-item " href="Useritems.php">Selling</a>
            <a class="nav-item " href="Cart.php">Cart (<?=$result->num_rows;?>) </a>
            <a class="nav-item " href="Login\login.php">Logout</a>
            
        </ul>
        <?=$username;?>
        
    </div>
</nav>
<div>

    <!--Search Bar -->
    <form class="example p2 " method="post" action="action_page.php">
        <input type="text" placeholder="Search.." name="search">
        <button type="submit"><i class="fa fa-search">Search </i></button>
    </form>
</div>