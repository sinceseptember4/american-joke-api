<?php 
$url = "../../json/jokes.json";
$json = file_get_contents($url);
$json = mb_convert_encoding($json, 'UTF8');
$arr = json_decode($json,true);
$jokes =$arr["jokes"];
$count = count($jokes)-1;
$rand = mt_rand(0, $count);
$selectJoke = $jokes[$rand]["joke"];
$title = $jokes[$rand]["title"];
//echo $selectJoke;
$json_array=array(
    'title'=>$title,
    'joke'=>$selectJoke
    );
$json=json_encode($json_array, JSON_UNESCAPED_UNICODE);  
echo $json;