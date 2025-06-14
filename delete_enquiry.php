<!DOCTYPE html>
<html lang="en">
<!-- author: Aung & Kristine -->
<!-- description: Delete enquiry-->
<!-- validated: Ok -->
<head>
    <meta charset="UTF-8">
    <title>MYPLANTS</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<section class="delete-enquiry">
<h2>Deleted Enquiries</h2>
<br>

<table id="myTable" border="1">
    <tr>
        <th width="30px">No</th>
        <th width="150px">Name</th>
        <th width="100px">Email</th>
        <th width="150px">Address</th>
        <th width="100px">Phone number</th>
        <th width="100px">Plant</th>
        <th width="100px">Comment</th>
    </tr>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "plants";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $sql = "SELECT * FROM deletedenquiry";

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
            </tr>
            <?php
        }
    } else {
        echo "0 results";
    }
    mysqli_close($conn);
    ?>
</table>
</section>

</body>
</html>