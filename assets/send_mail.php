<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // フォームからのデータを取得
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // メールの宛先を設定
    $to = 'haruno.inukaze@gmail.com'; // ここに送信先のメールアドレスを入力してください

    // メールの件名
    $subject = 'お問い合わせフォームからのメッセージ';

    // メールの本文
    $body = "名前: $name\nメールアドレス: $email\n\nメッセージ:\n$message";

    // メールヘッダー
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // メールを送信
    if (mail($to, $subject, $body, $headers)) {
        echo 'メッセージが送信されました。';
    } else {
        echo 'メッセージの送信に失敗しました。';
    }
} else {
    echo '無効なリクエストです。';
}
?>
