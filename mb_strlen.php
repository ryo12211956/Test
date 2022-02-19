<?php
// 引数に文字列を指定する。返り値は5で、$countに代入させる
$count = mb_strlen("こんにちは");
// 引数は変数でもよい
$greeting = "こんにちは";
$count = mb_strlen($greeting);
$now_time = time();
$fruits = array("apple","lemon","banana");
sort($fruits);
?>
