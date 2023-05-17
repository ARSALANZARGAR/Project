<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="icon" href="./files/logo.png">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

</head>

<body class="aboutbody">
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
            <form method="post" action="r.php">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username"><br>

                <label for="mypassword">Password:</label>
                <input type="password" id="mypassword" name="mypassword"><br>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email"><br>

                <label for="fullName">Full Name:</label>
                <input type="text" id="fullName" name="fullName"><br>

                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob"><br>

                <label for="country">Country:</label>
                <select id="country" name="country">
                    <option value="usa">USA</option>
                    <option value="uk">UK</option>
                    <option value="canada">Canada</option>
                    <!-- Add more options as needed -->
                </select><br>

                <input type="submit" class="submitbtn" value="Submit">
            </form>
        </div>
    </section>
    


</body>

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