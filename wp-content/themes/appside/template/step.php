<?php
/* Template Name: Page How It Works Area */
?>
<?php
    $pages = get_pages(array(
        'meta_key' => '_wp_page_template',
        'meta_value' => 'template/page-how-it-works-area.php'
    ));
    foreach($pages as $page){
        $page_id = $page->ID;
    }
    $page_id_content = get_post($page_id);
    $content = $page_id_content->post_content;
    $content = apply_filters('the_content', $content);
    $content = str_replace(']]>', ']]>', $content);
?>

<section class="how-it-work-area">
    <div class="shape-1"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/08.png" alt=""></div>
    <div class="shape-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/09.png" alt=""></div>
    <div class="shape-3"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/08.png" alt=""></div>
    <div class="shape-4"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/09.png" alt=""></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="section-title"><!-- section title -->
                    <span class="subtitle"><?php echo get_the_title( $page_id ) ?></span>
                    <?php echo $content; ?>
                </div><!-- //. section title -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="how-it-work-tab-nav">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="account-tab" data-toggle="tab" href="#account" role="tab" aria-controls="account" aria-selected="true"><i class="flaticon-checked"></i> <?php echo get_field( 'tab_1', $page_id ) ?> <span class="number">1</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="false"><i class="flaticon-settings-1"></i> <?php echo get_field( 'tab_2', $page_id ) ?> <span class="number">2</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="chat-tab" data-toggle="tab" href="#chat" role="tab" aria-controls="chat" aria-selected="false"><i class="flaticon-chat-1"></i> <?php echo get_field( 'tab_3', $page_id ) ?> <span class="number">3</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="chat-tab" data-toggle="tab" href="#chat" role="tab" aria-controls="chat" aria-selected="false"><i class="flaticon-chat-1"></i> <?php echo get_field( 'tab_4', $page_id ) ?> <span class="number">4</span></a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content wow slideInUp">
                    <div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
                        <div class="how-it-works-tab-content">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="left-content-area">
                                        <h4 class="title"><?php echo get_field( 'tab_1', $page_id ) ?></h4>
                                        <?php echo get_field( 'content_tab_1', $page_id ) ?>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="right-content-area">
                                        <div class="img-wrapper">
                                            <?php if(empty($page_id)) { ?>
                                                <img src="<?php echo get_the_post_thumbnail_url("", 'thumbnail' );?>" alt="how it works image">
                                            <?php } else { ?>
                                                <img src="<?php echo get_the_post_thumbnail_url($page_id, 'thumbnail' );?>" alt="how it works image">
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                        <div class="how-it-works-tab-content">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="left-content-area">
                                        <h4 class="title"><?php echo get_field( 'tab_2', $page_id ) ?></h4>
                                        <?php echo get_field( 'content_tab_2', $page_id ) ?>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="right-content-area">
                                        <div class="img-wrapper">
                                            <?php if(empty($page_id)) { ?>
                                                <img src="<?php echo get_the_post_thumbnail_url("", 'thumbnail' );?>" alt="how it works image">
                                            <?php } else { ?>
                                                <img src="<?php echo get_the_post_thumbnail_url($page_id, 'thumbnail' );?>" alt="how it works image">
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="chat" role="tabpanel" aria-labelledby="chat-tab">
                        <div class="how-it-works-tab-content">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="left-content-area">
                                        <h4 class="title"><?php echo get_field( 'tab_3', $page_id ) ?></h4>
                                        <?php echo get_field( 'content_tab_3', $page_id ) ?>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="right-content-area">
                                        <div class="img-wrapper">
                                            <?php if(empty($page_id)) { ?>
                                                <img src="<?php echo get_the_post_thumbnail_url("", 'thumbnail' );?>" alt="how it works image">
                                            <?php } else { ?>
                                                <img src="<?php echo get_the_post_thumbnail_url($page_id, 'thumbnail' );?>" alt="how it works image">
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

