<!-- author: Kristine -->
<!-- description: update user -->
<!-- validated: Ok -->

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userId = $_POST["editUserId"];
    $name = $_POST["editName"];
    $dob = $_POST["editDOB"]; 
    $email = $_POST["editEmail"];
    $city = $_POST["editCity"];
    $state = $_POST["editState"];
    $phoneNumber = $_POST["editPhoneNumber"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "plants";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "UPDATE logi SET username='$name', age='$dob', email='$email', city='$city', state_name='$state', phone_number='$phoneNumber' WHERE id=$userId";

    if (mysqli_query($conn, $sql)) {
        echo "User information updated successfully";
    } else {
        echo "Error updating user information: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
