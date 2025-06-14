


<?php

$host = "localhost";  // Change this to your MySQL server hostname or IP address
$dbname = "plants";   // Change this to your database name
$username = "root";   // Change this to your MySQL username
$password = "";       // Change this to your MySQL password

$conn = "";

try {
    $conn = new PDO(
        "mysql:host=$host;dbname=$dbname",
        $username,
        $password
    );

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>


