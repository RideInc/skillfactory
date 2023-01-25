<?php

$text_1  = 'В модуле 8 мы научились:';
$text_2  = 'Создавать переменные и производить простые операции с различными типами данных';
$text_3  = 'Поднимать локальные сервера, создавать и подключать базы данных';

$array   = [1.7, 6.2, 2, 6];
$avg     = array_sum($array) / count($array);
$round   = round($avg);
$client  = @$_SERVER['HTTP_CLIENT_IP'];
$forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
$remote  = @$_SERVER['REMOTE_ADDR'];

if(filter_var($client, FILTER_VALIDATE_IP)) $ip = $client;
elseif(filter_var($forward, FILTER_VALIDATE_IP)) $ip = $forward;
else $ip = $remote;

if($ip === '::1') $ip = 'localhost';

?>
