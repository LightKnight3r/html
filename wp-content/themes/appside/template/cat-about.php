<?php
$category = get_term( 6 );
$args = array(
    'post_type' => 'post',
    'category_name'=> $category->slug,
    'posts_per_page'=> 5,
    'order' => 'ASC',
);
$query = new WP_Query( $args );
?>

<section class="about-us-area" id="services">
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
                <div class="feature-area">
                    <ul class="feature-list wow fadeInUp">
                        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                            <li class="single-feature-list">
                                <div class="icon <?php echo get_field( 'bg_icon', get_the_ID() ) ?>">
                                    <i class="">
                                        <?php $url = wp_get_attachment_url( get_post_thumbnail_id($query->ID), 'thumbnail' ); ?>
                                        <img src="<?php echo $url ?>" />
                                    </i>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="<?php echo get_permalink() ?>"><?php echo get_the_title() ?></a></h4>
                                    <p><?php echo wp_trim_words( get_the_content(), 40, '...' ) ?></p>
                                </div>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                    <div class="btn-wrapper ">
                        <?php
                        $terms = get_the_terms( $post->ID , 'category' );
                        foreach ( $terms as $term ) {
                            ?>
                            <a href="<?php echo get_field('app_store', $term) ?>" class="boxed-btn btn-rounded gd-bg-1"><i class="flaticon-apple-1"></i> App Store</a>
                            <a href="<?php echo get_field('play_store', $term) ?>" class="boxed-btn btn-rounded gd-bg-2"><i class="flaticon-android-logo"></i> Play Store</a>
<!--                            <a href="--><?php //echo get_field('window', $term) ?><!--" class="boxed-btn btn-rounded gd-bg-3"><i class="flaticon-windows"></i> Windows</a>-->
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
