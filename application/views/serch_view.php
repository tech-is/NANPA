<!DOCYTPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>test serch</title>
</head>
<body>
    <div class="container">
        <div class="serch-page">
            <select id="select-pref"><option value="">都道府県を選択してください</option></select>
            <select id="select-city"><option value="">市区町村を選択してください</option></select>
            <input type="date" name="calendar" max="9999-12-31">
            <select name="age">
                <option value="">選択してください</option>
                <option value="20歳未満">20歳未満</option>
                <option value="20-29歳">20-29歳</option>
                <option value="30-39歳">30-39歳</option>
                <option value="40-49歳">40-49歳</option>
                <option value="50-59歳">50-59歳</option>
                <option value="60-69歳">60-69歳</option>
                <option value="70-79歳">70-79歳</option>
                <option value="80歳以上">80歳以上</option>
            </select>
            <input type="radio" name="gender" value="male">男性
            <input type="radio" name="gender" value="female">女性
            <input type="submit" name="serch" value="検索する">
        </div>
        <a href="<?php echo base_url()."nanpa/main";?>">トップに戻る</a>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="/js/place-serch.js"></script>
</body>
</html>