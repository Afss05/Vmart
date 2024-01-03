<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vmart admin</title>
    <link rel="stylesheet" href="Css/admin.css">


    <style>
        .logform {
        width: 500px;
        margin: 0 auto;
        padding: 50px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f5f5f5;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        /* Style for form labels */
        label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
        }

        /* Style for form input fields */
        input[type="text"],
        input[type="email"],
        input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 3px;
        font-size: 16px;
        }

        /* Style for the submit button */
        input[type="submit"] {
        background-color: #007BFF;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
        font-size: 16px;
        margin-left: 160px;
        }

        /* Style for the submit button on hover */
        input[type="submit"]:hover {
        background-color: #0056b3;
        }

        .Add_user {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin-top: -100px;
        /* display: none; */
        /* background-color: #f0f0f0; */
       }

       #user_data{
        margin-top: -650px
       }

       #builders-form{
        margin-top: -400px;
       }
    </style>


</head>
<body>

    <div class="container">
    <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <!-- <ion-icon name="logo-apple"></ion-icon><center> -->
                            <img class="logo" src="./assets/logo.jpg" alt="" width="100px" height="">
                        </span>
                        <!-- <span class="title">V Mart</span> -->
                    </a>
                </li>

                <li>
                    <a href="#" id="das">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="#" id="enquiryButton">
                        <span class="icon">
                        <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">Enquiry's</span>
                    </a>
                </li>

                <li>
                    <a href="#" id="vendorButton">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title" >Vendor's</span>
                    </a>
                </li>

                <li>
                    <a href="#" id="userButton">
                        <span class="icon">
                           <ion-icon name="people-outline"></ion-icon>
                            <!-- <ion-icon name="help-outline"></ion-icon> -->
                        </span>
                        <span class="title">Add User's</span>
                    </a>
                </li>

                <li>
                    <a href="#" id="userdataButton">
                        <span class="icon">
                           <ion-icon name="reader-outline"></ion-icon>
                        </span>
                        <span class="title">User Data's</span>
                    </a>
                </li>

                <li>
                    <a href="#" id="builderButton">
                        <span class="icon">
                            <ion-icon name="business-outline"></ion-icon>
                        </span>
                        <span class="title">Builders</span>
                    </a>
                </li>

                <li>
                    <a href="#" id="buyerButton">
                        <span class="icon">
                        <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
                        </span>
                        <span class="title">buyers</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- ========================= Main ==================== -->
    <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <!-- <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div> -->

                <div class="user">
                <img src="./assets/logo.jpg" alt="" width="80px" height="">
                </div>
            </div>
