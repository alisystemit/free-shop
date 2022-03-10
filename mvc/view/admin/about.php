<div class="col-md-12">
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title"> تماس با ما</h3>

            <div class="card-tools">
                <a href="<?=  $data['0']['id']+1 ?>" class="btn btn-tool" data-toggle="tooltip" title="" data-original-title="Next"><i class="fa fa-chevron-left"></i></a>
            </div>
        </div>
        <!-- /.card-header -->
        <?php
        $timy = date ('Y-m-d H:i:s')
        ?>
        <div class="card-body p-0">
            <div class="mailbox-read-info">
                <h5>نام :<?=  $data['0']['name'] ?></h5>

                <h5>شماری موبایل :<?=  $data['0']['number1'] ?></h5>
                <h6>ایمیل : <?=  $data['0']['email'] ?>
                    <span class="mailbox-read-time float-left"><?php ;timeq( $data[0]['time'],$timy) ?></span></h6>
            </div>
            <!-- /.mailbox-read-info -->
            <div class="mailbox-controls with-border text-center">
                <div class="btn-group">
                    <a href="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>admin/contact/delete/<?=  $data['0']['id'] ?>">
                        <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="" data-original-title="حذف">
                            <i class="fa fa-trash-o"></i></button>
                    </a>

                </div>
                <!-- /.btn-group -->
                <a href="javascript:window.print()">
                <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" title="" data-original-title="پرینت">
                    <i class="fa fa-print"></i></button>
                </a>
            </div>
            <!-- /.mailbox-controls -->
            <div class="mailbox-read-message">
                <p><?=  $data['0']['text'] ?></p>
            </div>
            <!-- /.mailbox-read-message -->
        </div>
        <!-- /.card-body -->

        <!-- /.card-footer -->
        <div class="card-footer">
            <a href="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>admin/contact/delete/<?=  $data['0']['id'] ?>">
            <button type="button" class="btn btn-default"><i class="fa fa-trash-o"></i> حذف</button>
            </a>
            <a href="javascript:window.print()">
            <button type="button" class="btn btn-default"><i class="fa fa-print"></i> پرینت</button>
                <a>
        </div>
        <!-- /.card-footer -->
    </div>
    <!-- /. box -->
</div>