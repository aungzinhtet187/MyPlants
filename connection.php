<?php
// Set the servername, username, and password
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create or select the database
$databaseName = "plants";
$sql = "CREATE DATABASE IF NOT EXISTS $databaseName";

if (mysqli_query($conn, $sql)) {
    echo ".";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

// Select the created or existing database
mysqli_select_db($conn, $databaseName);

// You can now perform other database operations within this connection.

// Close the connection when done

?>