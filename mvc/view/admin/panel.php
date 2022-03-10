
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3><?= $data['orders']  ?></h3>

                        <p>کل سفارشات</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>admin/newest" class="small-box-footer">اطلاعات بیشتر <i class="fa fa-arrow-circle-left"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3><?= $data['tank']  ?><sup style="font-size: 20px"></sup></h3>

                        <p>موجودی مخزن</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>admin/tank" class="small-box-footer">اطلاعات بیشتر <i class="fa fa-arrow-circle-left"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3><?= $data['register']  ?></h3>

                        <p>تعداد عضو ها</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>admin/register" class="small-box-footer">اطلاعات بیشتر <i class="fa fa-arrow-circle-left"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3><?= $data['newest']  ?></h3>

                        <p>تعداد محصولات</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>admin/newest" class="small-box-footer">اطلاعات بیشتر <i class="fa fa-arrow-circle-left"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3><?= $data['contact']  ?></h3>

                        <p>تعداد تماس ها</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>admin/contact" class="small-box-footer">اطلاعات بیشتر <i class="fa fa-arrow-circle-left"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger ">
                    <div class="inner">
                        <h3><?= $data['admin']  ?><sup style="font-size: 20px"></sup></h3>

                        <p>تعداد مدیران</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>admin/admin_new" class="small-box-footer">اطلاعات بیشتر <i class="fa fa-arrow-circle-left"></i></a>
                </div>
            </div>
            <!-- ./col -->

