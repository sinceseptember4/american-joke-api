<?php
header("Access-Control-Allow-Origin: *");
$file = file_get_contents("php://input");
$json = mb_convert_encoding($file, 'UTF8');
$arr = json_decode($json,true);
date_default_timezone_set('Asia/Tokyo');
$time = date('Y-m-d H:i:s');
echo $json;
$title = $arr['modena']['title'];
$text = $arr['modena']['text'];
chmod('date.txt', 0666);
$resutl = file_put_contents("date.txt", $time. $json."\n" , FILE_APPEND);
if ($resutl === false) {
  echo "error" . PHP_EOL;
}                     