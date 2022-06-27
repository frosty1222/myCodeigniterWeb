<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>

    <!-- Bootstrap CSS -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!-- [if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif] -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url('public') ?>/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url('public') ?>/owlcarousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url('public') ?>/css/head.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('public') ?>/css/dropbar2.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('public') ?>/css/nav-bar.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('public') ?>/css/slider.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('public') ?>/css/flage.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('public') ?>/css/slider2.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('public') ?>/css/slideren3.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('public') ?>/css/slider4.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('public') ?>/css/new.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('public') ?>/css/footering.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('public') ?>/css/cart.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('public') ?>/css/signin.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('public') ?>/css/galery.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('public') ?>/css/service.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('public') ?>/css/support.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('public') ?>/css/contact.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('public') ?>/css/product.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('public') ?>/css/detail.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('public') ?>/css/newspaper.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('public') ?>/css/sub_news.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('public') ?>/css/register.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('public') ?>/css/bill.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('public') ?>/css/payment.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('public') ?>/rate_star/css/star-rating.css" media="all" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url('public') ?>/rate_star/themes/krajee-fa/theme.css" media="all" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url('public') ?>/rate_star/themes/krajee-svg/theme.css" media="all" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url('public') ?>/rate_star/themes/krajee-uni/theme.css" media="all" type="text/css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="<?php echo base_url('public') ?>/rate_star/js/star-rating.js" type="text/javascript"></script>
    <script src="<?php echo base_url('public') ?>/rate_star/themes/krajee-fa/theme.js" type="text/javascript"></script>
    <script src="<?php echo base_url('public') ?>/rate_star/themes/krajee-svg/theme.js" type="text/javascript"></script>
    <script src="<?php echo base_url('public') ?>/rate_star/themes/krajee-gly/theme.js" type="text/javascript"></script>
    <script src="<?php echo base_url('public') ?>/rate_star/themes/krajee-uni/theme.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <div class="main-container">
        <div class="header">
            <div class="sub-header">
                <div class="left-header">
                    <div class="logo-header">
                        <img src="<?php echo base_url('public') ?>/img/logo.png" alt="">
                    </div>
                    <div class="searching-header">
                        <input type="text" class="form-control" value="Nhập từ khóa tìm kiếm..." onfocus="if (this.value == 'Nhập từ khóa tìm kiếm...'){this.value='';}" onblur="if (this.value == '') {this.value='Nhập từ khóa tìm kiếm...';}">
                        <button type="button"><i class="fa fa-search fa-2x"></i></button>
                    </div>
                </div>
                <div class="right-header">
                    <div class="shopping-header">
                        <div class="shopping-cart">
                            <span><i class="fa fa-shopping-cart fa-2x" style="color:white"></i></span>
                            <a href="<?= base_url('cart_view') ?>">Giỏ hàng</a>
                        </div>
                        <div class="login-header">
                            <?php if (isset($user2)) : ?>
                                <?php foreach ($user->getResult() as $row) : ?>
                                    <a href="<?= base_url('user_main') ?>" id="user_set"><img src="<?php echo base_url('public') ?>/Avatar/<?= $row->avatar ?>" alt="" width="30" height="30"><span>Hi!</span></a>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <span><i class="fa fa-user fa-2x" style="color: white;"></i></span>
                                <a href="<?= base_url('login') ?>" class="icon2">Đăng nhập</a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="contact-header">
                        <div class="volumn">
                            <a href="<?= base_url('contact') ?>" id="volume"><i class="fas fa-phone-volume" style="color:white"></i></a>
                        </div>
                        <div class="contact-infor">
                            <span>
                                <h3>HOT LINE:1900.233</h3>
                            </span>
                            <span>Mua hàng - góp ý - bảo hành</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main_menu"></div>
        <div class="menu">
            <div class="menu-content">
                <div class="box_menu">
                    <div class="page">
                        <div class="dv-menu-left">
                            <div class="dv-nut-menu" id="bar"><i class="fa fa-bars" style="color:white"></i>&nbsp; <span>danh mục sản phẩm</span></div>
                            <div class="dv-ul-menu ">
                                <ul class="minor">
                                    <li class="menu-item">
                                        <a href="#"><i class="fa fa-th-large"></i>
                                            <h2>Máy Ảnh</h2><i class="fa fa-angle-right"></i>
                                        </a>
                                        <ul class="menu-sub">
                                            <li><a href="#">
                                                    <h2>Máy Ảnh Canon</h2>
                                                </a></li>
                                            <li><a href="#">
                                                    <h2>Máy Ảnh Nikon</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Máy Ảnh Sony</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Máy Ảnh Fujifilm</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Máy Ảnh Pentax</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Máy Ảnh Panasonic</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Máy Ảnh Olympus</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Máy Ảnh Samsung</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Máy Ảnh Mirrorless</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Máy Ảnh Chuyên Nghiệp</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Máy Ảnh Du lịch</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Máy Ảnh Siêu Zoom</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Máy Ảnh Chụp Dưới Nước</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Máy Ảnh Chụp Lấy Liền</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Mua Trả Góp 0 Đồng</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Máy Ảnh Ricoh</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Máy Ảnh Leica</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Máy Ảnh Lomography</h2>
                                                </a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="minor">
                                    <li class="menu-item"><a href="#"><i class="fa fa-th-large"></i>
                                            <h2>Âm Thanh</h2><i class="fa fa-angle-right"></i>
                                        </a>
                                        <ul class="menu-sub">
                                            <li><a href="#">
                                                    <h2>Combo Bộ Dàn Âm Thanh</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Dàn Âm Thanh</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Micro Karaoke</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Bộ Trộn Âm Thanh Mixer</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Bộ Khuếch Đại Âm Thanh</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Loa</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Tai Nghe</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Amply</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Đầu CD, DVD, Karaoke</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Máy Ghi Âm</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Máy Nghe Nhạc</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Cassette, Radio</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Phụ Kiện Âm Thanh</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Loa Karaoke</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Bộ Giải Mã DAC Yamaha</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Loa Kéo Di Động</h2>
                                                </a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="minor">
                                    <li class="menu-item"><a href="#"><i class="fa fa-th-large"></i>
                                            <h2>Khuyến Mãi</h2><i class="fa fa-angle-right"></i>
                                        </a>
                                        <ul class="menu-sub">
                                            <li> <a href="#">
                                                    <h2>Mã Giảm Giá</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Khuyến Mãi Tại Hồ Chí Minh</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Khuyến Mãi Tại Hà Nội</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Khuyến Mãi Tại Đà Nẵng</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Khuyến Mãi Máy Ảnh và Máy Quay</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Khuyến Mãi Tivi</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Khuyến Mãi Âm Thanh</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Khuyến Mãi Action Cam Sony</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Voucher Khuyến Mãi</h2>
                                                </a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="minor">
                                    <li class="menu-item"><a href="#"><i class="fa fa-th-large"></i>
                                            <h2>Phụ Kiện Máy Ảnh - Máy Quay</h2><i class="fa fa-angle-right"></i>
                                        </a>
                                        <ul class="menu-sub">
                                            <li> <a href="#">
                                                    <h2>Khung Gắn Cho Máy Ảnh</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Đèn Flash</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Máy In Ảnh</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Giấy - Mực In Ảnh</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Túi Đựng Máy Ảnh</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Chân Máy Ảnh</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Tủ Chống Ẩm</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Thẻ Nhớ</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Kính Lọc</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Hộp Chống Ẩm</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Dây Đeo</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Lens Cap</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Lens Hood</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Pin</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Sạc Pin</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Đế Pin - Battery Grip</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Trigger - Kích Đèn</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Adapter - Mount Chuyển</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Đầu Quay Chân Máy Ảnh</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Chống Sốc - Chống Nước</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Dụng Cụ Vệ Sinh Máy Ảnh</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Thiết Bị Chụp Macro</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Dây Cáp Kết Nối</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Gậy Chụp Hình Selfie</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Quà Tặng</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Đầu Đọc Thẻ Nhớ</h2>
                                                </a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="minor">
                                    <li class="menu-item"><a href="#"><i class="fa fa-th-large"></i>
                                            <h2>Thiết Bị Studio</h2><i class="fa fa-angle-right"></i>
                                        </a>
                                        <ul class="menu-sub">
                                            <li> <a href="#">
                                                    <h2>9.Solution</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Bàn Trộn Hình Ảnh</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Phông - Giá Treo Phông</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Đèn Quay Phim</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Đèn Chụp</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Đèn Led</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Dụng Cụ Tản Sáng</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Lồng Chụp - Bàn Chụp Sản Phẩm</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Chân Đèn</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Phụ Kiện Studio Khác</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Dụng Cụ Hắt Sáng</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Thiết Bị Chống Rung</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Thiết Bị Livestream</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Màn Hình Hỗ Trợ Quay</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Combo Đèn Studio</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Microphone Thu Âm</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Phụ Kiện Blackmagic Khác</h2>
                                                </a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="minor">
                                    <li class="menu-item"><a href="#"><i class="fa fa-th-large"></i>
                                            <h2>Máy Quay</h2><i class="fa fa-angle-right"></i>
                                        </a>
                                        <ul class="menu-sub">
                                            <li> <a href="#">
                                                    <h2>Máy Quay Sony</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Máy Quay Panasonic</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Máy Quay Canon</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Máy Quay Brinno</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Máy Quay Nikon</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Máy Quay JVC</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Máy Quay Gopro</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Máy Quay Polaroid</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Máy Quay Sjcam</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Máy Quay Amkov</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Máy Quay Olympus</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Máy Quay Insta360</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Máy Quay Ricoh</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Máy Quay Chuyên Nghiệp</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Máy Quay Cầm Tay</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Máy Quay Dưới Nước</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Máy Quay Xiaomi</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Máy Quay Blackmagic</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Máy Quay DJI</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Máy Quay Kandao</h2>
                                                </a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="minor">
                                    <li class="menu-item"><a href="#"><i class="fa fa-th-large"></i>
                                            <h2>Ống kính</h2><i class="fa fa-angle-right"></i>
                                        </a>
                                        <ul class="menu-sub">
                                            <li> <a href="#">
                                                    <h2>Ống Kính Canon</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Ống Kính Nikon</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Ống Kính Fujifilm</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Ống Kính Sony</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Ống Kính Sigma</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Ống Kính Samsung</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Ống Kính Samyang</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Ống Kính Tamron</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Ống Kính Tokina</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Ống Kính Voigtlander</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Ống Kính Brinno</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Ống Kính Yongnuo</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Ống Kính Pentax</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Ống Kính Olympus</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Ống Kính Panasonic</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Ống Kính Carl Zeiss</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Ống Kính Leica</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Ống Kính Laowa</h2>
                                                </a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="minor">
                                    <li class="menu-item"><a href="#"><i class="fa fa-th-large"></i>
                                            <h2>Máy Tính, Thiết Bị Mạng, Game</h2><i class="fa fa-angle-right"></i>
                                        </a>
                                        <ul class="menu-sub">
                                            <li> <a href="#">
                                                    <h2>iPad</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Macbook</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Phụ Kiện Apple</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Máy Chơi Game Playstation</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Ổ Cứng</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Router Wifi</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Màn Hình Máy Vi Tính</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Chuột và Bàn Di Chuột</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Máy Chiếu</h2>
                                                </a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="minor">
                                    <li class="menu-item"><a href="#"><i class="fa fa-th-large"></i>
                                            <h2>Đồ Chơi, Phụ Kiện Cao Cấp</h2><i class="fa fa-angle-right"></i>
                                        </a>
                                        <ul class="menu-sub">
                                            <li> <a href="#">
                                                    <h2>Phụ Kiện Cao Cấp Khác</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Đồ Dã Ngoại</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Vòng Đeo Cao Cấp</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>GPS Hỗ Trợ Xe Đạp</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Phụ Kiện Pelican</h2>
                                                </a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="minor">
                                    <li class="menu-item"><a href="#"><i class="fa fa-th-large"></i>
                                            <h2>Ống Nhòm</h2><i class="fa fa-angle-right"></i>
                                        </a>
                                        <ul class="menu-sub">
                                            <li> <a href="#">
                                                    <h2>Ống Nhòm Nikon</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Ống Nhòm Steiner</h2>
                                                </a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="minor">
                                    <li class="menu-item"><a href="#"><i class="fa fa-th-large"></i>
                                            <h2>Smart Home</h2><i class="fa fa-angle-right"></i>
                                        </a>
                                        <ul class="menu-sub">
                                            <li> <a href="#">
                                                    <h2>Asus Smart Home</h2>
                                                </a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="minor">
                                    <li class="menu-item"><a href="#"><i class="fa fa-th-large"></i>
                                            <h2>Tivi</h2><i class="fa fa-angle-right"></i>
                                        </a>
                                        <ul class="menu-sub">
                                            <li> <a href="#">
                                                    <h2>Tivi Sony</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2> Tivi LG</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Tivi Samsung</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Tivi Toshiba</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Tivi Panasonic</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Tivi Darling</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Tivi Asanzo</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Tivi Ruby</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Tivi VTB</h2>
                                                </a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="minor">
                                    <li class="menu-item"><a href="#"><i class="fa fa-th-large"></i>
                                            <h2>Bảng vẽ điện tử</h2><i class="fa fa-angle-right"></i>
                                        </a>
                                        <ul class="menu-sub">
                                            <li> <a href="#">
                                                    <h2>Bảng Vẽ Điện Tử Wacom</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Bút Cảm Ứng Wacom</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Sổ Ghi Chú Điện Tử Wacom</h2>
                                                </a></li>
                                            <li> <a href="#">
                                                    <h2>Phụ Kiện Wacom</h2>
                                                </a></li>
                                        </ul>
                                    </li>
                                    <div class="clearfix"></div>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="nav-bar">
                    <div class="bar">
                        <ul class="clearfix">
                            <li><a href="<?= base_url('/') ?>">trang chủ</a></li>
                            <li><a href="<?= base_url('product') ?>">sản phẩm</a></li>
                            <li>
                                <a href="<?= base_url('newspaper') ?>">tin tức</a><i class="fa fa-angle-down" id="angle1"></i>
                                <ul class="down" id="down1">
                                    <li><a href="#">tin tức nội bộ</a></li>
                                    <li><a href="#">tin tức thị trường</a></li>
                                    <li><a href="#">tin tức khuyến mại</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="<?= base_url('service') ?>">dịch vụ </a><i class="fa fa-angle-down" id="angle2"></i>
                                <ul class="down" id="down2">
                                    <li><a href="#">giao hàng miễn phí</a></li>
                                    <li><a href="#">bảo hành - sửa chữa</a></li>
                                    <li><a href="#">đổi máy cũ lấy máy mới</a></li>
                                </ul>
                            </li>
                            <li><a href="<?= base_url('galery') ?>">thư viên </a><i class="fa fa-angle-down" id="angle3"></i>
                                <ul class="down" id="down3">
                                    <li><a href="#">thư viện ảnh</a></li>
                                    <li><a href="#">thư viện video</a></li>
                                </ul>
                            </li>
                            <li><a href="<?= base_url('support') ?>">hỗ trợ khách</a><i class="fa fa-angle-down" id="angle4"></i>
                                <ul class="down" id="down4">
                                    <li><a href="#">hướng dẫn mua hàng</a></li>
                                    <li><a href="#">chính sách bảo hành</a></li>
                                    <li><a href="#">hình thức thanh toán </a></li>
                                    <li><a href="#">phương thức giao hàng</a></li>
                                </ul>
                                <div class="clearfix"></div>
                            </li>
                            <li><a href="<?= base_url('contact') ?>">liên hệ</a></li>
                            <li id="flag">
                                <a href="#">
                                    <img src="<?php echo base_url('public') ?>/img/Capture2.png">
                                </a>
                                <a href="#">
                                    <img src="<?php echo base_url('public') ?>/img/Capture.png">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <?= $this->renderSection("content"); ?>
        <div class="footer">
            <div class="container-footer" style="background-image: url('<?php echo base_url('public') ?>/img/brand-slide/footer.jpg')">
                <div class="address">
                    <div class="float-left">
                        <ul>
                            <li class="float"><img src="<?php echo base_url('public') ?>/img/logo.png" alt=""></li>
                            <li class="float1">
                                <h3>VĂN PHÒNG CHÍNH & TRUNG TÂM BẢO HÀNH</h3>
                                <h4>196 Nguyễn Đình Chiểu, Phường 6, Quận 3, Tp.HCM.</h4>
                                <h4>Hotline : 1900 2227 | Điện thoại : (028) 73073776</h4>
                                <span>Fax : (028) 62906490</span>
                            </li>
                            <li class="float2">
                                <h3>TẠI HÀ NỘI & BẢO HÀNH</h3>
                                <h4>Tầng 9, toà nhà Diamond (Handico 6), Số 2 Hoàng Đạo Thuý, Trung Hoà Nhân Chính, Quận Thanh Xuân, Hà Nội.</h4>
                                <span>Điện thoại: (024) 73073776</span>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="list_pro">
            <div class="pro-list">
                <ul>
                    <li>
                        <h1>chính sách & quy định</h1>
                        <span class="small-line" id="small-line"></span>
                    </li>
                    <li>
                        <h3><a href="#">hướng dẫn mua hàng</a></h3>
                    </li>
                    <li>
                        <h3><a href="#">chính sách bảo hành</a></h3>
                    </li>
                    <li>
                        <h3><a href="#">hình thức thanh toán</a></h3>
                    </li>
                    <ul id="khac">
                        <li>
                            <h1>dịch vụ khác</h1>
                            <span class="small-line"></span>
                        </li>
                        <li>
                            <h3><a href="#">thư mời hợp tác</a></h3>
                        </li>
                        <li>
                            <h3><a href="#">chính sách bảo mật thông tin</a></h3>
                        </li>
                    </ul>
                </ul>
                <ul>
                    <li>
                        <h1>thiết bị studio</h1>
                        <span class="small-line"></span>
                    </li>
                    <a href=""></a>
                    <li>
                        <h3><a href="#">9.Solution</a></h3>
                    </li>
                    <li>
                        <h3><a href="#">bàn trộn hình ảnh</a></h3>
                    </li>
                    <li>
                        <h3><a href="#">phông-giá treo phông</a></h3>
                    </li>
                    <li>
                        <h3><a href="#">đèn quay phim</a></h3>
                    </li>
                    <li>
                        <h3><a href="#">dụng cụ tản sáng</a></h3>
                    </li>
                    <li>
                        <h3><a href="#">lồng chụp-bàn chụp sản phẩm</a></h3>
                    </li>
                    <li>
                        <h3><a href="#">phụ kiện studio khác</a></h3>
                    </li>
                </ul>
                <ul>
                    <li>
                        <h1>máy ảnh</h1>
                        <span class="small-line"></span>
                    </li>
                    <li>
                        <h3><a href="#">máy ảnh canon</a></h3>
                    </li>
                    <li>
                        <h3><a href="#">máy ảnh sony</a></h3>
                    </li>
                    <li>
                        <h3><a href="#">máy ảnh nikon</a></h3>
                    </li>
                    <li>
                        <h3><a href="#">máy ảnh panasonic</a></h3>
                    </li>
                    <li>
                        <h3><a href="#">máy ảnh samsung</a></h3>
                    </li>
                    <li>
                        <h3><a href="#">máy ảnh chuyên nghiệp</a></h3>
                    </li>
                    <li>
                        <h3><a href="#">máy ảnh lomography</a></h3>
                    </li>
                </ul>
                <ul>
                    <li>
                        <h1>âm thanh</h1>
                        <span class="small-line"></span>
                    </li>
                    <li>
                        <h3><a href="#">combo bộ dàn âm thanh</a></h3>
                    </li>
                    <li>
                        <h3><a href="#">dàn âm thanh</a></h3>
                    </li>
                    <li>
                        <h3><a href="#">micro karaoke</a></h3>
                    </li>
                    <li>
                        <h3><a href="#">bộ trộn âm thanh mixer</a></h3>
                    </li>
                    <li>
                        <h3><a href="#">bộ khuếch đại âm thanh</a></h3>
                    </li>
                    <li>
                        <h3><a href="#">đầu CD,DVD,karaoke</a></h3>
                    </li>
                    <li>
                        <h3><a href="#">phụ kiện âm thanh</a></h3>
                    </li>
                </ul>
            </div>

        </div>
        <div class="bottom">
            <div class="sub-bottom">
                <div class="bottom-left">
                    <ul>
                        <li>
                            <h2>CÔNG TY TNHH BANG.VN</h2>
                        </li>
                        <li>
                            <h3>MST/ĐKKD/QĐTL: 0305449167</h3>
                        </li>
                        <li>
                            <h4>Trụ sở: 750 Sư Vạn Hạnh, Phường 12, Quận 10, Tp. HCM</h4>
                        </li>
                        <li>
                            <h5>
                                Email:info@sieuthimaychu.vn
                                <br>
                                | Điện Thoại:(028) 73073776
                            </h5>
                        </li>
                    </ul>
                </div>
                <div class="bottom-midd">
                    <h3>NHẬN BẢN TIN KHUYẾN MÃI</h3>
                    <div class="middle-inside">
                        <input type="text" placeholder="Nhập Địa Chỉ Email...">
                        <a href="#">Đăng ký</a>
                    </div>
                </div>
                <div class="bottom-right">
                    <img src="<?php echo base_url('public') ?>/img/bo-cong-thuong.png" alt="#">
                    <br>
                    <h4 class="title">
                        Thiết kế website bởi
                        <span>P.A Việt Nam</span>
                        <img src="<?php echo base_url('public') ?>/img/logo-web30s.png" alt="">
                    </h4>
                </div>
            </div>

        </div>
    </div>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('public') ?>/js/hover.js"></script>
    <script src="<?php echo base_url('public') ?>/js/slide.js"></script>
    <script src="<?php echo base_url('public') ?>/js/slide_sub.js"></script>
    <script src="<?php echo base_url('public') ?>/js/slide_child.js"></script>
    <script src="<?php echo base_url('public') ?>/js/slide4.js"></script>
    <script src="<?php echo base_url('public') ?>/js/reponsive1.js"></script>
    <script src="<?php echo base_url('public') ?>/js/reponsive.js"></script>
    <script type="text/JavaScript" src="<?php echo base_url('public') ?>/js/slide_sub.js"></script>
    <script type="text/JavaScript" src="<?php echo base_url('public') ?>/js/hover2.js"></script>
    <script src="<?php echo base_url('public') ?>/owlcarousel/owl.carousel.min.js"></script>
    <script class="text/javascript">
        $(document).ready(function() {
            $(".public.owl-carousel").owlCarousel();
        });
    </script>

</body>

</html>