
<div class="content container oprt-irancell">
    <h1>ارزون‌نت، فروش ارزون شارژ و بسته اینترنت</h1>
    <div class="row step step-operator">
        <label>انتخاب اپراتور</label>
        <div class="step-content">

            <?php foreach ($data['1'] as $data['1']){?>
                <a class="operator-btn operator-irancell" href="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>grouping/chargers/<?= $data['1']['address']?>"><?= $data['1']['Description']?><img src="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?><?= $data['1']['img']?>"/></a>
                <?php }


                ?>

        </div>
    </div>


    <div class="row step step-product">
        <label>انتخاب محصول</label>
        <div class="step-content">
            <?php
            if (empty($data['0'])){
                ?>
                <h1 style="text-align: center"> در حال حاظر هیچ محصولی موجود نمی باشد </h1>

                <?php
            }
            foreach ($data['0'] as $data) {

                if (!empty($data['expiration'])){
                ?>
                <a class="product net shadow_<?= $data['name']?>" href="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>checkout/<?= $data['id']?>">
                    <div data-product-id="3" class="product-content">
                        <div>
                            <div class="amount"><?= $data ['amount']?><i class="unit">Gb</i>
                            </div>
                            <div class="expiration"><?= $data ['expiration']?></div>
                        </div>
                        <div class="night<?= '_'.$data['name']?>">
                            <?php
                            if ($data['name']=='irancell' or $data['name']=='irancellnet' ){
                                echo 'ایرانسل' ;
                            }elseif ($data['name']=='mci' or $data['name']=='mcinet'){
                                echo 'همراه اول' ;
                            }else{
                                echo 'رایتل' ;
                            }
                            ?>
                        </div>
                        <div class="price"><?= number_format($data ['price']);?> تومان </div>
                        <button class="btn <?= $data['name']?>"> خرید
                        </button>
                        <div>
                        </div>
                    </div>
                </a>
                <?php
                }else {?>

                    <a class="product net shadow_<?= $data['name']?>" href="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>checkout/<?= $data['id']?>">
                        <div data-product-id="3" class="product-content">
                            <div>
                                <div class="expiration" style="width: 100%;"> <?= $data['name_change']?> </div>
                            </div><br>
                            <div class="night<?= '_'.$data['name']?>">
                                <?php
                                if ($data['name']=='irancell' or $data['name']=='irancellnet' ){
                                 echo 'ایرانسل' ;
                                }elseif ($data['name']=='mci' or $data['name']=='mcinet'){
                                    echo 'همراه اول' ;
                                }else{
                                    echo 'رایتل' ;
                                }
                                ?>
                            </div>
                            <div class="price"><?= number_format($data ['price']);?>تومان</div>
                            <button class="btn <?= $data['name']?>"> خرید
                            </button>
                            <div>
                            </div>
                        </div>
                    </a>


            <?php
                }
            }
            ?>


        </div>

        <div>

            <div class="property-box">
                <div class="prop-icon"><img
                            src="data:image/png;base64,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"
                            alt="easy-connect" height="128" width="128"></div>
                <div class="prop-title">استفاده آسان و سریع</div>
                <div class="prop-description">
                    سادگی وب سایت برای همه کاربران و سازگار با همه پلتفرم ها
                </div>
            </div>

            <div class="property-box">
                <div class="prop-icon"><img
                            src="data:image/png;base64,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"
                            alt="easy-buy" height="128" width="128"></div>
                <div class="prop-title"> خرید آسان و تحویل آنی شارژ</div>
                <div class="prop-description">برای خرید آنی شما فقط به یک کارت بانکی و رمز دوم آن نیاز دارید بعداز
                    پرداخت،اطلاعات برای شما نمایش داد و اگر لازم باشد به ایمیل ارسال میگردد
                </div>
            </div>
            <div class="property-box">
                <div class="prop-icon"><img
                            src="data:image/png;base64,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"
                            alt="fast-support" height="128" width="128"></div>
                <div class="prop-title">پشتیبانی سریع و مطمئن</div>
                <div class="prop-description">پشتیبانی همیشه درکنار شماست، تنها کافیست با ما تماس بگیرید</div>
            </div>

        <div class="property-box">
            <div class="prop-icon"><img
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIAAAACACAMAAAD04JH5AAAA3lBMVEVHcExEsptFs5xFs5xFs5xFs5xwwrBFs5xFs5xEs5xFs5xEsptFs5xFs5xFs5xHtJ08oIyu0clFs5xFs5xFs5xFs5zg4OD4+PhFs5xFs5xFs5zg4OBFs5z4+PhFs5xFs5xFs5xFs5ywy8VFs5zc3948oIw8oIxFs5zy8vLt7e34+Pg8oIxFs5zg4ODg4OD4+Pjg4OA8oIxJs50+oY3E4tuox8Csz8fj4+Pw8PD39/fn5+c/p5JDsJlCq5Xl5eVYuKTq6urb7Ojt7u4+o4+XxrzR29nH2NRFs5z4+Pjz8/Nnpi/fAAAAMHRSTlMAIkZVj7MD8QiIyUDS59cbSwHcKBP50BSqv82dw6qga1436p/766lLEYHszerkotA/N1VkAAAEZUlEQVR4XrzSWw6CMBCFYSi9c4sIERJIIDyghsRlHN3/hjQhvhkrZfBbQP9pO4GXcuhN3SSpUoBSadLUph/K4C/yiLczPppbHuW7xjXjGRwyzvQ+dclGhZ+okUnyfGhSrJCakDQfC6wmYrL8ZOHFTiR5ZuHNsu1/L7CJ2LYL2lTYqDLavx8XIFDEvtfnIMK9HuGYgExyXN+PFAipKFgc5OX66M7OvDQgZuRycHd/uZ2+5w+6Bjmh3333BKXFDmy59N0T5Bl2keVL3zVBWDyJM9sepYEojN7y1nahIL6CbpZEWdEYtQXYRQvriuqV//+HZJuQJ2Ti3GkvTs/3zTn7pKTMwP+H+RJ+S8HAg99W8LTvwW8piC48+C0FnbYHv62g5cMP7p+/oxOanv1p+un0/RP69qdTAhT1vPvTj6oHQO+fvifQ9er/mj7wagh/9LheP8U1+5888+f/Aj9o1+xv1OynC9/+16f+mW//avHoJOCld3/2gQB1/fuzrEugXYM/ewt/4Mt/B/8BnNzjWvxZfPR3klr82XUHn0Hv/oLjJ/ENS3xb7tc38/P68RhGoej//ufAcn4eP7iO8BqQ/ChQ+0HewDcxyW8W6P1bbhUBfdlvFuj9iw1znw4MZL9QIPpv4cf8/MAAhxHBj4LS/j38YMsFTTwCkh8FKj/mL2jhq4joR4F6/5yPXBINQ1c/CnT//2KLPwqHFFj8v2/3coG7H/ODwPYiuElToaCcH/ODGU34n0xToaCkH/ODie27wK9UKCjpx/wgJsud6M9UKCjrz9lgRGO2PQQFQoHox/wmY+pZAuZCgaMf85v0KGGHgrWlQPZjfpOEQlYUuPkxv0mIgEoFjn7MbwYwawrc/JjfhFhVsBP8xvwGFKoKJD/md3wG9AXwY35rQMLnLdin8BvzmyTUY0WB6N+wQI/GfM6CNfyY38aYRqwvMP2YX2BEMasLTD/ml4hpwiULdrIf84tMaMbKAtOP+WVmFLC6wPT/2LAjAQ1DbYHpz9mVcIiDiaoAfszvwiWOZqoC+J3nx9GsyeoC+N3nx+F0wNoC+DG/IwNcUJQuuDf9mN+RPq5oFAXw51ySFi6pKhfAj/mdaeCarmoB/JjfmTCigiuuXrA7+nMuzxWuaqsW3B39W67ADJfVVQrACvOXIengul5VsMq5ErHqBwsUrLZcjUDzkw0KVpu/3dtBCoMwEIXhaTE2tsWSRDcBXBWy9wzK3P9GXT5KQIIhM+B3BhmBvJ/PMdWPVuu2f/dt5ZNeBBRZXGw3Hin/EYKLLCw6+nNnYdng17AoQ4ABg5w5UGZgQQPlrGcx3hJUXqP6GwQdC+kIsimXgLclyMZs7T3CwZxa+AbnOuEPQGzSCaYnEBu1wtPSMTeN3NA4EYgNm8F/COSn3exvBCrjdgKdeX8xa5oEDqCWeOhHLuWcXuajHzrpp176sRuE2twv6AeP9VLkU2JyutHrNbJf6NNSGj4vqddNv68bv+f5/8w81+X/P9pMnepahK4hAAAAAElFTkSuQmCC"
                        alt="Unlimited Bandwidth" height="128" width="128"></div>
            <div class="prop-title"> بدون محدودیت </div>
            <div class="prop-description">
