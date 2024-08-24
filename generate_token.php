<?php
function generateAccessToken($consumerKey, $consumerSecret) {
    $url = "https://api.mtn.com/v1/oauth/access_token";

    $headers = [
        "Authorization: Basic " . base64_encode("$consumerKey:$consumerSecret"),
        "Content-Type: application/x-www-form-urlencoded"
    ];

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "grant_type=client_credentials");

    $response = curl_exec($ch);

    if (curl_errno($ch)) {
        echo 'Curl error: ' . curl_error($ch);
    } else {
        $httpStatusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        if ($httpStatusCode == 200) {
            $response = json_decode($response, true);
            return $response['access_token'];
        } else {
            echo "Error: Received HTTP status code " . $httpStatusCode;
            echo "<pre>";
            print_r($response);
            echo "</pre>";
        }
    }

    curl_close($ch);
    return null; // Return null if no access token is obtained
}

$consumerKey = "RxQVlwRgLhJr26S0PAc4MUfbrtzjjL02";
$consumerSecret = "Ju9oiCPnM44Icz11";
$accessToken = generateAccessToken($consumerKey, $consumerSecret);

if ($accessToken) {
    echo "Access Token: " . $accessToken;
} else {
    echo "Failed to obtain access token.";
}
?>
