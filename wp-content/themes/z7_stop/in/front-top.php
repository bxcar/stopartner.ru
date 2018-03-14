<div class="top-wrap-in contaner">
    <div class="site-slogan">
        <p>Мы идем дальше там,&nbsp;где другие останавливаются</p>
    </div>
    <div class="top-form">
        <img src="<?= get_template_directory_uri(); ?>/img/form-phone.png">
        <h2>Получить бесплатную консультацию</h2>
        <?php echo do_shortcode( '[contact-form-7 id="219" title="Верхняя форма"]' ); ?>
        <script>
            jQuery( document ).ready(function() {
                jQuery(".top-form form input").unwrap();
            });
        </script>
    </div>
    <?php echo get_the_excerpt('188'); ?>
    <div class="team block jblock-wrap">
        <div class="jblock-wrap-title">Партнеры</div>
        <div class="partners">
            <div class="jblock-wr">
                <div id="partner-0" class="item jblock">
                    <div class="jblock-image"><img src="<?php bloginfo('template_url'); ?>/res/140705-0679.jpg"
                                                   alt="Стогний Е. С."></div>
                    <div class="jblock-in">
                        <div class="jblock-title ">Стогний Е. С.</div>
                        <div class="jblock-text">Управляющий партнер</div>
                    </div>
                </div>
            </div>
            <div class="jblock-wr">
                <div id="partner-1" class="item jblock">
                    <div class="jblock-image"><img src="<?php bloginfo('template_url'); ?>/res/svetlana.jpg"
                                                   alt="Стогний С. В."></div>
                    <div class="jblock-in">
                        <div class="jblock-title ">Стогний С. В.</div>
                        <div class="jblock-text">адвокат</div>
                    </div>
                </div>
            </div>
            <div class="jblock-wr">
                <div id="partner-2" class="item jblock">
                    <div class="jblock-image"><img src="<?php bloginfo('template_url'); ?>/res/partolina_o_m.jpg"
                                                   alt="Партолина О. М."></div>
                    <div class="jblock-in">
                        <div class="jblock-title ">Партолина О. М.</div>
                        <div class="jblock-text">партнер</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="partners-resume block">
    <div class="partners-resume-in contaner">
        <div class="jblock2 popup-block clear-self" id="partners-resume-0">
            <div class="popup-block__close"></div>
            <div class="jblock-image jblock-image2"><img src="<?php bloginfo('template_url'); ?>/res/140705-0679.jpg"
                                                         alt="Стогний Е. С."></div>
            <div class="jblock-in2">
                <?php echo get_the_excerpt('189'); ?>
            </div>
        </div>
        <div class="jblock2 popup-block clear-self" id="partners-resume-1">
            <div class="popup-block__close"></div>
            <div class="jblock-image jblock-image2"><img src="<?php bloginfo('template_url'); ?>/res/svetlana.jpg"
                                                         alt="Стогний С. В."></div>
            <div class="jblock-in2">
                <?php echo get_the_excerpt('190'); ?>
            </div>
        </div>
        <div class="jblock2 popup-block clear-self" id="partners-resume-2">
            <div class="popup-block__close"></div>
            <div class="jblock-image jblock-image2"><img src="<?php bloginfo('template_url'); ?>/res/partolina_o_m.jpg"
                                                         alt="Партолина О. М."></div>
            <div class="jblock-in2">
                <?php echo get_the_excerpt('191'); ?>
            </div>
        </div>
    </div>
</div>