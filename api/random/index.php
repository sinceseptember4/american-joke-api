<?php 
$url = "json/jokes.json";
$json = file_get_contents($url);
$json = mb_convert_encoding($json, 'UTF8');
$arr = json_decode($json,true);
$jokes =$arr["jokes"];
$count = count($jokes);
$rand = mt_rand(0, $count);
$selectjoke = nl2br($jokes[$rand]["joke"]);
$title = $jokes[$rand]["title"];
//echo $selectjoke;
