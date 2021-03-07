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
                <form id="form" action="<?php echo base_url() . "compass/serch_submit"; ?>" method="post">
                    <p>場所</p>
                    <select id="prefectures" name="prefectures">
                    </select>
                    <!-- <p>市町村</p>
                    <select id="city" name="city" onFocus="change()">
                    </select> -->
                    <!-- <p>日時</p>
                    <input type="date" name="calendar" max="9999-12-31"> -->
                    <p>年代</p>
                    <select name="age">
                        <option value="">選択してください</option>
                        <option value="1">20歳未満</option>
                        <option value="2">20-29歳</option>
                        <option value="3">30-39歳</option>
                        <option value="4">40-49歳</option>
                        <option value="5">50-59歳</option>
                        <option value="6">60-69歳</option>
                        <option value="7">70-79歳</option>
                        <option value="8">80歳-89歳</option>
                    </select>
                    <p>性別</p>
                    <input type="radio" name="gender" value="1">男性
                    <input type="radio" name="gender" value="2">女性
                    <!-- <p>好きなタイプ</p><input type="file" name="image"> -->
                    <br>
                    <input type="submit" name="serch" value="検索する">
            </div>
            </form>
            <a class="botton" href="<?php echo base_url()."compass/top";?>">TOPに戻る</a>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="/js/place.js"></script>
    </body>

    </html>