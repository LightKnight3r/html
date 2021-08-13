<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
?>

<?php get_header(); ?>

<!-- breadcrumb area start -->
<?php ($lang == 'en') ? $category = 'Home' : $category = 'Trang Chủ'; ?>
<div class="breadcrumb-area breadcrumb-bg extra">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner">
                    <h1 class="page-title"><?php the_title() ?></h1>
                    <ul class="page-navigation">
                        <li><a href="#"> <?php echo $category ?></a></li>
                        <li><?php the_title() ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb area end -->

<div class="page-content-area padding-top-120 padding-bottom-120">
    <div class="container" style="text-align: center">
        <h3>Trang Không Tồn Tại</h3>
    </div>
</div>
</div>

<?php get_footer(); ?>
