<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$host = "localhost";
$username = "uthu589_dpch";
$password = "amQj5Vv5WvxF";
$dbname = "uthu589_dph";

// Establish a database connection using MySQLi
$mysqli = new mysqli($host, $username, $password, $dbname);

// Check if the connection is successful
if ($mysqli->connect_error) {
    die('Connection failed: ' . $mysqli->connect_error);
} else {
   //echo 'Connected to the database server successfully!<br>';

    // Perform your database operations here

    // Close the database connection when done
   // $mysqli->close();
}
?>
