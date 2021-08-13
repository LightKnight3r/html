<?php
/* Template Name: Page Counterup Area Start */
?>
<?php
    $pages = get_pages(array(
        'meta_key' => '_wp_page_template',
        'meta_value' => 'template/page-counterup-area-start.php'
    ));
    foreach($pages as $page){
        $page_id = $page->ID;
    }
?>
<section class="counterup-area" style="padding: 10px 0 10px 0 !important;">
    <div class="container" style="max-width: 1250px !important;">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="single-counter-item" style="padding-right:20px"><!-- single counter item -->
                    <div class="icon" style="font-size: 65px; line-height: 65px; color: #500ade;margin-right: 10px;">
                        <i class="fa fa-gifts"></i>
                    </div>
                    <div class="content">
                        <span class="count-num"><?php echo get_field( 'positive_reviews', $page_id ) ?></span>
                        <?php ($lang == 'en') ? $title_review = 'Positive Reviews' : $title_review = 'Số lượng đơn hàng'; ?>
                        <h4 class="title"><?php echo $title_review ?></h4>
                    </div>
                </div><!-- //. single counter item -->
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-counter-item"><!-- single counter item -->
                    <div class="icon" style="font-size: 65px; line-height: 65px; color: #500ade;margin-right: 10px;">
                        <i class="fa fa-user-check"></i>
                    </div>
                    <div class="content">
                        <span class="count-num"><?php echo get_field( 'good_comments', $page_id ) ?></span>
                        <?php ($lang == 'en') ? $good_com = 'Good Comments' : $good_com = 'Khách hàng tin dùng'; ?>
                        <h4 class="title"><?php echo $good_com ?></h4>
                    </div>
                </div><!-- //. single counter item -->
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-counter-item"><!-- single counter item -->
                    <div class="icon" style="font-size: 65px; line-height: 75px; color: #500ade;margin-right: 10px;">
                        <i class="fa fa-medal"></i>
                    </div>
                    <div class="content">
                        <span class="count-num"><?php echo get_field( 'app_downloads', $page_id ) ?></span>
                        <?php ($lang == 'en') ? $app_dowload = 'App Downloads' : $app_dowload = 'Tài xế xác thực'; ?>
                        <h4 class="title"><?php echo $app_dowload ?></h4>
                    </div>
                </div><!-- //. single counter item -->
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-counter-item"><!-- single counter item -->
                    <div class="icon" style="font-size: 65px; line-height: 80px; color: #500ade;margin-right: 10px;">
                        <i class="fa fa-cloud-download-alt"></i>
                    </div>
                    <div class="content">
                        <span class="count-num"><?php echo get_field( 'best_awards', $page_id ) ?></span>
                        <?php ($lang == 'en') ? $best_awards = 'Best Awards' : $best_awards = 'Lượt tải ứng dụng'; ?>
                        <h4 class="title"><?php echo $best_awards ?></h4>
                    </div>
                </div><!-- //. single counter item -->
            </div>
        </div>
    </div>
</section>
