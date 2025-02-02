<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VMart Housing | Real Estate | best service in real estate</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="Css/style.css">
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <!-- <link rel="stylesheet" href="contact_style.css"> -->
</head>

<body>

  <!-- header -->

  <?php include('include/header.php') ?>

  <div class="contact_img">
    <!-- <h1>contact us</h1> -->
  </div>

  <div class="form_body">
    <div class="container">
        <form action="vendors.php" method="post" class="form_content" onsubmit="validateForm()">
            <h3>vendors</h3>
            <div class="form-group">
                <div class="input-group">
                    <label for="fname">Frist Name <span>*</span></label>
                    <input type="text" id="name" name="fname" placeholder="Ex. John" required>
                </div>
                <div class="input-group  ">
                    <label for="lname">Last Name <span>*</span></label>
                    <input  type="text" id="lname" name="lname" placeholder="Ex. Nelson">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <label for="email">Email <span>*</span></label>
                    <input type="email" id="email" name="email" placeholder="Ex. xyz@gmail.com" required>
                </div>
                <div class="input-group">
                    <label for="contact">Contact No <span>*</span></label>
                    <input type="contact" id="contact" name="contact" placeholder="Ex. +91 6388762431" required>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <label for="locations">Location <span>*</span></label>
                    <select id="locations" name="locations" required>
                        <option value="" disabled selected>Select Option</option>
                        <option value="sevvpet">Sevvappet</option>
                        <option value="thirumullaivoyal">Thirumullaivoyal</option>
                        <option value="thiruninravur">Thiruninravur</option>
                        <!-- <option value="townhouse">Townhouse</option>
                        <option value="land">Land</option>
                        <option value="commercial">Commercial</option> -->
                    </select>
                </div>
                <div class="input-group">
                    <label for="subject">requirement <span>*</span></label>
                    <select id="subject" name="subject" required>
                      <option value="" disabled selected>Select Option</option>
                      <option value="plots">Plots</option>
                      <option value="house">House</option>
                      <option value="villa">Villa</option>
                      <option value="home">Home</option>
                      <option value="land">Land</option>
                      <option value="flat">Flat</option>
                      <option value="apartment">Apartment</option>
                  </select>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <label for="budget">budget <span>*</span></label>
                    <select id="amount" name="budget" required>
                      <option value="Select" disabled selected>Select Option</option>
                      <option value="5 - 10 Lakhs">5 - 10 Lakhs</option>
                      <option value="11 - 20 Lakhs">11 - 20 Lakhs</option>
                      <option value="21 - 30 Lakhs">21 - 30 Lakhs</option>
                      <option value="31 - 40 Lakhs">31 - 40 Lakhs</option>
                      <option value="41 - 50 Lakhs">41 - 50 Lakhs</option>
                      <option value="51 Lakhs Above">51 Lakhs Above</option>
                  </select>
                </div>
                <div class="input-group">
                    <label for="sqft">Square Feed <span>*</span></label>
                    <input type="text" id="sqft" name="sqft" placeholder="Ex. 600sqft - 1200sqft" required>
                </div>
            </div>
            <label for="message">Message</label>
            <textarea id="message" name="message" required ></textarea>
            <input type="submit" value="Submit" class="submit" onclick="validateForm()">
        </form>
    </div>
</div>

<div class="container-fluit">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="content">
                    <img src="./assets/location.png" alt="" height="70px" width="30%">
                    <p class="address">16,1st Floor, 2nd Cross St, <br>Indira Nagar, Adayar,Chennai, <br> Tamil
                        Nadu-600020</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="content">
                    <img src="./assets/Email-removebg-preview.png" alt="" height="70px" width="30%">
                    <p class="con_email">service@vmarthousing.com</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="content">
                    <img src="./assets/call.png" alt="" height="70px" width="25%">
                    <p class="contact_num">7305219998 <br> 8148616469</p>
                </div>
            </div>
        </div>
    </div>
</div>

<iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.599662229536!2d80.2487395739243!3d12.997438114313578!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a526745b88c70a9%3A0x143dc14d332d091c!2sVmart%20Housing!5e0!3m2!1sen!2sin!4v1694337035507!5m2!1sen!2sin"
        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>

  

        <!-- footer -->

  <?php include('include/footer.php') ?>



  <script>

function validateForm() {
    var name = document.getElementById("name").value;
    var lname = document.getElementById("lname").value;
    var email = document.getElementById("email").value;
    var contact = document.getElementById("contact").value;
    var locations = document.getElementById("locations").value;
    var subject = document.getElementById("subject").value;
    var budget = document.getElementById("amount").value;
    var sqft = document.getElementById("sqft").value;
    var message = document.getElementById("message").value;

    // Regular expressions for email validation
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    // Regular expression for contact number validation (10 digits)
    var contactPattern = /^\d{10}$/;

    // Validate email
    if (!emailPattern.test(email)) {
        alert("Invalid email address");
        return false;
    }

    // Validate contact number
    if (!contactPattern.test(contact)) {
        alert("Invalid contact number");
        return false;
    }

    // Validate other fields (add more conditions as needed)
    if (name.trim() === "") {
        alert("First name cannot be empty");
        return false;
    }

    if (lname.trim() === "") {
        alert("Last name cannot be empty");
        return false;
    }

    if (locations === "") {
        alert("Please select a location");
        return false;
    }

    if (subject === "") {
        alert("Please select a requirement");
        return false;
    }

    if (budget === "") {
        alert("Please select a budget range");
        return false;
    }

    if (sqft.trim() === "") {
        alert("Square feet cannot be empty");
        return false;
    }

    if (message.trim() === "") {
        alert("Message cannot be empty");
        return false;
    }

    // If all validations pass, the form will be submitted
    return true;
}



  </script>


  </body>
  </html>