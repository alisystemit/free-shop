<html style="height: auto;"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>فاکتور خرید</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>theme/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>theme/dist/css/adminlte.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- bootstrap rtl -->
    <link rel="stylesheet" href="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>theme/dist/css/bootstrap-rtl.min.css">
    <!-- template rtl version -->
    <link rel="stylesheet" href="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>theme/dist/css/custom-style.css">
    <style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style></head>
<body class="sidebar-mini" style="height: auto;">
<div class="wrapper">

    <div style="width: 75%;margin: auto;">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-10">
                        <h1 class="m-0 text-dark">خرید با موفقیت انجام شد . فاکتور خرید مشتری</h1>
                    </div>

                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="invoice p-3 mb-3">
                    <!-- title row -->
                    <div class="row">
                        <div class="col-12">
                            <h4>
                                <i class="fa fa-globe"></i> <?=$data2['0']['namesite'] ?>
                                <small class="float-left">Date: <?=$data['0']['time'] ?></small>
                            </h4>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- info row -->
                    <div class="row invoice-info">
                        <div class="col-sm-4 invoice-col">
                            فروشنده
                            <address>
                                <strong>فروشنده رسمی شارژ</strong><br>
                                تلگرام :  <a href="<?=$data2['0']['tel'] ?>"><?=$data2['0']['namesite'] ?>  </a>           <br>
                                تلفن : <?=$data2['0']['number'] ?><br>
                                <?php

                                ?>
                                آدرس سایت : <?= $_SERVER['SERVER_NAME'] ?>
                            </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-3 invoice-col">
                            خریدار
                            <address>
                                <strong><?=$data['0']['fullname'] ?></strong><br>

                                تلفن :  <?=$data['0']['number1'] ?>  <br>

                                ایمیل : <?=$data['0']['email'] ?>
                            </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-5 invoice-col">
                            <b>سفارش : <?=$data['0']['email'] ?></b><br>
                            <br>
                            <b>کد سفارش : </b><?=md5($data['0']['id']) ?><br>
                            <b>تاریخ : </b><?=$data['0']['time'] ?><br>
                            <b>کد پیگیری :</b> <?=$data['0']['key_tracking'] ?>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <!-- Table row -->
                    <div class="row">
                        <div class="col-12 table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>تعداد</th>
                                    <th>محصول</th>
                                    <th>اپراتور</th>
                                    <th>کد شارژ</th>
                                    <th>قیمت کل</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>۱</td>
                                    <td><?=$data['0']['name_change'] ?></td>
                                    <td><?=$data['0']['category'] ?></td>
                                    <td><?=$data['0']['cod_charge'] ?></td>
                                    <td><?=number_format($data['0']['price']) ?>  تومان   </td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <div class="row">
                        <!-- accepted payments column -->
                        <div class="col-6">
                            <p class="lead">توجه برای خریداران بسته :</p>
                            <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                                توجه اگر بسته خریداری کردید بدانید فعال سازی این بسته ها ارزان قیمت کمی دارای پروسه است پس لطفا شکیبا باشید حداکثر تا 10 ساعت آینده برای شما فعال خواهد شد با تشکر .
                            </p>
                        </div>
                        <!-- /.col -->
                        <div class="col-6">
                            <p class="lead">مبلغ پرداختی بدون محاسبه مالیات </p>

                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <th style="width:50%">وضعیت :</th>
                                        <td><?php if ($data[0]['bio']=="1"){echo "<span class=\"badge  badge-success \"> پرداخت شده</span>";}elseif ($data[0]['bio']=="0"){ echo "<span class=\"badge badge-danger\"> پرداخت نشده</span>";}elseif($data[0]['bio']=="2"){echo "<span class=\"badge badge-warning\"> درحال برسی برای فعال سازی</span>";}else{echo "<span class=\"badge badge-info\">انجام شده </span>";} ?></td>
                                    </tr>
                                    <tr>
                                        <th style="width:50%">مبلغ کل :</th>
                                        <td><?=number_format($data['0']['price']) ?> تومان</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <!-- this row will not appear when printing -->
                    <div class="row no-print">
                        <div class="col-12">
                            <a href="javascript:window.print()" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> پرینت </a>
                            <a href="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>"  class="btn btn-success float-left " style="margin-right: 5px;">
                                <i class="fa fa-credit-card"></i>   صفحه اصلی
                            </a>

                        </div>
                    </div>

                </div><div class="row">
                    <br> <br> <br> <br> <br> <br> <br>

                </div>

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


    <!-- Control Sidebar -->



    <script src="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>theme/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>

    <script src="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>theme/dist/js/adminlte.js"></script>
    <script src="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>theme/dist/js/demo.js"></script>

</div></body></html>