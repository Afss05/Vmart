<?php
// Establish a database connection (you'll need to fill in your database details)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "all_details";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process the form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $contact = $_POST["contact"];
    $locations = $_POST["locations"];
    $subject = $_POST["subject"];
    $budget = $_POST["budget"];
    $sqft = $_POST["sqft"];
    $message = $_POST["message"];

    // SQL query to insert data into the database
    $sql = "INSERT INTO vendor_datas (fname, lname, email, contact, locations, subject, budget, sqft, message)
            VALUES ('$fname', '$lname', '$email', '$contact', '$locations', '$subject', '$budget', '$sqft', '$message')";

    if ($conn->query($sql) === TRUE) {
        header("Location: contact_index.html");
        // $successMessage = "Message submitted successfully!";
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
