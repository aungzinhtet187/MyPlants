
<?php
    require "confirm.php";
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
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $_SESSION['user_id'] = $_POST["username"];
        // Retrieve data from the form
        $username = $_POST["username"];
        $name = $_POST["name"];
        $password = $_POST["password"];
        $age = $_POST["age"];
        $email = $_POST["email"];
        $city = $_POST["city"];
        $state_name = $_POST["state_name"];
        $phone_number = $_POST["phone_number"];
    
        // SQL query to insert data into the logi table
      $sql = "INSERT INTO logi (username, password, age, email, city, state_name, phone_number) VALUES ('$username', '$password', '$age', '$email', '$city', '$state_name', '$phone_number')";
        if (mysqli_query($conn, $sql)) {
            echo "Record inserted successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

    // Close the database connection
    mysqli_close($conn);

?>