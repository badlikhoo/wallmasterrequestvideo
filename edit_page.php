<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h2 {
            color: #333;
            margin-bottom: 30px;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 50%;
            margin: auto;
            text-align: left;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #FF6500;
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            border-radius: 4px;
        }

        input[type="submit"]:hover {
            background-color: #FF4500;
        }
		.back-btn {
            background-color: #333;
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            border-radius: 4px;
            text-decoration: none;
            display: inline-block;
            margin-top: 10px;
        }

        .back-btn:hover {
            background-color: #555;
        }

        p {
            margin-top: 20px;
        }

        p.error {
            color: red;
        }

        p.success {
            color: green;
        }
    </style>
</head>

<body>
    <h2>Edit Page</h2>

    <?php
    include_once "db_connection.php";

    if (isset($_GET['id'])) {
        $recordId = $_GET['id'];

        // Fetch the record based on the ID
        $selectSql = "SELECT * FROM form WHERE id = $recordId";
        $result = $conn->query($selectSql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            // Handle the form submission for updating the record
            if (isset($_POST['update'])) {
                // Get the updated data from the form
                $frequest = $_POST['frequest'];
                $lcontent = $_POST['lcontent'];
                $lbrand = $_POST['lbrand'];
                $lvideotask = $_POST['lvideotask'];
                $ldaterequest = $_POST['ldaterequest'];
                $lcontentobjectives = $_POST['lcontentobjectives'];
                $lvideostyles = $_POST['lvideostyles'];
                $lplatforms = $_POST['lplatforms'];
                $lvideosize = $_POST['lvideosize'];
                $ltalents = $_POST['ltalents'];
                $lstorylinecontent = $_POST['lstorylinecontent'];
                $lsubmissiondate = $_POST['lsubmissiondate'];
                $lpreparedbyname = $_POST['lpreparedbyname'];
                $lpreparedbydate = $_POST['lpreparedbydate'];
                $lapprovedbyname = $_POST['lapprovedbyname'];
                $lapprovedbydate = $_POST['lapprovedbydate'];
                // Add other fields as needed

                // Update the record in the database
                $updateSql = "UPDATE form SET frequest='$frequest', lcontent='$lcontent', lbrand='$lbrand', lvideotask='$lvideotask', ldaterequest='$ldaterequest', lcontentobjectives='$lcontentobjectives', lvideostyles='$lvideostyles', lplatforms='$lplatforms', lvideosize='$lvideosize', ltalents='$ltalents', lstorylinecontent='$lstorylinecontent', lsubmissiondate='$lsubmissiondate', lpreparedbyname='$lpreparedbyname', lpreparedbydate='$lpreparedbydate', lapprovedbyname='$lapprovedbyname', lapprovedbydate='$lapprovedbydate' WHERE id = $recordId";

                if ($conn->query($updateSql) === TRUE) {
                    echo '<p class="success">Record updated successfully</p>';
                    // Redirect back to the admin dashboard after updating
                    header("Location: admin_dashboard.php");
                    exit();
                } else {
                    echo '<p class="error">Error updating record: ' . $conn->error . '</p>';
                }
            }
    ?>

            <!-- Display the form for editing the record -->
            <form method="post" action="">
                <label for="frequest">Request By:</label>
                <input type="text" id="frequest" name="frequest" value="<?php echo $row['frequest']; ?>" required>
                <br>
                <label for="lcontent">No Content:</label>
                <input type="text" id="lcontent" name="lcontent" value="<?php echo $row['lcontent']; ?>" required>
                <br>
                <label for="lbrand">Brand:</label>
                <input type="text" id="lbrand" name="lbrand" value="<?php echo $row['lbrand']; ?>" required>
                <br>
                <label for="lvideotask">Video Tasks:</label>
                <input type="text" id="lvideotask" name="lvideotask" value="<?php echo $row['lvideotask']; ?>" required>
                <br>
                <label for="ldaterequest">Date Request:</label>
                <input type="text" id="ldaterequest" name="ldaterequest" value="<?php echo $row['ldaterequest']; ?>" required>
                <br>
                <label for="lcontentobjectives">Content Objectives:</label>
                <input type="text" id="lcontentobjectives" name="lcontentobjectives" value="<?php echo $row['lcontentobjectives']; ?>" required>
                <br>
                <label for="lvideostyles">Video Styles:</label>
                <input type="text" id="lvideostyles" name="lvideostyles" value="<?php echo $row['lvideostyles']; ?>" required>
                <br>
                <label for="lplatforms">Platforms:</label>
                <input type="text" id="lplatforms" name="lplatforms" value="<?php echo $row['lplatforms']; ?>" required>
                <br>
                <label for="lvideosize">Video Size:</label>
                <input type="text" id="lvideosize" name="lvideosize" value="<?php echo $row['lvideosize']; ?>" required>
                <br>
                <label for="ltalents">Talents:</label>
                <input type="text" id="ltalents" name="ltalents" value="<?php echo $row['ltalents']; ?>" required>
                <br>
                <label for="lstorylinecontent">Storyline & Content:</label>
                <input type="text" id="lstorylinecontent" name="lstorylinecontent" value="<?php echo $row['lstorylinecontent']; ?>" required>
                <br>
                <label for="lsubmissiondate">Submission Date:</label>
                <input type="text" id="lsubmissiondate" name="lsubmissiondate" value="<?php echo $row['lsubmissiondate']; ?>" required>
                <br>
                <label for="lpreparedbyname">Prepared By Name:</label>
                <input type="text" id="lpreparedbyname" name="lpreparedbyname" value="<?php echo $row['lpreparedbyname']; ?>" required>
                <br>
                <label for="lpreparedbydate">Prepared By Date:</label>
                <input type="text" id="lpreparedbydate" name="lpreparedbydate" value="<?php echo $row['lpreparedbydate']; ?>" required>
                <br>
                <label for="lapprovedbyname">Approved By Name:</label>
                <input type="text" id="lapprovedbyname" name="lapprovedbyname" value="<?php echo $row['lapprovedbyname']; ?>" required>
                <br>
                <label for="lapprovedbydate">Approved By Date:</label>
                <input type="text" id="lapprovedbydate" name="lapprovedbydate" value="<?php echo $row['lapprovedbydate']; ?>" required>
                <br>
                <input type="submit" name="update" value="Update">
            </form>

    <!-- Back button to admin_dashboard.php -->
            <a href="admin_dashboard.php" class="back-btn">Back to Dashboard</a>

    <?php
        } else {
            echo '<p class="error">Record not found</p>';
        }
    } else {
        echo '<p class="error">Invalid request</p>';
    }

    // Close database connection
    $conn->close();
    ?>
</body>

</html>