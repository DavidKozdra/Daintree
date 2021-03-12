<?php
// connects to the sqlite file use command sqlite3 filename to edit tables
$servername = "localhost";
$username = "pma";
$password = "";

// Create connection

$db = new mysqli($servername, $username, $password);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

echo "Connected successfully";
