<!DOCTYPE html>
<html lang="ja">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url()."assets/css/style.css";?>">
    <title>Top, page!</title>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="#">おナンパ</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
        
    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
        <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
        </li>
        </ul>
    </div>
    <a type="button" class="btn btn-primary text-right" href="<?php echo base_url()."nanpa/login";?>" role="button">ログイン及び新規登録</a>
</nav>

<div class="container">
    <div class="jumbotron">
        <div class="text">
            <h1>title(〇〇〇)</h1>
            <p>text（●●）</p>
            <a class="btn btn-danger" href="<?php echo base_url()."nanpa/login";?>" role="button">さっそく始める</a>
        </div>
    </div>
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>


<footer id="footer01" class="footer outer-block">
    <div class="logo">
        <a href="https://b-risk.jp/">
            <img src="img/logo.svg" alt="">
        </a>
    </div>
    <ul class="nav">
        <li><a href="https://b-risk.jp/works/">Top</a></li>
        <li><a href="https://b-risk.jp/blog/">利用規約</a></li>
        <li><a href="https://b-risk.jp/recruit/">プライバシーポリシー</a></li>
    </ul>
    <p class="copyright">
        COPYRIGHT © BRISK Inc. All rights Reserved.
    </p>
    </footer>

</body>
</html>