<!DOCTYPE html>
<html>

<head>
    <title>メール登録画面</title>
    <meta charset="utf-8">
</head>

<body>
    <h1>メール登録画面</h1>

    <form action="<?php echo base_url() . "compass/register_mail_check"; ?>" method="post">

        <p>メールアドレス<br>:<input type="text" name="mail" size="30"></p>

        <input type="submit" value="登録する">

    </form>
    <br>
    <p><a href="<?php echo base_url() . "compass/terms"; ?>">利用規約</a> | <a href="<?php echo base_url() . "compass/privacy"; ?>">プライバシーポリシー</a></p>

</body>

</html>