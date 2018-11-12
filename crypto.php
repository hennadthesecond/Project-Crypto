<?php

$url = "https://api.coinranking.com/v1/public/coin/1335"
$fgc = file_get_contents($url);
$json = json_decode($fgc, true);

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <title>Crypto</title>
</head>
<body>
</body>
</html>
