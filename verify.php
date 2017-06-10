<?php
$access_token = '+nZPASwXgY18FJq99mnw0SjDQcRIG61s1U4BLvIA/Qxf2KXDc+stY+WpFvm6uAcExovst9se3vxnQsb0cQH9G5voOHnQWC2o/DXQAaJcg6va8hEA7lRssElZj1UXsN7X9G5PiL9Vj87vrpJAHCEfVAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v2/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
