<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>

    <!-- Bootstrap CSS -->
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    <link rel="stylesheet" href="<?php echo base_url('public') ?>/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url('public') ?>/owlcarousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url('public') ?>/css/head.css" type="text/css">
    <link rel="stylesheet" href="public/css/head.css" type="text/css">
    <link rel="stylesheet" href="public/css/dropbar.css" type="text/css">
    <link rel="stylesheet" href="public/css/nav-bar.css" type="text/css">
    <link rel="stylesheet" href="public/css/slider.css" type="text/css">
    <link rel="stylesheet" href="public/css/flage.css" type="text/css">
    <link rel="stylesheet" href="public/css/slider2.css" type="text/css">
    <link rel="stylesheet" href="public/css/slideren3.css" type="text/css">
    <link rel="stylesheet" href="public/css/slider4.css" type="text/css">
    <link rel="stylesheet" href="public/css/new.css" type="text/css">
    <link rel="stylesheet" href="public/css/footering.css" type="text/css">
    <link rel="stylesheet" href="public/css/reponsive.css" type="text/css">
    <link rel="stylesheet" href="public/css/logout.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url('public') ?>/css/user_site.css">

</head>

<body>
    <div class="main-container">
        <div class="sub-container">
            <div class="user_main">
                <div class="user_header">
                    <div class="user_avatar">
                        <div class="inner_avatar">
                            <?php foreach ($user->getResult() as $key => $val) : ?>
                                <img src="<?php echo base_url('public') ?>/Avatar/<?= $val->avatar ?>" alt="" width="80" height="80" />
                                <br>
                                <span><?= $val->name ?></span>
                            <?php endforeach; ?>
                            <div class="user_setting">
                                <img src="<?php echo ('public') ?>/img/app_icon.png" alt="" width="30" height="30" />
                                <div class="user_list_update">
                                    <ul>
                                        <li><a href="<?= base_url('add_avatar') ?>">Add avatar</a></li>
                                        <li><a href="">Edit profile</a></li>
                                        <li><a href="<?= base_url('index_add') ?>">Add new address</a></li>
                                        <li><a href="<?= base_url('payment') ?>">payment</a></li>
                                        <li><a href="">Personal information</a></li>
                                        <li><a href="<?= base_url('orderview') ?>">order_view</a></li>
                                        <li><a href="<?= base_url('orderdetail') ?>">order_detail_view</a></li>
                                        <li><a href="<?= base_url('coup_view') ?>">Coupon View</a></li>
                                        <li><a href="<?= base_url('logout') ?>">Logout</a></li>
                                        <li><a href="<?= base_url('/') ?>">Return home</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="user_middle">
                    <div class="user_list">

                        <table class="table_user">
                            <thead>
                                <tr>
                                    <th><a href="">To Pay <mark>100</mark></a></th>
                                    <th><a href="">To Ship<mark>0</mark></a></th>
                                    <th><a href="">To Recive<mark>0</mark></a></th>
                                    <th><a href="">To Review<mark>0</mark></a></th>
                                    <th><a href="">Return & Cancellation<mark>0</mark></a></th>
                                </tr>
                            </thead>
                        </table>

                    </div>
                    <div class="user_sub">
                        <div class="user_control">
                            <?= $this->renderSection("content"); ?>
                        </div>
                    </div>
                    <div class="user_cate">
                        <legend>You May Like Them</legend>
                        <div class="main_cate">
                            <div class="owl-carousel owl-theme">
                                <?php foreach ($product->getResult() as $key => $value) : ?>
                                    <div class="item">
                                        <img id="img" src="<?php echo ('public') ?>/uploads/<?= $value->image ?>" alt="">
                                        <span>Name:<?= $value->name ?></span>
                                        <span>Sales:<?= $value->sale_price ?>$</span>
                                        <span>Price:<del><?= $value->price ?></del>$<span>
                                                </br>
                                                <span id="buy"><a href="">Buy now</a></span>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
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
    </div>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('public') ?>/owlcarousel/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".public.owl-carousel").owlCarousel();
        });
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 3,
                    nav: false
                },
                1000: {
                    items: 5,
                    nav: true,
                    loop: false
                }
            }
        })
    </script>
</body>

</html>