<?php

// Connect to database
$conn = mysqli_connect("localhost", "root", "", "book_db");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Process form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  // Get form data
  $myname = mysqli_real_escape_string($conn, $_POST['myname']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $mysubject = mysqli_real_escape_string($conn, $_POST['mysubject']);
  $mymessage = mysqli_real_escape_string($conn, $_POST['mymessage']);

  // Insert form data into database
  $sql = "INSERT INTO contact_form (myname, email, mysubject, mymessage) 
          VALUES ('$myname', '$email', '$mysubject', '$mymessage')";

  if (mysqli_query($conn, $sql)) {
    echo "Form data saved successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  // Close database connection
  mysqli_close($conn);
}

?>
