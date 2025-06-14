
<?php
    // Set the servername, username, and password
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "plants";


    // Create a connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check the connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // SQL query to create the enquiry table
    $sql = "CREATE TABLE delete_record (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(25) NOT NULL,
        lastname VARCHAR(25) NOT NULL,
        email VARCHAR(100) NOT NULL,
        streetaddress VARCHAR(40) NOT NULL,
        citytown VARCHAR(20) NOT NULL,
        state VARCHAR(20) NOT NULL,
        postcode VARCHAR(5) NOT NULL,
        phonenumber VARCHAR(10) NOT NULL,
        plant VARCHAR(50) NOT NULL,
    description TEXT
);
    )";

    // Execute the SQL query
    if (mysqli_query($conn, $sql)) {
        echo "Delete record table created successfully";
    } else {
        echo "Error creating delete record table: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
?>