<?php
$title = "Read Your Data";
include '../web_project_group22/layout/header.php'; 
include 'db5.php';
// SQL query to retrieve data from the 'studentsinfo' table
$sql = "SELECT * FROM Order_online";

// Execute the SQL query and store the result
$result = $conn->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
    echo "<table class='table'>
            <thead>
                <tr>
                    <th>order_no</th>
                    <th>name</th>
                    <th>address</th>
                    <th>email</th>
                    <th>contact_number</th>
                    <th>delivery_date</th>
                    <th>delivery_time</th>
                    <th>menu</th>
                    <th>number_of_portions</th>
                </tr>
            </thead>
            <tbody>";

    // Loop through the result set and display data in rows
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td><a href='updatesingle.php?id=$row[id]'>$row[id]</a></td>
                <td>{$row['first_name']}</td>
                <td>{$row['last_name']}</td>
                <td>{$row['city']}</td>
                <td>{$row['groupId']}</td>
              </tr>";
    }

    echo "</tbody></table>";
} else {
    // Display a message if no results are found
    echo "No results";
}
// close the connection when done
$conn->close();

include '../individual/footer.php';
?>