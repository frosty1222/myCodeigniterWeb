<?= $this->extend("layouts/main") ?>
<?= $this->section("title") ?>
<?= $title ?>
<?= $this->endSection(); ?>
<?= $this->section("content") ?>
<div class="main-container">
    <div class="sub-container">
        <div class="signin-main">
            <div class="signin-banner"><img src="<?php echo base_url('public') ?>/img/shopping-cart/signinbanner.jpg" alt="">
                <ul class="sign-breadcrumbs">
                    <li>Trang Chủ</li>
                    <li class="sign-word">Đăng Nhập</li>
                </ul>
            </div>
            <div class="signin-word">
                <span>Đăng Nhập</span>

            </div>
            <div class="sign-form">
                <?php
                if (session()->getFlashdata('status')) {
                    echo "<h4>" . session()->getFlashdata('status') . "</h4>";
                }
                ?>
                <div class="signin-left">
                    <img src="<?php echo base_url('public') ?>/img/shopping-cart/signin.png" alt="">
                    <br>
                    <span>Đăng Nhập</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Voluptates adipisci corrupti nemo mollitia, nostrum odit
                        optio libero sequi vero, vel,consequatur accusamus? Eaque
                        ducimus possimus ipsum.</p>
                </div>
                <div class="signin-right">
                    <form action="<?= base_url('check') ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field() ?>
                        <legend>vui lòng liền thông tin đăng nhập</legend>
                        <div class="form-group">
                            <input type="email" placeholder="Email" name="email" required>
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Mật Khẩu" name="password" required="required">
                        </div>
                        <button class="button" type="submit" name="button">Đăng Nhập</button>
                        <br>
                        <span>Bạn<a href="#">quên mật khẩu?</a></span>
                        <br>
                        <span>Bạn chưa có tài khoản?<a href="<?= base_url('register') ?>">Đăng ký</a></span>
                    </form>
                </div>
            </div>

        </div>
    </div>

</div>
<?= $this->endSection() ?>