<!DOCTYPE html>
<html>
<head>
<title>会員登録画面</title>
<meta charset="utf-8">
</head>
<body>
<h1>会員登録画面</h1>
 

<form action="registration_check" method="post">
 
<p>メールアドレス（ログインＩＤ）<br>　：<input type="text" name="mail" size="30"></p>
<p>ログインパスワード<br>　：<input type="text" name="password" size="30"></p>
<p>確認入力<br>　：<input type="text" name="cpassword" size="30"></p>
<div>
	<input type="checkbox" name="nenrei_kakunin" value="1">
    <label for="nenrei_kakunin">私は１８歳以上です。</label><br>
	<p>　※１８歳未満の方はご利用できません。</p>
</div>
<div>
	<input type="checkbox" name="kiyaku_doui" value="1">
    <label for="kiyaku_doui">利用規約に同意する。</label><br>
</div>
<br>
 

<input type="submit" value="確認する">
 
</form>

<br>
<p><a href="<?php echo base_url()."nanpa/terms";?>">利用規約</a>　┃　<a href="<?php echo base_url()."nanpa/privacy";?>">プライバシーポリシー</a></p>

</body>
</html>