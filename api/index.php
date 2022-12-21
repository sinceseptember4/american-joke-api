<?php 
$url = "../json/jokes.json";
$json = file_get_contents($url);
echo $json;