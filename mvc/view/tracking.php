
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> پیگیری خرید</title>
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
</head>
<body class="hold-transition register-page">
<div class="register-box">
    <div class="register-logo">
        <b>پیگیری خرید</b>
    </div>

    <div class="card">
        <div class="card-body register-card-body">
            <p class="login-box-msg">فرم پیگیری خرید</p>

            <form action="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>tracking/page" method="post">
                <div class="input-group mb-3">
                    <input type="email" minlength="8" name="email" class="form-control" placeholder="ایمیل" required>
                    <div class="input-group-append">
                        <span class="fa fa-envelope input-group-text"></span>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="text" minlength="8" name="number" class="form-control" placeholder="شماره موبایل" required>
                    <div class="input-group-append">
                        <span class="fa fa-lock input-group-text"></span>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="text" minlength="8" name="tracking" class="form-control" placeholder="شماری پیگیری" required>
                    <div class="input-group-append">
                        <span class="fa fa-lock input-group-text"></span>
                    </div>
                </div>
                <div class="row">
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">جستجو </button>
                    </div>
                    <div class="col-8">
                        <a href="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>"  class="btn btn-info btn-block btn-flat">
                        صفحه اصلی
                        </a>

                    </div>
                    <!-- /.col -->
                </div>
            </form>


<!-- /.register-box -->

            <!-- jQuery -->
            <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
            <script src="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>theme/dist/jquery/jquery.min.js"></script>
            <!-- Bootstrap 4 -->
            <script src="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>theme/dist/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>
