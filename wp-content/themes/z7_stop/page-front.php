<?php get_header(); ?>

            <div class="kwicks-wrap">
               <div class="kwicks-in contaner">
                  <?php get_template_part('in/svcs'); ?>
               </div>
            </div>
            <div class="contacts-wrap">
                  <?php get_template_part('in/contact-wrap'); ?>
            </div>
            <div class="news-wrap">
                  <?php get_template_part('in/news'); ?>
            </div>
            <div class="site-slider">
               <div class="site-slider-in contaner">
                  <?php echo get_the_excerpt('208'); ?>
               </div>
            </div>

<?php get_footer(); ?>