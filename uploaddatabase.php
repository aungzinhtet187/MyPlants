<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "plants";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to create the uploads table
$sql = "CREATE TABLE IF NOT EXISTS upload (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    filename VARCHAR(255) NOT NULL,
    description TEXT,
    upload_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

// Execute the SQL query
if ($conn->query($sql) === TRUE) {
    echo "Uploads table created successfully";
} else {
    echo "Error creating uploads table: " . $conn->error;
}

// Close the connection
$conn->close();
?>