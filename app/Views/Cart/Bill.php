<?= $this->extend("layouts/main") ?>
<?= $this->section("title") ?>
<?= $title ?>
<?= $this->endSection(); ?>
<?= $this->section("content") ?>
<div class="main-container">
    <div class="sub-container">
        <div class="bill">
            <div class="bill-banner">
                <img src="<?php echo base_url('public') ?>/img/shopping-cart/banner.jpg" alt="">
                <ul class="bill-breadcrumbs">
                    <li>Trang Chủ /</li>
                    <li class="bill-word">Thanh Toán</li>
                </ul>
            </div>
            <div class="sub-bill">
                <div class="slogan">
                    <legend>Thanh Toán</legend>
                </div>
                <?php foreach ($fill->getResult() as $key => $val) : ?>
                    <form action="<?= base_url('save_payment') ?>" method="post" enctype="multipart/form-data">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td id="bill-name">họ và tên*</td>
                                    <td id="bill-input">
                                        <input type="text" name="fullname" value="<?= $val->name ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td id="bill-name">email*</td>
                                    <td id="bill-input"><input type="text" name="email" value="<?= $val->email ?>"></td>
                                </tr>
                                <tr>
                                    <td id="bill-name">di động/điện thoại bàn</td>
                                    <td id="bill-input"><input type="text" name="phone" value=""></td>
                                </tr>

                                <tr>
                                    <td id="bill-name">địa chỉ</td>
                                    <td>
                                        <!-- <input type="text" name="address" id="diachi" value="" class="box_input width_100" style="width: 48%"> -->
                                        <?php foreach ($address->getResult() as $row) : ?>
                                            <ul class="sub_address">
                                                <p id="press_address">Address</p>
                                                <li>city:<?= $row->city ?></li>
                                                <li>district:<?= $row->district ?></li>
                                                <li>village:<?= $row->village ?></li>
                                                <li>alley:<?= $row->alley ?></li>
                                                <li>house_number:<?= $row->home_number ?></li>
                                            </ul>
                                        <?php endforeach ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td id="bill-name">ghi chú đơn hàng</td>
                                    <td id="bill-input"><input type="text" name="note"></td>
                                </tr>
                                <tr id="bill-check">
                                    <td colspan="2" vertical-align="left"><input type="checkbox" name="checkbox" value="1">Tôi xác nhận thông tin trên chính xác và đã đọc kỹ quy định https://bang.vn và không hoàn tiền nếu đã thanh toán</td>
                                </tr>
                                <tr>
                                    <td class="button" colspan="3" align="center">
                                        <div class="bill-button">
                                            <input type="button" value="trở lại" onclick="window.location='<?= base_url('bill') ?>'">
                                            <input type="submit" value="tiếp tục">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>