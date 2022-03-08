<?php
 // データの受け取り
 $name = $_POST['name'];
 $title = $_POST['title'];
 $body = $_POST['body'];
 $pass = $_POST['pass'];

 // 必須項目チェック（名前か本文が空ではないか？）
 if ($name == '' || $body == ''){
    header("Location: bbs.php"); // 空のときbbs.phpへ移動
    exit();
 }

 // 必須項目チェック（パスワードは数字4桁か？）
 