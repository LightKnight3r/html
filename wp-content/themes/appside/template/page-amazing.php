<?php
/* Template Name: Page Amazing */
?>
<?php
    $pages = get_pages(array(
        'meta_key' => '_wp_page_template',
        'meta_value' => 'template/page-amazing.php'
    ));
    foreach($pages as $page){
        $page_id = $page->ID;
    }
    $page_id_content = get_post($page_id);
    $content = $page_id_content->post_content;
    $content = apply_filters('the_content', $content);
    $content = str_replace(']]>', ']]>', $content);
?>
<section class="video-area margin-top-120" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="img-with-video">
                    <div class="img-wrap">
                        <?php if(empty($page_id)) { ?>
                            <img src="<?php echo get_the_post_thumbnail_url("", 'thumbnail' );?>">
                        <?php } else { ?>
                            <img src="<?php echo get_the_post_thumbnail_url($page_id, 'thumbnail' );?>">
                        <?php } ?>
                        <div class="hover">
                            <a href="<?php echo get_field( 'youtube', $page_id ) ?>" class="video-play-btn mfp-iframe"><i class="fas fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="right-content-area">
                    <span class="subtitle"><?php echo get_the_title( $page_id ) ?></span>
                    <?php echo $content; ?>
                </div>
            </div>
        </div>
    </div>
</section>
