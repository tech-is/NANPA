<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="utl-8">
   <title>マイページ</title>
</head>

<body>
   <?php foreach($results as $result):?>
   <h1>マイページ</h1>
   <label for="name">Email</label>
   <p><?php echo $result['email']; ?></p>
   <label for="name">ニックネーム</label>
   <p><?php echo $result['name']; ?></p>
   <label for="gender">性別</label>
   <p><?php echo $result['gender']; ?></p>
   <label for="age">年齢</label>
   <p><?php echo $result['age']; ?></p>
   <label for="photo">プロフィール写真</label>
   <!-- <p><?php echo $result['img']; ?></p> -->
   <?php endforeach; ?>
   <a class="botton" href="<?php echo base_url()."compass/profile_change";?>">登録内容を変更する</a>
   <a class="botton" href="<?php echo base_url()."compass/top";?>">TOPに戻る</a>
</body>

</html>