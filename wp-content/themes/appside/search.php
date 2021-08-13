<?php
/*
Template Name: Search Page
*/
?>
   <?php  get_header(); ?>
    <!-- breadcrumb area start -->
    <div class="breadcrumb-area breadcrumb-bg extra"></div>
    <!-- breadcrumb area end -->

    <div class="page-content-area padding-top-120 padding-bottom-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <?php
                        while ( have_posts() ) : the_post(); ?>
                            <div class="col-lg-6 col-md-6">
                                <div class="single-blog-grid-item"><!-- single blog grid item -->
                                    <div class="thumb">
                                        <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()), 'thumbnail' ); ?>" alt="blog images">
                                    </div>
                                    <div class="content">
                                        <ul class="post-meta">
                                            <li><a href="#"><?php echo get_the_date() ?> </a></li>
                                            <li><a href="#">By <?php echo get_the_author(); ?></a></li>
                                        </ul>
                                        <h4 class="title"><a href="<?php echo get_the_permalink() ?>"><?php echo get_the_title() ?></a></h4>
                                        <a href="<?php echo get_the_permalink() ?>" class="readmore">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                                    </div>
                                </div><!-- //. single blog grid item -->
                            </div>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                        <div class="col-lg-12">
                            <?php heyu_navigation_posts_nav(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>