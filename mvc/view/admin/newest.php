<?php if (isset( $_SESSION['success_newest'])){   ?>
    <div class="alert alert-success alert-dismissible">
        <h5><i class="icon fa fa-check"></i> توجه!</h5>
        اطلاعات با موفقیت ثبت شد !!!
    </div>
    <?php
    if (isset($_SESSION['success_newest'])){
        unset($_SESSION['success_newest']);
    }


} ?>
<?php if (isset( $_SESSION['unsuccess_newest'])){   ?>
    <div class="alert alert-danger alert-dismissible">
        <h5><i class="icon fa fa-ban"></i> توجه!</h5>
        اطلاعات با موفقیت حذف شد !!!
    </div>
    <?php
    if (isset($_SESSION['unsuccess_newest'])){
        unset($_SESSION['unsuccess_newest']);
    }

} ?>
<div class="card card-danger">
    <div class="card-header">
        <h3 class="card-title">فرم های محصولات</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form class="form-horizontal" method="post" action="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>admin/newest">
        <div class="card-body">
            <div class="form-group">
                <label>انتخاب شارژ</label>
                <select name="operator" class="form-control">
                    <option value="irancell">شارژ ایرانسل</option>
                    <option value="mci">شارژ همراه اول</option>
                    <option value="rightel">شارژ رایتل</option>
                    <option value="taliya">شارژ تالیا</option>
                    <option value="samantel">شارژ سامانتل</option>
                    <option value="shatelmobile"> شارژ شاتل موبایل </option>
                </select>
            </div>

            <div class="form-group">
                <label for="inputEmail3"  class="col-sm-2 control-label">قیمت :</label>
                <div class="col-sm-10">
                    <input type="text" minlength="3" name="price" class="form-control"  placeholder="مبلغ پرداختی کاربر وارد کنید" required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3"  class="col-sm-2 control-label">نام به صورت کامل :</label>
                مثال :  شارژ 4,000 تومانی

                <div class="col-sm-10">
                    <input type="text" minlength="8" name="name_change" class="form-control"  placeholder="نام شارژ را وارد کنید" required>
                </div>
            </div>
            <div class="form-group">
                <label>اتصال به مخزن</label>
                <select name="ching" class="form-control">
                    <option value="1000">هزار تومانی - 1,000</option>
                    <option value="2000"> دو هزار تومانی - 2,000</option>
                    <option value="5000">پنج هزار تومانی - 5,000</option>
                    <option value="10000">ده هزار تومانی - 10,000</option>
                    <option value="20000"> بیست هزار تومانی - 20,000</option>
                    <option value="50000"> پنجاه هزار تومانی - 50,000</option>
                    <option value="100000"> صد هزار تومانی - 100,000</option>
                </select>
            </div>

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-info">ایجاد محصول</button>
            <button type="reset" class="btn btn-default float-left">لغو</button>
        </div>
        <!-- /.card-footer -->
    </form>
            <br>
            <hr>
    <br>
    <form class="form-horizontal" method="post" action="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>admin/newest">
            <div class="card-body">
                <div class="form-group">
                    <label> اینترنت اپراتور</label>
                    <select name="operator" class="form-control">
                        <option value="irancellnet">اینترنت ایرانسل</option>
                        <option value="mcinet">اینترنت همراه اول</option>
                        <option value="rightelnet">اینترنت رایتل</option>
                        <option value="taliyanet">اینترنت تالیا</option>
                        <option value="samantelnet"> اینترنت سامانتل</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="inputEmail3"  class="col-sm-2 control-label">نام به صورت کامل :</label>
                    مثال :  بسته ۱ ماه ۶ گیگابایت

                    <div class="col-sm-10">
                        <input type="text" minlength="12" name="name_change" class="form-control"  placeholder="نام شارژ را وارد کنید" required>
                    </div>
                </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label"> مقدار حجم به گیگابایت </label>
                مثال : 2   /  0.500
                <div class="col-sm-10">
                    <input type="text" minlength="1" name="amount" class="form-control"  placeholder="مقدار حجم" required>
                </div>
            </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">مدت زمان استفاده</label>

                    <div class="col-sm-10">
                        مثال :  2 ماهه   /    15 روزه
                        <input type="text" minlength="4" name="expiration" class="form-control"  placeholder="مدت زمان" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label"> پول پرداختی کاربر </label>

                    <div class="col-sm-10">
                        <input type="text" minlength="3" name="price" class="form-control"  placeholder="مقدار پول را وارد کنید" required>
                    </div>
                </div>


        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-info">ایجاد محصول</button>
            <button type="reset" class="btn btn-default float-left">لغو</button>
        </div>
        <!-- /.card-footer -->
    </form>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">نتایج</h3>

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
                        <th>نام</th>
                        <th>اپراتور</th>
                        <th>حجم</th>
                        <th>قیمت</th>
                        <th>عملیات</th>
                    </tr>
                    <?php
                    foreach ($data as $dat ){
                        ?>

                        <tr>
                            <td><?= $dat['id']  ?></td>
                            <td><?= $dat['name_change']  ?></td>
                            <td><?= $dat['name']  ?></td>
                            <td><?php if (!empty($dat['amount'])){echo $dat['amount']."گیگابایت";} else{	echo "شارژ";}   ?> </td>
                            <td><?= number_format($dat['price'] ) ?> تومان</td>
                            <td><a class="btn btn-block btn-danger btn-sm" href="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>admin/newest/delete/<?= $dat['id']  ?>">حذف</a></td>
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
                    <li class="page-item"><a class="page-link" href="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>admin/newest/index/<?= $l ?>">«</a></li>
                    <li class="page-item"><a class="page-link disabled" href="#"><?= $URI_['4'] ?></a></li>
                    <?php
                    if (!empty($data)){
                        if (count($data) >= 10){


                            ?>
                            <li class="page-item"><a class="page-link" href="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>admin/newest/index/<?= $r ?>">»</a></li>

                        <?php }} ?>
                </ul>
            </div>

        </div>
        <!-- /.card -->
    </div>
</div>