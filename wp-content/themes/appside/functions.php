<?php
function theme_setup() {

    register_nav_menu('topmenu',__( 'Primary menu' ));

    register_nav_menus( array(
        'footer_menu' => 'Footer',
    ) );


    add_filter('show_admin_bar', '__return_false');

    add_theme_support( 'post-thumbnails' );

    add_theme_support( 'custom-logo' );

    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        )
    );

}

add_action('init', 'theme_setup');

function theme_css_wrap() {
//    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css','all');
    wp_enqueue_style( 'bootstrap.min.css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), 'all' );
    wp_enqueue_style( 'fontawesome.5.7.2.css', get_template_directory_uri() . '/assets/css/fontawesome.5.7.2.css', array(), 'all' );
    wp_enqueue_style( 'flaticon.css', get_template_directory_uri() . '/assets/css/flaticon.css', array(), 'all' );
    wp_enqueue_style( 'animate.css', get_template_directory_uri() . '/assets/css/animate.css', array(), 'all' );
    wp_enqueue_style( 'owl.carousel.min.css', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), 'all' );
    wp_enqueue_style( 'magnific-popup.css', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), 'all' );
    wp_enqueue_style( 'style.css', get_template_directory_uri() . '/assets/css/style.css', array(), 'all' );
    wp_enqueue_style( 'responsive.css', get_template_directory_uri() . '/assets/css/responsive.css', array(), 'all' );
    wp_enqueue_style( 'style-main.css', get_template_directory_uri() . '/style.css', array(), 'all' );
}
add_action( 'wp_enqueue_scripts', 'theme_css_wrap' );

