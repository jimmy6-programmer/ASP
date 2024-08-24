<?php
// Database connection (update with your credentials)
$host = 'localhost';
$dbname = 'voting_system';
$username = 'root';
$password = '';

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the contestant ID from the request
$contestant_id = intval($_GET['id']);

// Fetch contestant details from the database
$sql = "SELECT * FROM contestants WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $contestant_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $contestant = $result->fetch_assoc();
    echo json_encode($contestant);
} else {
    echo json_encode(['error' => 'Contestant not found']);
}

$stmt->close();
$conn->close();
?>
