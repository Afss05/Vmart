<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VMart Housing | Real Estate | best service in real estate</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./Css/style.css">
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
</head>

<body>

  <?php include('include/header.php') ?>

  <div class="bodytop">

  </div>

  <!-- body about content -->

  <div class="container">
    <div class="aboutcon">
      <div class="row">
        <div class="col-sm-6 aboutline">
          <h2>About Us</h2>
          <!-- <hr> -->
          <p>
            Welcome to V Mart Housing your trusted partner in real estate. With over four years of dedicated experience,
            we have been redefining the landscape of property solutions. Our journey has been marked by a relentless
            commitment to excellence, integrity, and personalized service.
          </p>
          <a href="./about.php"><button class="viewbtn" type="button">View...</button></a>
        </div>
        <div class="col-sm-6 enquirycontent">
          <!-- <img src="/assets/homeaboutimg.jpg" alt="" width="100%" height="80%"> -->
          <div class="form_enquiry">
            <!-- <form action="enquiry.php" method="post" class="form" id="form_all_datas" onsubmit="return handleSubmit(event);"> -->
              <form action="enquiry.php" method="post" class="form" id="form_all_datas">
              <h2>For Enquiry</h2>
              <div class="form_items">
                <div class="input_items">
                  <label for="name">Name</label>
                  <input type="text" id="name" name="name" required>
                </div>
                <div class="input_items">
                  <label for="contact">Contact</label>
                  <input type="email" id="email" name="contact" required>
                </div>

                <div class="input_items">
                  <label for="requirement">Requirement</label>
                  <select id="requirement" name="requirement" required>
                    <option value="" disabled selected></option>
                    <option value="plots">Plots</option>
                    <option value="house">House</option>
                    <option value="villa">Villa</option>
                    <option value="home">Home</option>
                    <option value="land">Land</option>
                    <option value="flat">Flat</option>
                    <option value="apartment">Apartment</option>
                  </select>
                </div>
                <div class="input_items">
                  <label for="budget">Budget</label>
                  <select id="budget" name="budget" required>
                    <option value="" disabled selected></option>
                    <option value="5 - 10 Lakhs">5 - 10 Lakhs</option>
                    <option value="11 - 20 Lakhs">11 - 20 Lakhs</option>
                    <option value="21 - 30 Lakhs">21 - 30 Lakhs</option>
                    <option value="31 - 40 Lakhs">31 - 40 Lakhs</option>
                    <option value="41 - 50 Lakhs">41 - 50 Lakhs</option>
                    <option value="51 Lakhs Above">51 Lakhs Above</option>
                  </select>
                </div>
                <input type="submit" value="Send"  onclick="sendEmail()">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- body project content -->

  <div class="home_project">
    <div class="container">
      <h2 class="prohead">Projects</h2>
      <div class="row pro_content">
        <div class="col-sm-4 pro_col_content">
          <div class="project">
            <img class="img" src="./assets/real-768x461.jpeg" alt="" width="100%" height="300px">
            <h4>Completed </h4>
            <!-- <p class="projectcontent">Where architectural ingenuity meets natural splendor - our
              avant-garde homes nestled within a pristine oasis redefine exquisite living</p> -->
          </div>
        </div>
        <div class="col-sm-4 pro_col_content">
          <div class="project">
            <img class="img" src="./assets/on_the_project.jpg" alt="" width="100%" height="300px">
            <h4>On Going </h4>
            <!-- <p class="projectcontent">Discover the epitome of contemporary living in
              our dynamic ongoing real estate venture, where every brick laid shapes the future of refined lifestyle
            </p> -->
          </div>
        </div>
        <div class="col-sm-4 pro_col_content">
          <div class="project">
            <img class="img" src="./assets/residential_plot-for-sale-avadi-Chennai-plot_view.jpg" alt="" width="100%"
              height="300px">
            <h4>Up Coming </h4>
            <!-- <p class="projectcontent">Anticipate a new era of living with our forthcoming real estate marvel,
              poised to redefine luxury through visionary design and unprecedented amenities</p> -->
          </div>
        </div>
      </div>
      <button class="viewbtn projectbtn" type="button"><a href="project_index.html">View...</a></button>
    </div>
  </div>

  <div class="container bank">
    <h4>Banking Partner</h4>
    <div class="brands">
      <div class="brands__preWrapper">
        <div class="brands__wrapper">
          <a href="#"><img src="./assets/SBI-Home-Loan-Logo.png"></a>
          <a href="#"><img src="./assets/Axis_Bank_logo.jpeg"></a>
          <a href="#"><img src="./assets/HDFC_bank.jpg"></a>
          <a href="#"><img src="./assets/icici_bank.jpg"></a>
          <a href="#"><img src="./assets/pnb.jpeg"></a>
          <a href="#"><img src="./assets/lic_header_logo.d704ca2c-1.png"></a>
          <a href="#"><img src="./assets/IDBI-Bank-Housing-Loan-1.png"></a>
        </div>
      </div>
    </div>
  </div>

  <div class="container meet_us">
    <h4>☆━Meet Us━☆</h4>
    <div class="row ">
      <div class="map_cont">
        <div class="col-md-6">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.599662229536!2d80.2487395739243!3d12.997438114313578!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a526745b88c70a9%3A0x143dc14d332d091c!2sVmart%20Housing!5e0!3m2!1sen!2sin!4v1694337035507!5m2!1sen!2sin"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col-md-6">
          <div class="address_box">
            <div class="map_contact">
              <svg xmlns="http://www.w3.org/2000/svg" height="50px" width="20%" viewBox="0 0 384 512" fill="red">
                <style>
                  svg {
                    fill: #000000
                  }
                </style>
                <path
                  d="M64 48c-8.8 0-16 7.2-16 16V448c0 8.8 7.2 16 16 16h80V400c0-26.5 21.5-48 48-48s48 21.5 48 48v64h80c8.8 0 16-7.2 16-16V64c0-8.8-7.2-16-16-16H64zM0 64C0 28.7 28.7 0 64 0H320c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64zm88 40c0-8.8 7.2-16 16-16h48c8.8 0 16 7.2 16 16v48c0 8.8-7.2 16-16 16H104c-8.8 0-16-7.2-16-16V104zM232 88h48c8.8 0 16 7.2 16 16v48c0 8.8-7.2 16-16 16H232c-8.8 0-16-7.2-16-16V104c0-8.8 7.2-16 16-16zM88 232c0-8.8 7.2-16 16-16h48c8.8 0 16 7.2 16 16v48c0 8.8-7.2 16-16 16H104c-8.8 0-16-7.2-16-16V232zm144-16h48c8.8 0 16 7.2 16 16v48c0 8.8-7.2 16-16 16H232c-8.8 0-16-7.2-16-16V232c0-8.8 7.2-16 16-16z" />
              </svg>
              <p class="address_off">16,1st Floor, 2nd Cross St, <br>Indira Nagar, Adayar,Chennai, <br> Tamil
                Nadu-600020</p>
            </div><br>
            <div class="map_contact mapem">
              <svg xmlns="http://www.w3.org/2000/svg" height="50px" width="20%" viewBox="0 0 512 512">
                <style>
                  svg {
                    fill: red;
                  }
                </style>
                <path
                  d="M256 64C150 64 64 150 64 256s86 192 192 192c17.7 0 32 14.3 32 32s-14.3 32-32 32C114.6 512 0 397.4 0 256S114.6 0 256 0S512 114.6 512 256v32c0 53-43 96-96 96c-29.3 0-55.6-13.2-73.2-33.9C320 371.1 289.5 384 256 384c-70.7 0-128-57.3-128-128s57.3-128 128-128c27.9 0 53.7 8.9 74.7 24.1c5.7-5 13.1-8.1 21.3-8.1c17.7 0 32 14.3 32 32v80 32c0 17.7 14.3 32 32 32s32-14.3 32-32V256c0-106-86-192-192-192zm64 192a64 64 0 1 0 -128 0 64 64 0 1 0 128 0z" />
              </svg>
              <p class="map_mail">service@vmarthousing.com</p>
            </div><br>
            <div class="map_contact">
              <svg xmlns="http://www.w3.org/2000/svg" height="50px" width="20%" viewBox="0 0 512 512">
                <style>
                  svg {
                    fill: #0a0a0a
                  }
                </style>
                <path
                  d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
              </svg><br>
              <p class="con_num">7305219998 <br> 7845790912</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- footer -->

  <?php include('include/footer.php') ?>

  <script>
    // Function to validate the contact input
    function validateContact() {
      var contactInput = document.getElementById('contact');
      var contactValue = contactInput.value;

      // Remove any non-numeric characters
      var numericValue = contactValue.replace(/\D/g, '');

      if (numericValue.length !== 10) {
        alert('Contact must be exactly 10 digits long.');
        contactInput.focus();
        return false;
      }

      if (!/^\d+$/.test(numericValue)) {
        alert('Contact must contain only numeric characters.');
        contactInput.focus();
        return false;
      }

      // Update the input value with the cleaned numeric value
      contactInput.value = numericValue;
      return true;
    }

    // Function to handle form submission
    function handleSubmit(event) {
      if (!validateContact()) {
        event.preventDefault(); // Prevent form submission if validation fails
      }
    }
  </script>

  <script src="https://smtpjs.com/v3/smtp.js"></script>

  <script>
    function sendEmail() {
      Email.send({
      Host : "smtp.elasticemail.com",
      Username : "sheik.varahi@gmail.com",
      Password : "A533139823E8EFA0132B065DF51002C2DE0D",
      From : 'sheik.varahi@gmail.com',
      To : 'sheik.varahi@gmail.com',
      Subject : "This is the subject",
      Body : "And this is the body"
      }).then(
        message => alert(message)
      );
    }

  </script>


</body>

</html>