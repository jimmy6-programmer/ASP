<?php

$servername = "localhost";
$username = "root";  // Update with your database username
$password = "";      // Update with your database password
$dbname = "voting_system"; // Update with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $name = $_POST['name'];
    $age = $_POST['age'];
    $specialty = $_POST['specialty'];
    $origin = $_POST['origin'];

    // Handle file upload
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        // Get file details
        $tmpName = $_FILES['image']['tmp_name'];
        $fileName = basename($_FILES['image']['name']);
        $filePath = 'img/' . $fileName;

        // Check if img directory exists; if not, create it
        if (!is_dir('img')) {
            mkdir('img', 0755, true);
        }

        // Move the uploaded file to the img directory
        if (move_uploaded_file($tmpName, $filePath)) {
            // Database connection
            $conn = new mysqli('localhost', 'root', '', 'voting_system');
            
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Prepare and execute SQL statement
            $stmt = $conn->prepare("INSERT INTO contestants (name, age, specialty, origin, image, points) VALUES (?, ?, ?, ?, ?, ?)");
            $points = 0; // Default points value
            $stmt->bind_param("sisssi", $name, $age, $specialty, $origin, $filePath, $points);

            if ($stmt->execute()) {
                echo "<script>
                        alert('Contestant added successfully.');
                        window.location.href = 'index.php'; // Redirect to index or any other page
                      </script>";
            } else {
                echo "<script>
                        alert('Error: " . $stmt->error . "');
                        window.history.back();
                      </script>";
            }

            // Close statement and connection
            $stmt->close();
            $conn->close();
        } else {
            echo "<script>
                    alert('Sorry, there was an error uploading your file.');
                    window.history.back();
                  </script>";
        }
    } else {
        echo "<script>
                alert('No file uploaded or there was an upload error.');
                window.history.back();
              </script>";
    }
}
?>
