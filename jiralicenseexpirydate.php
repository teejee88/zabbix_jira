#!/usr/bin/php
<?php
$url="http://localhost:8080/rest/plugins/applications/1.0/installed/jira-software/license";
$ch=curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_USERPWD, "login:password!");
$query=curl_exec($ch);
curl_close($ch);
$json=json_decode($query,true);
$deadlinedate=$json['expiryDateString'];
date_default_timezone_set('UTC');
//echo $deadlinedate;

$currentdate=date('Y-m-d');
//echo $currentdate;

$date1=new DateTime($currentdate);
$date2=new DateTime($deadlinedate);
$result=$date1->diff($date2);
echo $result->format('%a%');

?>

