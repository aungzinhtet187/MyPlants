<!DOCTYPE html>
<!-- author: Kristine -->
<!-- description: delete user-->
<!-- validated: Ok -->
<html lang="en">
<head>
<title>MYPLANTS</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Kristine">
<meta name="description" content="Plant identification project">
<meta name="keywords" content="Plant identification, Plant, take care of plants">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "plants";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the enquiry ID from the URL parameter
$enquiryId = $_GET['id'];

$sql_select = "SELECT * FROM `enquiry` WHERE id = ?";
$stmt = $conn->prepare($sql_select);
$stmt->bind_param("i", $enquiryId);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    // Insert into deletedenquiry
    $sql_insert = "INSERT INTO deletedenquiry (firstname, lastname, email, streetaddress, citytown, state, postcode, phonenumber, plant, comments) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt_insert = $conn->prepare($sql_insert);
    $stmt_insert->bind_param("ssssssssss", $row['firstname'], $row['lastname'], $row['email'], $row['streetaddress'], $row['citytown'], $row['state'], $row['postcode'], $row['phonenumber'], $row['plant'], $row['comments']);
    
    $stmt_insert->execute();

    // Delete the enquiry from the database
    $sql_delete = "DELETE FROM enquiry WHERE id = ?";
    $stmt_delete = $conn->prepare($sql_delete);
    $stmt_delete->bind_param("i", $enquiryId);

    if ($stmt_delete->execute()) {
        echo "Enquiry deleted successfully";
        // Redirect to view_enquiry.php after successful deletion
        header("Location: view_enquiry.php");
        exit();
    } else {
        echo "Error deleting record: " . $stmt_delete->error;
    }
} else {
    echo "Enquiry not found";
}

mysqli_close($conn);
?>
</body>
</html>