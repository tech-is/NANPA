<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="utl-8">
   <title>マイページ</title>
   <link rel="stylesheet" href="<?php echo base_url()."assets/css/style.css"; ?>">
</head>

<body>
   <?php foreach($results as $result):?>
   <h2>マイページ</h2>
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

   <?php echo form_open('compass/select_pages'); ?>
      <input type="hidden" name="user_id" value="<?php echo $result['id']; ?>">
      <input id="radio_1" class="radio_button" type="radio" name="pages" value="1" /><label for="radio_1">登録内容を変更する</label>
      <input id="radio_2" class="radio_button" type="radio" name="pages" value="2" /><label for="radio_2">相手を探す</label>
      <input id="radio_3" class="radio_button" type="radio" name="pages" value="3" /><label for="radio_3">ひとこと投稿</label>
      <p><input type="submit" value="送信する"></p>
   </form>
   <?php endforeach; ?>
</body>

</html>