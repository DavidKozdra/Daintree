<?php
require("Config.php");
$id = $_GET['id'];
$ImageFile = $db->query('SELECT Image FROM catalog Where Item_id =' . $id);
header('Content-Type: image/jpeg');
readfile($ImageFile);
if ($ImageFile) {
    echo $ImageFile;
} else {
    echo ":(";
}
?>