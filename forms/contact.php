<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
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
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 60%;
            margin: auto;
            text-align: center;
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
        }

        form {
            text-align: left;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input,
        textarea {
            width: 100%;
            padding: 8px;
            border-radius: 4px;
            border: 1px solid #ddd;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        button {
    background-color: #FF0000;
    color: white;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 4px;
    display: block; /* Make the button a block-level element */
    margin: auto; /* Center the button horizontally */
}


        button:hover {
            background-color: #990000;
        }
   .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            z-index: 1000;
        }

        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Contact Us</h2>
        <form id="contactForm" method="POST" action="contact.php" onsubmit="showPopup(event)">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <button type="submit">Submit</button>
        </form>
    </div>

    <!-- Popup message HTML -->
    <div id="popup" class="popup">
        <p>Your message has been submitted!</p>
        <button onclick="hidePopup()">Close</button>
    </div>

    <!-- Overlay for the popup -->
    <div id="overlay" class="overlay" onclick="hidePopup()"></div>

    <!-- JavaScript for the popup window -->
    <!-- JavaScript for the popup window -->
<script>
    function showPopup(event) {
        // Prevent the default form submission behavior
        event.preventDefault();

        // Show the overlay and popup
        document.getElementById('overlay').style.display = 'block';
        document.getElementById('popup').style.display = 'block';

        // Clear the form fields
        document.getElementById('contactForm').reset();
    }

    function hidePopup() {
        // Hide the overlay and popup
        document.getElementById('overlay').style.display = 'none';
        document.getElementById('popup').style.display = 'none';
    }
</script>

</body>

</html>