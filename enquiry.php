<?php
// Define your database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "all_details";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $contact = $_POST["contact"];
    $requirement = $_POST["requirement"];
    $budget = $_POST["budget"];

    // Insert data into the database
    $sql = "INSERT INTO enquiry_data (name, contact, requirement, budget) VALUES ('$name', '$contact', '$requirement', '$budget')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.html");
        // $successMessage = "Message submitted successfully!";
        exit();
        // echo "Form data inserted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>




