<?php

// var_dump($_POST);

session_start();
 
header("Content-type: text/html; charset=utf-8");
 
//クロスサイトリクエストフォージェリ対策のトークン判定
if ($_POST['token'] != $_SESSION['token']){
	echo "不正アクセスの可能性あり";
	exit();
}
 
//クリックジャッキング対策
header('X-FRAME-OPTIONS: SAMEORIGIN');
 
//前後にある半角全角スペースを削除する関数
function spaceTrim ($str) {
	// 行頭
	$str = preg_replace('/^[ 　]+/u', '', $str);
	// 末尾
	$str = preg_replace('/[ 　]+$/u', '', $str);
	return $str;
}
 
//エラーメッセージの初期化
$errors = array();
 
if(empty($_POST)) {
	header("Location: registration_mail_form.php");
	exit();
}else{
	//POSTされたデータを各変数に入れる
	$password = isset($_POST['password']) ? $_POST['password'] : NULL;
	$password_kakunin = isset($_POST['password_kakunin']) ? $_POST['password_kakunin'] : NULL;
	$nenrei_kakunin = isset($_POST['nenrei_kakunin']) ? $_POST['nenrei_kakunin'] : NULL;
	$kiyaku_doui = isset($_POST['kiyaku_doui']) ? $_POST['kiyaku_doui'] : NULL;
	
	//前後にある半角全角スペースを削除
	$password = spaceTrim($password);
	$password_kakunin = spaceTrim($password_kakunin);
 
	//パスワード入力判定
	if ($password == ''):
		$errors['password'] = "パスワードが入力されていません。";
	elseif(!preg_match('/^[0-9a-zA-Z]{5,30}$/', $_POST["password"])):
		$errors['password_length'] = "パスワードは半角英数字の5文字以上30文字以下で入力して下さい。";
	else:
		$password_hide = str_repeat('*', strlen($password));
	endif;
	
	//確認パスワード入力判定
	if ($password_kakunin == ''):
		$errors['password_kakunin'] = "確認入力がされていません。";
	elseif($_POST['password_kakunin'] !==  $_POST["password"]):
		$errors['password_chigau'] = "パスワードが一致していません。";
	endif;	

	//年齢確認
	if ($nenrei_kakunin == ''):
		$errors['nenrei_kakunin'] = "「私は１８歳以上です。」にチェックがありません。１８歳未満はご利用できません。";
	endif;

	//規約同意
	if ($kiyaku_doui == ''):
		$errors['kiyaku_doui'] = "「利用規約に同意する。」にチェックがありません。同意がない場合はご利用できません。";
	endif;	
}
 
//エラーが無ければセッションに登録
if(count($errors) === 0){
	$_SESSION['password'] = $password;
}
 
?>
 
<!DOCTYPE html>
<html>
<head>
<title>会員登録確認画面</title>
<meta charset="utf-8">
</head>
<body>
<h1>会員登録確認画面</h1>
 
<?php if (count($errors) === 0): ?>
 
 
<form action="registration_insert.php" method="post">
 
<p>メールアドレス（ログインＩＤ）<br>　：<?=htmlspecialchars($_SESSION['mail'], ENT_QUOTES)?></p>
<p>ログインパスワード<br>　：<?=$password_hide?></p>
 
<input type="button" value="戻る" onClick="history.back()">
<input type="hidden" name="token" value="<?=$_POST['token']?>">
<input type="submit" value="登録する">
 
</form>
 
<?php elseif(count($errors) > 0): ?>
 
<?php
foreach($errors as $value){
	echo "<p>".$value."</p>";
}
?>
 
<input type="button" value="戻る" onClick="history.back()">
 
<?php endif; ?>
 
</body>
</html>