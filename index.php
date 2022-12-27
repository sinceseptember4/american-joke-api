<?php 
$url = "json/jokes.json";
$json = file_get_contents($url);
$json = mb_convert_encoding($json, 'UTF8');
$arr = json_decode($json,true);
$jokes =$arr["jokes"];
$count = count($jokes)-1;
$rand = mt_rand(0, $count);
$selectJoke = nl2br($jokes[$rand]["joke"]);
$title = $jokes[$rand]["title"];
//echo $selectJoke;
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>American joke</title>
</head>
<body>
    <h1><?php echo $title; ?></h1>
    <p><?php echo $selectJoke; ?></p>
    <button onclick="reload()">次へ</button>
</body>
<script>
    function reload () {
        location.reload()
    }
</script>
</html>