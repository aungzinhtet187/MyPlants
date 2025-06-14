<!-- author: Kristine -->
<!-- description: Enquiry Form -->
<!-- validated: Ok -->

<?php
// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $streetaddress = $_POST['streetaddress'];
    $citytown = $_POST['citytown'];
    $state = $_POST['state'];
    $postcode = $_POST['postcode'];
    $phonenumber = $_POST['phonenumber'];
    $plant = $_POST['plant'];
    $comments = $_POST['comments'];

    // Establish an SQL connection
    $servername = "localhost"; // Replace with your database server name
    $username = "root"; // Replace with your database username
    $password = ""; // Replace with your database password
    $dbname = "plants"; // Replace with your database name

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute the SQL INSERT query
    $sql = "INSERT INTO enquiry (firstname, lastname, email, streetaddress, citytown, state, postcode, phonenumber, plant, comments)
    VALUES ('$firstname', '$lastname', '$email', '$streetaddress', '$citytown', '$state', '$postcode', '$phonenumber', '$plant', '$comments')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully!";
        header("Location: index.php");
        exit(); // Ensure script stops after redirect

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the SQL connection
    $conn->close();
} else {
    echo "<h1>No data submitted.</h1>";
}
?>