<div class="row">


    <div class="col-12">
        <?php if (isset( $_SESSION['unsuccess_register_delete'])){   ?>
            <div class="alert alert-danger alert-dismissible">
                <h5><i class="icon fa fa-ban"></i> توجه!</h5>
                کاربر با موفقیت حذف شد
            </div>
            <?php
            if (isset($_SESSION['unsuccess_register_delete'])){
                unset($_SESSION['unsuccess_register_delete']);
            }

        } ?>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">جدول عضو ها</h3>

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
                        <th>نام و نام خانوادگی</th>
                        <th>ایمیل</th>
                        <th>شماره</th>
                        <th>تاریخ عضویت</th>
                        <th>عملیات</th>
                    </tr>
                    <?php
                    foreach ($data as $dat ){
                        ?>

                        <tr>
                            <td><?= $dat['id']  ?></td>
                            <td><?= $dat['fullname']  ?></td>
                            <td><?= $dat['email']  ?></td>
                            <td><?= $dat['number1']  ?></td>
                            <td><?php timeq( $dat['time'],$timy) ?></td>
                            <td><a class="btn btn-block btn-danger btn-sm" href="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>admin/register/delete/<?= $dat['id']  ?>">حذف</a></td>
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
                    <li class="page-item"><a class="page-link" href="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>admin/register/index/<?= $l ?>">«</a></li>
                    <li class="page-item"><a class="page-link disabled" href="#"><?= $URI_['4'] ?></a></li>
                    <?php
                    if (!empty($data)){
                        if (count($data) >= 10){


                            ?>
                            <li class="page-item"><a class="page-link" href="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>admin/register/index/<?= $r ?>">»</a></li>

                        <?php }} ?>
                </ul>
            </div>

        </div>
        <!-- /.card -->
    </div>
</div>