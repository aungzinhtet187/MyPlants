<!-- author: Kristine -->
<!-- description: delete user-->
<!-- validated: Ok -->

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $userId = $_GET["id"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "plants";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql_select = "SELECT * FROM `logi` WHERE id = ?";
    $stmt = $conn->prepare($sql_select);
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $sql_insert = "INSERT INTO users (username, password, age, email, city, state_name, phone_number) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt_insert = $conn->prepare($sql_insert);
        $stmt_insert->bind_param("ssissss", $row['username'], $row['password'], $row['age'], $row['email'], $row['city'], $row['state_name'], $row['phone_number']);
        $stmt_insert->execute();
        // Delete the record from the logi table
        $sql_delete = "DELETE FROM `logi` WHERE id = $userId";
  
    if (mysqli_query($conn, $sql_delete)) {
        echo "User deleted successfully";

        // Redirect to view.php after successful deletion
        header("Location: view.php");
        exit; // Ensure that no further code is executed after the redirect
    } else {
        echo "Error deleting user: " . mysqli_error($conn);
    }

    mysqli_close($conn);
} else {
    echo "Invalid request";
}
}
?>