<!-- author:Ivy -->
<!-- description: Team MYPLANTS's Project-->
<!-- validated: Ok -->

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

    // SQL query to create the adminlogin table
    $sql = "CREATE TABLE IF NOT EXISTS `adminlogin` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `username` varchar(100) NOT NULL,
        `password` varchar(100) NOT NULL,
        PRIMARY KEY (`id`)
    ) ENGINE=MyISAM DEFAULT CHARSET=latin1";

    // Execute the create table query
    if (mysqli_query($conn, $sql)) {
        echo "Table adminlogin created successfully";
    } else {
        echo "Error creating table: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
?>










