<!DOCTYPE html>
<html>

<head>
	<title>会員登録確認画面</title>
	<meta charset="utf-8">
</head>

<body>
	<h1>会員登録確認画面</h1>

	<?php if (count($errors) === 0) : ?>


		<form action="compass/register_insert" method="post">

			<p>メールアドレス（ログインＩＤ）<br>：<?= htmlspecialchars($_SESSION['mail'], ENT_QUOTES) ?></p>
			<p>ログインパスワード<br>：<?= $password_hide ?></p>

			<input type="button" value="戻る" onClick="history.back()">
			<input type="hidden" name="token" value="<?= $_POST['token'] ?>">
			<input type="submit" value="登録する">

		</form>

	<?php elseif (count($errors) > 0) : ?>

		<?php
		foreach ($errors as $value) {
			echo "<p>" . $value . "</p>";
		}
		?>

		<input type="button" value="戻る" onClick="history.back()">

	<?php endif; ?>

</body>

</html>