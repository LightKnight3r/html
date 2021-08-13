<?php
($lang == 'en') ? $category = get_term( 9 ) : $category = get_term( 60 );
$args = array(
    'post_type' => 'post',
    'category_name'=> $category->slug,
    'posts_per_page'=> 5,
    'order'=> 'ASC',
);
$query = new WP_Query( $args );

?>

<section class="team-member-area" id="team">
    
    <div class="container">
        
        <?php echo get_template_part('template/page', 'dowload-team'); ?>

        <?php echo get_template_part('template/page', 'contact'); ?>
    </div>
</section>

