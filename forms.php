<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include database connection file
    include_once "db_connection.php";

    // Get form data
    $frequest = $_POST["frequest"];
    $lcontent = $_POST["lcontent"];
    $lbrand = $_POST["lbrand"];
    $lvideotask = $_POST["lvideotask"];
    $ldaterequest = $_POST["ldaterequest"];
    $lcontentobjectives = $_POST["lcontentobjectives"];
    $lvideostyles = $_POST["lvideostyles"];
    $lplatforms = $_POST["lplatforms"];
    $lvideosize = $_POST["lvideosize"];
    $ltalents = $_POST["ltalents"];
    $lstorylinecontent = $_POST["lstorylinecontent"];
    $lsubmissiondate = $_POST["lsubmissiondate"];
    $lpreparedbyname = $_POST["lpreparedbyname"];
    $lpreparedbydate = $_POST["lpreparedbydate"];
    $lapprovedbyname = $_POST["lapprovedbyname"];
    $lapprovedbydate = $_POST["lapprovedbydate"];

    // Insert data into the database
    $sql = "INSERT INTO form (frequest, lcontent, lbrand, lvideotask, ldaterequest, lcontentobjectives, lvideostyles, lplatforms, lvideosize, ltalents, lstorylinecontent, lsubmissiondate, lpreparedbyname, lpreparedbydate, lapprovedbyname, lapprovedbydate) VALUES ('$frequest', '$lcontent', '$lbrand', '$lvideotask', '$ldaterequest', '$lcontentobjectives', '$lvideostyles', '$lplatforms', '$lvideosize', '$ltalents', '$lstorylinecontent', '$lsubmissiondate', '$lpreparedbyname', '$lpreparedbydate', '$lapprovedbyname', '$lapprovedbydate')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close database connection
    $conn->close();
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SUBMISSION FORM WALLMASTER DIGITAL</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets\img\logo\removebackground.png" rel="icon">
  <link href="assets\img\logo\removebackground.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <style>
    body {
      font-family: 'Open Sans', sans-serif;
      background-color: #f4f4f4;
      color: #333;
    }

    header {
      background-color: #fff;
      box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
      padding: 20px 0;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 9999;
    }

    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .navbar ul {
      display: flex;
      list-style: none;
      margin: 0;
      padding: 0;
    }

    .navbar ul li {
      margin-right: 20px;
    }

    .navbar ul li:last-child {
      margin-right: 0;
    }

    .navbar ul li a {
      color: #000;
      text-decoration: none;
      transition: 0.3s;
    }

    .navbar ul li a:hover {
      color: #6c757d;
    }

    .card {
      background-color: #fff;
      box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
      padding: 30px;
      max-width: 800px;
      margin: 100px auto;
      text-align: center;
    }

    .card h2 {
      font-size: 24px;
      margin-bottom: 10px;
    }

    .card h4 {
      font-size: 16px;
      margin-bottom: 20px;
      color: #6c757d;
    }

    .card form div {
      margin-bottom: 15px;
    }

    .card form label {
      display: block;
      text-align: left;
      margin-bottom: 5px;
    }

    .card form input[type="text"] {
      width: 100%;
      padding: 10px;
      border-radius: 4px;
      border: 1px solid #ddd;
      outline: none;
    }

    .card form .submit-button {
      background-color: #6c757d;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 4px;
      cursor: pointer;
    }

    .card form .submit-button:hover {
      background-color: #555;
    }

    .card .error-message {
      color: red;
      margin-top: 10px;
    }

    table {
      width: 100%;
      margin-top: 30px;
      border-collapse: collapse;
    }

    th,
    td {
      padding: 12px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #f2f2f2;
    }
	  /* Styling for the login/logout dropdown */
#loginLogoutDropdown {
    padding: 8px 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    background-color: #fff;
    color: #333;
    font-size: 14px;
    cursor: pointer;
    outline: none;
}

#loginLogoutDropdown:hover {
    background-color: #f8f8f8;
}

#loginLogoutDropdown option {
    background-color: #fff;
    color: #333;
}

	  
  </style>
</head>

<body>
   <!-- ======= Header ======= -->
   <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <img src="assets\img\logo\removebackground.png" h1 class="text-light"><a href="index.php"><span> WALLMASTER DIGITAL</span></a></img>
      </div>

      <nav id="navbar" class="navbar">
    <ul>
        <a class="nav-link scrollto active" href="index.php">Home</a>
        <li><a class="nav-link scrollto" href="admin_dashboard.php">Dashboard</a></li>
          
</select>
    </ul>
</nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

