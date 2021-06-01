<?php
ob_start();
session_start();
session_regenerate_id();

$host = "localhost";
$username = "root";
$password = "";
$db = "ielts";

// Create connection
$dbc = new mysqli($host, $username, $password, $db);

// Check connection
if ($dbc->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>