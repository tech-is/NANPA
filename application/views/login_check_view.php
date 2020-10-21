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
