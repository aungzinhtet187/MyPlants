<!-- author: Aung (view page) & Kristine (edit & update) -->
<!-- validated: Ok -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Registered Users</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<section class="view">

<h2>Registered Users</h2>
<br>

<div class="button-container">
    <button id="sort" onclick="sortTable()">Sort</button>
</div>

<table id="myTable" border="1">
    <tr>
        <th width="30px">No</th>
        <th width="150px">Name</th>
        <th width="80px">DOB</th>
        <th width="100px">E-mail</th>
        <th width="80px">City</th>
        <th width="80px">State</th>
        <th width="80px">Phone Number</th>
        <th>Edit User</th>
        <th>Delete User</th>
    </tr>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "plants";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $sql = "SELECT * FROM logi";

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
                <td><button onclick="editUser(<?php echo $row['id']; ?>, '<?php echo $row['username']; ?>', '<?php echo $row['age']; ?>', '<?php echo $row['email']; ?>', '<?php echo $row['city']; ?>', '<?php echo $row['state_name']; ?>', '<?php echo $row['phone_number']; ?>')">Edit</button></td>
                <td><button onclick="deleteUser(<?php echo $row['id']; ?>)">Delete</button></td>
            </tr>
            <?php
        }
    } else {
        echo "0 results";
    }
    mysqli_close($conn);
    ?>
</table>

<div id="editForm">
    <h2>Edit User Information</h2>
    <form id="userEditForm" action="update_user.php" method="post">
        <label for="editName">Name:</label>
        <input type="text" id="editName" name="editName" required><br>

        <label for="editDOB">DOB:</label>
        <input type="date" id="editDOB" name="editDOB" required><br>

        <label for="editEmail">Email:</label>
        <input type="email" id="editEmail" name="editEmail" required><br>

        <label for="editCity">City:</label>
        <input type="text" id="editCity" name="editCity" required><br>

        <label for="editState">State:</label>
        <input type="text" id="editState" name="editState" required><br>

        <label for="editPhoneNumber">Phone Number:</label>
        <input type="tel" id="editPhoneNumber" name="editPhoneNumber" required><br>

        <input type="hidden" id="editUserId" name="editUserId" value="">
        <input type="submit" value="Save Changes">
        <button type="button" onclick="closeEditForm()">Cancel</button>
    </form>
</div>

<script>
    function sortTable() {
    var table, rows, switching, i, shouldSwitch;
    table = document.getElementById("myTable");
    switching = true;

    // Create an array to store the rows data
    var rowsData = [];
    for (i = 1; i < table.rows.length; i++) {
        rowsData.push(table.rows[i].innerHTML);
    }

    // Sort the array based on the second column (Name)
    rowsData.sort(function(a, b) {
        var nameA = a.split("<td>")[2].toLowerCase();
        var nameB = b.split("<td>")[2].toLowerCase();
        if (nameA < nameB) return -1;
        if (nameA > nameB) return 1;
        return 0;
    });

    // Rearrange the table rows and update the No column
    for (i = 1; i < table.rows.length; i++) {
        table.rows[i].innerHTML = rowsData[i - 1];
        table.rows[i].getElementsByTagName("td")[0].innerHTML = i;
    }
}

    function editUser(userId, name, dob, email, city, state, phoneNumber) {
        document.getElementById("editUserId").value = userId;
        document.getElementById("editName").value = name;
        document.getElementById("editDOB").value = dob;
        document.getElementById("editEmail").value = email;
        document.getElementById("editCity").value = city;
        document.getElementById("editState").value = state;
        document.getElementById("editPhoneNumber").value = phoneNumber;

        document.getElementById("editForm").style.display = "block";
    }

    function closeEditForm() {
        document.getElementById("editForm").style.display = "none";
    }

    function deleteUser(userId) {
        var confirmDelete = confirm("Are you sure you want to delete this user?");
        if (confirmDelete) {
            window.location.href = "delete_user.php?id=" + userId;
        }
    }
</script>
<section>
</body>
</html>
