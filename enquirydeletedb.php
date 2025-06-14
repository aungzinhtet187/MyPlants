<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "plants";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create the database
$sqlCreateDatabase = "CREATE DATABASE IF NOT EXISTS enquirydeletedb";
if (mysqli_query($conn, $sqlCreateDatabase)) {
    echo "Database created successfully.<br>";
} else {
    echo "Error creating database: " . mysqli_error($conn) . "<br>";
}

// Switch to the newly created database
mysqli_select_db($conn, "enquirydeletedb");

// Create the table
$sqlCreateTable = "CREATE TABLE IF NOT EXISTS deleted_enquiries (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(255) NOT NULL,
    lastname VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    streetaddress VARCHAR(255) NOT NULL,
    citytown VARCHAR(255) NOT NULL,
    state VARCHAR(255) NOT NULL,
    postcode VARCHAR(10) NOT NULL,
    phonenumber VARCHAR(20) NOT NULL,
    plant VARCHAR(255) NOT NULL,
    comments TEXT NOT NULL
)";
if (mysqli_query($conn, $sqlCreateTable)) {
    echo "Table created successfully.<br>";
} else {
    echo "Error creating table: " . mysqli_error($conn) . "<br>";
}

mysqli_close($conn);
?>