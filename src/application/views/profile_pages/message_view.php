<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>投稿ページ</title>
</head>
<body>
    <h1>投稿ページ</h1>
    <form method="post">

        <div>
            <label for="message">投稿内容</label>
            <textarea id="message" name="message"></textarea>
        </div>
        <input type="submit" name="btn_submit" value="書き込む">
    </form>
    <hr>
    <section>
        <?php if (!empty($message_array)) { ?>
            <?php foreach ($message_array as $value) { ?>
                <article>
                    <div class="info">
                        <h2><?php echo $value['name']; ?></h2>
                        <time><?php echo date('Y年m月d日 H:i', strtotime($value['post_date'])); ?></time>
                    </div>
                    <p><?php echo $value['message']; ?></p>
                </article>
            <?php } ?>hdr
        <?php } ?>
    </section>
    <a class="botton" href="">投稿内容を変更する</a>
    <a class="botton" href="<?php echo base_url()."compass/top";?>">TOPに戻る</a>
</body>

</html>