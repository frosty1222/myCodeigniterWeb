<?= $this->extend("layouts/main") ?>
<?= $this->section("title") ?>
<?= $title ?>
<?= $this->endSection(); ?>
<?= $this->section("content") ?>
<div class="main-container">
    <div class="sub-container">
        <div class="main-product">
            <div class="product-banner">
                <img src="<?php echo base_url('public') ?>/img/shopping-cart/library.jpg" alt="">
                <div class="product-breadcumbs">
                    <ul>
                        <li>Trang Chủ</li>
                        <li>Sản Phẩm</li>
                        <li>Máy Ảnh</li>
                        <li class="special">Máy ảnh Canon</li>
                    </ul>
                </div>
            </div>
            <div class="product">
                <div class="product-heading">
                    <legend>MÁY ẢNH CANON <p>(245+ Sản Phẩm)</p>
                    </legend>
                    <div class="option">

                        <select name="" class="form-control" required="required">
                            <option value="">----- Sắp Xếp Theo -----</option>
                            <option value="">Xem Nhiều Nhất</option>
                            <option value="">Bán Chạy</option>
                            <option value="">Giá Thấp Đến Cao</option>
                            <option value="">Giá Cao Đến Thấp</option>
                        </select>

                    </div>
                </div>
                <div class="product-left">
                    <!-- <ul id="product-hastag">
                      <img id="hastag" src="<?= base_url() ?>/img/camera/hot.png" alt="">
                        <a href=""><img src="<?php echo base_url('public') ?>/img/camera/img-sp20.png" alt=""></a>
                        <h3>Máy ảnh canon 23xghjk</h3>
                        <span>8000000 đ</span>
                        <div class="voted">
                            <legend>Đánh giá:</legend>
                            <ul class="voted-star">
                                <li><i class="fa fa-star checked"></i></li>
                                <li><i class="fa fa-star checked"></i></li>
                                <li><i class="fa fa-star checked"></i></li>
                                <li><i class="fa fa-star checked"></i></li>
                                <li><i class="fa fa-star-o"></i></li>

                                <li class="eyes">|<i class="fa fa-eye"></i>1024</li>
                            </ul>

                        </div>
                        <ul class="a_icon">
                            <li><a href="" title="Thêm giỏ hàng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                            <li><a href="" title="Thêm yêu thích"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                            <li><a href="" title="So sánh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
                            <li><a href="<?= base_url('detail') ?>" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                        </ul>
                    </ul>
                    <ul id="product-hastag">
                        <img id="hastag" src="<?= base_url() ?>/img/camera/hot.png" alt="">
                        <a href=""><img src="<?php echo base_url('public') ?>/img/camera/img-sp21.png" alt=""></a>
                        <h3>Máy ảnh canon 25xghjk</h3>
                        <span>8000000 đ<del>10000000 đ</del></span>
                        <div class="voted">
                            <legend>Đánh giá:</legend>
                            <ul class="voted-star">
                                <li><i class="fa fa-star checked"></i></li>
                                <li><i class="fa fa-star checked"></i></li>
                                <li><i class="fa fa-star checked"></i></li>
                                <li><i class="fa fa-star checked"></i></li>
                                <li><i class="fa fa-star-o "></i></li>
                                <li class="eyes">|<i class="fa fa-eye"></i>1024</li>
                            </ul>

                        </div>
                        <ul class="a_icon">
                            <li><a href="" title="Thêm giỏ hàng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                            <li><a href="" title="Thêm yêu thích"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                            <li><a href="" title="So sánh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
                            <li><a href="<?= base_url('detail') ?>" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                        </ul>
                    </ul> -->
                    <?php foreach ($product as $pro) : ?>
                        <ul id="pro">
                            <?php if ($pro['hastag'] == 1) : ?>
                                <img id="hastag" src="<?= base_url('public') ?>/img/camera/hot.png" alt="">
                            <?php else : ?>
                                <div class="tag">15%</div>
                            <?php endif; ?>
                            <div class="status">
                                <span>Còn hàng</span>
                            </div>
                            <a href="<?= base_url('detail') ?>"><img src="<?= base_url('public/uploads') ?>/<?= $pro['image'] ?>" alt=""></a>
                            <h3>Máy ảnh canon 23xghjk</h3>
                            <span><?= $pro['sale_price'] ?>$<del><?= $pro['price'] ?>$</del></span>
                            <div class="voted">
                                <legend>Đánh giá:</legend>
                                <ul class="voted-star">
                                    <li><i class="fa fa-star checked"></i></li>
                                    <li><i class="fa fa-star checked"></i></li>
                                    <li><i class="fa fa-star checked"></i></li>
                                    <li><i class="fa fa-star checked"></i></li>
                                    <li><i class="fa fa-star-o "></i></li>
                                    <li class="eyes">|<i class="fa fa-eye"></i>1024</li>
                                </ul>

                            </div>
                            <!-- addcart/'.$pro['id'] -->
                            <ul class="a_icon">
                                <li><a href="<?= base_url('detail') ?>/<?= $pro['id'] ?>" title="Thêm giỏ hàng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                                <li><a href="" title="Thêm yêu thích"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                <li><a href="" title="So sánh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
                                <li><a href="<?= base_url('detail') ?>/<?= $pro['id'] ?>" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                            </ul>
                        </ul>
                    <?php endforeach; ?>
                    
                    <div class="nums">
                        <?= $pager->links('product') ?>
                        <div class="clr"></div>
                    </div>
                </div>
                <div class="product-right">
                    <div class="option-pro">
                        <legend>Tìm Kiếm Nhanh</legend>
                        <select name="" class="form-control" required="required">
                            <option value="">-----Danh Mục Sản Phẩm-----</option>
                            <option value="">Máy Ảnh Canon</option>
                            <option value="">Âm Thanh</option>
                            <option value="">Khung Gắn Cho Máy Ảnh</option>
                            <option value="">Máy Quay Sony</option>
                            <option value="">Phụ Kiện Apple</option>
                            <option value="">Đồ Chơi, Phụ Kiện Cao Cấp</option>
                            <option value="">Bảng Vẽ Điện Tử</option>
                        </select>
                    </div>
                    <ul class="reputation-pro">
                        <legend><i class="fa fa-bars"></i> THƯƠNG HIỆU</legend>
                        <li><a href="" style="color:#f58220">Máy Ảnh Canon</a></li>
                        <li><a href="">Máy Ảnh Sony</a></li>
                        <li><a href="">Máy Ảnh Pentax</a></li>
                        <li><a href="">Máy Ảnh Panasonic</a></li>
                        <li><a href="">Máy Ảnh Sam Sung</a></li>
                        <li><a href="">Máy Ảnh Chuyên Nghiệp</a></li>
                        <li><a href="">Máy Ảnh Lomography</a></li>
                    </ul>
                    <ul class="pro-price">
                        <legend><i class="fa fa-bars"></i> GÍA SẢN PHẨM</legend>
                        <div class="filter">
                            <p class="low">
                                <input type="text" value="0" min="0" max="5000" class="filter1">
                            </p>
                            <p class="high">
                                <input type="text" value="5000" min="0" max="5000" class="filter2">
                            </p>
                        </div>
                        <div class="filter-range">
                            <input type="range" class="lower range" step="any" min="0" max="5000" value="0">
                            <input type="range" class="upper range" step="any" min="0" max="5000" value="5000">
                            <div class="fill"></div>
                        </div>
                        <div class="easy-basket-filter-ticks">
                            <div data-value="0"></div>
                            <div data-value="100"></div>
                            <div data-value="200"></div>
                            <div data-value="300"></div>
                            <div data-value="400"></div>
                            <div data-value="500"></div>
                            <div data-value="600"></div>
                            <div data-value="700"></div>
                            <div data-value="800"></div>
                            <div data-value="900"></div>
                            <div data-value="1000"></div>
                            <div data-value="1100"></div>
                            <div data-value="1200"></div>
                            <div data-value="1300"></div>
                            <div data-value="1400"></div>
                            <div data-value="1500"></div>
                            <div data-value="1600"></div>
                            <div data-value="1700"></div>
                            <div data-value="1800"></div>
                            <div data-value="1900"></div>
                            <div data-value="2000"></div>
                            <div data-value="2100"></div>
                            <div data-value="2200"></div>
                            <div data-value="2300"></div>
                            <div data-value="2400"></div>
                            <div data-value="2500"></div>
                            <div data-value="2600"></div>
                            <div data-value="2700"></div>
                            <div data-value="2800"></div>
                            <div data-value="2900"></div>
                            <div data-value="3000"></div>
                            <div data-value="3100"></div>
                            <div data-value="3200"></div>
                            <div data-value="3300"></div>
                            <div data-value="3400"></div>
                            <div data-value="3500"></div>
                            <div data-value="3600"></div>
                            <div data-value="3700"></div>
                            <div data-value="3800"></div>
                            <div data-value="3900"></div>
                            <div data-value="4000"></div>
                            <div data-value="4100"></div>
                            <div data-value="4200"></div>
                            <div data-value="4300"></div>
                            <div data-value="4400"></div>
                            <div data-value="4500"></div>
                            <div data-value="4600"></div>
                            <div data-value="4700"></div>
                            <div data-value="4800"></div>
                            <div data-value="4900"></div>
                            <div data-value="5000"></div>
                        </div>
                        <div class="check_box">
                            <label class="check_select">
                                <input type="checkbox" checked="checked">
                                1 triệu - 2 triệu
                                <span class="checkmark"></span>
                            </label>
                            <br>
                            <label class="check_select">
                                <input type="checkbox">
                                2 triệu - 3 triệu
                                <span class="checkmark"></span>
                            </label>
                            <br>
                            <label class="check_select">
                                <input type="checkbox">
                                3 triệu - 4 triệu
                                <span class="checkmark"></span>
                            </label>
                            <br>
                            <label class="check_select">
                                <input type="checkbox">
                                4 triệu - 5 triệu
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </ul>
                    <div class="pro-advert">
                        <img src="<?php echo base_url('public') ?>/img/shopping-cart/right-qc.png" alt="">
                    </div>
                    <ul class="new-pro">
                        <legend>
                            <i class="fa fa-bars"></i>
                            SẢN PHẨM MỚI
                        </legend>
                        <li>
                            <img src="<?php echo base_url('public') ?>/img/camera/img-sp20.png" alt="">
                            <div class="inside-word">
                                <a href="">Máy Ảnh Canon EOS 3000D Kit 18-55mm F3.5-5.6 III</a>
                                <span>800000 đ</span>
                            </div>
                        </li>
                        <li>
                            <img src="<?php echo base_url('public') ?>/img/camera/img-sp20.png" alt="">
                            <div class="inside-word">
                                <a href="">Máy Ảnh Canon EOS 3000D Kit 18-55mm F3.5-5.6 III</a>
                                <span>800000 đ</span>
                            </div>
                        </li>
                        <li>
                            <img src="<?php echo base_url('public') ?>/img/camera/img-sp20.png" alt="">
                            <div class="inside-word">
                                <a href="">Máy Ảnh Canon EOS 3000D Kit 18-55mm F3.5-5.6 III</a>
                                <span>800000 đ</span>
                            </div>
                        </li>
                        <li>
                            <img src="<?php echo base_url('public') ?>/img/speaker/black.jpg" alt="">
                            <div class="inside-word">
                                <a href="">Loa Bluetooth Thonet and Vander Dunn</a>
                                <span>800000 đ</span>
                            </div>
                        </li>
                        <li>
                            <img src="<?php echo base_url('public') ?>/img/speaker/black.jpg" alt="">
                            <div class="inside-word">
                                <a href="">Loa Bluetooth Thonet and Vander Dunn</a>
                                <span>800000 đ</span>
                            </div>
                        </li>
                        <li>
                            <img src="<?php echo base_url('public') ?>/img/speaker/black.jpg" alt="">
                            <div class="inside-word">
                                <a href="">Loa Bluetooth Thonet and Vander Dunn</a>
                                <span>800000 đ</span>
                            </div>
                        </li>
                        <li>
                            <img src="<?php echo base_url('public') ?>/img/speaker/black.jpg" alt="">
                            <div class="inside-word">
                                <a href="">Loa Bluetooth Thonet and Vander Dunn</a>
                                <span>800000 đ</span>
                            </div>
                        </li>
                    </ul>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?= $this->endSection() ?>