function theme_scripts_wrap() {
    wp_enqueue_script( 'jquery.js', get_template_directory_uri() . '/assets/js/jquery.js', array(), true );
    wp_enqueue_script( 'popper.min.js', get_template_directory_uri() . '/assets/js/popper.min.js', array(), true );
    wp_enqueue_script( 'bootstrap.min.js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), true );
    wp_enqueue_script( 'owl.carousel.min.js',  get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), true );
    wp_enqueue_script( 'jquery.magnific-popup.js', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.js', array(), true );
    wp_enqueue_script( 'contact.js', get_template_directory_uri() . '/assets/js/contact.js', array(), true );
    wp_enqueue_script( 'wow.min.js', get_template_directory_uri() . '/assets/js/wow.min.js', array(), true );
    wp_enqueue_script( 'waypoints.min.js', get_template_directory_uri() . '/assets/js/waypoints.min.js', array(), true );
    wp_enqueue_script( 'jquery.counterup.min.js', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array(), true );
    wp_enqueue_script( 'main.js', get_template_directory_uri() . '/assets/js/main.js', array(), true );
}
add_action( 'wp_enqueue_scripts', 'theme_scripts_wrap' );

// ADD ATTRIBUTES MENU
function add_link_atts($atts) {
    $atts['class'] = "nav-link";
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_link_atts');

// BUTTON DOWLOAD MENU
function new_nav_menu_items($items, $args) {
    if($args->theme_location == 'topmenu'){
        global $wpdb, $lang;
        ($lang == 'en') ? $url_lag = 131 : $url_lag = 133;
        $url_dowload = $wpdb->get_col("
                            SELECT meta_value
                            FROM hy_termmeta
                            WHERE meta_id = $url_lag
                            ");
        $download_item_lang = '<ul class="sm-flag flag-pc">'.pll_the_languages(array('show_flags'=>1,'show_names'=>0)).'</ul>';
        $download_item = '<li class="nav-item navbar-btn-wrapper"><a class="nav-link boxed-btn blank" href="'.$url_dowload['0'].'">Đặt giao hàng ngay</a></li>';
        $items = $items . $download_item . $download_item_lang;
    }

    return $items;
}
add_filter('wp_nav_menu_items', 'new_nav_menu_items', 10, 2);
// ADD ATTRIBUTES MENU

add_filter( 'wp_nav_menu_items', 'your_custom_menu_item', 10, 2 );
function your_custom_menu_item ( $items, $args ) {
    if ($args->theme_location == 'Footer') {
        $items .= '<i class="fas fa-chevron-right">Show whatever</i>';
    }
    return $items;
}

// GET SIDE BAR
//if (function_exists('register_sidebar')){
//    register_sidebar(array(
//        'name'=> 'Cột bên',
//        'id' => 'sidebar',
//    ));
//}

// GET SIDE BAR END

// Remove p tags from category description
remove_filter( 'the_content', 'wpautop' );

//add_filter('manage_posts_columns', 'posts_columns', 5);
//add_action('manage_posts_custom_column', 'posts_custom_columns', 5, 2);

add_filter('manage_post-type_posts_columns', 'posts_columns', 5);
add_action('manage_post-type_posts_custom_column', 'posts_custom_columns', 5, 2);
function posts_columns($defaults){
    $defaults['riv_post_thumbs'] = __('Thumbs');
    return $defaults;
}

function posts_custom_columns($column_name, $id){
    if($column_name === 'riv_post_thumbs'){
        if( has_post_thumbnail() ) {
            echo the_post_thumbnail('medium');
        } else {
            _e('No Thumbnail For Post');
        }

        echo "

<style> .column-riv_post_thumbs img{ max-height: 300px; max-width: 250px;     } </style>
"; } }

function popularPosts($num) {
    global $wpdb;

    $posts = $wpdb->get_results("SELECT comment_count, ID, post_title FROM $wpdb->posts ORDER BY comment_count DESC LIMIT 0 , $num");

    foreach ($posts as $post) {
        setup_postdata($post);
        $id = $post->ID;
        $title = $post->post_title;
        $count = $post->comment_count;
        if(has_post_thumbnail()) {
            $url_img = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()), 'thumbnail' );
        } else {
            $url_img = ''. get_template_directory_uri() .'/assets/img/popular-post/01.jpg';
        }
        if ($count != 0) {
            $popular .= '<li class="single-popular-post-item">';
            $popular .= '<div class="thumb">';
            $popular .= '<img src="'.$url_img.'">';
            $popular .= '</div>';
            $popular .= '<div class="content">';
            $popular .= '<span class="time">'. get_the_date('d-m-y') .'</span>';
            $popular .= '<h4 class="title"><a href="'. get_permalink() .'">'. $title .'</a></h4>';
            $popular .= '</li>';
        }
    }
    return $popular;
}

//PAGINATION HEYU
function heyu_navigation_posts_nav() {

    if( is_singular() )
        return;

    global $wp_query;

    /** Stop execution if there's only 1 page */
    if( $wp_query->max_num_pages <= 1 )
        return;

    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );

    /** Add current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;

    /** Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }

    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }

    echo '<div class="navigation"><ul>' . "\n";

    /** Previous Post Link */
    if ( get_previous_posts_link() )
//        printf( '<li>%s</li>' . "\n", get_previous_posts_link() );

    /** Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';

        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

        if ( ! in_array( 2, $links ) )
            echo '<li>…</li>';
    }

    /** Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }

    /** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li>…</li>' . "\n";

        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }

    /** Next Post Link */
    if ( get_next_posts_link() )
        printf( '<li class="next-page">%s</li>' . "\n", get_next_posts_link() );

    echo '</ul></div>' . "\n";

}

function heyu_widgets_init() {
    // First footer widget area.
    register_sidebar( array(
        'name' => __( 'First Footer Widget Area', 'hy' ),
        'id' => 'first-footer-widget-area',
        'description' => __( 'The first footer widget area', 'hy' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    // Second Footer Widget Area.
    register_sidebar( array(
        'name' => __( 'Second Footer Widget Area', 'hy' ),
        'id' => 'second-footer-widget-area',
        'description' => __( 'The second footer widget area', 'hy' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    // Third Footer Widget Area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'Third Footer Widget Area', 'hy' ),
        'id' => 'third-footer-widget-area',
        'description' => __( 'The third footer widget area', 'hy' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    // Fourth Footer Widget Area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'Fourth Footer Widget Area', 'hy' ),
        'id' => 'fourth-footer-widget-area',
        'description' => __( 'The fourth footer widget area', 'hy' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    // Five Footer Widget Area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'Five Footer Widget Area', 'hy' ),
        'id' => 'five-footer-widget-area',
        'description' => __( 'The five footer widget area', 'hy' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

}
add_action( 'widgets_init', 'heyu_widgets_init' );

add_filter( 'get_terms_args', 'themeprefix_show_tags' );
// Show Tags
function themeprefix_show_tags ( $args ) {
    if ( defined( 'DOING_AJAX' ) && DOING_AJAX && isset( $_POST['action'] ) && $_POST['action'] === 'get-tagcloud' ) {
        unset( $args['number'] );
        $args['hide_empty'] = 0;
    }
    return $args;
}

function heyu_custom_logo_setup() {
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'heyu_custom_logo_setup' );
 //Activate WordPress Maintenance Mode
//function wp_maintenance_mode(){
//    if(!current_user_can('edit_themes') || !is_user_logged_in()){
//        wp_die('<h1 style="color:red">Website under Maintenance</h1><br />We are performing scheduled maintenance.We will be back on-line shortly!');
//    }
//}
//add_action('get_header', 'wp_maintenance_mode');













