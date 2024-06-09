<?php
// Assuming cURL is installed and you have a GitHub token
$user = "diego3g";
$apiUrl = "https://api.github.com/users/$user";

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $apiUrl);
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($curl, CURLOPT_HTTPHEADER, [
//   'Authorization: token YOUR_GITHUB_TOKEN',
//   'Accept: application/json'
// ]);

$response = curl_exec($curl);
echo "r: $response";
$curlError = curl_error($curl);
curl_close($curl);

if ($curlError) {
  echo "cURL Error: " . $curlError . "\n";
} else {
  $responseData = json_decode($response);
  echo "r> $responseData\n";
  if ($responseData) {
    echo "User: " . $responseData->login . "\n";
    echo "Name: " . $responseData->name . "\n";
    echo "Public Repos: " . $responseData->public_repos . "\n";
  } else {
    echo "Error: JSON decoding failed.\n";
  }
}
