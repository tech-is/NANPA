<!DOCTYPE html>
<html>
<head>
<title>メール登録画面</title>
<meta charset="utf-8">
</head>
<body>
<h1>メール登録画面</h1>
 
<form action="/nanpa/registration_mail_check" method="post">
 
<p>メールアドレス<br>　：<input type="text" name="mail" size="30"></p>
 
<input type="hidden" name="token" value="<?=$token?>">
<input type="submit" value="登録する">
 
</form>
<br>
<p><a href="terms.html">利用規約</a>　┃　<a href="privacy.html">プライバシーポリシー</a></p>

</body>
</html>

