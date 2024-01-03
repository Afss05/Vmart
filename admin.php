<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vmart_housing_daseboard</title>
    <style>
        body{
            background-color: palevioletred;
        }
        .login {
            background-color: lightsalmon;
            border-radius: 20px;
            height: 300px;
            width: 25%;
            align-items: center;
            justify-items: center;
            margin-top: 180px;
            margin-left: 40%;
        }

        form h1 {
            padding-top: 20px;
            font-size: 35px;
            font-family: Georgia, 'Times New Roman', Times, serif;
            text-transform: uppercase;
            text-align: center;
        }

        label {
            display: block;
            padding-bottom: 5px;
            font-size: 22px;
            padding-top: 8px;
            padding-left: 50px;
        }

        input {
            display: block;
            width: 70%;
            height: 30px;
            margin-left: 45px;
    
        }

        button {
            margin-left: 140px;
            margin-top: 15px;
            padding: 8px;
            border-radius: 10px;
            border-style: none;
            background-color: #E50A5C;
            width: 20%;
            color: #fff;
            font-family: 'Times New Roman', Times, serif;
            font-size: 20px;
            cursor: pointer;
        }

        button:hover {
            transform: scale(1.30);
        }
    </style>
</head>

<body>
    <div class="login">
        <!-- <form action="admincopy.php" method="post" onsubmit="return validateForm()"> -->
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
            <h1>admin</h1>
            <label for="username">UserName </label>
            <input type="text" name="username" id="username" required>
            <label for="password">Password </label>
            <input type="password" name="password" id="password" required>

            <button type="submit">Login</button>
        </form>
    </div>

    <?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection details
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

    // Get input values from the form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Query to check if the username and password match
    $sql = "SELECT * FROM user_login WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    // Check if there is a match
    if ($result->num_rows > 0) {
        // Successful login, redirect to the admin page or perform other actions
        header("Location: adminhome.php");
        exit;
    } else {
        // Display an alert if login is unsuccessful
        echo '<script>alert("Invalid username or password");</script>';
    }

    // Close the database connection
    $conn->close();
}
?>

    
<!-- <script>
    function validateForm() {
        // Get the values of the username and password fields
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;

        // Check if the username and password fields are not empty
        if (username === "" || password === "") {
            alert("Username and password are required.");
            return false; // Prevent form submission
        }

        // If the fields are filled out, allow the form to submit
        return true;
    }
</script> -->
</body>
</html>