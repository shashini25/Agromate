<!DOCTYPE html>
<html>

<head>
    
    <?php include 'header.php'; ?>
	
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	 <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

    <style>
        /* Hero section*/
        .hero1-section {
            position: relative;
            background-image: url('assets/img/slide/contact.jpg');
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
            background-color: rgba(0, 0, 0, 0.5);
            /* Adjust the alpha value to change the overlay opacity */
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
                        <h2>Contact Us</h2>
                        <p>📞 Contact Us: Your connection to excellence! Reach out for inquiries, support, or just to
                            say hello. We're here to assist you every step of the way. 🌐✉️ #ContactUs #CustomerService
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <body>


        <div style="width: 100%; text-align: center;">
            <iframe width="75%" height="250" frameborder="yes" scrolling="no" marginheight="20px" marginwidth="0"
                src="https://maps.google.com/maps?q=open university of sri lanka - Nawala&t=&z=10&ie=UTF8&iwloc=&output=embed">
                <a href="https://www.maps.ie/distance-area-calculator.html">measure area map</a>
            </iframe>
        </div>


        <div class="container mt-5">
            <h1>Contact Us</h1>
            <form action="process_form.php" method="post">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" name="name" id="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email" id="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea class="form-control" name="message" id="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <br>
        <br>
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
        <?php include 'footer.php'; ?>
		
			<!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
    </body>