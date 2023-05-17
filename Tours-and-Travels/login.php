<?php
session_start();

// Assuming you have a database named "mydatabase" in XAMPP with a table named "users" containing columns "username" and "password"

// Database connection configuration
$host = "localhost"; // Database host (e.g., localhost)
$username = "root"; // Database username
$password = ""; // Database password
$dbname = "book_db"; // Name of the database

// Establishing the database connection
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the username and password from the form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Prepare the SQL statement for querying the database
    $sql = "SELECT * FROM regis WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);

    // Check if a matching row is found
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        // Verify the password
        if ($password == $row["mypassword"]) {
            // Username and password are correct
            echo "Login successful!";

        
            $_SESSION['loggedin'] = true;

                // If user is already logged in, redirect to home page
                header('Location: index.php');
                exit();
                

        } else {
            // Invalid password
            echo "Invalid password!";
            
        }
    } else {
        // Invalid username
        echo "Invalid username!";
    }
}

// Close the database connection
mysqli_close($conn);





?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
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

    <h1>Login Page</h1>
    <section class="registration">
        <div class="register-form">
            <h1>Login <span>Here</span></h1>
            <form method="post" onsubmit="return validateForm()">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username"><br>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password"><br>



                <input type="submit" class="submitbtn" value="Submit">
            </form>
            <a href="./regis.php" class="button">Don't have account ! Register here</a>

            <script>
                function validateForm() {
                    var username = document.getElementById("username").value;
                    var password = document.getElementById("password").value;

                    if (username === "") {
                        alert("Please enter a username.");
                        return false;
                    }

                    if (password === "") {
                        alert("Please enter a password.");
                        return false;
                    }


                    return true;
                }
            </script>


        </div>
    </section>
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

    <?php if ($message !== ''): ?>
        <p style="color: red;">
            <?php echo $message; ?>
        </p>
    <?php endif; ?>

</body>

</html>