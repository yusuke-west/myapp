<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>企業・ビジネスサイト向け 無料ホームページテンプレート tp_biz52</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="ここにサイト説明を入れます">
<meta name="keywords" content="キーワード１,キーワード２,キーワード３,キーワード４,キーワード５">
<?= $this->Html->css('/plugins/template/tp_biz52_black/css/style.css') ?>
<?= $this->Html->script('/plugins/template/tp_biz52_black/js/openclose.js') ?>

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<style>
.menu1 a {background-position: -10px -10px;}
.menu2 a {background-position: -10px -130px;}
.menu3 a {background-position: -10px -250px;}
.menu4 a {background-position: -10px -370px;}
.menu5 a {background-position: -10px -490px;}
</style>
<![endif]-->
<!--[if lt IE 10]>
<style>
.slide0,.slide1,.slide2,.slide3 {background: url(images/1.jpg) no-repeat center center;}
</style>
<![endif]-->
</head>
<body class="<?= h($this->fetch('block')) ?>">
    <?= $this->fetch('content') ?>
</body>
</html>
