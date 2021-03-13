<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>compass</title>
    <link rel="stylesheet" href="<?php echo base_url()."assets/css/style.css"; ?>">
    </haed>

<body>
    <div class="container">
    <h1>Compass</h1>
    <?php echo form_open('compass/select_page'); ?>
        <?php echo form_error(''); ?>
        <label><input type="hidden" name="session_id" value="<?php echo $user_id;?>"></label>
        <label><input type="radio" name="page" value="1">相手を探す</label>
        <label><input type="radio" name="page" value="2">マイページ</label>
        <label><input type="radio" name="page" value="3">ひとこと投稿</label>
        <input type="submit" value="ログイン">
    </form>
        <div class="out">
            <a href="">退会する方はこちら</a>
        </div>
    </div>
</body>

</html>