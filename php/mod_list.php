<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Database connection and query
$servername = "10.0.1.33";
$username = "dbadmin";
$password = "6ed78624KR";
$dbname = "modding_kjrlab_database";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Mod_Name, Mod_Link, Installation_Instructions, Mod_Priority, Mod_Version FROM Mods_Table WHERE Ignore_Mod = 0";
$result = $conn->query($sql);

$modList = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $modList[] = $row;
    }
}

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
}

$conn->close();
?>


