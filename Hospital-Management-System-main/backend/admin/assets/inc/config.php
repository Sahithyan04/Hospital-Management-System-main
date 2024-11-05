<?php
$dbuser = "root";
$dbpass = "";
$host = "localhost";
$db = "hmisphp"; // Replace with your actual database name
$mysqli = new mysqli($host, $dbuser, $dbpass, $db);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>
