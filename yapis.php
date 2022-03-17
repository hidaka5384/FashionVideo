<?php

// 本番環境では削除すること!!
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');


$apiUrl = 'https://shopping.yahooapis.jp/ShoppingWebService/V3/itemSearch';

//$params = ['query' => '服', 'part' => "snippet",  'type' => "goods", 'maxResults' => 30];
$params = $_GET;
$params['appid'] = "dj00aiZpPVRNbXNHazRZelRBUSZzPWNvbnN1bWVyc2VjcmV0Jng9OWI-";


$url = $apiUrl.'?'.http_build_query($params);

$json = file_get_contents($url);

echo $json;