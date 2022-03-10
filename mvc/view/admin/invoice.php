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
            <p class="lead">روش های پرداخت :</p>
            <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                پرداخت از طریق کلیه کارت های بانکی عضو شتاب امکان پذیر می باشد.
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
                        <td><?php if ($data[0]['bio']=="1"){echo "<span class=\"badge  badge-success \"> پرداخت شده</span>";}elseif ($data[0]['bio']=="0"){ echo "<span class=\"badge badge-danger\"> پرداخت نشده</span>";}elseif($data[0]['bio']=="2"){echo "<span class=\"badge badge-warning\"> درحال برسی</span>";}else{echo "<span class=\"badge badge-info\">انجام شده </span>";} ?></td>
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
            <?php
            if ($data[0]['bio']=="0"){
                ?>
                <a href="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>admin/orders/sacss/<?= $data[0]['id']?>?pid=1" class="btn btn-success float-left" style="color: #fff;">
                    <i class="fa fa-credit-card"></i>
                    تغیر به پرداخت شده
                </a>

                <?php
            }elseif($data[0]['bio']=="2"){
                ?>
                <a href="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>admin/orders/sacss/<?= $data[0]['id']?>?pid=3"  class="btn btn-success float-left" style="color: #fff;">
                    <i class="fa fa-credit-card"></i>
                    تغیر به انجام شده
                </a>

                <?php
            }
            ?>



            <a href="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>admin/orders/delete/<?= $data[0]['id']?>" type="button" class="btn btn-primary float-left ml-2" style="margin-right: 5px;">
                <i class="fa fa-download"></i> حذف
            </a>
        </div>
    </div>
</div>