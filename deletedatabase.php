<?php
    // Set the servername, username, and password
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "plants";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }

    // Define the table with "No" as the primary key
   
    $sql = "CREATE TABLE IF NOT EXISTS users (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(20) NOT NULL,
        password VARCHAR(255) NOT NULL,
        age DATE NOT NULL,
        email VARCHAR(100) NOT NULL,
        city VARCHAR(30) NOT NULL,
        state_name VARCHAR(30) NOT NULL,
        phone_number VARCHAR(20) NOT NULL,
        registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP 
        )";
    
    mysqli_query($conn, $sql);

    mysqli_close($conn);
?>
