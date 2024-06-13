<?php
require_once('config.php');

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$uploadStatus = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $control_methods = $_POST['control_methods'];
    $symptoms = $_POST['symptoms'];

    
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($_FILES["image"]["name"]);
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
        
        $sql = "INSERT INTO diseases (name, description, control_methods, symptoms, image) VALUES ('$name', '$description', '$control_methods', '$symptoms', '$targetFile')";
        if ($conn->query($sql) === TRUE) {
            $uploadStatus = "Disease data uploaded successfully!";
        } else {
            $uploadStatus = "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        $uploadStatus = "Error uploading image.";
    }
}

$conn->close();
?>