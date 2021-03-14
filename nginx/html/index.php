<?php
$dsn = 'mysql:host=mysql;port=3306;dbname=mydb';
$user = 'user';
$password = 'pass';
try {
  $dbh = new PDO($dsn, $user, $password);
  echo "接続成功\n";
} catch (PDOException $e) {
  echo "接続失敗: " . $e->getMessage() . "\n";
  exit();
}

$select = [
  "サービスについて",
  "商品について",
  "販売について", 
  "その他"
];
if ($_POST) {
  var_dump($_POST['user_name']);
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<section class="wrap">
  <form class="form" method="post">
  <h2 class="ttl">お客様情報を入力してください。</h2>
    <dl class="form-list">
      <dt><label for="name">お名前</label></dt>
      <dd><input id="zip"" type="text" name="user_name"></dd>
      <dt><label for="mail">メールアドレス</label></dt>
      <dd><input id="mail" type="email" name="user_mail"></dd>
      <dt><label for="tel">電話番号</label></dt>
      <dd><input id="tel" type="tel" name="user_tel"></dd>
      <dt><label for="inquiry">お問い合わせ内容</label></dt>
      <dd>
        <select id="inquiry" name="user_inquiry">
        <option value="">選択してください</option>
        <?php foreach($select as $val): ?>
        <?= "<option value={$val}>{$val}</optin>" ?>
        <?php endforeach; ?>
        </select>
      </dd>
    </dl>
    <input class="btn" type="submit" value="送信する">
  </form>
</section>
</body>
</html>
