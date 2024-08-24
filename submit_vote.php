<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "voting_system";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to generate access token
function generateAccessToken() {
    $url = "https://sandbox.momodeveloper.mtn.com/collection/token/";

    $consumerKey = "3380731c6fde4113a464e354bdb3a4b9"; // Your Primary key
    $consumerSecret = "af2b471c68c842189795d31ee0c901b5"; // Your Secondary key

    $credentials = base64_encode("$consumerKey:$consumerSecret");

    $headers = [
        "Authorization: Basic $credentials",
        "Content-Type: application/x-www-form-urlencoded",
        "Ocp-Apim-Subscription-Key: 88b6b9c271c74c0aa5fbd1f5170f5680", // Your Subscription key
        "Content-Length: 0", // Explicitly set Content-Length to 0
    ];

    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl, CURLOPT_URL, $url);

    $response = curl_exec($curl);
    curl_close($curl);

    // Debugging: Output the raw response
    if (!$response) {
        die("Error: Failed to get a response from the API.");
    }
    echo "Response: " . $response;

    $json = json_decode($response, true);

    // Check if access_token is set
    if (isset($json['access_token'])) {
        return $json['access_token'];
    } else {
        die("Error: Access token not found in the response. Response: " . $response);
    }
}


// Function to initiate payment
function initiatePayment($accessToken, $amount, $telephone) {
    $url = "https://sandbox.momodeveloper.mtn.com/collection/v1_0/requesttopay";

    $headers = [
        "Authorization: Bearer $accessToken",
        "X-Reference-Id: " . uniqid(),
        "X-Target-Environment: sandbox",
        "Content-Type: application/json",
        "Ocp-Apim-Subscription-Key: 88b6b9c271c74c0aa5fbd1f5170f5680", // Your Subscription key
    ];

    $body = [
        "amount" => $amount,
        "currency" => "RWF",
        "externalId" => uniqid(),
        "payer" => [
            "partyIdType" => "MSISDN",
            "partyId" => $telephone
        ],
        "payerMessage" => "Vote payment",
        "payeeNote" => "Thank you for voting"
    ];

    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($body));

    $response = curl_exec($curl);
    curl_close($curl);

    return json_decode($response, true);
}

// Get form data
$contestant_id = $_POST['contestant_id'];
$amount = $_POST['amount'];
$telephone = $_POST['telephone'];

// Generate Access Token
$accessToken = generateAccessToken();

// Initiate Payment Request
$paymentResponse = initiatePayment($accessToken, $amount, $telephone);

if (isset($paymentResponse['status']) && $paymentResponse['status'] == 'SUCCESS') {
    // Calculate points based on the amount
    switch ($amount) {
        case 100:
            $points = 1;
            break;
        case 500:
            $points = 5;
            break;
        case 1000:
            $points = 10;
            break;
        case 5000:
            $points = 50;
            break;
        default:
            $points = 0;
    }

    // Insert vote into database
    $sql = "INSERT INTO votes (contestant_id, amount, telephone) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("isi", $contestant_id, $amount, $telephone);

    if ($stmt->execute()) {
        // Update contestant points
        $update_sql = "UPDATE contestants SET points = points + ? WHERE id = ?";
        $update_stmt = $conn->prepare($update_sql);
        $update_stmt->bind_param("ii", $points, $contestant_id);
        $update_stmt->execute();

        // Success response with redirection
        echo '<script>
                alert("Vote submitted successfully.");
                window.location.href = "index.php";
              </script>';
    } else {
        echo '<script>
                alert("An error occurred. Please try again.");
                window.location.href = "index.php";
              </script>';
    }

    $stmt->close();
} else {
    echo '<script>
            alert("Payment failed. Please try again.");
            window.location.href = "index.php";
          </script>';
}

$conn->close();
?>
