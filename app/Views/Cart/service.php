<?= $this->extend("layouts/main") ?>
<?= $this->section("title") ?>
<?= $title ?>
<?= $this->endSection(); ?>
<?= $this->section("content") ?>
<div class="main-container">
    <div class="sub-container">
        <div class="main-service">
            <div class="service">
                <div class="service-banner">
                    <img src="<?php echo base_url('public') ?>/img/shopping-cart/service.jpg" alt="">
                </div>
                <div class="service-word">
                    <ul>
                        <li>Trang Chủ</li>
                        <li class="special">Hình Ảnh</li>
                    </ul>
                </div>
            </div>
            <div class="service-list">
                <div class="service-slogan">
                    Dịch Vụ
                </div>
                <div class="service-inside">
                    <div class="service-list-left">
                        <ul>
                            <li>
                                <a href="" class="img"><img src="<?php echo base_url('public') ?>/img/shopping-cart/dichvu1.jpg" alt="" width="380px" height="280px"></a>
                                <div class="inside_word">
                                    <h2><a href="">Giao Hàng Miễn Phí Toàn Quốc</a></h2>
                                    <h4>
                                        Mới đây, nhà sản xuất Samsung đã cho ra mắt TV The Wall Luxury với kích thước 292 inch, cùng độ phân giải lên đến 8K.
                                        The Wall Luxury là phiên bản mới của mẫu TV The Wall đã được hãng cho ra mắt trước đây
                                    </h4>
                                    <a href="" class="more">Xem Thêm</a>
                                </div>
                            </li>
                            <li>
                                <a href="" class="img"><img src="<?php echo base_url('public') ?>/img/shopping-cart/dichvu2.jpg" alt="" width="380px" height="280px"></a>
                                <div class="inside_word">
                                    <h2><a href="">Bảo Hành - Sửa Chữa</a></h2>
                                    <h4>Gần như mọi tivi màn hình phẳng hiện đại đều phải chịu vấn đề: loa yếu, âm thanh sai hướng. Nhưng để khắc phục âm thanh mỏng,
                                        yếu của loa tivi không nhất thiết lúc nào bạn cũng cần phải đầu tư một ...</h4>
                                    <a href="#" class="more">Xem Thêm</a>
                                </div>
                            </li>
                            <li>
                                <a href="" class="img"><img src="<?php echo base_url('public') ?>/img/shopping-cart/dichvu3.jpg" alt="" width="380px" height="280px"></a>
                                <div class="inside_word">
                                    <h2><a href="">Đổi Máy Cũ Lấy Máy Mới</a></h2>
                                    <h4>
                                        Mua bộ định tuyến Wi-Fi Asus TUF Gaming AX3000 thời điểm này
                                        niềm vui trọn vẹn vì có giá tốt lại nhận được 1 chiếc áo thun
                                        siêu xịn. Hàng 'Asus' thì bao đẳng cấp,
                                        vậy nhanh tay bạn nhé. Muộn khuyến mãi là tiếc lắm đấy nha.
                                    </h4>
                                    <a href="" class="more">Xem Thêm</a>
                                </div>
                            </li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                    <div class="service-cate-right">
                        <div class="heading-service">
                            <i class="fa fa-bars"></i>
                            <legend>Danh Mục Dich Vụ</legend>
                        </div>
                        <ul>
                            <li><a href="">Giao hàng miễn phí toàn quốc</a></li>
                            <li><a href="">Bảo hành - Sửa chữa</a> </li>
                            <li><a href="">Đổi máy cũ lấy máy mới</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>
<?= $this->endSection() ?>