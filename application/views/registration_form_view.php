<!DOCTYPE html>
<html>
<head>
<title>会員登録画面</title>
<meta charset="utf-8">
</head>
<body>
<h1>会員登録画面</h1>
 
<?php if (count($errors) === 0): ?>
 
<form action="/nanpa/registration_check" method="post">
 
<p>メールアドレス（ログインＩＤ）<br>　：<?=htmlspecialchars($mail, ENT_QUOTES, 'UTF-8')?></p>
<p>ログインパスワード<br>　：<input type="text" name="password"></p>
<p>確認入力<br>　：<input type="text" name="cpassword"></p>
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
 
<input type="hidden" name="token" value="<?=$token?>">
<input type="submit" value="確認する">
 
</form>
 
<?php elseif(count($errors) > 0): ?>
 
<?php
foreach($errors as $value){
	echo "<p>".$value."</p>";
}
?>
 
<?php endif; ?>

<br>
<p><a href="terms.html">利用規約</a>　┃　<a href="privacy.html">プライバシーポリシー</a></p>

</body>
</html>