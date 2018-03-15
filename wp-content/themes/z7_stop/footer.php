<div class="<? if (is_front_page()) { ?>bottom-wrap<? } else { ?>bottom-contacts-wrap<? } ?>">

    <? if (is_front_page()) { ?>
        <div class="results wrapper pract">
            <div class="name">Успешные решения</div>
            <ul class="flexbox">
                <li>
                    <a class="brd" href="https://stopartner.ru/docs/ch_1_st_128.pdf" target="_blank">
                        <span class="mark"></span>
                        <p class="title">Отмена постановления по ч. 1 ст. 12.8 КоАП РФ</p>
                        <p>Отмена постановления по ч. 1 ст. 12.8 КоАП РФ - управление транспортным средством водителем, находящимся в состоянии опьянения</p>
                    </a>
                </li>
                <li>
                    <a class="brd" href="https://stopartner.ru/docs/snizheniye_ushcherba.pdf" target="_blank">
                        <span class="mark"></span>
                        <p class="title">Снижение ущерба с 3052530 руб. до 658 тыс. руб.</p>
                        <p>Снижение ущерба причиненного в результате ДТП с 3052530 руб. до 658 тыс. руб.</p>
                    </a>
                </li>
                <li>
                    <a class="brd" href="https://stopartner.ru/docs/ooo_d_k_ooo_t.pdf" target="_blank">
                        <span class="mark"></span>
                        <p class="title">Взыскание 4812988 руб</p>
                        <p>Взыскание 4812988 руб по договору поставки в связи с неисполнением обязательств по оплате товара</p>
                    </a>
                </li>
            </ul>
            <div>
                <a href="#" class="readmore">Все решения</a>
            </div>
        </div>
        <div class="bottom-wrap-title dnn" style="display: none;">
            <span>Практика компании</span>
        </div>
        <div class="bottom-wrap-in contaner clear-self dnn" style="display: none;">
            <div class="bottom-blocks">
                <div class="bottom-block">
                    <div class="bottom-block-bg"></div>
                    <div class="bottom-block-in">
                        <div class="bottom-block-border"></div>
                        <?php echo get_the_excerpt('184'); ?>
                    </div>
                </div>
                <div class="bottom-block">
                    <div class="bottom-block-bg"></div>
                    <div class="bottom-block-in">
                        <div class="bottom-block-border"></div>
                        <?php echo get_the_excerpt('185'); ?>
                    </div>
                </div>
            </div>
        </div>
        <script>
            jQuery('.readmore').click(function () {
                event.preventDefault();
                jQuery('.dnn').css("display", "block");
            });
        </script>
    <?php } ?>
    <div class="bottom-contacts contaner">
        <div class="bottom-contacts-title">Свяжитесь с нами<a name="contacts"></a></div>
        <div class="bottom-contacts-in">
            <?php echo get_the_excerpt('186'); ?>
            <? if (is_front_page()) { ?>
                <div class="my-form">
                    <div class="tpl-anketa"
                         data-api-url="/my/s3/xapi/public/?method=form/postform&amp;param[form_id]=20748841"
                         data-api-type="form">
                        <div class="title">Есть проблема? Мы поможем Вам её решить!</div>


                        <?php echo do_shortcode('[contact-form-7 id="192" title="Контактная форма 1"]'); ?>
                        <div class="clear"></div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
</div>
<div class="clear-footer"></div>
</div>
<footer class="site-footer">
    <div class="site-footer-in contaner clear-self">
        <div class="site-name-bottom">
            <p>Copyright © 2012-2017&nbsp;Стогний и партнеры</p>
        </div>
        <div class="site-counters clear-self">
            <div itemscope="" itemtype="http://schema.org/LocalBusiness">
                <meta itemprop="name" content="Стогний и партнеры">
                <div itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
                    <meta itemprop="streetAddress" content="8-я линия В.О, 29">
                    <meta itemprop="postalCode" content="199004">
                    <meta itemprop="addressLocality" content="Санкт-Петербург">
                </div>
                <meta itemprop="telephone" content="+7 812 947–08–80">
                <meta itemprop="email" content="stpartners@mail.ru">
                <meta itemprop="openingHours" content="Mo, Tu, We, Th, Fr, Sa, Su 10:00-19:00">
                <meta itemprop="image" content="http://d.z7n.ru/d/1194335/t/v1647/images/logo.png">
                <meta itemprop="priceRange" content="от 1000">
            </div>
            <div itemscope="" itemtype="http://schema.org/LocalBusiness">
                <meta itemprop="name" content="Стогний и партнеры">
                <div itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
                    <meta itemprop="streetAddress" content="ул. Куйбышева, д. 9, 3 этаж, оф. 1">
                    <meta itemprop="postalCode" content="188800">
                    <meta itemprop="addressLocality" content="г. Выборг">
                </div>
                <meta itemprop="telephone" content="+7 812 947–08–80">
                <meta itemprop="email" content="stpartners@mail.ru">
                <meta itemprop="openingHours" content="Mo, Tu, We, Th, Fr, Sa, Su 10:00-19:00">
                <meta itemprop="image" content="http://d.z7n.ru/d/1194335/t/v1647/images/logo.png">
                <meta itemprop="priceRange" content="от 1000">
            </div>
        </div>
    </div>
</footer>
<!--650-->
<!-- assets.bottom -->
<script src="<?php bloginfo('template_url'); ?>/res/site.min.js" type="text/javascript"></script>
<?php wp_footer(); ?>
<style>
    .page-id-84 .fix-bg-container {
        background-image: url(<?= get_template_directory_uri(); ?>/img/dtp-fix-bg.jpeg);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        margin-top: -20px;
    }

    .page-id-84 .site-wrap-in h1 {
        /*margin-bottom: 0;
        padding-bottom: 20px;
        margin-top: 0;
        padding-top: 37px;
        background-color: #ede8cb;
        max-width: 5350px;
        margin-left: 0;
        margin-right: 0;*/
    }

    .page-id-84 .fix-bg-container h1 {
        margin-top: 20px;
        padding-top: 20px;
    }

    .page-id-84 .site-wrap-in h1 span:before,
    .page-id-84 .site-wrap-in h1 span:after {
        z-index: 1;
    }

    .page-id-84 .site-header-in.contaner.clear-self {
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        -webkit-box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        -moz-box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }
</style>
<script>
    jQuery('.page-id-84 .site-content-wrap.contaner.clear-self').wrap('<div class="fix-bg-container"></div>');
    var title = jQuery('.page-id-84 .site-wrap-in h1');
    jQuery('.page-id-84 .site-wrap-in h1').remove();
    jQuery('.page-id-84 .fix-bg-container').prepend(title);

    //                jQuery('.page-id-84 .site-wrap-in h1').wrap('<div class="h1-bg-container"></div>');
</script>
</body>
</html>