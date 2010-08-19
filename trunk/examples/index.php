<?php
session_start();

require_once "../src/apiClient.php";


$apiClient = new apiClient();
//$apiClient->discover('moderator');
$apiClient->discover('buzz', 'v1.0');

if (isset($_SESSION['oauth_access_token'])) {
  $apiClient->setAccessToken($_SESSION['oauth_access_token']);
} else {
  $token = $apiClient->authenticate();
  $_SESSION['oauth_access_token'] = serialize($token);
  echo "set access token to: ".print_r($_SESSION['oauth_access_token'], true)."</pre>";
}

$apiClient->buzz->activities->list(array('userId' => '@me', 'scope' => '@self'));