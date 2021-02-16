<!DOCTYPE html>
<html>

<head>
	<title>会員登録完了画面</title>
	<meta charset="utf-8">
</head>

<body>

	<?php if (count($errors) === 0) : ?>
		<h1>登録完了！</h1>

		<p>登録が完了しました。<br>ログインページからログインして<br>ご利用ください。</p>
		<p><a href="/compass/login">ログイン画面に戻る</a></p>

	<?php elseif (count($errors) > 0) : ?>

		<?php
		foreach ($errors as $value) {
			echo "<p>" . $value . "</p>";
		}
		?>

	<?php endif; ?>

</body>

</html>