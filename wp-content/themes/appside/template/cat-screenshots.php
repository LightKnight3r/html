<?php
($lang == 'en') ? $category = get_term( 38 ) : $category = get_term( 49 );

$args = array(
    'post_type' => 'post',
    'category_name'=> $category->slug,
    'posts_per_page'=> 4,
    'order'=> 'ASC',
);
$query = new WP_Query( $args );

?>

<section class="screenshort-area">
        <div class="shape-1"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/08.png" alt=""></div>
        <div class="shape-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/09.png" alt=""></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="section-title"><!-- section title -->
                    <span class="subtitle" style="font-size:30px"><?php echo $category->name ?></span>
                    <?php echo $category->description ?>
                </div><!-- //. section title -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="screenshort-carousel"><!-- screenshort carousel -->
                    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                    <div class="single-screenshort-item"><!-- single screenshort item -->
                        <?php if(empty(wp_get_attachment_url( get_post_thumbnail_id($post->ID) ))){ ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshort/screen-4.jpg" alt="">
                        <?php } else { ?>
                            <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) ?>" alt="">
                        <?php } ?>
                    </div><!-- //.single screenshort item -->
                    <?php endwhile; ?>
                </div><!-- //. screenshort carousel -->
            </div>
        </div>
    </div>
</section>
