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
                    <span class="subtitle" style="font-size:30px"><?php echo get_the_title( $page_id ) ?></span>
                    <?php echo $content; ?>
                </div><!-- //. section title -->
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="how-it-work-tab-nav">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="account-tab" data-toggle="tab" href="#account" role="tab" aria-controls="account" aria-selected="true"><i class="flaticon-checked"></i> Lên đơn hàng <span class="number">1</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="false"><i class="flaticon-settings-1"></i> Tài xế nhận đơn <span class="number">2</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="chat-tab" data-toggle="tab" href="#chat" role="tab" aria-controls="chat" aria-selected="false"><i class="flaticon-chat-1"></i> Xem lộ trình di chuyển <span class="number">3</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="four-tab" data-toggle="tab" href="#four" role="tab" aria-controls="four" aria-selected="false"><i class="flaticon-chat-1"></i> Đánh giá tài xế <span class="number">4</span></a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content wow slideInUp">
                    <div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
                        <div class="how-it-works-tab-content">
                            <div class="row justify-content-center">
                                <div class="col-lg-6">
                                    <div class="left-content-area">
                                        <h4 class="title">1. Lên đơn hàng </h4>
                                        <p>- Chọn dịch vụ bạn mong muốn</p>
                                        <p>- Nhập địa chỉ nhận hàng - giao hàng và thông tin người nhận hàng</p>
                                        <p>- Kiểm tra phí ship và nhập mã khuyến mại (nếu có) và ấn "Tạo đơn hàng"</p>
                                        <a href="#settings">
                                        <h4 class="title">2. Tài xế nhận đơn </h4>
                                        <p>- HeyU gửi thông báo cho bạn ngay khi có tài xế nhận đơn</p>
                                        <p>- Tài xế sẽ gọi hoặc nhắn tin luôn cho bạn để xác nhận đơn hàng</p>
                                        <p>- Bạn có thể nhắn tin/ gọi điện miễn phí với tài xế qua ứng dụng</p>
                                        </a>
                                        <h4 class="title">3. Xem lộ trình di chuyển </h4>
                                        <p>- Bạn có thể dõi theo tài xế di chuyển đến điểm lấy và giao hàng trên bản đồ bằng thời gian thực</p>
                                        <h4 class="title">4. Đánh giá tài xế </h4>
                                        <p>- HeyU sẽ gửi thông báo tới bạn khi đơn hàng được tài xế giao thành công</p>
                                        <p>- Bạn vui lòng đánh giá sao cho tài xế nhé</p>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="right-content-area">
                                        <div class="img-wrapper">
                                            <?php if(empty($page_id)) { ?>
                                                <img src="https://heyu.vn/wp-content/uploads/2021/08/web-04.png" alt="how it works image">
                                            <?php } else { ?>
                                                <img src="https://heyu.vn/wp-content/uploads/2021/08/web-04.png" alt="how it works image">
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                        <div class="how-it-works-tab-content">
                            <div class="row justify-content-center">
                                <div class="col-lg-6">
                                    <div class="left-content-area">
                                        <h4 class="title">1. Lên đơn hàng </h4>
                                        <p>- Chọn dịch vụ bạn mong muốn</p>
                                        <p>- Nhập địa chỉ nhận hàng - giao hàng và thông tin người nhận hàng</p>
                                        <p>- Kiểm tra phí ship và nhập mã khuyến mại (nếu có) và ấn "Tạo đơn hàng"</p>
                                        <h4 class="title">2. Tài xế nhận đơn </h4>
                                        <p>- HeyU gửi thông báo cho bạn ngay khi có tài xế nhận đơn</p>
                                        <p>- Tài xế sẽ gọi hoặc nhắn tin luôn cho bạn để xác nhận đơn hàng</p>
                                        <p>- Bạn có thể nhắn tin/ gọi điện miễn phí với tài xế qua ứng dụng</p>
                                        <h4 class="title">3. Xem lộ trình di chuyển </h4>
                                        <p>- Bạn có thể dõi theo tài xế di chuyển đến điểm lấy và giao hàng trên bản đồ bằng thời gian thực</p>
                                        <h4 class="title">4. Đánh giá tài xế </h4>
                                        <p>- HeyU sẽ gửi thông báo tới bạn khi đơn hàng được tài xế giao thành công</p>
                                        <p>- Bạn vui lòng đánh giá sao cho tài xế nhé</p>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="right-content-area">
                                        <div class="img-wrapper">
                                            <?php if(empty($page_id)) { ?>
                                                <img src="https://heyu.vn/wp-content/uploads/2021/08/web-03.png" alt="how it works image">
                                            <?php } else { ?>
                                                <img src="https://heyu.vn/wp-content/uploads/2021/08/web-03.png" alt="how it works image">
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="chat" role="tabpanel" aria-labelledby="chat-tab">
                        <div class="how-it-works-tab-content">
                            <div class="row justify-content-center">
                                <div class="col-lg-6">
                                    <div class="left-content-area">
                                        <h4 class="title">1. Lên đơn hàng </h4>
                                        <p>- Chọn dịch vụ bạn mong muốn</p>
                                        <p>- Nhập địa chỉ nhận hàng - giao hàng và thông tin người nhận hàng</p>
                                        <p>- Kiểm tra phí ship và nhập mã khuyến mại (nếu có) và ấn "Tạo đơn hàng"</p>
                                        <h4 class="title">2. Tài xế nhận đơn </h4>
                                        <p>- HeyU gửi thông báo cho bạn ngay khi có tài xế nhận đơn</p>
                                        <p>- Tài xế sẽ gọi hoặc nhắn tin luôn cho bạn để xác nhận đơn hàng</p>
                                        <p>- Bạn có thể nhắn tin/ gọi điện miễn phí với tài xế qua ứng dụng</p>
                                        <h4 class="title">3. Xem lộ trình di chuyển </h4>
                                        <p>- Bạn có thể dõi theo tài xế di chuyển đến điểm lấy và giao hàng trên bản đồ bằng thời gian thực</p>
                                        <h4 class="title">4. Đánh giá tài xế </h4>
                                        <p>- HeyU sẽ gửi thông báo tới bạn khi đơn hàng được tài xế giao thành công</p>
                                        <p>- Bạn vui lòng đánh giá sao cho tài xế nhé</p>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="right-content-area">
                                        <div class="img-wrapper">
                                            <?php if(empty($page_id)) { ?>
                                                <img src="https://heyu.vn/wp-content/uploads/2021/08/web-02.png" alt="how it works image">
                                            <?php } else { ?>
                                                <img src="https://heyu.vn/wp-content/uploads/2021/08/web-02.png" alt="how it works image">
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="four" role="tabpanel" aria-labelledby="four-tab">
                        <div class="how-it-works-tab-content">
                            <div class="row justify-content-center">
                                <div class="col-lg-6">
                                    <div class="left-content-area">
                                        <h4 class="title">1. Lên đơn hàng </h4>
                                        <p>- Chọn dịch vụ bạn mong muốn</p>
                                        <p>- Nhập địa chỉ nhận hàng - giao hàng và thông tin người nhận hàng</p>
                                        <p>- Kiểm tra phí ship và nhập mã khuyến mại (nếu có) và ấn "Tạo đơn hàng"</p>
                                        <h4 class="title">2. Tài xế nhận đơn </h4>
                                        <p>- HeyU gửi thông báo cho bạn ngay khi có tài xế nhận đơn</p>
                                        <p>- Tài xế sẽ gọi hoặc nhắn tin luôn cho bạn để xác nhận đơn hàng</p>
                                        <p>- Bạn có thể nhắn tin/ gọi điện miễn phí với tài xế qua ứng dụng</p>
                                        <h4 class="title">3. Xem lộ trình di chuyển </h4>
                                        <p>- Bạn có thể dõi theo tài xế di chuyển đến điểm lấy và giao hàng trên bản đồ bằng thời gian thực</p>
                                        <h4 class="title">4. Đánh giá tài xế </h4>
                                        <p>- HeyU sẽ gửi thông báo tới bạn khi đơn hàng được tài xế giao thành công</p>
                                        <p>- Bạn vui lòng đánh giá sao cho tài xế nhé</p>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="right-content-area">
                                        <div class="img-wrapper">
                                            <?php if(empty($page_id)) { ?>
                                                <img src="https://heyu.vn/wp-content/uploads/2021/08/web-01.png" alt="how it works image">
                                            <?php } else { ?>
                                                <img src="https://heyu.vn/wp-content/uploads/2021/08/web-01.png" alt="how it works image">
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
