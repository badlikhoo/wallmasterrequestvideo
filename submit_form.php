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
        echo '<script>alert("Data inserted successfully"); window.location.href = "forms.php";</script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close database connection
    $conn->close();
}
?>
