<? add_theme_support( 'title-tag' );

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 300, 300);

add_action('init', 'my_post_type_svcpage');


function my_post_type_svcpage() {
    register_post_type( 'svcpage',
                array( 
                'label' => __('Сервисные страницы', 'z7zen'), 
                'singular_label' => __('Сервисная страница', 'z7zen'),
                '_builtin' => false,
                'public' => false, 
                'show_ui' => true,
                'show_in_nav_menus' => false,
                'hierarchical' => false,
                'capability_type' => 'page',
                'rewrite' => false,
                'supports' => array(
                        'title', 
                        'excerpt')
                    ) 
                );
}