<?php
/* Template Name: Page Header Start */
?>
<?php
    $pages = get_pages(array(
        'meta_key' => '_wp_page_template',
        'meta_value' => 'template/page-header-start.php'
    ));
    foreach($pages as $page){
        $page_id = $page->ID;
    }
    $page_id_content = get_post($page_id);
    $content = $page_id_content->post_content;
    $content = apply_filters('the_content', $content);
    $content = str_replace(']]>', ']]>', $content);
?>

<header class="header-area header-bg" id="home">
    <div class="shape-1"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/01.png" alt=""></div>
    <div class="shape-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/01.png" alt=""></div>
    <div class="shape-3"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/03.png" alt=""></div>
    <div class="header-right-image wow zoomIn" style="right:0% !important;">
        <?php if(empty($page_id)) { ?>
            <img src="<?php echo get_the_post_thumbnail_url("", 'thumbnail' );?>" alt="header right image">
        <?php } else { ?>
            <img src="<?php echo get_the_post_thumbnail_url($page_id, 'thumbnail' );?>" alt="header right image">
        <?php } ?>
    </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="header-inner">
                        <h1 class="title wow fadeInDown"><?php echo get_the_title( $page_id ) ?></h1>
                        <p>
                            <?php echo wp_trim_words( $content, 40, '...' ) ?>
                        </p>
                        <div class="btn-wrapper wow fadeInUp">
                            <?php ($lang == 'en') ? $dowload_now = 'Download now' : $dowload_now = 'Tải ngay'; ?>
                            <a href="<?php echo get_field( 'download_now', $page_id ) ?>" class="boxed-btn btn-rounded"><?php echo $dowload_now ?></a>
                            <?php ($lang == 'en') ? $learn_more = 'Learn More' : $learn_more = 'Đặt giao hàng ngay'; ?>
                            <a href="<?php echo get_field( 'learn_more', $page_id ) ?>" class="boxed-btn btn-rounded blank"><?php echo $learn_more ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</header>
