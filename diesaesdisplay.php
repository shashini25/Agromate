<?php

require_once('config.php');


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];

    $sql = "DELETE FROM diseases WHERE id = $delete_id";

    if ($conn->query($sql) === true) {
        echo "<p class='success'></p>";
    } else {
        echo "<p class='error'>Record deleted successfully. " . $conn->error . "</p>";
    }
}


$sql = "SELECT * FROM diseases";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['description'] . "</td>";
        echo "<td>" . $row['control_methods'] . "</td>";
        echo "<td>" . $row['symptoms'] . "</td>";
        echo "<td><a href='?delete_id=" . $row['id'] . "' class='delete-btn'>Delete</a></td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='5'>No records found.</td></tr>";
}

$conn->close();
?>