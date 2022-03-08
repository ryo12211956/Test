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
 if ($!preg_match("/^[0-9]{4}$/", $pass)){
   header("Location: bbs.php"); // 書式が違うときbbs.phpへ移動
   exit();
 }

 // DBに接続
 $dsn = 'mysql:host=localhost;dbname=tennis;charset=utf8';
 $user = 'root';
 $password = ''; // rootのパスワード（空欄）

 try { 
   //PDOインスタンスの作成
   $db = new PDO($dsn, $user, $password);
   $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
   // プリペアドステートメントを作成
   $stme = $db->prepare("
    INSERT INTO bbs (name, title, body, date, pass)
    VALUES (:name, :title, :body, now(), :pass)"
   );
    // プリアドステートメントにパラメータを割り当てる
   $stmt->bindParam(':name', $name, PDO::PARAM_STR);
   $stmt->bindParam(':title', $title, PDO::PARAM_STR);
   $stmt->bindParam(':body', $body, PDO::PARAM_STR);
   $stmt->bindParam(':pass', $pass, PDO::PARAM_STR);
   // クエリの実行
   $stmt->execute();

   // bbs.phpに戻る
   header('Location: bbs.php');
   exit();
 } catch (PDOException $e){
   exit('エラー:' . $e->getMessage());
 }
?>