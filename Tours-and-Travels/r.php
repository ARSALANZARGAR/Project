
   <?php
// Assuming you have a database named "mydatabase" in XAMPP with a table named "users" containing columns "username", "password", "email", "full_name", "dob", and "country"

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
    // Retrieve the form data
    $username = $_POST["username"];
    $mypassword = $_POST["mypassword"];
    $email = $_POST["email"];
    $fullName = $_POST["fullName"];
    $dob = $_POST["dob"];
    $country = $_POST["country"];

    // Prepare the SQL statement for inserting data
    $sql = "INSERT INTO regis (username, mypassword, email, fullName, dob, country) VALUES ('$username', '$mypassword', '$email', '$fullName', '$dob', '$country')";

    // Execute the SQL query
    if (mysqli_query($conn, $sql)) {
        echo "Data stored successfully!";
        header("Location: login.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>

  