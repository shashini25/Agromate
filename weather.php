<!DOCTYPE html>
<html>

<head>

    
    <?php include 'header.php'; ?>
	<meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Weather Report</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	 <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
    <style>
       body {
            background-color: #f0f5f0;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .content-box {
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            margin: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .card {
            border: none;
        }

        #weatherData {
            display: none;
        }

        .hero1-section {
            position: relative;
            background-image: url('assets/img/slide/weather.jpg');
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
                        <h2>Weather Report</h2>
                        <p>🌦️ Current Weather in Sri Lanka 🇱🇰: Experience the tropical vibes! The temperature is
                            [current temperature]°C with [weather conditions] in [city/place]. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="content-box" id="weatherWidget">
        <h2 class="content-title">Weather Report</h2>
        <div class="form-group">
            <label for="cityInput">Enter City Name:</label>
            <input type="text" class="form-control" id="cityInput" placeholder="Enter city name">
            <button class="btn btn-success mt-2" id="searchBtn">Search</button>
        </div>
        <div id="weatherData" class="card">
            <div class="card-body">
                <h5 class="card-title">Loading...</h5>
            </div>
        </div>
    </div>




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        // Replace 'YOUR_API_KEY' with your actual OpenWeatherMap API key
        const apiKey = '18b52f069e1b208f8e203459784a74b0';
        const cityInput = document.getElementById('cityInput');
        const searchBtn = document.getElementById('searchBtn');
        const weatherDataDiv = document.getElementById('weatherData');

        // Function to fetch weather data and update the widget
        function fetchWeatherData(cityName) {
            fetch(`https://api.openweathermap.org/data/2.5/weather?q=${cityName}&appid=${apiKey}&units=metric`)
                .then(response => response.json())
                .then(data => {
                    const weatherHtml = `
                        <div class="card-body">
                            <h5 class="card-title">Weather in ${data.name}</h5>
                            <p class="card-text"><i class="fas fa-thermometer-half"></i> Temperature: ${data.main.temp}°C</p>
                            <p class="card-text"><i class="fas fa-temperature-low"></i> Feels Like: ${data.main.feels_like}°C</p>
                            <p class="card-text"><i class="fas fa-tachometer-alt"></i> Pressure: ${data.main.pressure} hPa</p>
                            <p class="card-text"><i class="fas fa-tint"></i> Humidity: ${data.main.humidity}%</p>
                            <p class="card-text"><i class="fas fa-dewpoint"></i> Dew Point: ${data.main.dew_point}°C</p>
                            <p class="card-text"><i class="fas fa-sun"></i> UV Index: ${data.uvi}</p>
                            <p class="card-text"><i class="fas fa-cloud"></i> Clouds: ${data.clouds.all}%</p>
                            <p class="card-text"><i class="fas fa-eye"></i> Visibility: ${data.visibility} meters</p>
                            <p class="card-text"><i class="fas fa-wind"></i> Wind Speed: ${data.wind.speed} m/s</p>
                            <p class="card-text"><i class="fas fa-compass"></i> Wind Degree: ${data.wind.deg}°</p>
                            <p class="card-text"><i class="fas fa-wind"></i> Wind Gust: ${data.wind.gust || 'N/A'} m/s</p>
                        </div>
                    `;
                    weatherDataDiv.innerHTML = weatherHtml;
                    weatherDataDiv.style.display = 'block';
                })
                .catch(error => {
                    console.error('Error fetching weather data:', error);
                    weatherDataDiv.innerHTML = `
                        <div class="card-body">
                            <h5 class="card-title">Weather Data Unavailable</h5>
                        </div>
                    `;
                    weatherDataDiv.style.display = 'block';
                });
        }

        // Event listener for search button
        searchBtn.addEventListener('click', () => {
            const cityName = cityInput.value.trim();
            if (cityName) {
                fetchWeatherData(cityName);
            }
        });

        // Fetch weather data on page load
        fetchWeatherData('Colombo'); // Default city
    </script>
    <?php include 'footer.php'; ?>
</body>

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

</html>