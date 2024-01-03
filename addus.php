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
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Insert data into the database
    $sql = "INSERT INTO user_login (name, email, username, password) VALUES ('$name', '$email', '$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        // echo "Form data inserted successfully!";
        header("Location: adminhome.php");
        exit;
    } else {
        echo '<script>alert("Form data inserted successfully!");</script>';
        // echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
