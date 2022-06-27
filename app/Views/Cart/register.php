<?= $this->extend("layouts/main") ?>
<?= $this->section("title") ?>
<?= $title ?>
<?= $this->endSection(); ?>
<?= $this->section("content") ?>
<div class="main-container">
    <div class="sub-container">
        <div class="main-regis">
            <div class="regis-banner">
                <img src="<?php echo base_url('public') ?>/img/shopping-cart/signinbanner.jpg" alt="">
                <div class="regis-breadcrumb">
                    <ul>
                        <li>Trang chủ</li>
                        <li class="special">Đăng ký</li>
                    </ul>
                </div>
            </div>
            <div class="register">
                <legend>Đăng Ký</legend>
                <div class="regis-inside">
                    <div class="regis-left">
                        <ul>
                            <li class="img-form"><img src="<?php echo base_url('public') ?>/img/icon-registry.png" alt=""></li>
                            <li class="regis-text-heading">
                                <span>Đăng Ký Thành Viên</span>
                            </li>
                            <li class="regis-text">
                                <span>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi,
                                    perspiciatis! Dolorum excepturi, illo accusamus corporis aliquid
                                    nobis deserunt blanditiis ab,asperiores quam atque soluta? Illum
                                    porro quo ipsam nihil labore.
                                </span>

                            </li>
                        </ul>
                    </div>
                    <div class="regis-right">
                        <legend>Đăng Ký Thông Tin</legend>
                        <form action="<?= base_url('user_save') ?>" role="form" method="POST" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <div class="form-group">
                                <input type="text" name="name" placeholder="Họ & Tên" value="<?= set_value('name'); ?>">
                                <span class="text-danger"><?= isset($validation) ? display_error($validation, 'name') : '' ?></span>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" placeholder="Email" value="<?= set_value('email'); ?>">
                                <span class="text-danger"><?= isset($validation) ? display_error($validation, 'email') : '' ?></span>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" placeholder="Mật Khẩu" value="<?= set_value('password'); ?>">
                                <span class=" text-danger"><?= isset($validation) ? display_error($validation, 'password') : '' ?></span>
                            </div>
                            <div class="form-group">
                                <input type="password" name="confirm_password" placeholder="Nhập lại mật khẩu" value="<?= set_value('confirm_password') ?>">
                                <span class=" text-danger"><?= isset($validation) ? display_error($validation, 'confirm_password') : '' ?></span>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" checked> Tôi đồng ý với Điều khoản dịch vụ và Chính sách bảo mật
                            </div>
                            <div class="form-group">
                                <button type="submit">Đăng Ký</button>
                            </div>
                            <div class="form-group">
                                <span>Bạn có tài khoản ? <a href="<?= base_url('login') ?>">Đăng Nhập</a></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?= $this->endSection() ?>