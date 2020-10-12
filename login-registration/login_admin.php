<?php
session_start();
 
header("Content-type: text/html; charset=utf-8");
 
// ログイン状態のチェック
if (!isset($_SESSION["mail"])) {
	header("Location: login_form.php");
	exit();
}
 
$mail = $_SESSION['mail'];
echo "<p>ＴＯＰ画面</p>"; 
echo "<a href='login_form.php'>ログアウト</a>";