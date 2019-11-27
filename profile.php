<?php


$access_token = '/auOLIJRKIbz2a15y+bTzCQdmLs8RL4vwXO1+hqLCluPx7FZmJdQWFyMS59aa0ZnEI+I10FxzWPho9x0AoP/CJybvOrG3Ok/e9f0RIf4lIm7+qlkr8JbeJwrmSg9X1FepxhVE3Hv3rFfusvoQsCwsQdB04t89/1O/w1cDnyilFU=';

$userId = 'U40688df2a880a096286e1faa9bcf88b9';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

