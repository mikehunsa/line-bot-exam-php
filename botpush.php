<?php



require "vendor/autoload.php";

$access_token = '/auOLIJRKIbz2a15y+bTzCQdmLs8RL4vwXO1+hqLCluPx7FZmJdQWFyMS59aa0ZnEI+I10FxzWPho9x0AoP/CJybvOrG3Ok/e9f0RIf4lIm7+qlkr8JbeJwrmSg9X1FepxhVE3Hv3rFfusvoQsCwsQdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'c26a6f5dab91d730eab54d476606a45d';

$pushID = '1653577903';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







