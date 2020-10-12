<?php

// var_dump($_POST);

session_start();
 
header("Content-type: text/html; charset=utf-8");
 
//クロスサイトリクエストフォージェリ対策
$_SESSION['token'] = base64_encode(openssl_random_pseudo_bytes(32));
$token = $_SESSION['token'];
 
//クリックジャッキング対策
header('X-FRAME-OPTIONS: SAMEORIGIN');
 
?>
 
<!DOCTYPE html>
<html>
<head>
<title>ログイン画面</title>
<meta charset="utf-8">
</head>
<body>
<h1>ＮＡＮＰＡタイトル</h1>

<h2>ＮＡＮＰＡサブタイトル</h2>
 
<form action="login_check.php" method="post">
 
<p>メールアドレス（ログインＩＤ）<br> ：<input type="text" name="mail" size="30"></p>
<p>ログインパスワード<br> ：<input type="text" name="password" size="30"></p>
<p><a href="forget-pass.php">パスワードをお忘れの方はコチラ</a></p>
<br>
<input type="hidden" name="token" value="<?=$token?>">
<input type="submit" value="ログイン">
 
</form>
<br>
<p><a href="registration_mail_form.php">会員登録はこちら</a>
<p><a href="terms.html">利用規約</a>　┃　<a href="privacy.html">プライバシーポリシー</a></p>

</body>
</html>