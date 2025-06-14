
<?php
 include (' connection.php'); 

// Check if the user is logged in
if (isset($_SESSION['username'])) {
    // Unset all session variables
    $_SESSION = array();

    // Destroy the session
    session_destroy();

    // Redirect to the login page or any other page
    header("Location: index.php");  // Replace "login.php" with the actual login page
    exit();
} else {
    // Redirect to the login page if the user is not logged in
    header("Location: index.php");
    exit();
}
?>
