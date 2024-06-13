<?php

require_once('config.php');

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection is successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Delete Record
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];

    $sql = "DELETE FROM contact_submissions WHERE id = $delete_id";

    if ($conn->query($sql) === true) {
        echo "<p class='success'></p>";
    } else {
        echo "<p class='error'>Record deleted successfully. " . $conn->error . "</p>";
    }
}

// Retrieve and Display Records
$sql = "SELECT * FROM contact_submissions";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['message'] . "</td>";
        echo "<td><a href='?delete_id=" . $row['id'] . "' class='delete-btn'>Delete</a></td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='5'>No records found.</td></tr>";
}

$conn->close();
?>