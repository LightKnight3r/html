<div class="sidebar widget-area"><!-- widget area -->

    <div class="widget widget_search"><!-- widget  -->
        <h4 class="widget-title">Search</h4>

        <form method="get" class="search-form" id="searchform" action="<?php bloginfo('url'); ?>/">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search" value="<?php the_search_query(); ?>"
                       name="s" id="s"/>
            </div>
            <button id="searchsubmit" value="Search" class="submit-btn" type="submit"><i class="fas fa-search"></i>
            </button>
        </form>
    </div>
    <!-- //. widget -->
    <div class="widget widget_categories"><!-- widget  -->
        <h4 class="widget-title">Categories</h4>
        <ul>
            <?php $categories = get_categories();
            $categories = get_categories();
            foreach ($categories as $category) {
                echo '<li class="cat-item"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
            }
            ?>
        </ul>
    </div>
    <div class="widget widget_popular_posts"><!-- widget  -->
        <h4 class="widget-title">Popular Posts</h4>
        <ul>
            <?php echo popularPosts(5); ?>
        </ul>
    </div>
    <div class="widget widget_tag_cloud"><!-- widget -->
        <h4 class="widget-title">Tags</h4>
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
//                'number'  => 5,
                'include' => $term_ids,
            ));
        }
        ?>
        <div class="tagcloud">
            <?php
            foreach ( (array) $tags as $tag ) {
                echo '<a href="' . get_tag_link ($tag->term_id) . '" rel="tag">' . $tag->name . '</a>';
            }
            ?>
        </div>
    </div>

</div>