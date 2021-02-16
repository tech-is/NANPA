<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utl-8">
    <title>マイページ 変更</title>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>
    <script type="" src="form.js"></script>
</head>

<body>
    <div class="element_wrap">
        <label>氏名</label>
        <input type="text" name="your_name" value="<?php if (!empty($_POST['your_name'])) {
                                                        echo $_POST['your_name'];
                                                    } ?>">
    </div>
    <div class="element_wrap">
        <label>性別</label>
        <label for="sex_male"><input id="sex_male" type="radio" name="sex" value="male" <?php if (!empty($_POST['sex']) && $_POST['sex'] === "male") {
                                                                                            echo 'checked';
                                                                                        } ?>>男性</label>
        <label for="sex_female"><input id="sex_female" type="radio" name="sex" value="female" <?php if (!empty($_POST['sex']) && $_POST['sex'] === "female") {
                                                                                                    echo 'checked';
                                                                                                } ?>>女性</label>
    </div>
    <div class="element_wrap">

        <li>
            <label for="birth">年月日： </label>
            <select id="year">
                <option value="0">----</option>
            </select> 年
            <select id="month">
                <option value="0">--</option>
            </select> 月
            <select id="date">
                <option value="0">--</option>
            </select> 日
        </li>
    </div>
    <a class="botton" href="mypage.php">保存</a>
</body>

</html>