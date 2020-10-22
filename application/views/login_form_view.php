<!DOCTYPE html>
<html>
<head>
<title>ログイン画面</title>
<meta charset="utf-8">
</head>
<body>
<h1>ＮＡＮＰＡタイトル</h1>

<h2>ＮＡＮＰＡサブタイトル</h2>
 
<form action="/nanpa/login_check" method="post">
 
<p>メールアドレス（ログインＩＤ）<br> ：<input type="text" name="mail" size="30"></p>
<p>ログインパスワード<br> ：<input type="text" name="password" size="30"></p>
<p><a href="/nanpa/forget-pass">パスワードをお忘れの方はコチラ</a></p>
<br>
<input type="hidden" name="token" value="<?=$token?>">
<input type="submit" value="ログイン">
 
</form>
<br>
<p><a href="/nanpa/registration_mail_form">会員登録はこちら</a>
<p><a href="/nanpa/terms">利用規約</a>　┃　<a href="/nanpa/privacy">プライバシーポリシー</a></p>

</body>
</html>