تمامی سرویس ها در دسترس هستند و بدون محدودیت می توانید خریداری کنید                            </div>
        </div>
    </div>
    <div class="row step step-buy">
        <div class="step-content">
            <div class="footer-link">
                <a href="<?=$data2['0']['tel'] ?>"><img width="70"
                                                                    src="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>theme/img/support.png"
                                                                    alt="telegram support" title="پشتیبانی"></a>
                <a href="/<?=$data2['0']['app'] ?>"><img width="180"
                                                            src="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>theme/img/android-direct-download.png"
                                                            alt="download app" title="دانلود اپلیکیشن موبایل"></a>
                <a href="<?=$data2['0']['tel'] ?>"><img width="70" src="<?= '//'.$_SERVER['SERVER_NAME'].'/'.DOCUMENT_ROOT.DOCUMENT_slash ?>theme/img/t_logo.png"
                                                            alt="telegram channel" title="کانال تلگرام"></a>
            </div>

            <div class="zarinpal-payment">
                <style>#zarinpal{margin:auto} #zarinpal img {width: 80px;}</style>
                <div id="zarinpal">
                    <script src="https://www.zarinpal.com/webservice/TrustCode" type="text/javascript"></script>
                </div>
            </div>
        </div>
    </div></div>  </div>
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


</body>
</html>