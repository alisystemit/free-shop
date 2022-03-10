<?php if (isset( $_SESSION['success_settings'])){   ?>
    <div class="alert alert-success alert-dismissible">
        <h5><i class="icon fa fa-check"></i> توجه!</h5>
 تنظیمات با موفقیت آپ گرید شد!!!!!!!!
    </div>
    <?php
    if (isset($_SESSION['success_settings'])){
        unset($_SESSION['success_settings']);
    }

} ?>

<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title">تنظیمات سایت</h3>
    </div>
    <!-- /.card-header -->

    <!-- form start -->
    <form class="form-horizontal" method="post" action="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>admin/settings/send">
        <div class="card-body">
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">نام سایت </label>

                <div class="col-sm-10">
                    <input type="text" minlength="6" name="fullname" class="form-control"  value="<?= $data[0]['namesite'];  ?>" required>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">آدرس لوگوی سایت</label>

                <div class="col-sm-10">
                    <input type="text" minlength="8" name="logo" class="form-control" value=" <?= $data[0]['logo'];  ?>" required>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">ایمیل مسئول فعال سازی</label>

                <div class="col-sm-10">
                    <input type="text" minlength="8" name="email" class="form-control" value="<?= $data[0]['email'];  ?>" required>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">آدرس تلگرام</label>

                <div class="col-sm-10">
                    <input type="text" minlength="12" name="tel" class="form-control" value="<?= $data[0]['tel'];  ?>" required>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">شماره </label>

                <div class="col-sm-10">
                    <input type="text" minlength="8" name="number" class="form-control" value="<?= $data[0]['number'];  ?>" required >
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">آدرس برنامه اندرویدی </label>

                <div class="col-sm-10">
                    <input type="text" minlength="8" name="app" class="form-control" value="<?= $data[0]['app'];  ?>" required>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">توکن روبات تلگرامی </label>

                <div class="col-sm-10">
                    <input type="text" minlength="8" name="tel_api" class="form-control" value="<?= $data[0]['tle_api'];  ?>" required>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">ای دی عددی تلگرامی </label>

                <div class="col-sm-10">
                    <input type="text" minlength="5" name="id_teleg" class="form-control" value="<?= $data[0]['id_teleg'];  ?>" required>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">توکن درگاه زرین پال </label>

                <div class="col-sm-10">
                    <input type="text" minlength="8" name="api_zarinpal" class="form-control" value="<?= $data[0]['api_zarinpal'];  ?>" required>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">توکن درگاه پی ای ار </label>

                <div class="col-sm-10">
                    <input type="text" minlength="8" name="api_payir" class="form-control" value="<?= $data[0]['api_pay_ir'];  ?>" required>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-info">ارسال </button>
            <button type="reset" class="btn btn-default float-left">لغو</button>
        </div>
        <!-- /.card-footer -->
    </form>
</div>