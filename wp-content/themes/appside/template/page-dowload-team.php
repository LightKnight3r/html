<?php /* Template Name: Page DownLoad Team */
//$page_id = 212;
?>

<?php
$pages = get_pages(array(
    'meta_key' => '_wp_page_template',
    'meta_value' => 'template/page-dowload-team.php'
));
foreach ($pages as $page) {
    $page_id = $page->ID;
}
$page_id = get_post($page_id);
$content = $page_id->post_content;
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]>', $content);
?>
<div class="row">
    <div class="col-lg-12">
        <div id="download-area" class="download-area-wrapper margin-bottom-120" style="margin-bottom:120px"><!-- download area wrapper -->
            <span class="subtitle"><?php echo get_the_title($page_id) ?></span>
            <?php echo $content; ?>
            <div class="btn-wrapper">
                <a href="<?php echo get_field('link_1', $page_id) ?>" class="boxed-btn btn-rounded gd-bg-1"><i
                        class="flaticon-apple-1"></i> App Store</a>
                <a href="<?php echo get_field('link_2', $page_id) ?>" class="boxed-btn btn-rounded gd-bg-2"><i
                        class="flaticon-android-logo"></i> Play Store</a>
<!--                <a href="--><?php //echo get_field('link_3', $page_id) ?><!--" class="boxed-btn btn-rounded gd-bg-3"><i-->
<!--                        class="flaticon-windows"></i> Windows</a>-->
            </div>
        </div>
        <!-- //. download area wrapper -->
    </div>
</div>
