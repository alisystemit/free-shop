
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <title> ورود کاربر </title>
    <link href="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>theme/css/login.css" rel="stylesheet" type="text/css" />

    <script type="text/javascript" src="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>theme/js/login.js"></script>
    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
        }

        article, aside, details, figcaption, figure, footer, header, hgroup, main, nav, section, summary {
            display: block;
        }
        body {
            font: 18px yekan;
            background:rgba(161, 164, 166, 1) url("<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>theme/img/login-bg.jpg") no-repeat fixed center ;
            background-size: cover;
            overflow-x: hidden;

        }
        .clr{clear:both}
        .wrapper {
            width: 1000px;
            margin: 0 auto;
        }


        #login-div {
            width: 330px;
            height: 360px;
            background: #2b2b36;
            border-radius: 10px;
            overflow: hidden;
            position: absolute;
            top: 50%;
            margin-top: -180px;
            left: 50%;
            margin-left: -165px;
            opacity:0.8
        }


        .login-div-name {
            height: 50px;
            background: #23232e;
        }

        .login-div-txt {
            float: right;
            margin: 15px;
            color:#fff;
            font: 16px yekan;
        }

        .login-div-123:nth-child(1) {
            float: left;
            margin: 15px 0px 0px 5px;
            width :15px;
            height:15px;
            background:#f1c85f;
            border-radius:100%;

        }
        .login-div-123:nth-child(2) {
            float: left;
            margin: 15px 0px 0px 5px;
            width :15px;
            height:15px;
            background:#ea569a;
            border-radius:100%
        }
        .login-div-123:nth-child(3) {
            float: left;
            margin: 15px 0px 0px 5px;
            width :15px;
            height:15px;
            background:#6756ea;
            border-radius:100%
        }

        .login-avatar {
            width: 80px;
            height: 80px;
            position: relative;
            border-radius: 50%;
            border: 3px solid #fff;
            margin: 20px;
            left: 50%;
            margin-left: -40px;
        }

        #login-div input[name=username] {
            width: 235px;
            color: #a3acbe;
            background: url(<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>theme/img/login.png) no-repeat 15px 7px;
            border: 0;
            margin-left: 15px;
            margin-right: 15px;
            padding: 10px 5px 10px 55px;
            border-bottom: 1px solid #3c3c46;
        }

        #login-div input[name=password] {
            width: 235px;
            color: #a3acbe;
            background: url(<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>theme/img/pass.png) no-repeat 15px 15px;
            border: 0;
            margin-left: 15px;
            margin-right: 15px;
            padding: 10px 5px 10px 55px;
            border-bottom: 1px solid #3c3c46;
        }


        #login-div input[name=submit] {
            width: 100%;
            height: 45px;
            font-size: 18px;
            margin-top: 35px;
            background: #40ac53;
            border: none;
            color: #fff;
            cursor: pointer;
            text-shadow: 1px 1px 0 rgba(0,0,0,0.3);

        }
        #login-div input:hover[name=submit] {

            background: #26A65B;

        }
        .copyright{color:#fff;overflow: hidden;
            position:fixed;
            margin-left:70px;
            font:14px yekan;
            margin-top:3px

        }
        .copyright a{color:#fff;text-decoration:none

        }
        .error{font :14px yekan;direction:rtl;padding-left:50px;position:absolute;}
    </style>
</head>
<body>
<script language="javascript" type="text/javascript">
    <!--
    var dle_act_lang   = [];
    var cal_language   = {en:{months:[],dayOfWeek:[]}};
    //-->
</script>

<div class="wrapper">
    <div id="login-div">
        <div class="login-div-name">
            <div class="login-div-123"></div>
            <div class="login-div-123"></div>
            <div class="login-div-123"></div>
            <div class="login-div-txt"> ورود کاربر به سایت </div>
        </div>
        <form name="login" action="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>user/checkloginuser" method="post">
            <img src="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>theme/img/ava.png" alt="" class="login-avatar" />
            <input type="hidden" name="crf" value="<?php echo $x=md5(rand(1000000000,100000000000000000)); $_SESSION['cfr']=$x; ?>">
            <input type="email" name="username" placeholder="نام کاربری را وارد کنید" required/>
            <input type="password" name="password" placeholder="" required/>
            <?php
            if (isset($_SESSION['1error'])){
                ?>
                <div class="error" style="color:#dbdcd7;">**لطفا رمز و پسورد را با دقت وارد کنید</div>

                <?php
            }
            unset($_SESSION['1error']);
            ?>
            <input value="وارد شوید" name="submit" type="submit" />

            <div class="copyright">طراحی و پشتیبانی توسط : <a href="#" target="_blank"> علی سیستم</a></div>
        </form>
    </div>
</div>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>

</body>
</html>

