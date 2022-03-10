
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>پیگیری خرید</title>
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
<div style="width: 450px;margin-top: 3%;margin-right: auto;margin-bottom: auto;margin-left: auto;">
    <div class="register-logo">
        <b>پیگیری خرید</b>
    </div>
    <?php
    $timy = date ('Y-m-d H:i:s');
    function timeq($time1, $time2)
    {
        $diff = strtotime($time2) - strtotime($time1);
        if ($diff < 60) {
            echo $diff . ' ثانیه قبل';
        } elseif ($diff < 3600) {
            echo round($diff / 60, 0, 1) . ' دقیقه قبل';
        } elseif ($diff >= 3660 && $diff < 86400) {
            echo round($diff / 3600, 0, 1) . ' ساعت قبل';
        } elseif ($diff > 86400) {
            echo round($diff / 86400, 0, 1) . ' روز قبل';
        }
    }
    ?>
    <div class="card">
        <div class="card-body register-card-body">
            <p class="login-box-msg">فرم پیگیری خرید</p>
            <div style="width: 70%;margin-right: 40px;">
                <div class="input-group mb-3">
                    <span> نام ونام خانوادگی: </span> <span style="margin: auto"> <?= $data[0]['fullname']  ?></span>
                </div>
                <div class="input-group mb-3">
                    <span> ایمیل: </span> <span style="margin: auto"> <?= $data[0]['email']  ?></span>
                </div>
                <div class="input-group mb-3">
                    <span> شماره: </span> <span style="margin: auto"> <?= $data[0]['number1']  ?> </span>
                </div>
                <div class="input-group mb-3">
                    <span> نوع سرویس: </span> <span style="margin: auto"><?= $data[0]['name_change']  ?> </span>
                </div>
                <div class="input-group mb-3">
                    <span> کدپیگیری: </span> <span style="margin: auto"><?= $data[0]['key_tracking']  ?> </span>
                </div>
                <?php if (!empty($data[0]['cod_charge'])){
                    ?>
                    <div class="input-group mb-3">
                        <span> کد فعال سازی : </span> <span style="margin: auto"><?= $data[0]['cod_charge']  ?> </span>
                    </div>
                    <?php
                }
                ?>

                <div class="input-group mb-3">
                    <span> زمان : </span> <span style="margin: auto"><?php timeq($data[0]['time'],$timy )  ?> </span>
                </div>
                <div class="input-group mb-3">
                    <span> وضعیت: </span> <span style="margin: auto">                           <?php if ($data[0]['bio']=="1"){echo "<span class=\"badge  badge-success \"> پرداخت شده</span>";}elseif ($data[0]['bio']=="0"){ echo "<span class=\"badge badge-danger\"> پرداخت نشده</span>";}elseif($data[0]['bio']=="2"){echo "<span class=\"badge badge-warning\"> درحال برسی</span>";}else{echo "<span class=\"badge badge-info\">انجام شده </span>";} ?>
  </span>
                </div>
            </div>

            <div class="row">
                <!-- /.col -->
                <div class="col-4">
                    <a href="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>" class="btn btn-primary btn-block btn-flat">
                        صفحه اصلی
                    </a>
                </div>
                <div class="col-8">
                    <a href="javascript:window.print()" class="btn btn-info btn-block btn-flat">
                        چاپ و پرینت
                    </a>

                </div>
                <!-- /.col -->
            </div>



            <!-- /.register-box -->

            <!-- jQuery -->
            <script src="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>theme/jquery/jquery.min.js"></script>
            <!-- Bootstrap 4 -->
            <script src="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>theme/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>

</body>
</html>
