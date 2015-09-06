<?php
session_start();
require_once('twitteroauth/twitteroauth.php'); //Path to twitteroauth library
 
$twitteruser = "mominriyadh";
$notweets = 10;
$consumerkey = "7bL9hcA4UJb6ViyACu2soqILF";
$consumersecret = "8ZUE0mmtCDF7muOvR5szTfNJUZsAbVfnhCpTAt7nfc3sYtbhQI";
$accesstoken = "276419955-RpMam5nPOmzrvDiWsQwZC4rDlZGLLx4JUpjwzXoA";
$accesstokensecret = "d6pdkIQEJAvhCxpiEvIgQukJCKaYmPV8gjwnQeEca2r9W";
 
function getConnectionWithAccessToken($cons_key, $cons_secret, $oauth_token, $oauth_token_secret) {
  $connection = new TwitterOAuth($cons_key, $cons_secret, $oauth_token, $oauth_token_secret);
  return $connection;
}
  
$connection = getConnectionWithAccessToken($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);
$tweets = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=".$twitteruser."&count=".$notweets);
 
echo json_encode($tweets);
?>