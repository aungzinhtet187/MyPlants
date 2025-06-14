<!DOCTYPE html>
<html lang="en">
<!-- Description: Enquiry View -->
<!-- Author: Aung & Kristine -->
<!-- Validation: OK -->
<head>
    <title>Enquiry View</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<section class="view-enquiry">
    <h1>Enquiry View</h1>

    <table border="1">

        <tr>
            <th width="30px">No</th>
            <th width="150px">Name</th>
            <th width="100px">Email</th>
            <th width="150px">Address</th>
            <th width="100px">Phone number</th>
            <th width="100px">Plant</th>
            <th width="100px">Comment</th>
            <th width="50px">Delete Enquiry</th> 
        </tr>
        <?php

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "plants";

        $conn = mysqli_connect($servername, $username, $password, $dbname);

        $sql = "SELECT * FROM enquiry";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>

                <tr>
                    <td> <?php echo $row["id"]; ?></td>
                    <td> <?php echo $row["firstname"] . " " . $row["lastname"]; ?></td>
                    <td> <?php echo $row["email"]; ?></td>
                    <td> <?php echo $row["streetaddress"] . " " . $row["citytown"] . " " . $row["state"] . " " . $row["postcode"]; ?></td>
                    <td> <?php echo $row["phonenumber"]; ?></td>
                    <td> <?php echo $row["plant"]; ?></td>
                    <td> <?php echo $row["comments"]; ?></td>
                    <td> <button class="button" onclick="deleteEnquiry(<?php echo $row["id"]; ?>)">Delete</button></td>
                </tr>
        <?php
            }
        } else {
            echo "0 results";
        }
        mysqli_close($conn);
        ?>

    </table>

    <script>
        function deleteEnquiry(enquiryId) {
            var confirmDelete = confirm("Are you sure you want to delete this enquiry?");
            if (confirmDelete) {
                window.location.href = "delete.php?id=" + enquiryId;
            }
        }
    </script>
</section>
</body>

</html>
