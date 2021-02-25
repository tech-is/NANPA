<!DOCTYPE html>
<html lang="ja">

<head>
	<title>会員登録画面</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="<?php echo base_url()."assets/css/login.css";?>">
</head>

<body>
	<h1>会員登録画面</h1>
	<?php echo form_open('compass/register_check'); ?>

		<p>メールアドレス(ログインID)</p>
		<?php echo form_error('email'); ?>
		<input type="email" name="email" value="<?php echo set_value('email'); ?>" size="30" />
		<p>パスワード</p>
		<?php echo form_error('password'); ?>
		<input type="password" name="password" value="<?php echo set_value('password'); ?>" size="30" />
		<p>パスワード確認</p>
		<?php echo form_error('cpassword'); ?>
		<input type="password" name="cpassword"value="<?php echo set_value('cpassword'); ?>" size="30" /></p>
		<div>
			<?php echo form_error('age_submit'); ?>
			<input type="checkbox" name="age_submit" value="1"<?php echo set_checkbox('age_submit','1'); ?> />
			<label for="">私は18歳以上です。</label>
			<p style="color: #FA0000;font-size:1vh;"> ※18歳未満の方はご利用できません。</p>
		</div>
		<div>
			<?php echo form_error('terms'); ?>
			<input type="checkbox" name="terms" value="1" <?php echo set_checkbox('terms','1'); ?> />
			<label for="terms">利用規約に同意する。</label><br>
		</div>
		<br>


		<input type="submit" value="確認する">

	</form>

	<br>
	<p><a href="<?php echo base_url() . "compass/terms"; ?>">利用規約</a> | <a href="<?php echo base_url() . "compass/privacy"; ?>">プライバシーポリシー</a></p>

</body>

</html>