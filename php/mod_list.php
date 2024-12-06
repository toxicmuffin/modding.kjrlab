<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Load database configuration
require_once '/config/keys/db_config.php';
global $db_host, $db_user, $db_pass, $db_name;

// Database connection
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
if ($conn->connect_error) {
    die("Error: Database connection failed - " . $conn->connect_error);
}

// Query to fetch mods
$sql = "SELECT Mod_Name, Mod_Link, Installation_Instructions, Mod_Priority, Mod_Version FROM Mods_Table WHERE Ignore_Mod = 0";
$result = $conn->query($sql);

if (!$result) {
    die("Error: Query failed - " . $conn->error);
}

// Populate modList
$modList = [];
while ($row = $result->fetch_assoc()) {
    $modList[] = $row;
}

// Close connection
$conn->close();
?>
