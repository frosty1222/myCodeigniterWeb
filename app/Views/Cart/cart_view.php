<?= $this->extend("layouts/main") ?>
<?= $this->section("title") ?>
<?= $title ?>
<?= $this->endSection(); ?>
<?= $this->section("content") ?>
<div class="main-container">
    <div class="sub-container">
        <div class="main-cart">
            <div class="cart-banner">
                <img src="<?php echo base_url('public') ?>/img/shopping-cart/banner.jpg" alt="">

                <ul class="cart-breadcrumbs">
                    <li>Trang Chủ</li>
                    <li class="cart-word">Giỏ Hàng</li>
                </ul>
            </div>
            <div class="sub-cart">
                <div class="sub-word"><span>Giỏ Hàng</span></div>
                <div class="current-cart"><span>giỏ hàng hiện tại:1 sản phẩm</span></div>

                <table cellspacing="0" cellpadding="0">
                    <thead>
                        <tr>
                            <th>Ảnh</th>
                            <th>Tên Sản Phẩm</th>
                            <th>Đơn Giá</th>
                            <th>Số Lượng </th>
                            <th>Thành Tiền</th>
                            <th><i class="fa fa-trash"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (isset($items)) : ?>
                            <?php foreach ($items->getResult() as $key => $items) : ?>
                                <tr>
                                    <td>
                                        <?php if ($items->image == $checkid) : ?>
                                            <img src="<?php echo base_url('public/upload') ?>/<?= $imag ?>" alt="">
                                        <?php else : ?>
                                            <img src="<?php echo base_url('public/uploads') ?>/<?= $items->image ? $items->image : $imag ?>" alt="">
                                        <?php endif; ?>
                                    </td>
                                    <td><?= $items->name ?></td>
                                    <td><?= $items->price ?></td>
                                    <td>
                                        <div class="cart-qty">
                                            <form action="<?= base_url('update_cart/' . $items->id) ?>" method="POST">
                                                <input type="number" id="cartQuantity_969208" class="cart-qty-input" value="<?= $items->quantity ?>" name="quantity">
                                                <input type="submit" value="update">
                                            </form>
                                        </div>
                                    </td>
                                    <td><?= $items->price * $items->quantity ?>$</td>
                                    <td><a href="<?= base_url('delete_cart/' . $items->id) ?>"><img id="cross" src="<?php echo base_url('public') ?>/img/shopping-cart/cross.png" alt=""></a></td>
                                </tr>
                            <?php endforeach ?>

                            <td><a href="<?= base_url('clear_cart') ?>">remove all</a></td>
                    </tbody>
                </table>
                <table class="cart_summary table-cart-footer" cellpadding="0" cellspacing="0">
                    <tbody>
                        <tr>
                            <td style="width: 73%;">Tạm tính:</td>
                            <td id="cartTamTinh" style="width: 20%;"><?= $total ?>$</td>
                        </tr>
                        <tr>
                            <td>Giảm giá:</td>
                            <td id="cartGiamGia">00 VNĐ</td>
                        </tr>
                        <tr>
                            <td>TỔNG TIỀN:</td>
                            <td id="cartTongTien"><?= $total ?>$</td>
                        </tr>
                    </tbody>
                </table>
                <div class="box-voucher-input">
                    
                    <?php if ($items) : ?>
                        <label>MÃ GIẢM GIÁ:<mark><?php echo $b ?></mark></label>
                        <br>
                        <?php if ($a <= 100) : ?>
                            <label>Loại Voucher:<mark><?php echo $a ?>%</mark></label>
                        <?php else : ?>
                            <label>Loại Voucher:<mark><?php echo $a ?>$</mark></label>
                        <?php endif; ?>
                        <br>
                        <?php if ($a <= 100) : ?>
                            <?php $totalap = ($total * $a) / 100 ?>
                            <form action="<?= base_url('uptotal') ?>" method="post" enctype="multipart/form">
                                <label>Tổng Tiếp Sau Áp Mã:<mark><input type="text" name="total_apdiscount" value="<?php echo $total - $totalap ?>">$</mark><input type="submit" value="save"></label>
                            </form>
                        <?php elseif ($a < 100) : ?>
                                <form action="<?= base_url('uptotal') ?>" method="post" enctype="multipart/form-data">
                                    <label>Tổng Tiếp Sau Áp Mã:<mark><input type="text" name="total_apdiscount" value="<?php echo $total - $a ?>"></mark></label>
                                    <input type="submit" value="upload">
                                </form>
                        <?php endif; ?>
                        <form action="<?php base_url('cart_view'); ?>" method="get">
                            <input type="text" name="voucher" class="txt-voucher" placeholder="Nhập mã giảm giá...">
                            <button type="submit">sử dụng</button>
                        </form>
                        <br>
                        <span id="msgVoucher" style="color: red; font-weight: 600;"></span>
                    <?php endif; ?>
                <?php endif ?>
                </div>
                <div class="cart_navigation clear">
                    <a class="btn btn-gray fleft" href="<?= base_url('product') ?>">TIẾP TỤC MUA HÀNG</a>
                    <a class="btn btn-red fright" href="<?= base_url('bill') ?>">TIẾN HÀNH THANH TOÁN</a>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>