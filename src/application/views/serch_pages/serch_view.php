<!DOCYTPE html>
    <html lang="ja">

    <head>
        <meta charset="utf-8">
        <title>test serch</title>
    </head>

    <body>
        <div class="container">
            <h1>検索ページ</h1>
            <div class="serch-page">
                <form id="form" action="<?php echo base_url() . "nanpa/serch_submit"; ?>" method="post">
                    <p>場所</p>
                    <select id="prefectures" name="prefectures">
                    </select>
                    <p>市町村</p>
                    <select id="city" name="city" onFocus="change()">
                    </select>
                    <!-- <p>日時</p>
                    <input type="date" name="calendar" max="9999-12-31"> -->
                    <p>年代</p>
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
                    <p>性別</p>
                    <input type="radio" name="gender" value="male">男性
                    <input type="radio" name="gender" value="female">女性
                    <!-- <p>好きなタイプ</p><input type="file" name="image"> -->
                    <br>
                    <input type="submit" name="serch" value="検索する">
            </div>
            </form>
            <a href="<?php echo base_url() . "nanpa/main"; ?>">トップに戻る</a>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="/js/place.js"></script>
    </body>

    </html>