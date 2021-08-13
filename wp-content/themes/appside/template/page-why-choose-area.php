<?php
/* Template Name: Page WhyChooseArea */
?>
<?php
    ($lang == 'en') ? $page_id = 103 : $page_id = 345;
    $pages = get_pages(array(
        'meta_key' => '_wp_page_template',
        'meta_value' => 'template/page-why-choose-area.php'
    ));
    foreach($pages as $page){
        $page_id = $page->ID;
    }
    $page_id_content = get_post($page_id);
    $content = $page_id_content->post_content;
    $content = apply_filters('the_content', $content);
    $content = str_replace(']]>', ']]>', $content);
?>

<section class="why-choose-area why-choose-us-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="section-title white"><!-- section title -->
                    <span class="subtitle" style="font-size:30px"><?php echo get_the_title( $page_id ) ?></span>
                    <?php echo $content; ?>
                </div><!-- //. section title -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <div class="single-why-us-item margin-top-60 wow zoomIn"><!-- single why us item -->
                    <div class="icon gdbg-1">
                        <i class="fa fa-shipping-fast"></i>
                    </div>
                    <div class="content">
                        <h4 class="title"><?php echo get_field( 'block_1', $page_id ) ?></h4>
                        <p><?php echo wp_trim_words( get_field( 'content_block_1', $page_id ), 40, '...' ) ?></p>
                    </div>
                </div><!-- //. single why us item -->
                <div class="single-why-us-item wow zoomIn"><!-- single why us item -->
                    <div class="icon gdbg-2">
                        <i class="fa fa-shield-alt"></i>
                    </div>
                    <div class="content">
                        <h4 class="title"><?php echo get_field( 'block_3', $page_id ) ?></h4>
                        <p><?php echo wp_trim_words( get_field( 'content_block_3', $page_id ), 40, '...' ) ?></p>
                    </div>
                </div><!-- //. single why us item -->
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="center-image">
                    <?php if(empty($page_id)) { ?>
                        <img src="<?php echo get_the_post_thumbnail_url(345, 'thumbnail' );?>" alt="mobile image two">
                    <?php } else { ?>
                        <img src="<?php echo get_the_post_thumbnail_url($page_id, 'thumbnail' );?>" alt="mobile image two">
                    <?php } ?>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="single-why-us-item margin-top-60 wow zoomIn"><!-- single why us item -->
                    <div class="icon gdbg-3">
                        <i class="fa fa-coins"></i>
                    </div>
                    <div class="content">
                        <h4 class="title"><?php echo get_field( 'block_2', $page_id ) ?></h4>
                        <p><?php echo wp_trim_words( get_field( 'content_block_2', $page_id ), 40, '...' ) ?></p>
                    </div>
                </div><!-- //. single why us item -->
                <div class="single-why-us-item wow zoomIn"><!-- single why us item -->
                    <div class="icon gdbg-4">
                        <i class="fa fa-headset"></i>
                    </div>
                    <div class="content">
                        <h4 class="title"><?php echo get_field( 'block_4', $page_id ) ?></h4>
                        <p><?php echo wp_trim_words( get_field( 'content_block_4', $page_id ), 40, '...' ) ?></p>
                    </div>
                </div><!-- //. single why us item -->
            </div>
        </div>
    </div>
</section>
