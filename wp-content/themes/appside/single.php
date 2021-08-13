<?php get_header() ?>
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
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <?php ?>
                <div class="single-post-details-item"><!-- blog single content -->
                    <div class="thumb">
                        <?php if(has_post_thumbnail()) { ?>
                            <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()), 'thumbnail' ); ?>" alt="blog image">
                        <?php } else { ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/blog-details.jpg" alt="blog image">
                        <?php } ?>
                    </div>
                    <div class="entry-content">
                        <ul class="post-meta">
                            <li><a href="#"><i class="far fa-calendar-alt"></i> <?php echo get_the_date('d-m-y') ?></a></li>
                            <li><a href="#"><i class="far fa-user"></i> <?php echo get_the_author() ?></a></li>
                            <?php
                            global $wpdb;
                            $term_ids = $wpdb->get_col("
                            SELECT term_id , count(*) cont FROM $wpdb->term_taxonomy
                            INNER JOIN $wpdb->term_relationships ON $wpdb->term_taxonomy.term_taxonomy_id=$wpdb->term_relationships.term_taxonomy_id
                            INNER JOIN $wpdb->posts ON $wpdb->posts.ID = $wpdb->term_relationships.object_id
                            WHERE DATE_SUB(CURDATE(), INTERVAL 7 DAY) <= $wpdb->posts.post_date AND  $wpdb->term_taxonomy.taxonomy='post_tag'
                            GROUP BY term_id
                            ORDER BY cont DESC
                            LIMIT 5");

                            if(count($term_ids) > 0){
                                $tags = get_tags(array(
                                    'orderby' => 'count',
                                    'order'   => 'DESC',
                                    'number'  => 5,
                                    'include' => $term_ids,
                                ));
                            }
                            ?>
                            <li class="cat"><i class="fas fa-tags"></i>
                                <?php
                                    foreach ( (array) $tags as $tag ) {
                                        echo '<a href="' . get_tag_link ($tag->term_id) . '" rel="tag">' . $tag->name . '</a>';
                                    }
                                ?>
                            </li>
                        </ul>
                        <h4 class="title"><?php echo get_the_title() ?></h4>
                        <?php echo get_the_content() ?>
                    </div>
                    <div class="entry-footer"><!-- entry footer -->
                        <div class="left">
                            <ul class="tags">
                                <li class="title">Tags: </li>
                                <li>
                                    <?php
                                        foreach ( (array) $tags as $tag ) {
                                            echo '<a href="' . get_tag_link ($tag->term_id) . '" rel="tag">' . $tag->name . '</a>';
                                        }
                                    ?>
                                </li>
                            </ul>
                        </div>
                        <div class="right">
                            <ul class="social-share">
                                <li><a href="<?php echo get_field( 'fa-facebook', get_the_ID() ) ?>"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="<?php echo get_field( 'fa-twitter', get_the_ID() ) ?>"><i class="fab fa-twitter"></i></a></li>
<!--                                <li><a href="--><?php //echo get_field( 'fa-facebook', $post->ID ) ?><!--"><i class="fab fa-google-plus-g"></i></a></li>-->
                                <li><a href="<?php echo get_field( 'fa-linkedin', get_the_ID() ) ?>"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div><!-- //. entry footer -->
                    <?php
                    if ( comments_open() || get_comments_number() ) {
                        comments_template();
                    }
                    ?>
                </div>
            </div>
            <div class="col-lg-4">
                <?php get_sidebar() ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer() ?>