<!DOCTYPE html>
<html lang="ja">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!--google font-->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@300&display=swap" rel="stylesheet">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url()."assets/css/style.css";?>">
    
    <title>Top, page!</title>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="#">Compass</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
        
    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="#">Top</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#intro">Intro</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
        </li>
        </ul>
    </div>
    <ul>
        <li>
            <a href="<?php echo base_url()."compass/login";?>" class="btn btn-c">LOGIN</a>
            <a href="<?php echo base_url()."compass/register";?>" class="btn btn-b">SIGN UP</a>
        </li>
    </ul>
</nav>

<div class="container">
    <div class="pagetop">
        <p><a href="#top">▲TOPページへ</a></p>
    </div>
    <div class="main">
    <div id="viewer">
            <ul>
                <li><img src="<?php echo base_url()."images/cafe.jpg";?>" width="100%" height="auto"></li>
                <li><img src="<?php echo base_url()."images/orange.jpg";?>" width="100%" alt="img"></li>
                <li><img src="<?php echo base_url()."images/air.jpg";?>" width="100%" alt="img"</li>
                <li><img src="<?php echo base_url()."images/ashi.jpg";?>" width="100%" alt="img"></li>
                <li><img src="<?php echo base_url()."images/main.jpg";?>" width="100%" alt="img"></li>
            </ul>
            </div>
    <h2 class="title" id="about">About</h2>
        <div class="row">
            <div class="col-md-4  img-hidden img-rounded">
                <img src="<?php echo base_url()."images/woman.jpg";?>" alt="img" class="img-thumbnail">
            </div>
            <div class="col-md-8">
                <h3>Sample Text</h>
                <p class="min">Sample TextSample TextSample TextSample TextSample TextSample TextSample TextSample TextSample TextSample TextSample TextSample TextSample TextSample TextSample TextSample TextSample TextSample TextSample TextSample TextSample TextSample TextSample TextSample TextSample TextSample TextSample Text</p>
            </div>
        </div>
    </div>
    <hr>
    <div class="main">
    <h2 class="title" id="intro">Intro</h2>
        <div class="row">
            <div class="col-md-6">
                <i class="far fa-id-badge fa-3x" style="color:#ff6666"></i>
                <h3>簡単登録</h3>
                <p class="min">簡単３ステップで会員登録！ニックネーム、メールアドレス、性別で登録完了！</p>
            </div>
            <div class="col-md-6">
                <i class="fab fa-weixin fa-3x" style="color:#ff6666"></i>
                <h3>リアルタイムでの出会いに最適</h3>
                <p class="min">リアルタイムツイート機能により、素早く簡単に出会いやすい！運命的な出会いの予感。</p>
            </div>
        </div>
    </div>
    <div class="main">
        <div class="row">
            <div class="col-md-6">
                <i class="fas fa-user-secret fa-3x" style="color:#ff6666"></i>
                <h3>プライバシー保護の徹底管理</h3>
                <p class="min">プロック機能や徹底した運営の管理により、悪質な登録者を排除。安心して使えるからお客様満足度につながる。</p>
            </div>
            <div class="col-md-6">
                <i class="fas fa-search fa-3x" style="color:#ff6666"></i>
                <h3>好きなタイプを探し出せる！</h3>
                <p class="min">条件絞り込み機能や、画像での検索機能により、自分にマッチした相手を探せる！</p>
            </div>
        </div>
    </div>
    <hr>
    <div class="main">
    <h2 class="title" id="contact">Contact</h2>
    <div class="row">
        <div class="col-sm-12">
            <form action="#" class="form-horizontal">
                <div class="form-group row">
                <label for="input-name" class="col-sm-3 control-form-label">お名前</label> 
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="input-name" placeholder="お名前" required="required">
                </div>
                </div>
                <div class="form-group row">
                <label for="input-mail" class="col-sm-3 control-form-label">メールアドレス</label>
                <div class="col-sm-8">
                    <input type="email" class="form-control" id="input-mail" placeholder="メールアドレス" required="required">
                </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 control-form-label">ご用件</label>
                <div class="col-sm-8">
                    <select class="form-control">
                    <option value="">選択してください</option>
                    <option value="ご質問・お問い合わせ">ご質問・お問い合わせ</option>
                    <option value="ご意見・ご感想">ご意見・ご感想</option>
                    </select>
                </div>
                </div>
                <div class="form-group row">
                <label class="col-sm-3 control-form-label">お問い合わせ内容</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" rows="5" required="required"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-offset-2 col-sm-12 text-center">
                        <button type="submit" class="btn btn-default">送信</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<footer id="footer01" class="footer outer-block">
    <div class="logo">
        <a href="https://b-risk.jp/">
            <img src="imges/" alt="">
        </a>
    </div>
    <ul class="nav">
        <li><a href="#">Top</a></li>
        <li><a href="<?php echo base_url()."compass/terms";?>">利用規約</a></li>
        <li><a href="<?php echo base_url()."compass/privacy";?>">プライバシーポリシー</a></li>
    </ul>
    <p class="copyright">
        COPYRIGHT © BRISK Inc. All rights Reserved.
    </p>
</footer>
    <!--bootstrap jquery--->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    <!--jquery top button-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
    $(function(){
        var amount = 200; //スクロール量（px）
        $('.pagetop').hide();
        $(window).scroll(function(){
            var scrollPoint = $(this).scrollTop();
            (scrollPoint > amount)?$('.pagetop').fadeIn():(scrollPoint < amount)?$('.pagetop').fadeOut():$('.pagetop').show();
        });
    });
    $(function(){
    var $setElm = $('#viewer'),
    fadeSpeed = 1500,
    switchDelay = 5000;

    $setElm.each(function(){
        var targetObj = $(this);
        var findUl = targetObj.find('ul');
        var findLi = targetObj.find('li');
        var findLiFirst = targetObj.find('li:first');

        findLi.css({display:'block',opacity:'0',zIndex:'99'});
        findLiFirst.css({zIndex:'100'}).stop().animate({opacity:'1'},fadeSpeed);

        setInterval(function(){
            findUl.find('li:first-child').animate({opacity:'0'},fadeSpeed).next('li').css({zIndex:'100'}).animate({opacity:'1'},fadeSpeed).end().appendTo(findUl).css({zIndex:'99'});
        },switchDelay);
    });
});
</script>

</body>
</html>