<!-- footer area start -->
<footer class="footer-area">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget about_widget">
<!--                        --><?php
//                        if ( function_exists( 'the_custom_logo' ) ) {
//                            the_custom_logo();
//                        }
//                        ?>
                        <?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget nav_menus_widget">
                        <?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget nav_menus_widget">
                        <?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget nav_menus_widget">
                        <?php dynamic_sidebar( 'fourth-footer-widget-area' ); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="info-area copyright-area" id="info"><!-- copyright area -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-inner"><!-- copyright inner wrapper -->
                        <div class="left-content-area"><!-- left content area -->
                            <?php dynamic_sidebar( 'five-footer-widget-area' ); ?>
                        </div><!-- //. left content aera -->
                    </div><!-- //.copyright inner wrapper -->
                </div>
            </div>
        </div>
    </div><!-- //. copyright area -->
</footer>
<!-- footer area end -->

<!-- preloader area start -->
<div class="preloader-wrapper" id="preloader">
    <div class="preloader" >
        <div class="sk-circle">
            <div class="sk-circle1 sk-child"></div>
            <div class="sk-circle2 sk-child"></div>
            <div class="sk-circle3 sk-child"></div>
            <div class="sk-circle4 sk-child"></div>
            <div class="sk-circle5 sk-child"></div>
            <div class="sk-circle6 sk-child"></div>
            <div class="sk-circle7 sk-child"></div>
            <div class="sk-circle8 sk-child"></div>
            <div class="sk-circle9 sk-child"></div>
            <div class="sk-circle10 sk-child"></div>
            <div class="sk-circle11 sk-child"></div>
            <div class="sk-circle12 sk-child"></div>
        </div>
    </div>
</div>

<!-- preloader area end -->

<!-- back to top area start -->
<div class="back-to-top">
    <i class="fas fa-angle-up"></i>
</div>
<!-- back to top area end -->
<?php wp_footer();?>
</body>
</html>