<!-- ====== body ======= -->
   <div class="details">

        <h3>V Mart Data's</h3><br>

        <div id="dashboard">
        </div>

        <div id="quiry-form">
            <form id="enquiryContent" name="form1" method="post" action="">
                <h2>
                <br>
                <p align="center" style="color: red">ENQUIRY DATAS</p>
                <br>
                <?php
                // echo "<h4>";
                $dbhost = 'localhost';
                $dbuser = 'root';
                $dbpass = "";
                $db = "all_details";
                $conn = new mysqli($dbhost, $dbuser, $dbpass, $db);
                if ($conn->connect_error) {
                    die("Connection failed:" . $conn->connect_error);
                }
                // echo "Connected sucessfully";
                // echo "<br>";
                if ($result = $conn->query("Select * from enquiry_data")) {
                    // echo "The Records are:";
                    // echo "<br>";
                    
                echo '<style>
                table {
                    font-family: Arial, sans-serif;
                    border-collapse: collapse;
                    width: 100%;
                }

                th, td {
                    border: 1px solid #dddddd;
                    text-align: left;
                    padding: 8px;
                }

                tr:nth-child(even) {
                    background-color: #f2f2f2;
                }

                th {
                    background-color: #4CAF50;
                    color: white;
                }
                </style>';
                    echo "<table>
                    <tr>
                    <th>Name</th>
                    <th>Contact</th>
                    <th>Requirement</th>
                    <th>Budget</th>
                    </tr>";
                    while ($row = $result->fetch_row()) {
                        echo "<tr>";
                        echo "<td>" . $row[0] . "</td>";
                        echo "<td>" . $row[1] . "</td>";
                        echo "<td>" . $row[2] . "</td>";
                        echo "<td>" . $row[3] . "</td>";
                        // echo "<td>" . $row[4] . "</td>";
                    }
                    echo "</table>";
                }
                ?>
            </form>
        </div>

        <div id="vendor-form">  
            <form id="vendorContent" name="form2" method="post" action="">
                <h2><br>
                <p align="center" style="color: red">VENDORS DATAS</p>
                <br>
                <?php
                // echo "<h4>";
                $dbhost = 'localhost';
                $dbuser = 'root';
                $dbpass = "";
                $db = "all_details";
                $conn = new mysqli($dbhost, $dbuser, $dbpass, $db);
                if ($conn->connect_error) {
                    die("Connection failed:" . $conn->connect_error);
                }
                // echo "Connected sucessfully";
                // echo "<br>";
                if ($result = $conn->query("Select * from vendor_datas")) {
                    // echo "The Records are:";
                    // echo "<br>";
                    echo "<table>
                    <tr>
                    <th>first_name</th>
                    <th>last_name</th>
                    <th>email</th>
                    <th>Contact</th>
                    <th>locations</th>
                    <th>requirement</th>
                    <th>budget</th>
                    <th>sqft</th>
                    <th>message</th>
                    </tr>";
                    while ($row = $result->fetch_row()) {
                        echo "<tr>";
                        echo "<td>" . $row[0] . "</td>";
                        echo "<td>" . $row[1] . "</td>";
                        echo "<td>" . $row[2] . "</td>";
                        echo "<td>" . $row[3] . "</td>";
                        echo "<td>" . $row[4] . "</td>";
                        echo "<td>" . $row[5] . "</td>";
                        echo "<td>" . $row[6] . "</td>";
                        echo "<td>" . $row[7] . "</td>";
                        echo "<td>" . $row[8] . "</td>";
                        // echo "<td>" . $row[9] . "</td>";
                    }
                    echo "</table>";
                }
                ?>
            </form>
        </div>

        <div class="Add_user">
            <form action="addus.php" method="post" class="logform" id="userContent">
                <div>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div>
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>
                    <span class="error"><?php echo isset($errors["username"]) ? $errors["username"] : ""; ?></span>
                </div>
                <div>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div>
                    <input type="submit" value="Login">
                </div>
            </form>
        
        </div>

        <div id="user_data">
            <form id="userdataContent" name="form1" method="post" action="">
                <h2>
                <br><br>
                <p align="center" style="color: red; margin-top: 50px">USER DATA'S</p>
                <br>
                <?php
                // echo "<h4>";
                $dbhost = 'localhost';
                $dbuser = 'root';
                $dbpass = "";
                $db = "all_details";
                $conn = new mysqli($dbhost, $dbuser, $dbpass, $db);
                if ($conn->connect_error) {
                    die("Connection failed:" . $conn->connect_error);
                }
                // echo "Connected sucessfully";
                // echo "<br>";
                if ($result = $conn->query("Select * from user_login")) {
                    // echo "The Records are:";
                    // echo "<br>";
                    
                echo '<style>
                table {
                    font-family: Arial, sans-serif;
                    border-collapse: collapse;
                    width: 100%;
                }

                th, td {
                    border: 1px solid #dddddd;
                    text-align: left;
                    padding: 8px;
                }

                tr:nth-child(even) {
                    background-color: #f2f2f2;
                }

                th {
                    background-color: #4CAF50;
                    color: white;
                }
                </style>';
                    echo "<table>
                    <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Password</th>
                    </tr>";
                    while ($row = $result->fetch_row()) {
                        echo "<tr>";
                        echo "<td>" . $row[0] . "</td>";
                        echo "<td>" . $row[1] . "</td>";
                        echo "<td>" . $row[2] . "</td>";
                        echo "<td>" . $row[3] . "</td>";
                        // echo "<td>" . $row[4] . "</td>";
                    }
                    echo "</table>";
                }
                ?>
            </form>
        </div>

        <div id="builders-form">
            <form id="builderContent" name="form1" method="post" action="">
                <h2>
                <br>
                <p align="center" style="color: red; margin-top: 80px">tie up builters</p>
                <br>
                <?php
                // echo "<h4>";
                $dbhost = 'localhost';
                $dbuser = 'root';
                $dbpass = "";
                $db = "all_details";
                $conn = new mysqli($dbhost, $dbuser, $dbpass, $db);
                if ($conn->connect_error) {
                    die("Connection failed:" . $conn->connect_error);
                }
                // echo "Connected sucessfully";
                // echo "<br>";
                if ($result = $conn->query("Select * from poster_data")) {
                    // echo "The Records are:";
                    // echo "<br>";
                    
                echo '<style>
                table {
                    font-family: Arial, sans-serif;
                    border-collapse: collapse;
                    width: 100%;
                }

                th, td {
                    border: 1px solid #dddddd;
                    text-align: left;
                    padding: 8px;
                }

                tr:nth-child(even) {
                    background-color: #f2f2f2;
                }

                th {
                    background-color: #4CAF50;
                    color: white;
                }
                </style>';
                    echo "<table>
                    <tr>
                    <th>Name</th>
                    <th>Contact</th>
                    </tr>";
                    while ($row = $result->fetch_row()) {
                        echo "<tr>";
                        echo "<td>" . $row[0] . "</td>";
                        echo "<td>" . $row[1] . "</td>";
                        // echo "<td>" . $row[2] . "</td>";
                        // echo "<td>" . $row[3] . "</td>";
                        // echo "<td>" . $row[4] . "</td>";
                    }
                    echo "</table>";
                }
                ?>
            </form>
        </div>

        <div id="buyers-form">
            <form id="buyerContent" name="form1" method="post" action="">
                <h2>
                <br>
                <p align="center" style="color: red; margin-top: 80px">buyers</p>
                <br>
                <?php
                // echo "<h4>";
                $dbhost = 'localhost';
                $dbuser = 'root';
                $dbpass = "";
                $db = "all_details";
                $conn = new mysqli($dbhost, $dbuser, $dbpass, $db);
                if ($conn->connect_error) {
                    die("Connection failed:" . $conn->connect_error);
                }
                // echo "Connected sucessfully";
                // echo "<br>";
                if ($result = $conn->query("Select * from buyer_data")) {
                    // echo "The Records are:";
                    // echo "<br>";
                    
                echo '<style>
                table {
                    font-family: Arial, sans-serif;
                    border-collapse: collapse;
                    width: 100%;
                }

                th, td {
                    border: 1px solid #dddddd;
                    text-align: left;
                    padding: 8px;
                }

                tr:nth-child(even) {
                    background-color: #f2f2f2;
                }

                th {
                    background-color: #4CAF50;
                    color: white;
                }
                </style>';
                    echo "<table>
                    <tr>
                    <th>Name</th>
                    <th>Contact</th>
                    </tr>";
                    while ($row = $result->fetch_row()) {
                        echo "<tr>";
                        echo "<td>" . $row[0] . "</td>";
                        echo "<td>" . $row[1] . "</td>";
                        // echo "<td>" . $row[2] . "</td>";
                        // echo "<td>" . $row[3] . "</td>";
                        // echo "<td>" . $row[4] . "</td>";
                    }
                    echo "</table>";
                }
                ?>
            </form>
        </div>

    </div>

    

