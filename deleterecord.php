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

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    // Using prepared statement to prevent SQL injection
    $sql_select = "SELECT * FROM `logi` WHERE id = ?";
    $stmt = $conn->prepare($sql_select);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $sql_insert = "INSERT INTO users (username, password, age, email, city, state_name, phone_number) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt_insert = $conn->prepare($sql_insert);
        $stmt_insert->bind_param("ssissss", $row['username'], $row['password'], $row['age'], $row['email'], $row['city'], $row['state_name'], $row['phone_number']);
        $stmt_insert->execute();
        // Delete the record from the logi table
        $sql_delete = "DELETE FROM `logi` WHERE id = ?";
        $stmt_delete = $conn->prepare($sql_delete);
        $stmt_delete->bind_param("i", $id);
        $stmt_delete->execute();
    } else {
        echo "Record not found";
    }
} else {
    echo "Invalid ID parameter";
}

$conn->close();
?>
