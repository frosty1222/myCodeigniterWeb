<?= $this->extend("layouts/main") ?>
<?= $this->section("title") ?>
<?= $title ?>
<?= $this->endSection(); ?>
<?= $this->section("content") ?>
<div class="main-container">
    <div class="sub-container">
        <div class="news-main">
            <div class="sub-new-main">
                <div class="news-banner">
                    <img src="<?php echo base_url('public') ?>/img/shopping-cart/library.jpg" alt="">
                    <div class="news-breacrumbs">
                        <ul>
                            <li>trang chủ</li>
                            <li>thư viện</li>
                            <li id="color">hình ảnh</li>
                        </ul>
                    </div>
                </div>
                <div class="news-inside">
                    <div class="news-galery-left">
                        <ul>
                            <li>
                                <div class="img-news"><img src="<?php echo base_url('public') ?>/img/shopping-cart/laptop.png" alt=""></div>
                                <a href="#">sản phẩm của samsung</a>
                            </li>
                            <li>
                                <div class="img-news"><img src="<?php echo base_url('public') ?>/img/shopping-cart/banner-6.png" alt=""></div>
                                <a href="#">sản phẩm của sony</a>
                            </li>
                            <li>
                                <div class="img-news"><img src="<?php echo base_url('public') ?>/img/shopping-cart/banner-4.png" alt=""></div>
                                <a href="#">sản phẩm của canon</a>
                            </li>
                            <li>
                                <div class="img-news"><img src="<?php echo base_url('public') ?>/img/shopping-cart/camera.png" alt=""></div>
                                <a href="#">sản phẩm của pentax</a>
                            </li>
                            <li>
                                <div class="img-news"><img src="<?php echo base_url('public') ?>/img/shopping-cart/camera.png" alt=""></div>
                                <a href="#">sản phẩm của pentax</a>
                            </li>
                            <li>
                                <div class="img-news"><img src="<?php echo base_url('public') ?>/img/shopping-cart/camera.png" alt=""></div>
                                <a href="#">sản phẩm của pentax</a>
                            </li>
                            <li>
                                <div class="img-news"><img src="<?php echo base_url('public') ?>/img/shopping-cart/camera.png" alt=""></div>
                                <a href="#">sản phẩm của pentax</a>
                            </li>
                            <li>
                                <div class="img-news"><img src="<?php echo base_url('public') ?>/img/shopping-cart/camera.png" alt=""></div>
                                <a href="#">sản phẩm của pentax</a>
                            </li>
                        </ul>
                    </div>
                    <div class="news-right-drop-bar">
                        <div class="news-list">
                            <div class="top-heading"><i class="fa fa-bars"></i>
                                <legend>hỗ trợ khách hàng</legend>
                            </div>
                            <ul>
                                <li>Hướng dẫn mua hàng</li>
                                <li>Chính sách bảo hành</li>
                                <li>Hình thức thanh toán</li>
                            </ul>
                        </div>
                        <div class="news-cate">
                            <div class="top-heading"><i class="fa fa-bars"></i>
                                <legend>tin tức mới nhất</legend>
                            </div>
                            <ul>
                                <li>
                                    <img src="<?php echo base_url('public') ?>/img/event/tintuc3.jpg" alt="">
                                    <div class="inside">
                                        <a href="">Những cách rẻ nhất để thay loa tivi</a>
                                        <br>
                                        <i class="fa fa-calendar-o">27/9/2021</i>
                                    </div>
                                </li>
                                <span></span>
                                <li>
                                    <img src="<?php echo base_url('public') ?>/img/event/tintuc2.jpg" alt="">
                                    <div class="inside">
                                        <a href="">Samsung đổi gió khi ra mắt tivi dọc để xem</a>
                                        <br>
                                        <i class="fa fa-calendar-o">30/7/2021</i>
                                    </div>
                                </li>
                                <span></span>
                                <li>
                                    <img src="<?php echo base_url('public') ?>/img/event/tintuc3.jpg" alt="">
                                    <div class="inside">
                                        <a href="">Những cách rẻ nhất để thay loa tivi</a>
                                        <br>
                                        <i class="fa fa-calendar-o">27/09/2021</i>
                                    </div>
                                </li>
                                <span></span>
                                <li>
                                    <img src="<?php echo base_url('public') ?>/img/event/tintuc4.jpg" alt="">
                                    <div class="inside">
                                        <a href="">Bão sale mùa dịch - Wacom giảm trực tiếp 10%</a>
                                        <br>
                                        <i class="fa fa-calendar-o">20/08/2021</i>
                                    </div>
                                </li>
                                <span></span>
                                <li>
                                    <img src="<?php echo base_url('public') ?>/img/event/tintuc2.jpg" alt="">
                                    <div class="inside">
                                        <a href="">samsung đổi gió khi ra mắt tivi dọc để xem</a>
                                        <br>
                                        <i class="fa fa-calendar-o">30/10/2021</i>
                                    </div>
                                </li>
                                <span></span>
                            </ul>
                            <h4 class="extend-news"><a href="#">xem thêm tin tức</a></h4>
                            <div class="clear"></div>
                        </div>
                        <div class="hot-product">
                            <div class="top-heading"><i class="fa fa-bars"></i>
                                <legend>sản phẩm mới</legend>
                            </div>
                            <div class="product-list">
                                <ul>
                                    <li><img src="<?php echo base_url('public') ?>/img/speaker/black.jpg" alt="">
                                        <div class="product-description">
                                            <a href="">Loa Bluetooth</a>
                                            <br>
                                            <span>250000 đ<del> 300000 đ</del></span>
                                        </div>
                                    </li>
                                    <li><img src="<?php echo base_url('public') ?>/img/right_product/img-sp6.png" alt="">
                                        <div class="product-description">
                                            <a href="">microlab</a>
                                            <br>
                                            <span>250000 đ<del> 300000 đ</del></span>
                                        </div>
                                    </li>
                                    <li><img src="<?php echo base_url('public') ?>/img/speaker/img11.png" alt="">
                                        <div class="product-description">
                                            <a href="">Loa Bluetooth</a>
                                            <br>
                                            <span>250000 đ<del> 300000 đ</del></span>
                                        </div>
                                    </li>
                                    <li><img src="<?php echo base_url('public') ?>/img/speaker/img10.png" alt="">
                                        <div class="product-description">
                                            <a href="">Loa Bluetooth</a>
                                            <br>
                                            <span>250000 đ<del> 300000 đ</del></span>
                                        </div>
                                    </li>
                                    <li><img src="<?php echo base_url('public') ?>/img/camera/img-sp21.png" alt="">
                                        <div class="product-description">
                                            <a href="">camera 207b1180qzlx </a>
                                            <br>
                                            <span>250000 đ<del> 300000 đ</del></span>
                                        </div>
                                    </li>
                                    <li><img src="<?php echo base_url('public') ?>/img/camera/img-sp21.png" alt="">
                                        <div class="product-description">
                                            <a href="">camera 207b1180qzlx</a>
                                            <br>
                                            <span>250000 đ<del> 300000 đ</del></span>
                                        </div>
                                    </li>
                                    <li><img src="<?php echo base_url('public') ?>/img/speaker/img11.png" alt="">
                                        <div class="product-description">
                                            <a href="">Loabluetooth B21</a>
                                            <br>
                                            <span>250000 đ<del> 300000 đ</del></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="news-discount">
                                <div class="top-heading"><i class="fa fa-bars"></i>
                                    <legend>khuyến mại</legend>
                                </div>
                                <ul>
                                    <li><img src="<?php echo base_url('public') ?>/img/event/tintuc4.jpg" alt="">
                                        <h3>
                                            [Flash sale cuối tuần] giảm "sốc” 1 triệu, mua ngay kẻo lỡ!
                                        </h3>
                                    </li>
                                    <li><img src="<?php echo base_url('public') ?>/img/event/tintuc5.jpg" alt="">
                                        <h3>
                                            [Flash sale cuối tuần] giảm "sốc” 1 triệu, mua ngay kẻo lỡ!
                                        </h3>
                                    </li>
                                    <li><img src="<?php echo base_url('public') ?>/img/event/tintuc6.jpg" alt="">
                                        <h3>
                                            [Flash sale cuối tuần] giảm "sốc” 1 triệu, mua ngay kẻo lỡ!
                                        </h3>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
<?= $this->endSection() ?>