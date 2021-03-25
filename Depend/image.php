<?php
require("Config.php");
$id = $_GET['id'];
$ImageFile = $db->query('SELECT Image FROM catalog Where Item_id =' . $id);
header('Content-Type: image/png');
//var_dump($ImageFile);
if ($ImageFile) {
    //var_dump( $ImageFile->fetch_assoc()['Image']);
    echo $ImageFile->fetch_assoc()['Image'];
} else {
    http_response_code(404);
    echo ":(";
}
?>