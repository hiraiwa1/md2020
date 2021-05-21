<?php
// 日本語対応
mb_language("Japanese");
mb_internal_encoding("UTF=8");

// JSから送信されたデータの取得
$name = $_POST["name"];
$tel = $_POST["tel"];
$email = $_POST["email"];
$body = $_POST["body"];

// 送信フォーマット等の設定
$to = "example@text.com";
$subject = "お問い合わせ自動送信";
$message = "お問い合わせメッセージが送信されました\n----------\n【お名前】\n" . $name ."\n\n【Tell】\n" .$tel ."\n\n【Email】\n" . $email ."\n\n【お問い合わせ内容】\n" .$body;
$headers = "From: " . $name;

// メール送信実行
mb_send_mail($to, $subject, $message, $headers);
?>