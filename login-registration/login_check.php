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
 
//データベース接続
require_once("db.php");
$dbh = db_connect();
 
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
	header("Location: login_form.php");
	exit();
}else{
	//POSTされたデータを各変数に入れる
	$mail = isset($_POST['mail']) ? $_POST['mail'] : NULL;
	$password = isset($_POST['password']) ? $_POST['password'] : NULL;
	
	//前後にある半角全角スペースを削除
	$mail = spaceTrim($mail);
	$password = spaceTrim($password);
 
	//メールアドレス（ログインＩＤ）入力判定
	if ($mail == ''):
		$errors['mail'] = "メールアドレスが入力されていません。";
	// elseif(mb_strlen($mail)>50):
	// 	$errors['mail_length'] = "メールアドレスは50文字以内で入力して下さい。";
	endif;
	
	//パスワード入力判定
	if ($password == ''):
		$errors['password'] = "パスワードが入力されていません。";
	elseif(!preg_match('/^[0-9a-zA-Z]{5,30}$/', $_POST["password"])):
		$errors['password_length'] = "パスワードは半角英数字の5文字以上30文字以下で入力して下さい。";
	else:
		$password_hide = str_repeat('*', strlen($password));
	endif;
	
}
 
//エラーが無ければ実行する
if(count($errors) === 0){
	try{
		//例外処理を投げる
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		//アカウントで検索
		$statement = $dbh->prepare("SELECT * FROM member WHERE mail=(:mail) AND flag =1");
		$statement->bindValue(':mail', $mail, PDO::PARAM_STR);
		$statement->execute();
 
		//アカウントが一致
		if($row = $statement->fetch()){
 
			$password_hash = $row[password];
 
			//パスワードが一致
			if (password_verify($password, $password_hash)) {
				
				//セッションハイジャック対策
				session_regenerate_id(true);
				
				$_SESSION['mail'] = $mail;
				header("Location: login_admin.php");
				exit();
			}else{
				$errors['password'] = "パスワードが一致しません。";
			}
		}else{
			$errors['mail'] = "アカウント及びパスワードが一致しません。";
		}
		
		//データベース接続切断
		$dbh = null;
		
	}catch (PDOException $e){
		print('Error:'.$e->getMessage());
		die();
	}
}
 
?>
 
<!DOCTYPE html>
<html>
<head>
<title>ログイン確認画面</title>
<meta charset="utf-8">
</head>
<body>
<h1>ログイン確認画面</h1>
 
<?php if(count($errors) > 0): ?>
 
<?php
foreach($errors as $value){
	echo "<p>".$value."</p>";
}
?>
 
<input type="button" value="戻る" onClick="history.back()">
 
<?php endif; ?>
 
</body>
</html>
