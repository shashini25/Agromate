<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agromate</title>
    <link href="lodar.css" rel="stylesheet">
     <!-- Favicons -->
  <link href="assets/img/favicon.ico" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <style>
        #preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 9999;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #F9F6EE ;
            background-size: cover;
            animation: fadeIn 1s ease-in-out forwards;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }

        #preloader img {
        width: 500px; /* Adjust width and height as needed */
        height: 90px;
        margin-left: 100%;
        margin-right: 100%;
        margin-top: 100%;
        margin-bottom: 100%;
        animation: splash 2s ease-in-out; /* Add animation for the loading effect */
    }
    @keyframes splash {
        0% {
            transform: scale(0); /* Start with the image scaled down to 0 */
            opacity: 0; /* Start with 0 opacity */
        }
        50% {
            transform: scale(1.2); /* Scale up to 1.2 at 50% of the animation */
            opacity: 1; /* Fade in */
        }
        100% {
            transform: scale(1); /* Return to normal size at the end of the animation */
        }
    }

    #preloader span {
        color: white;
        font-size: 18px;
        margin-top: 10px;
    }
    </style>
</head>
<body>
<div id="preloader">
    <img src="image/agrologo.png">
    
</div>

<script>
    window.addEventListener("load", function () {
        const preloader = document.getElementById("preloader");
        setTimeout(function () {
            window.location.href = "home.php";
        }, 3000); // Adjust the delay (in milliseconds) before redirecting
    });
</script>
</body>
</html>
