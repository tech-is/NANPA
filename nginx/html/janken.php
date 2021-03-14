<?php
$hands = ['グー', 'チョキ', 'パー'];
if (isset($_POST['playerHand'])) {
    $playerHand = $_POST['playerHand'];
    $pcHand = $hands[array_rand($hands)];
    if ($playerHand == $pcHand) {
        $result ='あいこ';
    } elseif ($playerHand == 'グー' && $pcHand == 'チョキ') {
        $result = '勝ち';
    } elseif ($playerHand == 'チョキ' && $pcHand == 'パー') {
        $result = '勝ち';
    } elseif ($playerHand == 'パー' && $pcHand == 'グー') {
        $result = '勝ち';
    } else {
        $result = '負け';
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
    <title>じゃんけん</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="wrapper">
    <header>
        <div class="header-logo"></div>
    </header>
    <main>
        <h1>じゃんけんプログラム</h1>
        出す手を選んで勝負してください。
        <div class="form-box">
            <form action="janken.php" method="post">
                <label>
                    <input type="radio" title="playerHand" name="playerHand" value="グー" <?php if($playerHand == 'グー'){echo 'checked';} ?>>グー
                </label>
                <label>
                    <input type="radio" title="playerHand" name="playerHand" value="チョキ" <?php if($playerHand == 'チョキ'){echo 'checked';} ?>>チョキ
                </label>
                <label>
                    <input type="radio" title="playerHand" name="playerHand" value="パー" <?php if($playerHand == 'パー'){echo 'checked';} ?>>パー
                </label>
                <button type="submit" class="battle-button">勝負する！</button>
            </form>
        </div>
    </main>
    <?php if(isset($_POST['playerHand'])): ?>
    <h3>結果</h3>
        <?= $result ?> 
    <h3>プログラムが出した手</h3>
        <?= $pcHand ?>
    <?php endif; ?>
</div>
</body>
</html>