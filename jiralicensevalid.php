#!/usr/bin/php
<?php
$url="http://localhost:8080/rest/plugins/applications/1.0/installed/jira-software/license";
$ch=curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_USERPWD, "login:password!");
$query=curl_exec($ch);
curl_close($ch);
$result=json_decode($query,true);
//print_r ($result);
//var_dump($result);

echo $result['valid'];


?>
