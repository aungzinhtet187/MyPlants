<!DOCTYPE html>
<html lang="en">
<!-- author: Aung & Kristine -->
<!-- description: delete register-->
<!-- validated: Ok -->
<head>
    <meta charset="UTF-8">
    <title>MYPLANTS</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<section class="delete-register">
<h2>Deleted Registeration</h2>
<br>

<table id="myTable" border="1">
    <tr>
        <th width="30px">No</th>
        <th width="150px">Name</th>
        <th width="80px">DOB</th>
        <th width="100px">E-mail</th>
        <th width="80px">City</th>
        <th width="80px">State</th>
        <th width="80px">Phone Number</th>
    </tr>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "plants";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $sql = "SELECT * FROM users";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            ?>

            <tr>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["username"]; ?></td>
                <td><?php echo $row["age"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["city"]; ?></td>
                <td><?php echo $row["state_name"]; ?></td>
                <td><?php echo $row["phone_number"]; ?></td>
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