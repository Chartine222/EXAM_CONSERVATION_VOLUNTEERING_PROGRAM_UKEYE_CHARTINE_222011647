<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conservation Volunteering Program</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #ffffff; /* White background */
            background-image: url(image/2.png);
        }

        header {
            background-color: green; /* Green header */
            color: #ffffff; /* White text */
            padding: 20px 0;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            overflow: hidden;
        }

        .brand {
            float: left;
        }

        .nav-links {
            float: right;
            margin-top: 25px;
        }

        .nav-links li {
            display: inline;
            margin-left: 20px;
        }

        .nav-links li a {
            color: #ffffff;
            text-decoration: none;
        }

        .nav-links li a:hover {
            text-decoration: underline;
        }

        main {
            padding: 20px 0;
        }

        .welcome-section {
            text-align: center;
            padding: 50px 0;
        }

        .welcome-container {
            max-width: 600px;
            margin: 0 auto;
            color: blue;
        }

        footer {
            background-color: green; /* Green footer */
            color: #ffffff; /* White text */
            text-align: center;
            padding: 20px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .popup {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .popup-content {
            background-color: green;
            width: 50%;
            max-width: 400px;
            margin: 100px auto; /* Center the popup */
            padding: 20px;
            border-radius: 5px;
            position: relative;
        }

        .close {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
        }

        form {
            margin-top: 20px;
        }

        input[type="text"],
        input[type="password"],
        input[type="email"],
        button {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            background-color: wheat;
            color: green;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #27ae60;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <div class="container">
                <div class="brand">
                    <h1>Conservation Volunteers</h1>
                </div>
                <ul class="nav-links">
                    <li><a href="#" onclick="openPopup('loginPopup')">Login</a></li>
                    <li><a href="#" onclick="openPopup('registerPopup')">Register</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <section class="welcome-section">
            <div class="welcome-container">
                <h2>Welcome to Conservation Volunteers!</h2>
                <p>Join us in preserving our planet's natural beauty and diversity. Log in to explore volunteer opportunities and make a difference.</p>
                <button id="loginButton">Login</button>
            </div>
        </section>

        <!-- Placeholder images -->
        <div class="image-gallery">
            <figure>
                <img src="image/3.png" alt="Placeholder Image 1">
                <figcaption>"As the sun sets over the savannah, casting a golden hue upon the landscape, we stand witness to the timeless drama of predator and prey, a symphony of survival echoing through the ages."</figcaption>
            </figure>
            <figure>
                <img src="image/6.png" alt="Placeholder Image 2">
                <figcaption>"Beneath the surface of the ocean, a world of wonder awaits, where vibrant coral reefs teem with life, and every creature plays its part in the intricate web of marine biodiversity."</figcaption>
            </figure>
            <figure>
                <img src="image/p1.png" alt="Placeholder Image 3">
                <figcaption>"In the shadow of towering mountains, amidst rugged terrain and winding rivers, we embark on a journey of exploration and discovery, charting the untamed beauty of the wilderness."</figcaption>
            </figure>
        </div>
    </main>

    <!-- Login Popup -->
    <div id="loginPopup" class="popup">
        <div class="popup-content">
            <span class="close" onclick="closePopup('loginPopup')">&times;</span>
            <!-- Login form goes here -->
            <h2>Login</h2>
            <form action="login.php" method="post">
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Login</button>
</form>
        </div>
    </div>

    <!-- Register Popup -->
    <div id="registerPopup" class="popup">
        <div class="popup-content">
            <span class="close" onclick="closePopup('registerPopup')">&times;</span>
            <!-- Register form goes here -->
            <h2>Register</h2>
            <form action="register.php" method="post">
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="email" name="email" placeholder="Email" required>
    <button type="submit">Register</button>
</form>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Conservation Volunteers. All rights reserved.</p>
    </footer>

    <!-- JavaScript for popup functionality -->
    <script>
        function openPopup(popupId) {
            document.getElementById(popupId).style.display = "block";
        }

        function closePopup(popupId) {
            document.getElementById(popupId).style.display = "none";
        }

        document.getElementById("loginButton").addEventListener("click", function(event) {
            event.preventDefault();
            document.getElementById("loginPopup").style.display = "block";
        });
    </script>
</body>
</html>
