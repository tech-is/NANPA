<!DOCTYPE html>
<html>

<head>
    <title>ログイン画面</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url()."assets/css/login.css";?>">
</head>

<body>
    <h1>Compass</h1>
    <?php echo form_open('compass/login_check'); ?>

        <p>メールアドレス(ログインID)</p>
        <input type="email" name="email" value="<?php echo set_value('email');?>" size="30"/>
        <p>ログインパスワード</p>
        <input type="password" name="password" value="<?php echo set_value('password');?>" size="30"/>
        <p><a href="<?php echo base_url()."forget-pass";?>">パスワードをお忘れの方はコチラ</a></p>
        <input type="submit" value="ログイン">

    </form>
    <br>
    <p><a href="<?php echo base_url() . "compass/register_mail_form"; ?>">会員登録はこちら</a>
    <p><a href="<?php echo base_url() . "compass/terms"; ?>">利用規約</a> | <a href="<?php echo base_url() . "compass/privacy"; ?>">プライバシーポリシー</a></p>

</body>

</html>