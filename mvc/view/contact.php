<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>تماس با ما</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>theme/dist/css/adminlte.min.css">
    <!-- iCheck -->
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- bootstrap rtl -->
    <link rel="stylesheet" href="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>theme/dist/css/bootstrap-rtl.min.css">
    <!-- template rtl version -->
    <link rel="stylesheet" href="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>theme/dist/css/custom-style.css">
    <style>
        .classt {
            background: #34373a;
            border: 1px dashed;
            width: 235px;
            color: #a3acbe;
            border: 0;
            margin-left: 15px;
            margin-right: 15px;
            padding: 10px 5px 10px 55px;
            border-bottom: 1px solid #3c3c46;
        }
       .input-group-append >.fa{
           background: #2b2b36;
            border: 1px dashed;
        }
        #ali{
            margin:auto;
            width: 45%;
        }
        @media (max-width: 900px) {
            #ali{
                margin:auto;
                width: 60%;
            }
        }
        @media (max-width: 700px) {
            #ali{
                margin:auto;
                width: 75%;
                font-size: small!important;
            }
            .form-control{
                font-size: 10px!important;
            }
        }
        @media (max-width: 500px) {
            #ali{
                margin:auto;
                width: 90%;
            }
        }
    </style>
</head>
<body class="hold-transition register-page"
      style="font: 18px yekan;background: rgba(161, 164, 166, 1) url(<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>theme/img/login-bg.jpg) no-repeat fixed center;background-size: cover;overflow-x: hidden;">
<div id="ali">
    <div class="register-logo" style="font-weight: 800;color: white;">
        <b>تماس با ما</b>
    </div>

    <div class="card" style="background: #2b2b36;border-radius: 10px;overflow: hidden;top: 50%;opacity: 0.8;">
        <div class="card-body register-card-body">
            <p class="login-box-msg">فرم تماس</p>
            <?php
            if (!empty($_SESSION['scses'])) {

                ?>
                <div class="alert alert-success alert-dismissible">
                    <h5><i class="icon fa fa-check"></i> توجه!</h5>
                    پیام شما با موفقیت ارسال شد
                </div>

                <?php
                session_unset($_SESSION['scses']);
            }
            ?>

            <form action="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>contact/send" method="post">
                <div class="input-group mb-3">
                    <input type="text" minlength="8" name="fullname" class="form-control classt"
                           placeholder="نام و نام خانوادگی" required>
                    <div class="input-group-append">
                        <span class="fa fa-user input-group-text"></span>

                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="tel" minlength="11" maxlength="12" name="number1" class="form-control classt"
                           placeholder="شماره موبایل" required>
                    <div class="input-group-append">
                        <i class="fas fa-mobile-alt"></i>
                        <span class="fa fa-mobile input-group-text"></span>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="email" name="email" minlength="7" class="form-control classt" placeholder="ایمیل" required>
                    <div class="input-group-append">
                        <span class="fa fa-envelope input-group-text"></span>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <textarea minlength="10" title="" name="text" class="form-control classt"
                              style="margin-top: 0px; margin-bottom: 0px; height: 234px;" required> </textarea>
                    <div class="input-group-append">
                        <span class="fa fa-pencil input-group-text"></span>
                    </div>
                </div>
                <div class="row">
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">ارسال</button>
                    </div>
                    <div class="col-8">
                        <a href="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>" class="btn btn-info btn-block btn-flat">
                            صفحه اصلی
                        </a>

                    </div>
                    <!-- /.col -->
                </div>
            </form>


            <!-- /.register-box -->

            <!-- jQuery -->
            <script src="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>theme/jquery/jquery.min.js"></script>
            <!-- Bootstrap 4 -->
            <script src="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>theme/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>

</body>
</html>
