<?php
$user = "diego3g";
$apiUrl = "https://api.github.com/users/$user";

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $apiUrl);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, [
  'Accept: application/json',
  'User-Agent: apiGitHubPhp'
]);

$response = curl_exec($curl);
$curlError = curl_error($curl);
curl_close($curl);

if ($curlError) {
  echo "cURL Error: " . $curlError . "\n";
} else {
  // Verifica se a resposta é um JSON válido
  $responseData = json_decode($response);

  if (json_last_error() !== JSON_ERROR_NONE) {
    echo "Error decoding JSON: " . json_last_error_msg() . "\n";
    echo "Raw response: \n";
    var_dump($response);
  } else {
    // Exibe os dados do usuário
    echo "User: " . $responseData->login . "\n";
    echo "Name: " . $responseData->name . "\n";
    echo "Public Repos: " . $responseData->public_repos . "\n";
  }
}
?>
