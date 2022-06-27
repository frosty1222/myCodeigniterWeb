<?= $this->extend("layouts/main") ?>
<?= $this->section("title") ?>
<?= $title ?>
<?= $this->endSection(); ?>
<?= $this->section("content") ?>
<div class="main-container">
    <div class="sub-container">
        <div class="main-contact">
            <div class="contact-banner">
                <img src="<?php echo base_url('public') ?>/img/shopping-cart/lienhe.jpg" alt="">
                <div class="contact-word">
                    <ul>
                        <li>Trang Chủ</li>
                        <li class="back">Liên Hệ</li>
                    </ul>
                </div>
            </div>
            <div class="contact-main">
                <div class="contact-slogan">
                    <span>liên hệ</span>
                </div>
                <div class="contact">
                    <div class="contact-left">
                        <legend>công ty tnhh bang.vn</legend>
                        <ul>
                            <li><i class="fa fa-map-marker"></i> Trụ sở công ty : 196 Nguyễn Đình Chiểu, Phường 6, Quận 3, Tp.HCM</li>
                            <li><i class="fa fa-phone"></i> Hotline: (028) 73073776 | Mua hàng: (028) 73073776</li>
                            <li><i class="fa fa-mobile"></i> Cứu hộ - Gọi khiếu nại: 1900 2227</li>
                            <li><i class="fa fa-envelope-o"></i> Email: info@sieuthimaychu.vn</li>
                        </ul>
                        <div class="iframe">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.548400634318!2d105.84359311414573!3d21.01073219377116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab899260fcd7%3A0x9e1b35023f795117!2zMTk2IFAuIE5ndXnhu4VuIMSQw6xuaCBDaGnhu4N1LCBMw6ogxJDhuqFpIEjDoG5oLCBIYWkgQsOgIFRyxrBuZywgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1634230254393!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                    <div class="contact-right">
                        <legend>Form liên hệ</legend>
                        <form action="<?= base_url('contact_save') ?>" method="post" enctype="multipart/form-data">
                            <?= csrf_field() ?>
                            <?php foreach ($contact->getResult() as $key => $val) : ?>
                                <div class="form-group">
                                    <img src="<?php echo base_url('public') ?>/img/shopping-cart/c_name.png" alt="">
                                    <input type="text" name="fullname" placeholder="Họ Và Tên" value="<?= $val->name ?>">
                                </div>
                                <div class="form-group">
                                    <img src="<?php echo base_url('public') ?>/img/shopping-cart/c_phone.png" alt="">
                                    <input type="text" name="phone" placeholder="Số Điện Thoại">
                                </div>
                                <div class="form-group">
                                    <img src="<?php echo base_url('public') ?>/img/shopping-cart/c_mail.png" alt="">
                                    <input type="text" name="email" placeholder="Họ Và Tên" value="<?= $val->email ?>">
                                </div>
                                <div class="form-group">
                                    <img src="<?php echo base_url('public') ?>/img/shopping-cart/c_local.png" alt="">
                                    <input type="text" name="address" placeholder="Địa Chỉ">
                                </div>
                                <div class="form-group">
                                    <img src="<?php echo base_url('public') ?>/img/shopping-cart/c_subject.png" alt="">
                                    <input type="text" name="title" placeholder="Tiêu Đề">
                                </div>
                                <div class="form-group">
                                    <img src="<?php echo base_url('public') ?>/img/shopping-cart/c_mess.png" alt="">
                                    <textarea name="content" placeholder="Nội Dung"></textarea>
                                </div>
                            <?php endforeach ?>
                            <div class="form-group">
                                <img src="<?php echo base_url('public') ?>/img/shopping-cart/c_code.png" alt="">
                                <input type="text" name="protocol" placeholder="Mã Bảo Vệ" value="<?= $rand ?>">
                            </div>
                            <div class="action">
                                <a href="" class="botton">LÀM LẠI</a>
                                <button type="submit" class="botton2">Gửi</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
<?= $this->endSection() ?>