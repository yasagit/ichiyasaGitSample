<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>PHP入門教室</title>
</head>
<body>
<?php
print('Hello World！<br />');
print('OpenSSL check PHP！<br />');
echo "openssl.cafile: ", ini_get('openssl.cafile'), "\n";
print('<br />');
echo "curl.cainfo: ", ini_get('curl.cainfo'), "\n";
print('<br />');
echo '------------------------------------';
print('<br />');
echo "end";
echo "aaaaaaaaaaa";
//
// 2

$url = "https://getcomposer.org";
$ch = curl_init(); // はじめ

//オプション
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$info = curl_getinfo($ch);//この関数で取得
curl_close($ch); //終了

var_dump($info);

?>
</body>
</html>
