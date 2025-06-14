<?php
    //set the servername, username and password
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "plants";

    //Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    //Check connection
    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }

    session_start();
    if (isset($_SESSION['user_id'])) {
        $username = $_SESSION['user_id'];
        // No debug output here

        $sql = "SELECT * FROM logi WHERE username = '$username'";
        // No debug output here

        $result = mysqli_query($conn, $sql);

        if ($result) {
            $row = mysqli_fetch_assoc($result);
        }
    }
?>

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
    <h1>MYPLANTS</h1>
    <h2>Registration Confirmation page</h2>

    <?php 
        if ($row) {
            // Access the data from the $row associative array
            echo "<fieldset>
                <legend>Save Details</legend>
                <p>Welcome " . $row['username'] . "</p>
                <p>Age: " . $row['age'] . "</p>
                <p>Email: " . $row['email'] . "</p>
                <p>City: " . $row['city'] . "</p>
                <p>State: " . $row['state_name'] . "</p>
                <p>Phone Number: " . $row['phone_number'] . "</p>
            </fieldset>";
        } else {
            // No matching record found for the provided username
            echo "No record found for the provided username.";
        }
    ?>
    <p><a href='signup.php'>Click here to login page</a></p>
</body>
</html>