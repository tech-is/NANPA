<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="utl-8">
   <title>マイページ</title>
</head>

<body>
   <?php foreach($results as $result):?>
   <h1>マイページ</h1>
   <label for="name">メールアドレス</label>
   <p><?php 
         if(isset($result['email'])){
            echo $result['email'];
         } else {
            echo "メールアドレスが登録されていません。";
         }; ?>
   </p>
   <label for="name">ニックネーム</label>
   <p><?php 
         if(isset($result['name']) && $result['name'] !== ""){
            echo $result['name'];
         } else {
            echo "ニックネームが登録されていません。";
         }
         ; ?>
   </p>
   <label for="gender">性別</label>
   <p><?php 
         if(!isset($result['gender'])){
            echo $result['gender'];
         } else if($result['gender'] === 0) {
            echo "性別が登録されていません。";
         } else {
            echo "性別が登録されていません。";
         }; ?>
   </p>
   <label for="age">年齢</label>
   <p><?php 
         if(!isset($result['age'])){
            echo $result['age'];
         } elseif($result['age'] === 0) {
            echo "年齢が登録されていません。";
         } else {
            echo "年齢が登録されていません。";
         }; ?>
   </p>
   <label for="photo">プロフィール写真</label>
   <p><?php 
         if(!isset($result['profile_img']) && $result['profile_img'] !== ""){
            echo $result['profile_img'];
         } else {
            echo "プロフィール写真が登録されていません。";
         }; ?>
   </p>
   <?php endforeach; ?>
   <a class="botton" href="<?php echo base_url()."compass/profile_change";?>">登録内容を変更する</a>
   <a class="botton" href="<?php echo base_url()."compass/top";?>">TOPに戻る</a>
</body>

</html>