<?php if (isset($_SESSION['success_tank_send'])){   ?>
    <div class="alert alert-success alert-dismissible">
        <h5><i class="icon fa fa-check"></i> توجه!</h5>
        اطلاعات با موفقیت ثبت شد !!!
    </div>
    <?php
    if (isset($_SESSION['success_tank_send'])){
        unset($_SESSION['success_tank_send']);
    }


} ?>
<?php if (isset( $_SESSION['unsuccess2_tank'])){   ?>
    <div class="alert alert-danger alert-dismissible">
        <h5><i class="icon fa fa-ban"></i> توجه!</h5>
        لطفا اطلاعات را به صورت کامل وارد کنید!!!
    </div>
    <?php
    if (isset($_SESSION['unsuccess2_tank'])){
        unset($_SESSION['unsuccess2_tank']);
    }

} ?>

<?php if (isset( $_SESSION['unsuccess_tank_send'])){   ?>
    <div class="alert alert-danger alert-dismissible">
        <h5><i class="icon fa fa-ban"></i> توجه!</h5>
       شارز با موفقیت حذف شد
    </div>
    <?php
    if (isset($_SESSION['unsuccess_tank_send'])){
        unset($_SESSION['unsuccess_tank_send']);
    }

} ?>



<div class="card card-success">
    <div class="card-header">
        <h3 class="card-title">مخزن شارژ</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form class="form-horizontal" method="post" action="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>admin/tank/send/">
        <div class="card-body">
            <div class="form-group">
                <label>اپراتور</label>
                <select name="operator" class="form-control">
                    <option value="irancell">ایرانسل</option>
                    <option value="mci">همراه اول</option>
                    <option value="rightel">رایتل</option>
                    <option value="taliya">تالیا</option>
                    <option value="samantel"> سامانتل</option>
                    <option value="shatelmobile"> شاتل موبایل </option>
                </select>
            </div>
            <div class="form-group">
                <label>انتخاب کنید</label>
                <select name="amount" class="form-control">
                    <option value="1000">هزار تومانی - 1,000</option>
                    <option value="2000"> دو هزار تومانی - 2,000</option>
                    <option value="5000">پنج هزار تومانی - 5,000</option>
                    <option value="10000">ده هزار تومانی - 10,000</option>
                    <option value="20000"> بیست هزار تومانی - 20,000</option>
                    <option value="50000"> پنجاه هزار تومانی - 50,000</option>
                    <option value="100000"> صد هزار تومانی - 100,000</option>
                </select>
            </div>
            <div class="form-group">
                <label for="inputEmail3"  class="col-sm-2 control-label">کد شارژ</label>

                <div class="col-sm-10">
                    <input type="text" minlength="12" name="coding" class="form-control"  placeholder="کد شارژرا وارد کنید">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">سریال شارژ</label>

                <div class="col-sm-10">
                    <input type="text" minlength="8" name="serial" class="form-control"  placeholder="سریال شارژ">
                </div>
            </div>


        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-info">ارسال به مخزن</button>
            <button type="reset" class="btn btn-default float-left">لغو</button>
        </div>
        <!-- /.card-footer -->
    </form>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">جدول ریسپانسیو</h3>

                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">


                    </div>
                </div>
            </div>
            <?php

            $timy = date ('Y-m-d H:i:s');
            ?>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">

                <table class="table table-hover">
                    <tbody><tr>
                        <th>شناسه</th>
                        <th>اپراتور</th>
                        <th>مقدار</th>
                        <th>کد</th>
                        <th>سریال</th>
                        <th>وضعیت استفاده</th>
                        <th>تاریخ ثبت</th>
                        <th>عملیات</th>
                    </tr>
                    <?php
                    global $Salt;
                    foreach ($data as $dat ){
                        ?>

                        <tr>
                            <td><?= $dat['id']  ?></td>
                            <td><?= $dat['operator']  ?></td>
                            <td><?= $dat['amount']  ?> تومان</td>
                            <td><?= $dat['coding']  ?></td>
                            <td><?= $dat['serial']  ?></td>
                            <td><?php if ($dat['condition']=="0"){
                                echo " <span class=\"badge  badge-success \">استفاده نشده </span>";
                                }else{ echo " <span class=\"badge badge-danger\">فروخته شده</span>";
                                } ?>
                            </td>
                            <td><?php timeq( $dat['time'],$timy) ?></td>
                            <td><a class="btn btn-block btn-danger btn-sm" href="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>admin/tank/delete/<?= $dat['id']  ?>">حذف</a></td>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody></table>
            </div>
            <!-- /.card-body -->

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
                    <li class="page-item"><a class="page-link" href="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>admin/tank/index/<?= $l ?>">«</a></li>
                    <li class="page-item"><a class="page-link disabled" href="#"><?= $URI_['4'] ?></a></li>
                    <?php
                    if (!empty($data)){
                        if (count($data) >= 10){


                            ?>
                            <li class="page-item"><a class="page-link" href="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>admin/tank/index/<?= $r ?>">»</a></li>

                        <?php }} ?>
                </ul>
            </div>

        </div>
        <!-- /.card -->
    </div>
</div>