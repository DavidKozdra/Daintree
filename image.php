<?php
require("Config.php");
$id = $_GET['id'];
$ImageFile = $db->query('SELECT image FROM Catalog Where item_id =' . $id);
header('Content-Type: image/jpeg');
readfile($ImageFile);
if ($ImageFile) {
    echo $ImageFile;
} else {
    echo ":(";
}
