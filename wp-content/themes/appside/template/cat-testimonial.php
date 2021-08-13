<?php
($lang == 'en') ? $category = get_term( 7 ) : $category = get_term( 44 );
$args = array(
    'post_type' => 'post',
    'category_name'=> $category->slug,
    'posts_per_page'=> 10,
    'order'=> 'ASC',
);
$query = new WP_Query( $args );

?>

<section class="testimonial-area margin-top-120" style=" background-image:none !important">
    <div class="shape-1"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/08.png" alt=""></div>
    <div class="shape-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/09.png" alt=""></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="section-title "><!-- section title -->
                    <span class="subtitle" style="font-size:30px"><?php echo $category->name ?></span>
                    <span style="font-size:20px"><?php echo $category->description ?></span>
                </div><!-- //. section title -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="testimonial-carousel">
                    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                    <div class="single-testimonial-item"><!-- single testimonial item -->
                        <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) ?>" alt="">
                        <div class="hover"><!-- hover -->
                            <div class="hover-inner">
                                <div class="icon"><i class="fas fa-quote-left"></i></div>
                                <?php echo get_the_content() ?>
                                <div class="author-meta">
                                    <h4 class="name"><?php echo get_the_title() ?></h4>
                                    <!--<span class="post"><?php echo get_the_excerpt() ?></span>-->
                                </div>
                            </div>
                        </div><!-- //. hover -->
                    </div><!-- //. single testimonial item -->
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
</section>
