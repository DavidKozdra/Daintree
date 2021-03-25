<?php
// connects to the sqlite file use command sqlite3 filename to edit tables
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "daintree";
// Create connection

$db = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} else {
    //echo "Connected successfully";
}
