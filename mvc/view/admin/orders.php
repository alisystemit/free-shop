<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-12">
                <?php if (isset( $_SESSION['success_orders_sacss'])){   ?>
                    <div class="alert alert-success alert-dismissible">
                        <h5><i class="icon fa fa-check"></i> توجه!</h5>
                        اطلاعات با موفقیت تغیر یافت شد !!!
                    </div>
                    <?php
                    if (isset($_SESSION['success_orders_sacss'])){
                        unset($_SESSION['success_orders_sacss']);
                    }


                } ?>
                <?php if (isset( $_SESSION['success_orders_delete'])){   ?>
                    <div class="alert alert-danger alert-dismissible">
                        <h5><i class="icon fa fa-ban"></i> توجه!</h5>
                        اطلاعات با موفقیت حذف شد !!!
                    </div>
                    <?php
                    if (isset($_SESSION['success_orders_delete'])){
                        unset($_SESSION['success_orders_delete']);
                    }

                } ?>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">جدول سفارشات</h3>

                        <div class="card-tools">
                        </div>
                    </div>
                    <?php
                    $timy = date ('Y-m-d H:i:s');
                    ?>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover" style="font-size: 13px;">
                            <tbody><tr>
                                <th>نام کاربر</th>
                                <th>نوع</th>
                                <th>اپراتور</th>
                                <th>مقدار</th>
                                <th>وضعیت</th>
                                <th>تاریخ</th>
                                <th>فاکتور</th>
                                <th>عملیات</th>
                            </tr>
                            <?php
                            foreach ($data as $dat){


                                ?>
                                <tr>
                                    <td> <?= $dat['fullname'] ?></td>
                                    <td> <?= $dat['name_change'] ?></td>
                                    <td> <?= $dat['category'] ?></td>
                                    <td> <?= $dat['price'] ?>تومان</td>
                                    <td><?php if ($dat['bio']=="1"){echo "<span class=\"badge  badge-success \"> پرداخت شده</span>";}elseif ($dat['bio']=="0"){ echo "<span class=\"badge badge-danger\"> پرداخت نشده</span>";}elseif($dat['bio']=="2"){echo "<span class=\"badge badge-warning\"> درحال برسی</span>";}else{echo "<span class=\"badge badge-info\">انجام شده </span>";} ?></td>  <td> <?=  timeq($dat['time'],$timy) ?></td>
                                    <td><a href="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>admin/orders/invoice/<?= $dat['id'] ?>"  class="btn btn-block btn-default btn-sm">مشاهده</a> </td>
                                    <td>
                                        <?php
                                        if($dat['bio']=="2"){
                                            echo "<a class=\"btn btn-block btn-info btn-sm \" href=\"". '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash."/admin/orders/sacss/".$dat['id']."?pid=3\">تغیر به انجام شده    </a>";
                                        }else{
                                            echo 'به پایان رسیده';
                                        } ?>

                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                            </tbody></table>
                    </div>
                    <?php

                    global $URI_;
                    if (!isset($URI_['4'])){
                        $URI_['4']='1';
                    }
                    if (empty($URI_['4'])) {
                        $URI_['4'] = '1';
                    }

                    $r=$URI_['4']+1;
                    if ( $URI_['4'] != 0 and $URI_['4'] != 1 ){
                        $l=$URI_['4']-1;
                    }else{
                        $l='';
                    }

                    ?>
                    <div class="card-footer clearfix">
                        <ul class="pagination pagination-sm m-0 float-right">
                            <li class="page-item"><a class="page-link" href="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>admin/orders/index/<?= $l ?>">«</a></li>
                            <li class="page-item"><a class="page-link disabled" href="#"><?= $URI_['4'] ?></a></li>
                            <?php
                            if (!empty($data)){
                                if (count($data) >= 10){
                                    ?>
                                    <li class="page-item"><a class="page-link" href="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>admin/orders/index/<?= $r ?>">»</a></li>

                                <?php }} ?>
                        </ul>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>