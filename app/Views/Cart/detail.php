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
                    <legend>MÁY ẢNH CANON IXUS 185</legend>
                </div>
                 <?php foreach ($getidpro->getResult() as $key => $val) : ?>
                <form action="<?=base_url('addcart/'.$val->id)?>" method="post" enctype="multipart/form-data">
                    <div class="product-left">
                        <div class="main-img">
                            <div class="img-container">
                                <?php foreach ($getidpro->getResult() as $key => $val) : ?>
                                    <img src="<?php echo base_url('public') ?>/uploads/<?php echo $val->image ?>" alt="" id="main-img">
                                    <!-- <div class="pre-icon">
                                    <span id="left"><i class="fad fa-chevron-left fa-2x"></i></span>
                                    <span id="right"><i class="fad fa-chevron-right fa-2x"></i></span>
                                </div> -->
                                <?php endforeach ?>

                                <?php if (isset($ima)) : ?>
                                    <?php foreach ($ima->getResult() as $key => $sub) : ?>
                                        <ul class="sub-img">
                                            <li id="show"><img src="<?php echo base_url('public') ?>/upload/<?php echo $sub->images ?>" alt=""><input type="checkbox" name="images" value="<?php echo $sub->id ?>"></li>
                                        </ul>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                                <ul id="category">
                                    <li>
                                        <img src="<?php echo base_url('public') ?>/img/shopping-cart/5.png" alt="">
                                        <div id="photo"><a href="">Ảnh 360 độ</a></div>
                                    </li>
                                    <li>
                                        <img src="<?php echo base_url('public') ?>/img/shopping-cart/6.png" alt="">
                                        <div id="video"><a href="">Video</a></div>
                                    </li>
                                    <li>
                                        <img src="<?php echo base_url('public') ?>/img/shopping-cart/7.png" alt="">
                                        <div id="more"><a href="">Xem Thêm Ảnh</a></div>
                                    </li>
                                </ul>
                            </div>

                            <div class="left-infor">
                                <div class="price-pro">
                                    <?php if ($des) : ?>
                                        <?php foreach ($des->getResult() as $key => $val) : ?>
                                            <?php foreach ($getidpro->getResult() as $key => $vals) : ?>
                                                <p>
                                                    Mã Sản Phẩm: <?= $val->productcode ?>
                                                    <br>
                                                    <?php if(isset($caps)):?>
                                                    Số Lượng: <?= $caps ?> Sản Phẩm (Còn Hàng)
                                                    <?php endif; ?>
                                                </p>
                                                <ul class="list-inline">
                                                    <li class="price">
                                                        <span><del><?= $vals->sale_price ?>$</del><?= $vals->price ?>$</span>
                                                    </li>
                                                    <li>
                                                        Thương Hiệu: <?= $val->brand ?>
                                                        <br>
                                                        Xuất Xứ: <?= $val->origin ?>
                                                        <br>
                                                        Bảo Hành: <?= $val->guarantee ?>
                                                    </li>
                                                    <?php foreach ($getidpro->getResult() as $key => $vals) : ?>
                                                        <?php if ($user) : ?>
                                                            <?php foreach ($user->getResult() as $row) : ?>
                                                                <?php if ($exist) : ?>
                                                                    <div id="rating">
                                                                        <?php if ($starnum == 5) : ?>
                                                                            <i class="fa fa-star checked"></i>
                                                                            <i class="fa fa-star checked"></i>
                                                                            <i class="fa fa-star checked"></i>
                                                                            <i class="fa fa-star checked"></i>
                                                                            <i class="fa fa-star checked"></i>
                                                                        <?php elseif ($starnum == 4) : ?>
                                                                            <i class="fa fa-star checked"></i>
                                                                            <i class="fa fa-star checked"></i>
                                                                            <i class="fa fa-star checked"></i>
                                                                            <i class="fa fa-star checked"></i>
                                                                        <?php elseif ($starnum == 3) : ?>
                                                                            <i class="fa fa-star checked"></i>
                                                                            <i class="fa fa-star checked"></i>
                                                                            <i class="fa fa-star checked"></i>
                                                                        <?php elseif ($starnum == 2) : ?>
                                                                            <i class="fa fa-star checked"></i>
                                                                            <i class="fa fa-star checked"></i>
                                                                        <?php elseif ($starnum == 1) : ?>
                                                                            <i class="fa fa-star checked"></i>
                                                                        <?php elseif ($starnum == 0) : ?>
                                                                        <?php endif; ?>
                                                                        <span>Total voters:(<?php echo $totalreviews ?>)</span>
                                                                    </div>
                                                                <?php else : ?>
                                                                    <form action="<?= base_url('add_comment/' . $vals->id) ?>" method="POST" role="form" enctype="multipart/form-data">
                                                                        <div id="rating">
                                                                            <input type="radio" id="star5" name="rating_star" value="5" />
                                                                            <label class="full" for="star5" title="Awesome - 5 stars"></label>

                                                                            <input type="radio" id="star4half" name="rating_star" value="4.5" />
                                                                            <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>

                                                                            <input type="radio" id="star4" name="rating_star" value="4" />
                                                                            <label class="full" for="star4" title="Pretty good - 4 stars"></label>

                                                                            <input type="radio" id="star3half" name="rating_star" value="3.5" />
                                                                            <label class="half" for="star3half" title="Meh - 3.5 stars"></label>

                                                                            <input type="radio" id="star3" name="rating_star" value="3" />
                                                                            <label class="full" for="star3" title="Meh - 3 stars"></label>

                                                                            <input type="radio" id="star2half" name="rating_star" value="2.5" />
                                                                            <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>

                                                                            <input type="radio" id="star2" name="rating_star" value="2" />
                                                                            <label class="full" for="star2" title="Kinda bad - 2 stars"></label>

                                                                            <input type="radio" id="star1half" name="rating_star" value="1.5" />
                                                                            <label class="half" for="star1half" title="Meh - 1.5 stars"></label>

                                                                            <input type="radio" id="star1" name="rating_star" value="1" />
                                                                            <label class="full" for="star1" title="Sucks big time - 1 star"></label>

                                                                            <input type="radio" id="starhalf" name="rating_star" value="0.5" />
                                                                            <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>

                                                                        </div>
                                                                        <span id="comment">Comment</span>
                                                                        <div class="comment">
                                                                            <textarea name="comment" id="" cols="30" rows="5"></textarea>
                                                                            <hr>
                                                                            <input type="text" name="product_id" value="<?= $val->id ?>" placeholder="Product id...">
                                                                            <hr>
                                                                            <input type="text" name="customer_id" value="<?= $row->id ?>" placeholder="Customer id...">
                                                                            <button type="submit" id="rating-star">Submit</button>
                                                                        </div>
                                                                    <?php endif ?>
                                                                <?php endforeach; ?>
                                                            <?php endif; ?>
                                                        <?php endforeach; ?>
                                                                    </form>
                                                </ul>
                                            <?php endforeach; ?>
                                        <?php endforeach; ?>
                                    <?php endif ?>
                                            <div class="capacity">
                                                <div class="ul">
                                                    <div class="select">
                                                        <p>chọn dung lượng</p>
                                                        <select name="capacity">
                                                            <?php if (isset($capac)) : ?>
                                                                <?php foreach ($capac->getResult() as $ca) : ?>
                                                                    <option value="<?php echo $ca->capacity ?>"><?php echo $ca->capacity ?></option>
                                                                <?php endforeach; ?>
                                                            <?php endif; ?>
                                                        </select>
                                                    </div>
                                                    <div class="color">
                                                        <p>chọn màu sắc</p>
                                                        <?php if (isset($cols)) : ?>
                                                            <?php foreach ($cols->getResult() as $col) : ?>
                                                                <i id="colors" style="background:<?php echo $col->color ?>"><input type="checkbox" name="color" value="<?php echo $col->id ?>"></i>
                                                            <?php endforeach; ?>
                                                        <?php endif ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="add_to_cart">
                                                <div class="buy-cart-input">
                                                    <div class="box-qty">
                                                        <input id="buyQuantity" type="text" name="quantity" class="quantity">
                                                    </div>
                                                </div>
                                                <h3><button type="submit" class="btn btn-success">Addcart</button></h3>
                                                <h4><a href="#"><i class="fa fa-cart-plus"><mark>1</mark></i>Giỏ hàng</a></h4>
                                                <br>
                                                <div class="clear"></div>
                                                <div class="slogan-word">
                                                    <p>Hotline: 0242 210 8888</p>
                                                    <br>
                                                    <span>8h30h - 21h30 (các ngày trong tuần)</span>
                                                </div>
                                            </div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="product-line">
                            <div class="main-line">
                                <legend>
                                    CHI TIẾT SẢN PHẨM
                                </legend>
                                <p class="up">
                                    Máy Ảnh Canon Ixus 185
                                    <br>
                                    - Cảm biến CCD 20 megapixel
                                    <br>
                                    - Bộ xử lý hình ảnh Digic 4+
                                    <br>
                                    - Màn hình 2.7inch
                                    <br>
                                    - Zoom quang học 8x (28 - 224mm) với ZoomPlus 16x
                                    <br>
                                    - Độ nhạy sáng ISO 100-800
                                    <br>
                                    - Tốc độ màn chập 15 - 1/2000 giây
                                    <br>
                                    - Quay phim HD
                                    <br>
                                    - Pin tương thích NB-11LH
                                    <br>
                                    - Trọng lượng 111g
                                    <br>
                                    - Phụ kiện máy ảnh đi kèm: Pin, Sạc pin, Dây đeo, Cataloge,
                                    Chụp hình tự động, chụp hình ở chế độ P, chế độ chụp kỹ thuật số IS, chụp chân dung, chụp hẹn giờ lấy nét khuôn mặt, chụp ánh sáng yếu, chụp hiệu ứng mắt cá, chụp hiệu ứng thu nhỏ, chụp hiệu ứng máy ảnh đồ chơi, chụp đơn sắc, chụp siêu rực rỡ, chụp hiệu ứng poster, chụp cảnh tuyết, chụp cảnh pháo hoa, chụp màn trập lâu Có thể quay phim với nút nhấn quay phim Chụp hình tự động, chụp hình ở chế độ P, chế độ chụp kỹ thuật số IS, chụp chân dung, chụp hẹn giờ lấy nét khuôn mặt, chụp ánh sáng yếu, chụp hiệu ứng mắt cá, chụp hiệu ứng thu nhỏ, chụp hiệu ứng máy ảnh đồ chơi, chụp đơn sắc, chụp siêu rực rỡ, chụp hiệu ứng poster, chụp cảnh tuyết,
                                    chụp cảnh pháo hoa, chụp màn trập lâu Có thể quay phim với nút nhấn quay phim
                                </p>
                                <br>
                                <span class="readmore" id="readmore">ĐỌC THÊM <i class="fa fa-angle-down"></i></span>
                                <p class="center" id="center">
                                    Chụp hình tự động, chụp hình ở chế độ P, chế độ chụp kỹ thuật số IS, chụp chân dung,
                                    chụp hẹn giờ lấy nét khuôn mặt, chụp ánh sáng yếu, chụp hiệu ứng mắt cá, chụp hiệu ứng thu nhỏ, chụp hiệu ứng máy ảnh đồ chơi, chụp đơn sắc, chụp siêu rực rỡ, chụp hiệu ứng poster, chụp cảnh tuyết,
                                    chụp cảnh pháo hoa, chụp màn trập lâu Có thể quay phim với nút nhấn quay phim
                                    <br>
                                    <br>
                                    Chụp hình tự động, chụp hình ở chế độ P, chế độ chụp kỹ thuật số IS,
                                    chụp chân dung, chụp hẹn giờ lấy nét khuôn mặt, chụp ánh sáng yếu, chụp hiệu ứng mắt cá, chụp hiệu ứng thu nhỏ, chụp hiệu ứng máy ảnh đồ chơi, chụp đơn sắc, chụp siêu rực rỡ, chụp hiệu ứng poster, chụp cảnh tuyết, chụp cảnh pháo hoa,
                                    chụp màn trập lâu Có thể quay phim với nút nhấn quay phim
                                </p>
                                <span class="sumary" id="sumary">THU GỌN <i class="fa fa-angle-up"></i></span>
                                <div class="clear"></div>
                                <div class="sub-icon">
                                    <ul class="sub-icon-ul">
                                        <li class="like"><a href="#"><img src="<?php echo base_url('public') ?>/img/shopping-cart/like.png" alt="">Thích 0</a></li>
                                        <li class="tweet"><a href="https://twitter.com/intent/tweet?original_referer=https%3A%2F%2Ftemplate.web30s.com.vn%2F&amp;ref_src=twsrc%5Etfw%7Ctwcamp%5Ebuttonembed%7Ctwterm%5Eshare%7Ctwgr%5E&amp;text=C%C3%94NG%20TY%20TNHH%20BANG.VN%3A&amp;url=https%3A%2F%2Ftemplate.web30s.com.vn%2Fwebshop_61%2Findex.php%3Fpage%3Dsanpham_view%23.YWucpS6naQc.twitter"><i></i><span>tweet</span></a></li>
                                        <li class="share">
                                            <span>Chia Sẻ</span>
                                            <div class="share-main">
                                                <ul class="share-links">
                                                    <li><a href=""><i class="fa fa-facebook"></i>Facebook</a></li>
                                                    <br>
                                                    <li><a href=""><i class="fa fa-envelope-o"></i>Email</a></li>
                                                    <br>
                                                    <li><a href=""><i class="fa fa-yahoo"></i>Yahoo</a></li>
                                                    <br>
                                                    <li><a href=""><i class="fa fa-twitter"></i>twitter</a></li>
                                                    <br>
                                                    <li><a href=""><i class="fa fa-print"></i>in</a></li>
                                                    <br>
                                                    <li class="add"><a href=""><i class="fa fa-plus"></i>Add App</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="tag_layout">
                                        <ul id="tag">
                                            <h3>Tags</h3>
                                            <li><a href="">Canon</a></li>
                                            <li><a href="">Samsung</a></li>
                                            <li><a href="">Sony</a></li>
                                            <li><a href="">Panasonic</a></li>
                                            <li><a href="">Pentax</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="bottom-product">
                                <legend id="legend">SẢN PHẨM LIÊN QUAN</legend>
                                <div class="owl-carousel owl-theme">
                                    <div class="item">
                                        <ul id="product-hastag">
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
                                                <li><a href="#popup" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </ul>
                                    </div>
                                    <div class="item">
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
                                                <li><a href="#popup" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </ul>
                                    </div>
                                    <div class="item">
                                        <ul>
                                            <div class="tag">15%</div>
                                            <div class="status">
                                                <span>Còn hàng</span>
                                            </div>
                                            <a href=""><img src="<?php echo base_url('public') ?>/img/camera/img-sp20.png" alt=""></a>
                                            <h3>Máy ảnh canon 23xghjk</h3>
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
                                                <li><a href="#popup" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </ul>
                                    </div>
                                    <div class="item">
                                        <ul>
                                            <div class="tag">15%</div>
                                            <div class="status">
                                                <span>Còn hàng</span>
                                            </div>
                                            <a href=""><img src="<?php echo base_url('public') ?>/img/camera/img-sp21.png" alt=""></a>
                                            <h3>Máy ảnh canon 23xghjk</h3>
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
                                                <li><a href="#popup" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </ul>
                                    </div>
                                    <div class="item">
                                        <ul>
                                            <div class="tag">15%</div>
                                            <div class="status">
                                                <span>Còn hàng</span>
                                            </div>
                                            <a href=""><img src="<?php echo base_url('public') ?>/img/camera/img-sp20.png" alt=""></a>
                                            <h3>Máy ảnh canon 26xghjk</h3>
                                            <span>8000000 đ</span>
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
                                                <li><a href="#popup" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </ul>
                                    </div>
                                    <div class="item">
                                        <ul>
                                            <div class="tag">15%</div>
                                            <div class="status">
                                                <span>Còn hàng</span>
                                            </div>
                                            <a href=""><img src="<?php echo base_url('public') ?>/img/camera/img-sp21.png" alt=""></a>
                                            <h3>Máy ảnh canon 23xghjk</h3>
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
                                                <li><a href="#popup" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </ul>
                                    </div>
                                </div>
                                <div id="drag"><i class="fal fa-arrow-alt-right">drag it </i></div>
                            </div>
                            <div class="clear"></div>
                        </div>

                    </div>
                </form>
                <?php endforeach;?>
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
<script type="text/javascript">
    $(document).ready(function() {
        $(".owl-carousel").owlCarousel();
    });
    $('.owl-carousel').owlCarousel({
        // rtl: true,
        loop: true,
        margin: 10,
        nav: true,
        autoplay: true,
        autoplayTimeout: 1000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 3
            }
        }
    })
</script>
<script>
    $(() => {
        $('#show img').click(function() {
            let imgPath = $(this).attr('src');
            $('#main-img').attr('src', imgPath);
        });
    });
</script>
<?= $this->endSection() ?>