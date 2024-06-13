<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/Dashboard.css">
    
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-2 sidebar">
                <div class="sidebar-logo">
                    <a href="index.php" class="button">

                    </a>
                </div>
                <div class="sidebar-item" onclick="showDashboard()">
                    <i class="fas fa-tachometer-alt"></i> Dashboard
                </div>
                <div class="sidebar-item" onclick="showUserMessages()">
                    <i class="fas fa-envelope"></i> User Messages
                </div>
                <div class="sidebar-item" onclick="showUploadDiseases()">
                    <i class="fas fa-file-upload"></i> Upload Diseases
                </div>
                <div class="sidebar-item" onclick="showHelpDesk()">
                    <i class="fas fa-question-circle"></i> Analytics
                </div>
                <div class="sidebar-item" onclick="showAccounts()">
                    <i class="fas fa-users"></i>Manage Admin Accounts
                </div>
                <div class="sidebar-item" onclick="showDiseaseSummary()">
                    <i class="fas fa-clipboard-list"></i>Manage Disease Summary
                </div>



            </div>
            <!-- Main Content -->
            <div class="col-md-10 main-content" id="mainContent">
                <!-- Default content (Dashboard) -->
                <div class="content-box" id="dashboard">
                    <h2 class="content-title">Welecome To Agromate Dashboard</h2>
                    <!-- Add your dashboard content here -->
                    <p>TeaFarmConnect is a cutting-edge web platform designed exclusively for tea farmers, empowering
                        them with the latest tools and information to optimize their tea cultivation processes.
                        Our user-friendly website allows tea farmers to easily upload and access essential data while
                        providing comprehensive resources to
                        improve their farming practices and enhance yields.</p>

                    <h3>Disease and Pest Control Methods:</h3>
                    <ol>
                        <li>Extensive Database: TeaFarmConnect provides an extensive database of diseases and pests that
                            commonly affect tea plants.</li>
                        <li>Information Access: Farmers can easily access information on symptoms, preventive measures,
                            and treatment options.</li>
                        <li>Timely Action: Enables farmers to take timely actions to protect their crops.</li>
                    </ol>

                    <h3>Customized Recommendations:</h3>
                    <ol>
                        <li>Personalized Recommendations: Based on the uploaded data, our platform employs advanced
                            algorithms to generate personalized recommendations for each tea farm.</li>
                        <li>Irrigation Schedules: Farmers receive customized irrigation schedules for optimal water
                            management.</li>
                        <li>Fertilization Techniques: Tailored fertilization techniques are suggested to maximize crop
                            yield.</li>
                        <li>Crop Protection Measures: Suitable crop protection measures are recommended to safeguard tea
                            plants from pests and diseases.</li>
                    </ol>

                    <h3>Disease and Pest Control Methods:</h3>
                    <ol>
                        <li>Extensive Database: TeaFarmConnect provides an extensive database of diseases and pests that
                            commonly affect tea plants.</li>
                        <li>Information Access: Farmers can easily access information on symptoms, preventive measures,
                            and treatment options.</li>
                        <li>Timely Action: Enables farmers to take timely actions to protect their crops.</li>
                    </ol>
                    <img src="image/agrologo.png" alt="Logo">

                </div>
                <!-- User Messages content -->
                <div class="content-box" id="userMessages" style="display:none;">

                    <h2 class="content-title">User Messages</h2>


                    <table>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Massage</th>
                            <th>Action</th>

                        </tr>

                        <?php
                        // Include the contact functions file
                        include 'retrieve_display.php';

                        // Call the function to display the contacts table
                        if (function_exists('displayContactsTable')) {

                        } else {


                        }
                        ?>
                    </table>
                </div>


                <!-- Upload Diseases content -->
                <div class="content-box" id="uploadDiseases" style="display: none;">
                    <h2 class="content-title">Upload Diseases</h2>
                    <h4>📋 Disease Information Form: Your input matters! Help us build a comprehensive database by
                        sharing valuable information about different diseases. This form empowers users to contribute
                        data, fostering collaboration in health research. </h4>

                    <form action="add_disease.php" method="POST" enctype="multipart/form-data">

                        <!-- Form fields -->
                        <div class="form-group">
                            <label for="name">Disease Name:</label>
                            <input type="text" id="name" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea id="description" name="description" rows="2" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="control_methods">Control Methods:</label>
                            <textarea id="control_methods" name="control_methods" rows="2"
                                class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="symptoms">Symptoms:</label>
                            <textarea id="symptoms" name="symptoms" rows="2" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="image">Upload Disease Image:</label>
                            <input type="file" id="image" name="image" class="form-control">
                        </div>
                        <input type="submit" value="Submit" class="btn btn-success">
                    </form>
                </div>

                <div class="content-box" id="helpDesk" style="display: none;">
                    <h2 class="content-title">Analytics</h2>

                    <div class="container mt-5">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRZmM9tGxh1kE_YsiHdZAQF_BwZFpVHoRGnWNlu0Z5kjZDXTnmahdvjOAcqhJVmBbv2zj0&usqp=CAU"
                                        class="card-img-top" alt="Image 1">
                                    <div class="card-body">
                                        <h5 class="card-title">Tawk.to</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        </p>
                                        <a href="https://dashboard.tawk.to/#/dashboard/64db03ec94cf5d49dc6a6fda">Go to
                                            tawk dashboard</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <img src="data:image/png;base64,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"
                                        class="card-img-top" alt="Image 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Google Analytics</h5>
                                        <p class="card-text">Pellentesque luctus purus eu tellus malesuada mollis.</p>
                                        <a href="">Go to Analytics</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <img src="data:image/png;base64,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"
                                        class="card-img-top" alt="Image 3">
                                    <div class="card-body">
                                        <h5 class="card-title">Gmail</h5>
                                        <p class="card-text">Vestibulum bibendum, nisl et ultrices aliquet, .</p>
                                        <a href="">Go to Gmail</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSuO80PQHYipq8Q0Gv8NfceRtkBjJa6_E-JJw&usqp=CAU"
                                        class="card-img-top" alt="Image 4">
                                    <div class="card-body">
                                        <h5 class="card-title">Weather </h5>
                                        <p class="card-text">Aliquam gravida lectus elit, in luctus odio cursus et.</p>
                                        <a href="">Go to panel</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- Accounts content -->

                <div class="content-box" id="accounts" style="display: none;">
                    <h2 class="content-title">Manage Admin Accounts </h2>
                    <p>The "Accounts" section in your dashboard serves as a centralized hub for managing and monitoring
                        the different accounts associated with your profile or organization. This section is designed to
                        provide a quick and accessible overview of key account-related information, allowing you to
                        efficiently navigate and control various aspects of your accounts.</p>
                    <div class="container mt-5">

                        <table>

                            <tr>
                                <th>ID</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>


                            <?php
                            // Include the contact functions file
                            include 'displa.php';

                            // Check if the function exists
                            if (function_exists('displayContactsTable')) {
                                // Call the function to display the table
                                displayContactsTable();
                            } else {
                                // Handle the case where the function doesn't exist
                                echo "The displayContactsTable function is not defined.";
                            }
                            ?>


                        </table>
                    </div>
                </div>



                <!-- Disease Summary -->

                <div class="content-box" id="DiseaseSummary" style="display: none;">
                    <h2 class="content-title">Manage Diseases Summary</h2>
                    <p> This section allows you to access and delete all the diseases and control information currently entered into the system.</p>
                    <div class="container mt-5">

                        <table>

                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Discription</th>
                                <th>Control Methods</th>
                                <th>Symptoms</th>
                                <th>Action</th>
                            </tr>


                            <?php
                            // Include the contact functions file
                            include 'diesaesdisplay.php';

                            // Check if the function exists
                            if (function_exists('displayContactsTable')) {
                                // Call the function to display the table
                                displayContactsTable();
                            } else {
                                // Handle the case where the function doesn't exist
                                echo "The displayContactsTable function is not defined.";
                            }
                            ?>


                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <script>
        function showDashboard() {
            hideAllContent();
            document.getElementById("dashboard").style.display = "block";
        }

        function showUserMessages() {
            hideAllContent();
            document.getElementById("userMessages").style.display = "block";
        }

        function showUploadDiseases() {
            hideAllContent();
            document.getElementById("uploadDiseases").style.display = "block";
        }

        function showHelpDesk() {
            hideAllContent();
            document.getElementById("helpDesk").style.display = "block";
        }

        function showAccounts() {
            hideAllContent();
            document.getElementById("accounts").style.display = "block";
        }

        function showDiseaseSummary() {
            hideAllContent();
            document.getElementById("DiseaseSummary").style.display = "block";
        }

        function showTawk() {
            hideAllContent();
            document.getElementById("Tawk").style.display = "block";
        }

        function hideAllContent() {
            var contents = document.getElementsByClassName("content-box");
            for (var i = 0; i < contents.length; i++) {
                contents[i].style.display = "none";
            }
        }
    </script>
</body>

</html>