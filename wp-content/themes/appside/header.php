<!DOCTYPE html>
<html lang="<?php echo get_locale() ?>">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noarchive">
    <meta content='<?php echo get_template_directory_uri(); ?>/assets/img/heyu-feature-img.png' property='og:image'/>
    <title>
        <?php echo get_bloginfo('name') ?> | <?php echo get_bloginfo('description') ?>
    </title>
    <!-- favicon -->
    <link rel="shortcut icon" href="<?php echo get_site_icon_url() ?>">
    <?php wp_head();?>
</head>
<body>

<!-- navbar area start -->
<nav class="navbar navbar-area navbar-expand-lg navbar-light ">
    <div class="container">
            <?php
            if ( function_exists( 'the_custom_logo' ) ) {
                the_custom_logo();
            }
            ?>
        <div class="collapse navbar-collapse" id="apptidy">

            <!-- navbar collapse start -->
            <?php wp_nav_menu(
                array(
                    'theme_location' => 'topmenu',
                    'container' => 'false',
                    'menu_id' => 'primary-menu',
                    'menu_class' => 'navbar-nav'
                )
            ); ?>
            <!-- /.navbar-nav -->
        </div>
        <!-- /.navbar btn wrapper -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#apptidy" aria-controls="apptidy" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- navbar collapse end -->
    </div>
</nav>
<!-- navbar area end -->
