<html style="height: auto;"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> داشبورد کاربر </title>
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

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
            </li>


        </ul>

        <!-- SEARCH FORM -->


        <!-- Right navbar links -->
        <ul class="navbar-nav mr-auto">
            <!-- Messages Dropdown Menu -->

            <!-- Notifications Dropdown Menu -->

            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i class="fa fa-th-large"></i></a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4" style="min-height: 521px;">
        <!-- Brand Logo -->
        <a href="#" class="brand-link">
            <span class="brand-text font-weight-light">پنل کاربری </span>
        </a>
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
        $email =  $_SESSION['email'] ;
        $default =null;
        $size = 80;
        $grav_url = "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?d=" . urlencode( $default ) . "&s=" . $size;
        ?>
        <!-- Sidebar -->
        <div class="sidebar" style="direction: ltr">
            <div style="direction: rtl">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?php echo $grav_url; ?>" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"><?=  $_SESSION['user']  ?></a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false" style="display: inline;">
                        <!-- Add icons to the links using the .nav-icon class
                             with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fa fa-dashboard"></i>
                                <p>
                                    سفارشات
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/user/password" class="nav-link">
                                <i class="nav-icon fa fa-dashboard"></i>
                                <p>
                                          تغیر پسورد
                                </p>
                            </a>
                        </li>


                        <li class="nav-header">مهم ها</li>
                        <li class="nav-item">
                            <a href="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>user/logout" class="nav-link">
                                <i class="nav-icon fa fa-circle-o text-danger"></i>
                                <p class="text">خروج</p>
                            </a>
                        </li>


                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="min-height: 521px;">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">داشبورد</h1>
                    </div><!-- /.col -->
                    <!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title"> جدول سفارشات</h3>

                                <div class="card-tools">
                                </div>
                            </div>

                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover">
                                    <tbody><tr>
                                        <th>نام کاربر</th>
                                        <th>نوع</th>
                                        <th>اپراتور</th>
                                        <th>مقدار</th>
                                        <th>وضعیت</th>
                                        <th>تاریخ</th>
                                        <th>کد شارژ</th>
                                    </tr>
                                    <?php
                                    foreach ($data as $data){


                                    ?>
                                    <tr>
                                        <td> <?= $data['fullname'] ?></td>
                                        <td> <?= $data['name_change'] ?></td>
                                        <td> <?= $data['category'] ?></td>
                                        <td> <?= $data['price'] ?>تومان</td>
                                        <td><?php if ($data['bio']=="1"){echo "<span class=\"badge  badge-success \"> پرداخت شده</span>";}elseif ($data['bio']=="1"){ echo "<span class=\"badge badge-danger\"> پرداخت نشده</span>";}elseif($data['bio']=="2"){echo "<span class=\"badge badge-warning\"> درحال برسی</span>";}else{echo "<span class=\"badge badge-info\">انجام شده </span>";} ?></td>
                                        <td> <?=  timeq($data['time'],$timy) ?></td>
                                        <td> <?= $data['cod_charge'] ?></td>
                                    </tr>
                                    <?php
                                    }
                                    ?>
                                    </tbody></table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>

                <div class="row">
                    <br> <br> <br> <br> <br> <br> <br>

                </div>

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>CopyLeft © ۲۰۱۸ <a href="http://ali-system.ir/">علیرضاحیدری</a>.</strong>
    </footer>

    <!-- Control Sidebar -->
    <div class="control-sidebar control-sidebar-dark">

    </div>


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
</body>
</html>