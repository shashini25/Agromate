<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<title>Weather Slideshow</title>
<style>
  .header-bar {
    background-color: #f0f0f0;
    padding: 10px;
    display: flex;
    align-items: center;
    justify-content: space-between;
  }

  .weather-info {
    display: flex;
    align-items: center;
  }

  .weather-icon {
    font-size: 24px;
    margin-right: 5px;
    color: #333;
  }
</style>
</head>
<body>

<div class="header-bar">
  <div class="weather-info">
    <span class="weather-icon" id="weatherIcon"><i class="fas fa-spinner fa-spin"></i></span>
    <span class="weather-city" id="weatherCity">Loading...</span>
    <span class="weather-temp" id="weatherTemp">Loading...</span>°C
    <span class="weather-pressure" id="weatherPressure">Pressure: Loading...</span>
    <span class="weather-humidity" id="weatherHumidity">Humidity: Loading...</span>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
const apiKey = '18b52f069e1b208f8e203459784a74b0';
const weatherIcon = document.getElementById('weatherIcon');
const weatherCity = document.getElementById('weatherCity');
const weatherTemp = document.getElementById('weatherTemp');
const weatherPressure = document.getElementById('weatherPressure');
const weatherHumidity = document.getElementById('weatherHumidity');

function fetchWeatherData(cityName) {
  fetch(`https://api.openweathermap.org/data/2.5/weather?q=${cityName}&appid=${apiKey}&units=metric`)
    .then(response => response.json())
    .then(data => {
      const weatherCondition = data.weather[0].main.toLowerCase();
      const weatherIconClass = getWeatherIconClass(weatherCondition);
      weatherIcon.innerHTML = `<i class="${weatherIconClass}"></i>`;

      weatherCity.textContent = data.name;
      weatherTemp.textContent = data.main.temp;
      weatherPressure.textContent = `Pressure: ${data.main.pressure} hPa`;
      weatherHumidity.textContent = `Humidity: ${data.main.humidity}%`;
    })
    .catch(error => {
      console.error('Error fetching weather data:', error);
      weatherIcon.innerHTML = '<i class="fas fa-exclamation-circle"></i>';
      weatherCity.textContent = 'Weather Data Unavailable';
      weatherTemp.textContent = 'N/A';
      weatherPressure.textContent = 'Pressure: N/A';
      weatherHumidity.textContent = 'Humidity: N/A';
    });
}

function getWeatherIconClass(condition) {
  switch (condition) {
    case 'clouds':
      return 'fas fa-cloud';
    case 'rain':
      return 'fas fa-cloud-showers-heavy';
    case 'clear':
      return 'fas fa-sun';
    default:
      return 'fas fa-question';
  }
}

const cities = ['Colombo', 'Galle', 'Polonnaruwa'];
let cityIndex = 0;

function updateWeather() {
  fetchWeatherData(cities[cityIndex]);
  cityIndex = (cityIndex + 1) % cities.length;
}

setInterval(updateWeather, 5000);

updateWeather();
</script>
</body>
</html>
