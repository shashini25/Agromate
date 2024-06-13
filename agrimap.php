<!DOCTYPE html>
<html lang="en">

<head>
   
    <?php include 'header.php'; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <title>Soil Grade Map</title>

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

    <style>
        /* Hero section */
        .hero1-section {
            position: relative;
            background-image: url('assets/img/slide/soil.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            margin-bottom: 45px;
            color: #ffffff;
            text-align: center;
            padding: 45px 0;
        }

        .hero1-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .hero1-text h1 {
            font-size: 30px;
            margin-bottom: 20px;
        }

        .hero1-text p {
            font-size: 14px;
            line-height: 1.5;
        }

        .custom-card {
            max-width: 700px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: 20px;
			
        }


        .custom-card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }

        .card-body {
            padding: 15px;
			
        }

        .card-iframe {
            width: 100%;
            height: 700px;
            text-align: center;
            border: none;
			
        }
    </style>
</head>

<body>
    <section class="hero1-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="hero1-text">
                        <h1>Soil gradeing Map Of Sri Lanka</h1>
                        <p>Early detection is often critical to success in eradicating new diseases. Familiarize
                            yourself with the symptoms of serious tea diseases. Phasellus sagittis sagittis placerat.
                            Aliquam tempor urna nec ipsum ultricies, ac tristique quam feugiat. Aliquam erat volutpat.
                            Suspendisse potenti. Pellentesque</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <!-- Left Card -->
            <div class="col-md-6">
                <div class="card custom-card">
                    <div class="card-body">
                        <h1 class="title">Soil Grade Map</h1>
                        <div class="iframe-container">
                            <iframe
                                src="https://www.arcgis.com/apps/instant/minimalist/index.html?appid=d244641b5f3e4206a7c98f5cda1892e7"
                                width="100%" height="845px" frameborder="0" scrolling="no"></iframe>
                        </div>
                    </div>
                </div>
            </div>

            
            
        </div>
    </div>

    <!-- Your scripts and other content go here -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<br>
<br>
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