<!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script>
        let list = document.querySelectorAll(".navigation li");

function activeLink() {
  list.forEach((item) => {
    item.classList.remove("hovered");
  });
  this.classList.add("hovered");
}

list.forEach((item) => item.addEventListener("mouseover", activeLink));

// Menu Toggle
let toggle = document.querySelector(".toggle");
let navigation = document.querySelector(".navigation");
let main = document.querySelector(".main");

toggle.onclick = function () {
  navigation.classList.toggle("active");
  main.classList.toggle("active");
};



// Get references to the buttons and content divs
    const enquiryButton = document.getElementById("enquiryButton");
    const vendorButton = document.getElementById("vendorButton");
    const userButton = document.getElementById("userButton");
    const userdataButton = document.getElementById("userdataButton");
    const builderButton = document.getElementById("builderButton");
    const buyerButton = document.getElementById("buyerButton");


    const enquiryContent = document.getElementById("enquiryContent");
    const vendorContent = document.getElementById("vendorContent");
    const userContent = document.getElementById("userContent");
    const userdataContent = document.getElementById("userdataContent");
    const builderContent = document.getElementById("builderContent");
    const buyerContent = document.getElementById("buyerContent");

    // Add event listeners to the buttons
    enquiryButton.addEventListener("click", function () {
        // Show the enquiry content and hide the vendor content
        enquiryContent.style.display = "block";
        vendorContent.style.display = "none";
        userContent.style.display = "none";
        userdataContent.style.display = "none";
        builderContent.style.display = "none";
        buyerContent.style.display = "none";
    });

    vendorButton.addEventListener("click", function () {
        // Show the vendor content and hide the enquiry content
        enquiryContent.style.display = "none";
        vendorContent.style.display = "block";  //edit
        userContent.style.display = "none";
        userdataContent.style.display = "none";
        builderContent.style.display = "none";
        buyerContent.style.display = "none";
    });

    userButton.addEventListener("click", function () {
        // Show the add user content and hide the enquiry content,vendor content
        userContent.style.display = "block";
        enquiryContent.style.display = "none";
        vendorContent.style.display = "none";  //edit
        userdataContent.style.display = "none";
        builderContent.style.display = "none";
        buyerContent.style.display = "none";
    });

    userdataButton.addEventListener("click", function () {
        // Show the add user content and hide the enquiry content,vendor content
        userContent.style.display = "none";
        enquiryContent.style.display = "none";
        vendorContent.style.display = "none";  //edit
        userdataContent.style.display = "block";
        builderContent.style.display = "none";
        buyerContent.style.display = "none";
    });

    builderButton.addEventListener("click", function () {
        // Show the add user content and hide the enquiry content,vendor content
        userContent.style.display = "none";
        enquiryContent.style.display = "none";
        vendorContent.style.display = "none";  //edit
        userdataContent.style.display = "none";
        builderContent.style.display = "block";
        buyerContent.style.display = "none";
    });

    buyerButton.addEventListener("click", function () {
        // Show the add user content and hide the enquiry content,vendor content
        userContent.style.display = "none";
        enquiryContent.style.display = "none";
        vendorContent.style.display = "none";  //edit
        userdataContent.style.display = "none";
        builderContent.style.display = "none";
        buyerContent.style.display = "block";
    });

    // Initially, hide one of the content divs (you can choose which one to show by default)
    enquiryContent.style.display = "none";
    vendorContent.style.display = "none";
    userContent.style.display = "none";
    userdataContent.style.display = "none";
    builderContent.style.display = "none";
    buyerContent.style.display = "none";

    </script>
</body>
</html>