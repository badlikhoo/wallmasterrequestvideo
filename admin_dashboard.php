<!DOCTYPE html>
<html lang="en"><head>
	
	<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <img src="assets\img\logo\removebackground.png" h1 class="text-light"><a href="index.php"><span> WALLMASTER DIGITAL</span></a></img>
      </div>
	  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
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

        .container {
            background-color: #fff;
            padding: 145px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 85%;
            margin: auto;
            text-align: center;
			margin-left: 20px; 
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
					margin-left: 5px;
      }
s
        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 4px;
            text-align: left;
        }

        th {
            background-color: #FF6500;
            color: white;
        }

        a {
            text-decoration: none;
            color: #000000;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        .logout {
            position: absolute;
            top: 10px;
            right: 10px;
           
        }

        .action-btn {
            background-color: #FF0000;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            margin-right: 5px;
        }
    </style>
    <script>
        function confirmAction(action, recordId) {
            if (confirm("Are you sure you want to " + action + " this record?")) {
                window.location.href = "admin_dashboard.php?action=" + action + "&id=" + recordId;
            }
        }
    </script>
</head>

<body>
    <div class="container">
        <a class="logout" href="index.php">Logout</a>
        <h2>Welcome to the Admin Dashboard</h2>
        <!-- Display the fetched data here -->

        <?php
        // Include database connection file
        include_once "db_connection.php";

        // Check if the action parameter is present in the URL
        if (isset($_GET['action']) && isset($_GET['id'])) {
            $action = $_GET['action'];
            $recordId = $_GET['id'];

            if ($action === "delete") {
                // Delete record
                $deleteSql = "DELETE FROM form WHERE id = $recordId";
                if ($conn->query($deleteSql) === TRUE) {
                    echo '<script>alert("Record deleted successfully");</script>';
                    echo '<script>window.location.href = "admin_dashboard.php";</script>';
                } else {
                    echo "Error deleting record: " . $conn->error;
                }
            } elseif ($action === "edit") {
                // Redirect to edit page or perform other edit actions
                header("Location: edit_page.php?id=$recordId");
                exit();
            }
        }

        // Fetch data from the database
		$bil=1;
        $sql = "SELECT * FROM form";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table>
                    <tr>
                        <th>No</th>
                        <th>Request By</th>
                        <th>No Content</th>
                        <th>Brand</th>
                        <th>Video Tasks</th>
                        <th>Date Request</th>
                        <th>Content Objectives</th>
                        <th>Video Styles</th>
                        <th>Platforms</th>
                        <th>Video Size</th>
                        <th>Talents</th>
                        <th>Storyline & Content</th>
                        <th>Submission Date</th>
                        <th>Prepared By Name</th>
                        <th>Prepared By Date</th>
                        <th>Approved By Name</th>
                        <th>Approved By Date</th>
                        <th>Actions</th>
                    </tr>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>
						<td>{$bil}</td>
                        <td>" . $row["frequest"] . "</td>
                        <td>" . $row["lcontent"] . "</td>
                        <td>" . $row["lbrand"] . "</td>
                        <td>" . $row["lvideotask"] . "</td>
                        <td>" . $row["ldaterequest"] . "</td>
                        <td>" . $row["lcontentobjectives"] . "</td>
                        <td>" . $row["lvideostyles"] . "</td>
                        <td>" . $row["lplatforms"] . "</td>
                        <td>" . $row["lvideosize"] . "</td>
                        <td>" . $row["ltalents"] . "</td>
                        <td>" . $row["lstorylinecontent"] . "</td>
                        <td>" . $row["lsubmissiondate"] . "</td>
                        <td>" . $row["lpreparedbyname"] . "</td>
                        <td>" . $row["lpreparedbydate"] . "</td>
                        <td>" . $row["lapprovedbyname"] . "</td>
                        <td>" . $row["lapprovedbydate"] . "</td>
                        <td>
                            <button class='action-btn' onclick='confirmAction(\"delete\", " . $row["id"] . ")'>Delete</button>
                            <a class='action-btn' href='edit_page.php?id=" . $row["id"] . "'>Edit</a>
                        </td>
                    </tr>";
				
				 $bil++; // Increment the auto-incremented number
            }

            echo "</table>";
        } else {
            echo "No Database.....";
        }

        // Close database connection
        $conn->close();
        ?>
		<!-- Print Button -->
        <button onclick="printPage()" class="action-btn">Print</button>
    </div>

    <script>
        function printPage() {
            window.print();
        }
    </script>
</body>
    </div>
</body>

</html>