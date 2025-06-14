<!DOCTYPE html>
<!-- author:Zainab -->
<!-- description: Team MYPLANTS's Project-->
<!-- validated: Ok -->

<html lang="en">
<head>
<title>MYPLANTS</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Zainab">
<meta name="description" content="Plant identification project">
<meta name="keywords" content="Plant identification, Plant, take care of plants">
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<?php
include("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // You can use the $conn variable from connect.php to perform the query.
    $query = "SELECT * FROM logi WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            echo "You are logged in successfully!";
            header("Location: index.php");
        } else {
            echo "Invalid username or password";
            echo '<a href="registrationform.php">Click here to register</a>';
        }
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
</body>
</html>