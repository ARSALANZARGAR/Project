<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Here</title>
    <link rel="icon" href="./files/logo.png">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>

<body class="register-body">

    <nav>
        <img src="./files/logo.png" class="logo" alt="Logo" title="Tours and Travels">

        <ul class="navbar">
            <li>
                <a href="./index.php">Home</a>
                <a href="./index.php#locations">Locations</a>
                <a href="./index.php#package">Packages</a>
                <a href="./about.html">About Us</a>
                <a href="./contact.html">Contact Us</a>
            </li>
        </ul>
    </nav>

    <section class="registration">
        <div class="register-form">
            <h1>Book <span>Here</span></h1>
            <form action="book_form.php" method="post">
                <label for="myname">Name:</label>
                <input type="text" id="myname" name="myname"><br>

                <label for="email">Email:</label>
                <input type="text" id="email" name="email"><br>

                <label for="phone">Phone:</label>
                <input type="number" id="phone" name="phone"><br>

                <label for="age">Age:</label>
                <input type="number" id="age" name="age"><br>
                <br>

                <label for="gender">Gender:</label>
                <label>
                    <input type="radio" name="gender" value="male">
                    Male
                </label>
                <label>
                    <input type="radio" name="gender" value="female">
                    Female
                </label>

                <label>
                    <input type="radio" name="gender" value="other">
                    Other
                </label>
                <br>
                <br>

                <label for="departure">Departure date:</label>
                <input type="date" id="departure" name="departure"><br>

                <label for="myreturn">Return date:</label>
                <input type="date" id="myreturn" name="myreturn"><br>

                <label for="desti">Destination:</label>
                <input type="text" id="desti" name="desti"><br>

                <label for="mylocation">Package:</label><br>
                <label>
                    <input type="checkbox" name="mylocation" value="Bronze">
                    Bronze
                </label>
                <br>
                <label>
                    <input type="checkbox" name="mylocation" value="Silver">
                    Silver
                </label>
                <br>
                <label>
                    <input type="checkbox" name="mylocation" value="Gold">
                    Gold
                </label>
                <br>
                <label>
                    <input type="checkbox" name="mylocation" value="platinum">
                    Platinum
                </label>
                <br>

                <input type="submit" class="submitbtn" value="Submit">
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
                        <a href="https://www.facebook.com" target="_blank"><i class='bx bxl-facebook'></i></a>
                        <a href="https://www.instagram.com" target="_blank"><i class='bx bxl-instagram'></i></a>
                        <a href="https://www.twitter.com" target="_blank"><i class='bx bxl-twitter'></i></a>
                        <a href="https://www.linkedin.com" target="_blank"><i class='bx bxl-linkedin'></i></a>
                        <a href="https://www.youtube.com" target="_blank"><i class='bx bxl-youtube'></i></a>
                        <a href="https://www.wordpress.com" target="_blank"><i class='bx bxl-wordpress'></i></a>
                        <a href="https://www.github.com" target="_blank"><i class='bx bxl-github'></i></a>
                    </div>
                </div>

            </div>
        </div>

        <div class="end">
        </div>
    </section>

    <!-- Javascript -->
    <script>
        function validateform() {
            var tel = document.getElementById("phonenum").value;

            if (tel.length < 10) {
                alert("Phone number must be of atleast 10 digits!");
                return false;
            } else if (isNaN(tel)) {
                alert("Phone number should not include character!");
                return false;
            }
            return true;
        }  
    </script>

</body>

</html>