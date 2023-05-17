<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tours and Travels</title>
    <link rel="icon" href="./files/logo.png">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

</head>

<body>

    <!-- Background Video & Header -->

    <div class="banner">
        <video src="./files/bgvid.mp4" type="video/mp4" autoplay muted loop></video>

        <!-- Header -->

        <div class="content" id="home">
            <nav>
                <img src="./files/logo.png" class="logo" alt="Logo" title="Tours and Travels">

                <ul class="navbar">
                    <li>
                        <a href="#home">Home</a>
                        <a href="#locations">Locations</a>
                        <a href="#package">Packages</a>
                        <a href="./about.html">About Us</a>
                        <a href="./about.html">Contact Us</a>
                        <?php
                        // Start the session
                        session_start();

                        // Check if the user is logged in
                        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
                            // If the user is logged in, display the logout button
                            echo '<a href="logout.php">Logout</a>';
                        } else {
                            // If the user is not logged in, display the login button
                            echo '<a href="login.php">Login</a>';
                        }

                        ?>
                    </li>
                </ul>
            </nav>

            <div class="title">
                <h1>TOURS AND TRAVELS</h1>
                <p>Plan your trip with us and travel around the world with the most affordable packages!</p>
                <a href="./register.php" class="button">Book Now!</a>
            </div>
        </div>
    </div>

    <!-- Services -->

    <section class="container">
        <div class="text">
            <h2>We have the best services available for you!</h2>
        </div>
        <div class="rowitems">
            <div class="container-box">
                <div class="container-image">
                    <img src="./files/1a.jpg" alt="Flight Services">
                </div>
                <h4>Flight Services</h4>
                <p>Arrival and Departure</p>
            </div>

            <div class="container-box">
                <div class="container-image">
                    <img src="./files/2a.jpg" alt="Food Services">
                </div>
                <h4>Food Services</h4>
                <p>Catering</p>
            </div>

            <div class="container-box">
                <div class="container-image">
                    <img src="./files/3a.jpg" alt="Travel Services">
                </div>
                <h4>Travel Services</h4>
                <p>Pick-up/drop</p>
            </div>

            <div class="container-box">
                <div class="container-image">
                    <img src="./files/4a.jpg" alt="Hotel Services">
                </div>
                <h4>Hotel Services</h4>
                <p>Check-in/out</p>
            </div>

        </div>

        </div>

    </section>

    <!-- Locations -->

    <section class="locations" id="locations">
        <div class="package-title">
            <h2>Locations</h2>
        </div>

        <div class="location-content">

            <a href="./locations.html#kashmir" target="_blank">
                <div class="col-content">
                    <img src="./files/l1.jpg" alt="">
                    <h5>India</h5>
                    <p>Kashmir</p>
                </div>
            </a>



            <a href="./locations.html#istanbul" target="_blank">
                <div class="col-content">
                    <img src="./files/l2.jpg" alt="">
                    <h5>Turkey</h5>
                    <p>Istanbul</p>
                </div>
            </a>

            <a href="./locations.html#paris" target="_blank">
                <div class="col-content">
                    <img src="./files/l3.jpg" alt="">
                    <h5>France</h5>
                    <p>Paris</p>
                </div>
            </a>

            <a href="./locations.html#bali" target="_blank">
                <div class="col-content">
                    <img src="./files/l4.jpg" alt="">
                    <h5>Indonesia</h5>
                    <p>Bali</p>
                </div>
            </a>
            <a href="./locations.html#bali" target="_blank">
                <div class="col-content">
                    <img src="download.jfif" alt="">
                    <h5>Iitlyy</h5>
                    <p>Bali</p>
                </div>
            </a>
            <a href="./locations.html#dubai" target="_blank">
                <div class="col-content">
                    <img src="./files/l5.jpg" alt="">
                    <h5>United Arab Emirates</h5>
                    <p>Dubai</p>
                </div>
            </a>

            <a href="./locations.html#geneva" target="_blank">
                <div class="col-content">
                    <img src="./files/l6.jpg" alt="">
                    <h5>Switzerland</h5>
                    <p>Geneva</p>
                </div>
            </a>

            <a href="./locations.html#port-blair" target="_blank">
                <div class="col-content">
                    <img src="./files/l7.jpg" alt="">
                    <h5>Andaman & Nicobar</h5>
                    <p>Port Blair</p>
                </div>
            </a>

            <a href="./locations.html#rome" target="_blank">
                <div class="col-content">
                    <img src="./files/l8.jpg" alt="">
                    <h5>Italy</h5>
                    <p>Rome</p>
                </div>
            </a>

        </div>
    </section>

    <!-- Packages -->

    <section class="package" id="package">
        <div class="package-title">
            <h2>Packages</h2>
        </div>

        <div class="package-content">

            <div class="box">
                <div class="image">
                    <img src="./files/p1.jpg" alt="">
                    <h3>Rs.9,999/-</h3>
                </div>

                <div class="dest-content">
                    <div class="location">
                        <h4>Bronze</h4>
                        <ul class="pac-details">
                            <li>2 Star Hotel</li>
                            <li>5 Nights Stay</li>
                            <li>Free photo Session</li>
                            <li>Friendly Tour Guide</li>
                            <li>24/7 Customer Help Center</li>

                        </ul>
                        <div>
                            <a href="./register.php" class="button">Book Now!</a>
                        </div>
                    </div>


                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="./files/p2.jpg" alt="">
                    <h3>Rs.19,999/-</h3>
                </div>

                <div class="dest-content">
                    <div class="location">
                        <h4>Silver</h4>
                        <ul class="pac-details">
                            <li>3 Star Hotel</li>
                            <li>7 Nights Stay</li>
                            <li>Free photo Session</li>
                            <li>Friendly Tour Guide</li>
                            <li>24/7 Customer Help Center</li>
                        </ul>
                        <div>
                            <a href="./register.php" class="button">Book Now!</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="./files/p3.jpg" alt="">
                    <h3>Rs.29,999/-</h3>
                </div>

                <div class="dest-content">
                    <div class="location">
                        <h4>Gold</h4>
                        <ul class="pac-details">
                            <li>4 Star Hotel</li>
                            <li>10 Nights Stay</li>
                            <li>Breakfast and Dinner</li>
                            <li>Free photo Session</li>
                            <li>Friendly Tour Guide</li>
                            <li>24/7 Customer Help Center</li>
                        </ul>
                        <div>
                            <a href="./register.php" class="button">Book Now!</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="./files/p4.jpg" alt="">
                    <h3>Rs.39,999/-</h3>
                </div>

                <div class="dest-content">
                    <div class="location">
                        <h4>Platinum</h4>
                        <ul class="pac-details">
                            <li>5 Star Hotel</li>
                            <li>14 Nights Stay</li>
                            <li>Breakfast, Lunch and Dinner</li>
                            <li>Bornfire</li>
                            <li>Free photo Session</li>
                            <li>Friendly Tour Guide</li>
                            <li>24/7 Customer Help Center</li>
                        </ul>
                        <div>
                            <a href="./register.php" class="button">Book Now!</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <!-- Newsletter -->

    <section class="newsletter">
        <div class="newstext">
            <h2>Newsletter</h2>
            <p>Subscribe to get offers and latest<br>updates every week!</p>
        </div>

        <div class="send">
            <form action="">
                <input type="email" name="emailid" placeholder="E-mail" required>
                <input type="submit" value="Subscribe">
            </form>
        </div>

    </section>

    <!-- Footer -->

    <section class="footer">
        <div class="foot">
            <div class="footer-content">

                <div class="footlinks">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="./register.php">Book</a></li>
                        <li><a href="./about.html">About Us</a></li>
                        <li><a href="./contact.html">Contact Us</a></li>
                    </ul>
                </div>

                <div class="footlinks">
                    <h4>Connect</h4>
                    <div class="social">

                    </div>
                </div>

            </div>
        </div>

        <div class="end">
        </div>
    </section>



</body>

</html>