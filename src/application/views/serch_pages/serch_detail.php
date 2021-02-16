<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>検索結果</title>
</head>
<body>
<h2>検索結果</h2>
<body>
    <table id="foo-table" class="table table-bordered">
        <thead>
            <tr>
                <th>ニックネーム</th>
                <th>場所</th>
                <th>年齢</th>
                <th>性別</th>
                <th>一言メッセージ</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <!-- @foreach($travels as $travel) -->
            <tr>
                <td><a href=""></a></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><button type="button" class="btn btn-primary" onclick="location.href='/travel/edit/{{ $travel->id }}'">詳細</button></td>
            </tr>
    </table>
</body>
</html>