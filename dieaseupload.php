<!DOCTYPE html>
<html>
<head>
    <title>Add Disease Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            padding: 20px;
            background-color: #f0f5f0;
        }
        
        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #006400;
        }
        
        form {
            width: 400px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        label {
            font-weight: bold;
            color: #006400;
        }
        
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            resize: vertical;
        }
        
        input[type="text"],
        input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
        }
        
        input[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #006400;
            color: #ffffff;
            border: none;
            cursor: pointer;
        }
        
        input[type="submit"]:hover {
            background-color: #004d00;
        }


        body, html {
            background-image: url('bg6.png');
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            height: 100%;
        }

        .navbar {
            background-color: #006400;
            padding: 10px;
        }

        .navbar-logo img {
            height: 40px;
            width: auto;
        }

        .navbar-links-ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .navbar-link {
            display: inline-block;
            margin-right: 10px;
        }

        .navbar-link a {
            color: #ffffff;
            text-decoration: none;
            font-weight: bold;
        }

        .navbar-link a:hover {
            color: #ffffff;
            text-decoration: underline;
        }

        .navbar-cta button {
            background-color: #ffffff;
            color: #006400;
            border: none;
            padding: 10px 20px;
            font-weight: bold;
            cursor: pointer;
        }

        .navbar-mobile-menu {
            display: none;
        }

        .hero-section {
            padding: 100px 0;
            text-align: center;
            color: #ffffff;
        }




    </style>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once('config.php');

    // Get the user input from the form
    $name = $_POST['name'] ?? '';
    $description = $_POST['description'] ?? '';
    $control_methods = $_POST['control_methods'] ?? '';
    $symptoms = $_POST['symptoms'] ?? '';

   
    $conn = new mysqli($servername, $username, $password, $dbname);

   
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Handle the uploaded image
    $targetDir = "uploads/";  // Directory to store uploaded images
    $targetFile = $targetDir . basename($_FILES["image"]["name"]);
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if the uploaded file is an image
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check !== false) {
        // Move the uploaded file to the target directory
        if (move_uploaded_file($_FILES["image"]["tmp_name"], __DIR__ . '/' . $targetFile)) {
            echo "Image uploaded successfully!";
        } else {
            echo "Error uploading image.";
        }
    } else {
        echo "File is not an image.";
    }

    $sql = "INSERT INTO diseases (name, description, control_methods, symptoms, image)
            VALUES (?, ?, ?, ?, ?)";

    
    $stmt = $conn->prepare($sql);

    
    $stmt->bind_param("sssss", $name, $description, $control_methods, $symptoms, $targetFile);

    if ($stmt->execute()) {
        echo "Data inserted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>
<h1>Add Disease Data</h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="name">Disease Name:</label>
        <input type="text" id="name" name="name" class="form-control">
    </div>

    <div class="form-group">
        <label for="description">Description:</label>
        <textarea id="description" name="description" rows="4" cols="50" class="form-control"></textarea>
    </div>

    <div class="form-group">
        <label for="control_methods">Control Methods:</label>
        <textarea id="control_methods" name="control_methods" rows="4" cols="50" class="form-control"></textarea>
    </div>

    <div class="form-group">
        <label for="symptoms">Symptoms:</label>
        <textarea id="symptoms" name="symptoms" rows="4" cols="50" class="form-control"></textarea>
    </div>

    <div class="form-group">
        <label for="image">Upload Image:</label>
        <input type="file" id="image" name="image" class="form-control">
    </div>

    <input type="submit" value="Submit" class="btn btn-primary">
</form>
</body>
</html>
