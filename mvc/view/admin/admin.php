<div class="card card-primary card-outline" style="width: 50%; margin: auto;">
    <div class="card-body box-profile">
        <div class="text-center">
            <?php
            global $URI_;
            $email =  $_SESSION['email'] ;
            $default =null;
            $size = 120;
            $grav_url = "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?d=" . urlencode( $default ) . "&s=" . $size;
            ?>
            <img class="profile-user-img img-fluid img-circle" src="<?php echo $grav_url; ?>" alt="User profile picture">
        </div>

        <h3 class="profile-username text-center"><?=$_SESSION['admin'] ?></h3>

        <p class="text-muted text-center">مدیر سایت</p>

        <ul class="list-group list-group-unbordered mb-3">
            <li class="list-group-item">
                <b>ایمیل : </b> <a><?=$_SESSION['email'] ?></a>
            </li>
            <li class="list-group-item">
                <b>نام :</b> <a><?=$_SESSION['admin'] ?></a>
            </li>
            <li class="list-group-item">
                <b>عکس پرو فایل شما بر اساس سیستم آوتار کار میکند پس آواتار خود را تنظیم کنید</b>
            </li>
        </ul>


    </div>
    <!-- /.card-body -->
</div>


<div class="content">
    <div class="container-fluid">
        <div class="card card-info">
            <?php if (isset( $_SESSION['success'])){   ?>
                <div class="alert alert-success alert-dismissible">
                    <h5><i class="icon fa fa-check"></i> توجه!</h5>
                   اطلاعات با موفقیت تغیر کرد !!!
                </div>
                <?php
                if (isset($_SESSION['successfull'])){
                   unset($_SESSION['successfull']);
                }


            } ?>

            <?php if (isset( $_SESSION['success'])){   ?>
                <div class="alert alert-danger alert-dismissible">
                    <h5><i class="icon fa fa-ban"></i> توجه!</h5>
                    پسور ها متفاوت هستند لطفا دقت کنید !!!
                </div>
                <?php
                if (isset($_SESSION['success'])){
                   unset($_SESSION['1error']);
                }

            } ?>




            <div class="card-header">
                <h3 class="card-title">فروم ویرایش مدیر</h3>
            </div>
            <!-- /.card-header -->


            <!-- form start -->
            <form class="form-horizontal" method="post" action="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>admin/admin/changpas">
                <div class="card-body">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">نام</label>

                        <div class="col-sm-10">
                            <input type="text" name="fullname" class="form-control" id="inputEmail3" minlength="8" placeholder="نام را وارد کنید" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">ایمیل</label>

                        <div class="col-sm-10">
                            <input type="email" name="email" class="form-control" id="inputEmail3" minlength="8" placeholder="ایمیل را وارد کنید" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">شماره موبایل</label>

                        <div class="col-sm-10">
                            <input type="text" name="number" class="form-control" id="inputEmail3" minlength="8" placeholder="شماره موبایل خود را وارد کنید" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">پسورد</label>

                        <div class="col-sm-10">
                            <input type="password" name="pass1" class="form-control" id="inputEmail3" minlength="8" placeholder="پسورد را وارد کنید" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" type="password" class="col-sm-2 control-label">تکرار پسورد</label>

                        <div class="col-sm-10">
                            <input type="password" name="pass2" class="form-control" id="inputPassword3" minlength="8"   placeholder="تکرار پسورد را وارد کنید" required>
                        </div>
                    </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-info">تغیر</button>
                    <button type="reset" class="btn btn-default float-left">لغو</button>
                </div>
                <!-- /.card-footer -->
            </form>
        </div>

    </div>
</div>
