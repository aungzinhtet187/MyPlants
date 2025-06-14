// This page is to Make Admin account with password admin
<?php

// Replace these values with your actual database credentials
 $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "plants";


// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to insert data (admin account info can be changed at the last 2 value)
$sql = "INSERT INTO `adminlogin` (`id`, `username`, `password`) VALUES (NULL, 'admin', 'admin')";

// Execute the query
$conn->query($sql);

// Close the database connection
$conn->close();

echo "Record inserted successfully";

?>
