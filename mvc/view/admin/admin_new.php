<?php if (isset( $_SESSION['success'])){   ?>
    <div class="alert alert-success alert-dismissible">
        <h5><i class="icon fa fa-check"></i> توجه!</h5>
       مدیر جدید با موفقیت ساخته شد
    </div>
    <?php
    if (isset($_SESSION['success_admin_new'])){
        unset($_SESSION['success_admin_new']);
    }

} ?>

<?php if (isset( $_SESSION['unsuccess_admin_new'])){   ?>
    <div class="alert alert-danger alert-dismissible">
        <h5><i class="icon fa fa-ban"></i> توجه!</h5>
       مدیر مورد نظر حذف شد !!!
    </div>
    <?php
    if (isset($_SESSION['unsuccess_admin_new'])){
       unset($_SESSION['unsuccess_admin_new']);
    }

} ?>

<div class="card card-warning">
    <div class="card-header">
        <h3 class="card-title">مدیران سایت</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form class="form-horizontal" method="post" action="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>admin/admin_new">
        <div class="card-body">

            <div class="form-group">
                <label for="inputEmail3"  class="col-sm-2 control-label">نام کامل</label>

                <div class="col-sm-10">
                    <input type="text" minlength="6" name="fullname" class="form-control"  placeholder="نام مدیر صورت کامل وارد کنید" required>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">ایمیل</label>

                <div class="col-sm-10">
                    <input type="email" minlength="8" name="email" class="form-control"  placeholder="ایمیل درست را وارد کنید" required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3"  class="col-sm-2 control-label">شماره موبایل</label>

                <div class="col-sm-10">
                    <input type="text" minlength="12" name="number" class="form-control"  placeholder="شماره موبایلتان وارد کنید" required>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">پسورد مدیر</label>

                <div class="col-sm-10">
                    <input type="password" minlength="8" name="password1" class="form-control"  placeholder="پسورد مدیر" required>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3"  class="col-sm-2 control-label">تکرار پسورد مدیر</label>

                <div class="col-sm-10">
                    <input type="password" minlength="12" name="password2" class="form-control"  placeholder="تکرار پسورد مدیر" required>
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

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">جدول مدیران</h3>

                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">


                    </div>
                </div>
            </div>

            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">

                <table class="table table-hover">
                    <tbody><tr>
                        <th>شناسه</th>
                        <th>نام کامل</th>
                        <th>ایمیل</th>
                        <th>شماره</th>
                        <th>عملیات</th>
                    </tr>
                    <?php
                    foreach ($data as $dat ){
                        ?>

                        <tr>
                            <td>100<?= $dat['id']  ?></td>
                            <td><?= $dat['fullname']  ?></td>
                            <td><?= $dat['email']  ?></td>
                            <td><?= $dat['number1']  ?></td>
                            <td><a class="btn btn-block btn-danger btn-sm" href="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>admin/admin_new/delete/<?= $dat['id']  ?>">حذف</a></td>
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