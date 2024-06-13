<!DOCTYPE html>
<html>

<?php include 'header.php'; ?>

<head>
   <meta charset="utf-8">
   <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Plant Disease Identification</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/diceasefind.css">
	 <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  

    <style>
        .hero1-section {
            position: relative;
            background-image: url('assets/img/slide/tea.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            margin-bottom: 45px;
        }

        .hero1-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Adjust the alpha value to change the overlay opacity */
        }

        .hero1-text {
            color: #ffffff;
            text-align: center;
            margin-bottom: 45px;
            margin-top: 45px;
        }

        .hero1-text h1 {
            font-size: 13px;
            margin-bottom: 45px;
            margin-top: 45px;
            text-align: center;
        }

        .hero1-text p {
            font-size: 12px;
            line-height: 1.5;
            text-align: center;
        }
        </style>


</head>

<body>
    <section class="hero1-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="hero1-text">
                        <h2>Plant Disease Identification System</h2>
                        <p> Early detection is often critical to success in eradicating new diseases. Familiarize
                            yourself with the symptoms of serious tea diseases.
                            Phasellus sagittis sagittis placerat. Aliquam tempor urna nec ipsum ultricies, ac tristique
                            quam feugiat. Aliquam erat volutpat. Suspendisse potenti. Pellentesque </P>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    require_once('config.php');

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $symptoms = $_POST['symptoms'];

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM diseases WHERE symptoms LIKE '%$symptoms%'";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo '<div class="container">';
            while ($row = $result->fetch_assoc()) {
                echo '<div class="card mb-3">';
                echo '<div class="card-header text-white" style="background-color: #013220;">';
                echo 'Disease: ' . $row["name"];
                echo '</div>';
                echo '<div class="card-body">';
                echo '<p class="card-text">Description: ' . $row["description"] . '</p>';
                echo '<p class="card-text">Control methods: ' . $row["control_methods"] . '</p>';
                echo '<img src="' . $row["image"] . '" alt="Disease Image" class="img-fluid mb-3">';
                echo '</div>';
                echo '</div>';
            }
            echo '<div class="back-btn text-center"><a href="diceasefind.php" class="btn btn-secondary">Back</a></div>'; // Back button
            echo '</div>';
        } else {
            echo '<div class="container text-center">';
            echo '<h1>No diseases found</h1>';
            echo '<p>No diseases found with the entered symptoms.</p>';
            echo '<div class="back-btn"><a href="diceasefind.php" class="btn btn-secondary">Back</a></div>'; // Back button
            echo '</div>';
        }

        $conn->close();
    } else {
        // Display the form when it's not submitted
        $errorMessage = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($_POST['symptoms'])) {
            $errorMessage = "Please enter symptoms.";
        }
        ?>

        <div class="card custom-card1 mt-5">
            <div class="card-body">
                <h1 class="title">Enter Symptoms</h1>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <div class="form-group">
                        <label for="symptoms">Describe the symptoms:</label>
                        <textarea id="symptoms" name="symptoms" rows="4" class="form-control"
                            placeholder="Enter the symptoms you've observed"></textarea>
                        <span class="error-message text-danger">
                            <?php echo $errorMessage; ?>
                        </span>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"
                            style="background-color: #006400; border-color: #006400;">Diagnose</button>
                    </div>
                </form>
            </div>
        </div>

        <?php
    }
    ?>

    <?php

    ?>

    <?php

    ?>
    <div class="container">
        <div class="card custom-card">
            <div class="card-body">
                <h1 class="title">How to Use This System</h1>
                <div class="content">
                    <p class="paragraph">
                        Follow these steps to effectively use this system:
                    </p>
                    
                        <p>🍃 Enter Symptoms: Begin by describing the symptoms you observe on your tea plant. These could
                            include leaf discoloration, spots, wilting, or any other abnormal signs.</p>
                        <p>🍃 Analyze: Once you've entered the symptoms, click on the "Diagnose" button. Our system will
                            analyze the provided information using advanced algorithms.</p>
                        <p>🍃 Identify Disease: The system will quickly identify the potential disease affecting your tea
                            plant based on the symptoms you described.</p>
                        <p>🍃 Access Treatment Methods: After identifying the disease, you'll be presented with a list of
                            effective treatment methods. These methods are tailored to combat the specific disease your
                            plant is facing.</p>
                        <p>🍃 Weather Insights: For proactive care, you can also access the weather report for your
                            location. This information helps you anticipate how environmental conditions might impact
                            your tea plants and adjust your care routine accordingly.</p>
                        <p>🍃 Implement Care: Follow the recommended treatment methods and consider the weather insights
                            as you care for your tea plant. This integrated approach will help nurse your plant back to
                            health.</p>
                        <p>🍃 Regular Updates: Keep checking back for updates and further guidance on tea plant care.
                            We're here to support you in your journey to maintain vibrant and healthy tea plants.</p>


                        

                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <?php include 'footer.php'; ?>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
        (function () {
            var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/64db03ec94cf5d49dc6a6fda/1h7roelfc';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
		<!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


</body>

</html>