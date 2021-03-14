<h1>アルバム作成：画像アップロード</h1>
<form action="sample.php" method="POST" enctype="multipart/form-data">
<input type="file" name="userfile">
<input type="submit" value="読み込み">
</form>
<?php

if (isset($_POST)) {
    $file1 = $_FILES["userfile"]["tmp_name"]; // 元画像ファイル
    $file2 = "./upload/example.jpg"; // 画像保存先のパス
    $in = ImageCreateFromJPEG($file1); // 元画像ファイル読み込み
    $width = ImageSx($in); // 画像の幅を取得
    $height = ImageSy($in); // 画像の高さを取得
    $min_width = 100; // 幅の最低サイズ
    $min_height = 100; // 高さの最低サイズ
    $image_type = exif_imagetype($file1); // 画像タイプ判定用

    if ($image_type == IMAGETYPE_JPEG){ // JPGかどうか判定
        if($width >= $min_width|$height >= $min_height){
            if($width == $height) {
                $new_width = $min_width;
                $new_height = $min_height;
            } else if($width > $height) {//横長の場合
                $new_width = $min_width;
                $new_height = $height*($min_width/$width);
            } else if($width < $height) {//縦長の場合
                $new_width = $width*($min_height/$height);
                $new_height = $min_height;
            }
            //画像生成
            $out = ImageCreateTrueColor($new_width , $new_height);
            ImageCopyResampled($out, $in,0,0,0,0, $new_width, $new_height, $width, $height);
            ImageJPEG($out, $file2);
        } else {
            echo "読み込みエラー";
        }
    } else {
        echo "JPG画像をご用意ください";
    }
}
?>
<a href="sample.php">戻る</a><br>