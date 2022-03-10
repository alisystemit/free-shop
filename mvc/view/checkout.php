
<div class="content container">
    <section id="single-product" role="main">
        <div class="row mt-5">
            <div id="edd_checkout_wrap">
                <?php
                if (!empty($data[0][0])){
                    $_SESSION['amount_pay']= $data[0][0]['price'];
                    $_SESSION['operator_pay']= $data[0][0]['name'];
                    $_SESSION['name_change_pay']= $data[0][0]['name_change'];
                }

                if (!empty($data[0][0]['name'])){
                    ?>
                             <table id="edd_checkout_cart" class="ajaxed">
                                <thead>
                                <tr class="edd_cart_header_row">
                                    <th class="edd_cart_item_name">نام محصول</th>
                                    <th class="edd_cart_item_price">قیمت</th>
                                    <th class="edd_cart_actions">عملیات</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="edd_cart_item" id="edd_cart_item_0_101" data-download-id="101">
                                    <td class="edd_cart_item_name">
                                        <div class="edd_cart_item_image"><img src="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>theme/img/<?=$data[0][0]['name'] ?>.svg" class="attachment-25x25 size-25x25 wp-post-image" ></div><span class="edd_checkout_cart_item_title" style="margin-right: 40px;"><?=$data[0][0]['name_change'] ?></span>					</td>


                                    <td class="edd_cart_item_price">
                                        <?= number_format($data[0][0]['price']) ?>تومان	</td>
                                    <td class="edd_cart_actions">
                                        <a class="edd_cart_remove_item_btn" href="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>checkout/us_set/<?= number_format($data[0][0]['id']) ?>">حذف</a>
                                    </td>
                                </tr>
                                <!-- Show any cart fees, both positive and negative fees -->

                                </tbody>
                                <tfoot>
                                <tr class="edd_cart_footer_row edd_cart_discount_row" style="display:none;">
                                    <th colspan="3" class="edd_cart_discount">
                                    </th>
                                </tr>
                                <tr class="edd_cart_footer_row">
                                    <th colspan="3" class="edd_cart_total">کل: <span class="edd_cart_amount" ><?= number_format($data[0][0]['price']) ?> تومان</span></th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                <?php } else{
                    ?>
                    <h1 style="text-align: center"> در حال حاظر هیچ محصولی را به سبد خرید  نه افزوده اید  </h1>

                <?php
               }
                ?>

                <div id="edd_checkout_form_wrap" class="edd_clearfix">
                    <form id="edd_purchase_form" class="edd_form" action="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>pay" method="POST"style="text-align: right;">
                        <fieldset id="edd_checkout_user_info">
                            <legend>اطلاعات شخصی</legend>
                            <p id="edd-email-wrap">
                                <label class="edd-label">
                                  شماره موبایل									<span class="edd-required-indicator">*</span>
                                </label>
                                <span class="edd-description" id="edd-email-description">برای پیگیری خرید همچنین شارژ حساب,شماره شما نیاز است </span>
                                <input class="edd-input required" type="text" name="mobi" placeholder="شماره موبایل" id="edd-email" required >
                            </p>
                            <p id="edd-email-wrap">
                                <label class="edd-label" for="edd-email">
                                    آدرس ایمیل									<span class="edd-required-indicator">*</span>
                                </label>
                                <span class="edd-description" id="edd-email-description">ما رسید خرید را به این آدرس ارسال خواهیم کرد.</span>
                                <input class="edd-input required" type="email" name="email" placeholder="آدرس ایمیل" id="edd-email" required>
                            </p>
                            <p id="edd-first-name-wrap">
                                <label class="edd-label" for="edd-first">
                                    نام									<span class="edd-required-indicator">*</span>
                                </label>
                                <span class="edd-description" id="edd-first-description">ما از این مورد برای شناسایی حساب‌ها استفاده می‌کنیم.</span>
                                <input class="edd-input required" type="text" name="fullname" placeholder="نام نام خانوادگی" id="edd-first" required>
                            </p>

                        </fieldset>
                        <fieldset id="edd_purchase_submit">



                            <input type="hidden" name="edd-gateway" value="zarinpal">
                            <input type="submit" class="edd-submit blue button" id="edd-purchase-button" name="edd-purchase" value="خرید">


                        </fieldset>
                    </form>
                </div><!--end #edd_checkout_form_wrap-->
            </div><!--end #edd_checkout_wrap-->

        </div>
</div>
</section>


<br>
<br>
<br>
<br>
<footer id="shop-footer">
    <div class="container">
        <div class="row">
            <div class="col-12" style="
    text-align: center;
">
                <span>ایجاد شده توسط <a href="https://ali-system.ir" title="علی سیستم"><strong>علی سیستم</strong></a>،حقوق تمام وب سایت محفوظ و شرعا کپی برداری از ان حرام است.</span>
            </div>
        </div>
    </div>
</footer>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>

</body>
</html>