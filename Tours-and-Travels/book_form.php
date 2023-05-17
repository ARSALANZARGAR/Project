<?php
// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "book_db");

// Check for errors
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Get the form data
$myname = $_POST["myname"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$age = $_POST["age"];
$gender = $_POST["gender"];
$departure = $_POST["departure"];
$myreturn = $_POST["myreturn"];
$desti = $_POST["desti"];
$mylocation = $_POST["mylocation"];

// Insert the data into the database
$sql = "INSERT INTO book_form (myname, email, phone, age, gender, departure, myreturn, desti, mylocation) VALUES ('$myname', '$email', '$phone', '$age', '$gender', '$departure', '$myreturn', '$desti', '$mylocation')";

if (mysqli_query($conn, $sql)) {
    header('Location: payment.php');
  
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
