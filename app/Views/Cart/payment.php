<?= $this->extend("layouts/main") ?>
<?= $this->section("title") ?>
<?= $title ?>
<?= $this->endSection(); ?>
<?= $this->section("content") ?>
<div class="main-container">
    <div class="sub-container">
        <div class="payment">
            <div class="payment-banner">
                <img src="<?php echo base_url('public') ?>/img/shopping-cart/banner.jpg" alt="">
                <div class="payment-breadcrumb">
                    <ul id="breadcrumbs">
                        <li>Trang Chủ /</li>
                        <li id="payment-word">Hoàn Tất Thanh Toán</li>
                    </ul>
                </div>
            </div>
            <div class="main-pay">
                <?php
                if (session()->getFlashdata('status')) {
                    echo "<h4>" . session()->getFlashdata('status') . "</h4>";
                }
                ?>
                <div class="sub-pay">
                    <div class="slogan-pay">
                        <legend>Thanh Toán Thành Công</legend>
                    </div>
                    <div class="support-pay">
                        Quý khách muốn chỉnh sửa thêm bớt các dịch vụ trong đơn hàng, vui lòng truy cập vào trang <a href="https://support.pavietnam.vn/">https://support.pavietnam.vn/</a> vào menu Danh sách đơn hàng, thông tin tài khoản chúng tôi đã gửi tới email
                        <br>
                        <br>
                        <span><a href="#">In Đơn Hàng</a></span>
                        <br>
                    </div>
                    <form action="<?=base_url('save_final_bill')?>" method="post">
                    <div class="header-banner">

                        <table class="table">
                            <tbody>
                                <tr>
                                    <td id="logo"><img src="<?php echo base_url('public') ?>/img/logo.png" alt=""></td>
                                    <td id="suport-infor">
                                        <img src="<?php echo base_url('public') ?>/img/payment/teamp-1-03.png" alt="">
                                        <br>
                                        <img src="<?php echo base_url('public') ?>/img/payment/teamp-1-05.png" alt="">
                                        <br>
                                        <img src="<?php echo base_url('public') ?>/img/payment/teamp-1-06.png" alt="">
                                    </td>
                                    <td id="crown">
                                        <img src="<?php echo base_url('public') ?>/img/payment/icon-registrar.png" alt="">
                                        <br>
                                        <span>NHÀ ĐĂNG KÝ TÊN MIỀN LỚN NHẤT VIỆT NAM</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="payid">
                            <?php foreach ($payments->getResult() as $key => $val) : ?>
                                <div class="word">
                                    <br>
                                    <span id="pay_id">MÃ ĐƠN HÀNG:<?= $val->bill_code ?></span>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="list-sentence">
                            <div class="span-word">
                                <span><b>Cảm ơn quý khách đã mua hàng tại Shop!</b></span>
                                <br>
                                <span><b>Mọi thắc mắc cần hỗ trợ đơn hàng này quy khách vui lòng liên hệ bộ phận phụ trách đơn hàng 1900 9477 (Ext: 645)</b></span>
                                <br>
                                <span>Đơn hàng của quý khách đang ở trạng thái <b>chờ thanh toán.</b></span>
                                <br>
                                <span>Sau khi chuyển tiền, quý khách vào <a href="#">đây</a> để upload ủy nhiệm chi vào đơn hàng để bộ phận kế toán kiểm tra</span>
                            </div>
                        </div>
                        <?php foreach ($payment->getResult() as $key => $val) : ?>
                            <div class="cus-infor">
                                <table class="table1">
                                    <tbody>
                                        <tr>
                                            <td colspan="3" id="info">Thông Tin Khách Hàng</td>
                                        </tr>
                                        <tr>
                                            <ul class="sub_address">
                                                <p id="press_address">Address</p>
                                                <li>city:<?= $val->city ?></li>
                                                <li>district:<?= $val->district ?></li>
                                                <li>village:<?= $val->village ?></li>
                                                <li>alley:<?= $val->alley ?></li>
                                                <li>house_number:<?= $val->home_number ?></li>
                                            </ul>
                                        </tr>
                                        <tr>
                                            <td>Quản lý Đơn hàng</td>
                                            <td><a href="<?= base_url('cart_view') ?>">Đi đến quản lí đơn hàng</a></td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        <?php endforeach; ?>
                        <div class="table2">

                            <table class="table-inner">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Thời Gian Mua</th>
                                        <th>Số lượng Hàng</th>
                                        <th>Thành Tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $n = 1; ?>
                                    <?php
                                    $total_price = 0;
                                    $quantity = 0;
                                    ?>
                                    <?php foreach ($cartitem->getResult() as $row) : ?>
                                        <?php foreach ($order->getResult() as $rows) : ?>
                                            <?php if ($row->id == $rows->cart_id) : ?>
                                                <?php
                                                $total_price = $row->price * $row->quantity;
                                                $quantity = $row->quantity;
                                                ?>
                                                <tr>
                                                    <td id="vast"><img src="<?php echo base_url('public') ?>/img/payment/icon_add.png" alt=""><?= $n++ ?></td>
                                                    <td><?= $time ?></td>
                                                    <td><?= $quantity ?></td>
                                                    <td><?= $total_price ?>$</td>
                                                </tr>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    <?php endforeach; ?>
                                    <table class="sub-table">
                                        <?php if ($total_money) : ?>
                                            <tbody>
                                                <tr>
                                                    <td id="first">TỔNG THÀNH TIỀN( đã bao gồm cả áp mã nếu có):</td>
                                                    <td><?= $total_money ?>$</td>
                                                </tr>
                                            </tbody>
                                        <?php else : ?>
                                            <tbody>
                                                <tr>
                                                    <td id="first">TỔNG THÀNH TIỀN( đã bao gồm cả áp mã nếu có):</td>
                                                    <td><?= $total ?>$</td>
                                                </tr>
                                            </tbody>
                                        <?php endif ?>
                                    </table>

                                </tbody>
                            </table>
                            <div class="type_pay">
                                <div class="list-pay">
                                    <div class="head-word">
                                        <legend>CÁCH THANH TOÁN:</legend>
                                    </div>
                                    <ul>
                                        <li><img src="<?php echo base_url('public') ?>/img/payment/hand.png" alt=""><a href="#">Thanh toán sau nhận hàng</a> <input type="checkbox" name="type_delivery" value="1"></li>
                                        <li><img src="<?php echo base_url('public') ?>/img/payment/zalo.png" alt=""><a href="#" disabled><abbr title="bạn phải có tài khoản zalo pay">Zalo Pay</abbr></a></li>
                                        <li><img src="<?php echo base_url('public') ?>/img/payment/atm.png" alt=""><a href="#" disabled><abbr title="bạn phải có tài khoản zalo pay">ATM Card</abbr></a></li>
                                    </ul>
                                    <ul>
                                        <li><img src="<?php echo base_url('public') ?>/img/payment/momo1.png" alt=""><a href="#" disabled><abbr title="bạn phải có tài khoản Napas">MoMo</abbr></a></li>
                                        <li><img src="<?php echo base_url('public') ?>/img/payment/napas.png" alt=""><a href="#" disabled><abbr title="bạn phải có tài khoản Napas">Napas Pay</abbr></a></li>
                                        <li><a href="#">Xem Thông Tin Chuyển Khoản</a></li>
                                    </ul>
                                    <span>Nếu Quý khách muốn thêm hoặc bỏ bớt dịch vụ, vui lòng <a href="#">Click vào đây</a></span>
                                    <br>
                                    <span>Nếu Quý khách muốn chỉnh sửa thông tin đơn hàng, vui lòng <a href="">Click vào đây</a></span>
                                    <br>
                                    <span>Nếu Quý khách muốn lưu đơn hàng, vui lòng <button type="Submit" class="btn btn-default">Click vào đây</button></span>
                                    <div class="pay-attention">
                                        <ul class="attention">
                                            <li>.Nếu có bất kỳ vấn đề liên quan đến kiểm tra thanh toán, vui lòng liên hệ tổng đài 19009477 (ext: 612)</li>
                                            <li>.Nếu có bất kỳ vấn đề liên quan đến xuất hóa đơn, vui lòng liên hệ tổng đài 19009477 (ext: 602)</li>
                                            <li>.Hoặc quý khách có thể gửi yêu cầu vào hộp thư ketoan@pavietnam.vn của bộ phận kế toán</li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <div class="headquater">
                                <div class="inder">
                                    <div class="word-header">
                                        <legend>TRỤ SỞ CHÍNH:</legend>
                                        <span>- 196 Nguyễn Đình Chiểu, Phường 6, Quận 3, Tp. Hồ Chí Minh, Việt Nam | ĐT: +84-28-6256 3737</span>
                                    </div>
                                    <div class="second-header">
                                        <legend>CHI NHÁNH PHÍA NAM:</legend>
                                        <span>- 750 Sư Vạn Hạnh, Phường 12, Quận 10, Tp. Hồ Chí Minh, Việt Nam</span>
                                        <span>- Số 79 Đường số 6, Hưng Phước 4, Phú Mỹ Hưng, Quận 7, Tp. Hồ Chí Minh, Việt Nam</span>
                                        <span>- Tầng trệt tòa nhà Pico Plaza Cộng Hòa (Kế siêu thị Lotte Mart, mặt đường Quách Văn Tuấn) 20 Cộng Hòa, phường 12, quận Tân Bình, Tp. Hồ Chí Minh, Việt Nam
                                            ĐT: +84-28-6256 3737</span>
                                        <legend>CHI NHÁNH PHÍA BẮC:</legend>
                                        <span>- Tầng 9, toà nhà Diamond (Handico 6), Số 2 Hoàng Đạo Thuý, Trung Hoà Nhân Chính, Quận Thanh Xuân, Hà Nội, Việt Nam
                                            ĐT: +84-24-7307 3737</span>
                                        <br>
                                        <span>Website: www.pavietnam.vn | Hỗ trợ: <a href="http://support.pavietnam.vn">http://support.pavietnam.vn</a> | Hotline 24/7: 1900 9477 | Fax: +84-28-6290 6480</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>