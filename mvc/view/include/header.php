<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?=$data[0]['namesite'] ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--link rel="stylesheet/less" href="/theme/less/bootstrap.less" type="text/css" /-->
    <!--link rel="stylesheet/less" href="/themeless/responsive.less" type="text/css" /-->
    <!--script src="js/less-1.3.3.min.js"></script-->
    <!--append ‘#!watch’ to the browser URL, then refresh the page. -->
    <link href="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>theme/css/asli.css" rel="stylesheet">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>themejs/html5shiv.js"></script>
    <![endif]-->
    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>theme/img/favicon.png">
    <script type="text/javascript" src="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>theme/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>theme/js/scripts.js"></script>
</head>

<body style="">

<header class="row">
    <div class="container">
        <a class="header-brand" href="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>">
            <img src="<?=$data[0]['logo'] ?>" alt="arzunnet charge">
        </a>
        <div class="float-left user-links">
            <a href="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>checkout">سبد خرید</a>
            <a href="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>tracking">پیگیری</a>
            <a href="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>user/login">ورود</a>
            <a href="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>user/register">عضویت</a>
            <a href="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>contact">تماس با‌ما</a>
        </div>
    </div>
</header>

<br><br><br><br>