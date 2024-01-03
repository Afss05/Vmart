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

    // Insert data into the database
    $sql = "INSERT INTO poster_data (name, contact) VALUES ('$name', '$contact')";

    if ($conn->query($sql) === TRUE) {
        header("Location: vendor_index.html");
        $successMessage = "Message submitted successfully!";
        exit();
        // echo "Form data inserted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>