<!-- Main content section -->
<div class="card">
    <h2>VIDEO REQUEST FORMS WALLMASTER DIGITAL<img src="assets\img\logo\removebackground.png" alt="" class="img-fluid"></h2>
    <h4><b></b></h4>

    <form id="request-form" method="POST" action="submit_form.php" onsubmit="return validateForm()">
        <!-- Form fields for video request -->
        <div>
            <label for="frequest"><b>REQUEST BY:</b></label>
            <input type="text" id="frequest" name="frequest" placeholder="Request by" required>
        </div>
        <div>
            <label for="lcontent"><b>NO CONTENT:</b></label>
            <input type="text" id="lcontent" name="lcontent" placeholder="No Content" required>
        </div>
        <div>
            <label for="lbrand"><b>BRAND:</b></label>
            <input type="text" id="lbrand" name="lbrand" placeholder="Brand" required>
        </div>
        <div>
            <label for="lvideotask"><b>VIDEO TASKS:</b></label>
            <input type="text" id="lvideotask" name="lvideotask" placeholder="Video Tasks" required>
        </div>
        <div>
            <label for="ldaterequest"><b>DATE REQUEST:</b></label>
            <input type="date" id="ldaterequest" name="ldaterequest" required>
        </div>
        <div>
            <label for="lcontentobjectives"><b>CONTENT OBJECTIVES:</b></label>
            <input type="text" id="lcontentobjectives" name="lcontentobjectives" placeholder="Content Objectives" required>
        </div>
        <div>
            <label for="lvideostyles"><b>VIDEO STYLES:</b></label>
            <input type="text" id="lvideostyles" name="lvideostyles" placeholder="Video Styles" required>
        </div>
        <div>
            <label for="lplatforms"><b>PLATFORMS:</b></label>
            <input type="text" id="lplatforms" name="lplatforms" placeholder="Platforms" required>
        </div>
        <div>
            <label for="lvideosize"><b>VIDEO SIZE:</b></label>
            <input type="text" id="lvideosize" name="lvideosize" placeholder="Video Size" required>
        </div>
        <div>
            <label for="ltalents"><b>TALENTS:</b></label>
            <input type="text" id="ltalents" name="ltalents" placeholder="Talents" required>
        </div>
        <div style="margin-bottom: 60px;">
            <label for="lstorylinecontent" style="margin-bottom: 30px;"><b>STORYLINE & CONTENT:</b></label>
            <textarea id="lstorylinecontent" name="lstorylinecontent" placeholder="Storyline & Content" rows="20" style="padding: 50px; margin: 40px 0; font-size: 16px; width: 100%;"></textarea>
        </div>
        <div>
            <label for="lsubmissiondate"><b>SUBMISSION DATE:</b></label>
            <input type="date" id="lsubmissiondate" name="lsubmissiondate" required>
        </div>
        <div>
        <div>
            <label for="lpreparedby"><b>PREPARED BY:</b></label>
            <div>
                <input type="text" id="lpreparedbyname" name="lpreparedbyname" placeholder="Name" required>
                <input type="date" id="lpreparedbydate" name="lpreparedbydate" required>
            </div>
        </div>
        <div>
            <label for="lapprovedby"><b>APPROVED BY:</b></label>
            <div>
                <input type="text" id="lapprovedbyname" name="lapprovedbyname" placeholder="Name" required>
                <input type="date" id="lapprovedbydate" name="lapprovedbydate" required>
            </div>
        </div>
        <div>
            <input type="submit" class="submit-button" value="Submit">
        </div>
        <p class="error-message" id="error-message"></p>
    </form>
</div>
 <!-- Print Button -->
    <button onclick="printPage()" class="action-btn">Print</button>
	
<script>
    document.getElementById('request-form').addEventListener('submit', function (event) {
        var errorMessage = document.getElementById('error-message');
        var videoTasks = document.getElementById('lvideotask').value.trim();
        var dateRequest = document.getElementById('ldaterequest').value.trim();
        var contentObjectives = document.getElementById('lcontentobjectives').value.trim();
        var videoStyles = document.getElementById('lvideostyles').value.trim();
        var platforms = document.getElementById('lplatforms').value.trim();
        var videoSize = document.getElementById('lvideosize').value.trim();
        var talents = document.getElementById('ltalents').value.trim();
        var storylineContent = document.getElementById('lstorylinecontent').value.trim();
        var submissionDate = document.getElementById('lsubmissiondate').value.trim();
        var preparedBy = document.getElementById('lpreparedbyname').value.trim();
        var approvedBy = document.getElementById('lapprovedbyname').value.trim();

        if (!videoTasks || !dateRequest || !contentObjectives || !videoStyles || !platforms || !videoSize || !talents || !storylineContent || !submissionDate || !preparedBy || !approvedBy) {
            event.preventDefault();
            errorMessage.innerHTML = 'All fields are required.';
        }
    });

    function printPage() {
        window.print();
    }
</script>


  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>