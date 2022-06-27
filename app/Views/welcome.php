<!DOCTYPE html>
<html lang="">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $title ?></title>
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
	<link rel="stylesheet" href="public/css/head.css" type="text/css">
	<link rel="stylesheet" href="public/css/dropbar.css" type="text/css">
	<link rel="stylesheet" href="public/css/nav-bar.css" type="text/css">
	<link rel="stylesheet" href="public/css/slider.css" type="text/css">
	<link rel="stylesheet" href="public/css/flage.css" type="text/css">
	<link rel="stylesheet" href="public/css/slider2.css" type="text/css">
	<link rel="stylesheet" href="public/css/slideren3.css" type="text/css">
	<link rel="stylesheet" href="public/css/slider4.css" type="text/css">
	<link rel="stylesheet" href="public/css/new.css" type="text/css">
	<link rel="stylesheet" href="public/css/footering.css" type="text/css">
	<link rel="stylesheet" href="public/css/reponsive.css" type="text/css">
	<link rel="stylesheet" href="public/css/logout.css" type="text/css">
	<!-- <link rel="stylesheet" href="public/assistant_folder/reset_reset.css" type="text/css"> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>
	<div class="main-container">
		<div class="sub-container">
			<div class="header">
				<div class="sub-header">
					<div class="left-header">
						<div class="logo-header">
							<img src="public/img/logo.png" alt="">
						</div>
						<div class="searching-header">
							<input type="text" class="form-control" value="Nhập từ khóa tìm kiếm..." onfocus="if (this.value == 'Nhập từ khóa tìm kiếm...'){this.value='';}" onblur="if (this.value == '') {this.value='Nhập từ khóa tìm kiếm...';}">
							<button type="button"><i class="fa fa-search fa-2x"></i></button>
						</div>
					</div>
					<div class="right-header">
						<div class="shopping-header">
							<div class="shopping-cart">
								<span><i class="fa fa-shopping-cart fa-2x" style="color:white"></i></span>
								<a href="<?= base_url('cart_view') ?>">Giỏ hàng</a>
							</div>
							<div class="login-header">
								<?php if (isset($user2)) : ?>
									<?php foreach ($user->getResult() as $row) : ?>
										<span id="well"><a href="<?=base_url('user_main')?>">Hello!<?= $row->name?></a></span>
									<?php endforeach; ?>
								<?php elseif(!isset($user2)): ?>
									<span><i class="fa fa-user fa-2x" style="color: white;"></i></span>
									<span id="alert">Click to login or register</span>
									<a href="<?= base_url('login') ?>" class="icon2">Đăng nhập</a>
								<?php endif; ?>
							</div>
						</div>
						<div class="contact-header">
							<div class="volumn">
								<a href="<?= base_url() ?>/Cart/contact" id="volume"><i class="fas fa-phone-volume" style="color:white"></i></a>
							</div>
							<div class="contact-infor">
								<span>
									<h3>HOT LINE:1900.233</h3>
								</span>
								<span>Mua hàng - góp ý - bảo hành</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="main_menu"></div>
			<div class="menu">
				<div class="menu-content">
					<div class="box_menu">
						<div class="page">
							<div class="dv-menu-left">
								<div class="dv-nut-menu" id="bar"><i class="fa fa-bars" style="color:white"></i>&nbsp; <span>danh mục sản phẩm</span></div>
								<div class="dv-ul-menu ">
									<ul class="minor">
										<li class="menu-item">
											<a href="#"><i class="fa fa-th-large"></i>
												<h2>Máy Ảnh</h2><i class="fa fa-angle-right"></i>
											</a>
											<ul class="menu-sub">
												<li><a href="#">
														<h2>Máy Ảnh Canon</h2>
													</a></li>
												<li><a href="#">
														<h2>Máy Ảnh Nikon</h2>
													</a></li>
												<li> <a href="#">
														<h2>Máy Ảnh Sony</h2>
													</a></li>
												<li> <a href="#">
														<h2>Máy Ảnh Fujifilm</h2>
													</a></li>
												<li> <a href="#">
														<h2>Máy Ảnh Pentax</h2>
													</a></li>
												<li> <a href="#">
														<h2>Máy Ảnh Panasonic</h2>
													</a></li>
												<li> <a href="#">
														<h2>Máy Ảnh Olympus</h2>
													</a></li>
												<li> <a href="#">
														<h2>Máy Ảnh Samsung</h2>
													</a></li>
												<li> <a href="#">
														<h2>Máy Ảnh Mirrorless</h2>
													</a></li>
												<li> <a href="#">
														<h2>Máy Ảnh Chuyên Nghiệp</h2>
													</a></li>
												<li> <a href="#">
														<h2>Máy Ảnh Du lịch</h2>
													</a></li>
												<li> <a href="#">
														<h2>Máy Ảnh Siêu Zoom</h2>
													</a></li>
												<li> <a href="#">
														<h2>Máy Ảnh Chụp Dưới Nước</h2>
													</a></li>
												<li> <a href="#">
														<h2>Máy Ảnh Chụp Lấy Liền</h2>
													</a></li>
												<li> <a href="#">
														<h2>Mua Trả Góp 0 Đồng</h2>
													</a></li>
												<li> <a href="#">
														<h2>Máy Ảnh Ricoh</h2>
													</a></li>
												<li> <a href="#">
														<h2>Máy Ảnh Leica</h2>
													</a></li>
												<li> <a href="#">
														<h2>Máy Ảnh Lomography</h2>
													</a></li>
											</ul>
										</li>
									</ul>
									<ul class="minor">
										<li class="menu-item"><a href="#"><i class="fa fa-th-large"></i>
												<h2>Âm Thanh</h2><i class="fa fa-angle-right"></i>
											</a>
											<ul class="menu-sub">
												<li><a href="#">
														<h2>Combo Bộ Dàn Âm Thanh</h2>
													</a></li>
												<li> <a href="#">
														<h2>Dàn Âm Thanh</h2>
													</a></li>
												<li> <a href="#">
														<h2>Micro Karaoke</h2>
													</a></li>
												<li> <a href="#">
														<h2>Bộ Trộn Âm Thanh Mixer</h2>
													</a></li>
												<li> <a href="#">
														<h2>Bộ Khuếch Đại Âm Thanh</h2>
													</a></li>
												<li> <a href="#">
														<h2>Loa</h2>
													</a></li>
												<li> <a href="#">
														<h2>Tai Nghe</h2>
													</a></li>
												<li> <a href="#">
														<h2>Amply</h2>
													</a></li>
												<li> <a href="#">
														<h2>Đầu CD, DVD, Karaoke</h2>
													</a></li>
												<li> <a href="#">
														<h2>Máy Ghi Âm</h2>
													</a></li>
												<li> <a href="#">
														<h2>Máy Nghe Nhạc</h2>
													</a></li>
												<li> <a href="#">
														<h2>Cassette, Radio</h2>
													</a></li>
												<li> <a href="#">
														<h2>Phụ Kiện Âm Thanh</h2>
													</a></li>
												<li> <a href="#">
														<h2>Loa Karaoke</h2>
													</a></li>
												<li> <a href="#">
														<h2>Bộ Giải Mã DAC Yamaha</h2>
													</a></li>
												<li> <a href="#">
														<h2>Loa Kéo Di Động</h2>
													</a></li>
											</ul>
										</li>
									</ul>
									<ul class="minor">
										<li class="menu-item"><a href="#"><i class="fa fa-th-large"></i>
												<h2>Khuyến Mãi</h2><i class="fa fa-angle-right"></i>
											</a>
											<ul class="menu-sub">
												<li> <a href="#">
														<h2>Mã Giảm Giá</h2>
													</a></li>
												<li> <a href="#">
														<h2>Khuyến Mãi Tại Hồ Chí Minh</h2>
													</a></li>
												<li> <a href="#">
														<h2>Khuyến Mãi Tại Hà Nội</h2>
													</a></li>
												<li> <a href="#">
														<h2>Khuyến Mãi Tại Đà Nẵng</h2>
													</a></li>
												<li> <a href="#">
														<h2>Khuyến Mãi Máy Ảnh và Máy Quay</h2>
													</a></li>
												<li> <a href="#">
														<h2>Khuyến Mãi Tivi</h2>
													</a></li>
												<li> <a href="#">
														<h2>Khuyến Mãi Âm Thanh</h2>
													</a></li>
												<li> <a href="#">
														<h2>Khuyến Mãi Action Cam Sony</h2>
													</a></li>
												<li> <a href="#">
														<h2>Voucher Khuyến Mãi</h2>
													</a></li>
											</ul>
										</li>
									</ul>
									<ul class="minor">
										<li class="menu-item"><a href="#"><i class="fa fa-th-large"></i>
												<h2>Phụ Kiện Máy Ảnh - Máy Quay</h2><i class="fa fa-angle-right"></i>
											</a>
											<ul class="menu-sub">
												<li> <a href="#">
														<h2>Khung Gắn Cho Máy Ảnh</h2>
													</a></li>
												<li> <a href="#">
														<h2>Đèn Flash</h2>
													</a></li>
												<li> <a href="#">
														<h2>Máy In Ảnh</h2>
													</a></li>
												<li> <a href="#">
														<h2>Giấy - Mực In Ảnh</h2>
													</a></li>
												<li> <a href="#">
														<h2>Túi Đựng Máy Ảnh</h2>
													</a></li>
												<li> <a href="#">
														<h2>Chân Máy Ảnh</h2>
													</a></li>
												<li> <a href="#">
														<h2>Tủ Chống Ẩm</h2>
													</a></li>
												<li> <a href="#">
														<h2>Thẻ Nhớ</h2>
													</a></li>
												<li> <a href="#">
														<h2>Kính Lọc</h2>
													</a></li>
												<li> <a href="#">
														<h2>Hộp Chống Ẩm</h2>
													</a></li>
												<li> <a href="#">
														<h2>Dây Đeo</h2>
													</a></li>
												<li> <a href="#">
														<h2>Lens Cap</h2>
													</a></li>
												<li> <a href="#">
														<h2>Lens Hood</h2>
													</a></li>
												<li> <a href="#">
														<h2>Pin</h2>
													</a></li>
												<li> <a href="#">
														<h2>Sạc Pin</h2>
													</a></li>
												<li> <a href="#">
														<h2>Đế Pin - Battery Grip</h2>
													</a></li>
												<li> <a href="#">
														<h2>Trigger - Kích Đèn</h2>
													</a></li>
												<li> <a href="#">
														<h2>Adapter - Mount Chuyển</h2>
													</a></li>
												<li> <a href="#">
														<h2>Đầu Quay Chân Máy Ảnh</h2>
													</a></li>
												<li> <a href="#">
														<h2>Chống Sốc - Chống Nước</h2>
													</a></li>
												<li> <a href="#">
														<h2>Dụng Cụ Vệ Sinh Máy Ảnh</h2>
													</a></li>
												<li> <a href="#">
														<h2>Thiết Bị Chụp Macro</h2>
													</a></li>
												<li> <a href="#">
														<h2>Dây Cáp Kết Nối</h2>
													</a></li>
												<li> <a href="#">
														<h2>Gậy Chụp Hình Selfie</h2>
													</a></li>
												<li> <a href="#">
														<h2>Quà Tặng</h2>
													</a></li>
												<li> <a href="#">
														<h2>Đầu Đọc Thẻ Nhớ</h2>
													</a></li>
											</ul>
										</li>
									</ul>
									<ul class="minor">
										<li class="menu-item"><a href="#"><i class="fa fa-th-large"></i>
												<h2>Thiết Bị Studio</h2><i class="fa fa-angle-right"></i>
											</a>
											<ul class="menu-sub">
												<li> <a href="#">
														<h2>9.Solution</h2>
													</a></li>
												<li> <a href="#">
														<h2>Bàn Trộn Hình Ảnh</h2>
													</a></li>
												<li> <a href="#">
														<h2>Phông - Giá Treo Phông</h2>
													</a></li>
												<li> <a href="#">
														<h2>Đèn Quay Phim</h2>
													</a></li>
												<li> <a href="#">
														<h2>Đèn Chụp</h2>
													</a></li>
												<li> <a href="#">
														<h2>Đèn Led</h2>
													</a></li>
												<li> <a href="#">
														<h2>Dụng Cụ Tản Sáng</h2>
													</a></li>
												<li> <a href="#">
														<h2>Lồng Chụp - Bàn Chụp Sản Phẩm</h2>
													</a></li>
												<li> <a href="#">
														<h2>Chân Đèn</h2>
													</a></li>
												<li> <a href="#">
														<h2>Phụ Kiện Studio Khác</h2>
													</a></li>
												<li> <a href="#">
														<h2>Dụng Cụ Hắt Sáng</h2>
													</a></li>
												<li> <a href="#">
														<h2>Thiết Bị Chống Rung</h2>
													</a></li>
												<li> <a href="#">
														<h2>Thiết Bị Livestream</h2>
													</a></li>
												<li> <a href="#">
														<h2>Màn Hình Hỗ Trợ Quay</h2>
													</a></li>
												<li> <a href="#">
														<h2>Combo Đèn Studio</h2>
													</a></li>
												<li> <a href="#">
														<h2>Microphone Thu Âm</h2>
													</a></li>
												<li> <a href="#">
														<h2>Phụ Kiện Blackmagic Khác</h2>
													</a></li>
											</ul>
										</li>
									</ul>
									<ul class="minor">
										<li class="menu-item"><a href="#"><i class="fa fa-th-large"></i>
												<h2>Máy Quay</h2><i class="fa fa-angle-right"></i>
											</a>
											<ul class="menu-sub">
												<li> <a href="#">
														<h2>Máy Quay Sony</h2>
													</a></li>
												<li> <a href="#">
														<h2>Máy Quay Panasonic</h2>
													</a></li>
												<li> <a href="#">
														<h2>Máy Quay Canon</h2>
													</a></li>
												<li> <a href="#">
														<h2>Máy Quay Brinno</h2>
													</a></li>
												<li> <a href="#">
														<h2>Máy Quay Nikon</h2>
													</a></li>
												<li> <a href="#">
														<h2>Máy Quay JVC</h2>
													</a></li>
												<li> <a href="#">
														<h2>Máy Quay Gopro</h2>
													</a></li>
												<li> <a href="#">
														<h2>Máy Quay Polaroid</h2>
													</a></li>
												<li> <a href="#">
														<h2>Máy Quay Sjcam</h2>
													</a></li>
												<li> <a href="#">
														<h2>Máy Quay Amkov</h2>
													</a></li>
												<li> <a href="#">
														<h2>Máy Quay Olympus</h2>
													</a></li>
												<li> <a href="#">
														<h2>Máy Quay Insta360</h2>
													</a></li>
												<li> <a href="#">
														<h2>Máy Quay Ricoh</h2>
													</a></li>
												<li> <a href="#">
														<h2>Máy Quay Chuyên Nghiệp</h2>
													</a></li>
												<li> <a href="#">
														<h2>Máy Quay Cầm Tay</h2>
													</a></li>
												<li> <a href="#">
														<h2>Máy Quay Dưới Nước</h2>
													</a></li>
												<li> <a href="#">
														<h2>Máy Quay Xiaomi</h2>
													</a></li>
												<li> <a href="#">
														<h2>Máy Quay Blackmagic</h2>
													</a></li>
												<li> <a href="#">
														<h2>Máy Quay DJI</h2>
													</a></li>
												<li> <a href="#">
														<h2>Máy Quay Kandao</h2>
													</a></li>
											</ul>
										</li>
									</ul>
									<ul class="minor">
										<li class="menu-item"><a href="#"><i class="fa fa-th-large"></i>
												<h2>Ống kính</h2><i class="fa fa-angle-right"></i>
											</a>
											<ul class="menu-sub">
												<li> <a href="#">
														<h2>Ống Kính Canon</h2>
													</a></li>
												<li> <a href="#">
														<h2>Ống Kính Nikon</h2>
													</a></li>
												<li> <a href="#">
														<h2>Ống Kính Fujifilm</h2>
													</a></li>
												<li> <a href="#">
														<h2>Ống Kính Sony</h2>
													</a></li>
												<li> <a href="#">
														<h2>Ống Kính Sigma</h2>
													</a></li>
												<li> <a href="#">
														<h2>Ống Kính Samsung</h2>
													</a></li>
												<li> <a href="#">
														<h2>Ống Kính Samyang</h2>
													</a></li>
												<li> <a href="#">
														<h2>Ống Kính Tamron</h2>
													</a></li>
												<li> <a href="#">
														<h2>Ống Kính Tokina</h2>
													</a></li>
												<li> <a href="#">
														<h2>Ống Kính Voigtlander</h2>
													</a></li>
												<li> <a href="#">
														<h2>Ống Kính Brinno</h2>
													</a></li>
												<li> <a href="#">
														<h2>Ống Kính Yongnuo</h2>
													</a></li>
												<li> <a href="#">
														<h2>Ống Kính Pentax</h2>
													</a></li>
												<li> <a href="#">
														<h2>Ống Kính Olympus</h2>
													</a></li>
												<li> <a href="#">
														<h2>Ống Kính Panasonic</h2>
													</a></li>
												<li> <a href="#">
														<h2>Ống Kính Carl Zeiss</h2>
													</a></li>
												<li> <a href="#">
														<h2>Ống Kính Leica</h2>
													</a></li>
												<li> <a href="#">
														<h2>Ống Kính Laowa</h2>
													</a></li>
											</ul>
										</li>
									</ul>
									<ul class="minor">
										<li class="menu-item"><a href="#"><i class="fa fa-th-large"></i>
												<h2>Máy Tính, Thiết Bị Mạng, Game</h2><i class="fa fa-angle-right"></i>
											</a>
											<ul class="menu-sub">
												<li> <a href="#">
														<h2>iPad</h2>
													</a></li>
												<li> <a href="#">
														<h2>Macbook</h2>
													</a></li>
												<li> <a href="#">
														<h2>Phụ Kiện Apple</h2>
													</a></li>
												<li> <a href="#">
														<h2>Máy Chơi Game Playstation</h2>
													</a></li>
												<li> <a href="#">
														<h2>Ổ Cứng</h2>
													</a></li>
												<li> <a href="#">
														<h2>Router Wifi</h2>
													</a></li>
												<li> <a href="#">
														<h2>Màn Hình Máy Vi Tính</h2>
													</a></li>
												<li> <a href="#">
														<h2>Chuột và Bàn Di Chuột</h2>
													</a></li>
												<li> <a href="#">
														<h2>Máy Chiếu</h2>
													</a></li>
											</ul>
										</li>
									</ul>
									<ul class="minor">
										<li class="menu-item"><a href="#"><i class="fa fa-th-large"></i>
												<h2>Đồ Chơi, Phụ Kiện Cao Cấp</h2><i class="fa fa-angle-right"></i>
											</a>
											<ul class="menu-sub">
												<li> <a href="#">
														<h2>Phụ Kiện Cao Cấp Khác</h2>
													</a></li>
												<li> <a href="#">
														<h2>Đồ Dã Ngoại</h2>
													</a></li>
												<li> <a href="#">
														<h2>Vòng Đeo Cao Cấp</h2>
													</a></li>
												<li> <a href="#">
														<h2>GPS Hỗ Trợ Xe Đạp</h2>
													</a></li>
												<li> <a href="#">
														<h2>Phụ Kiện Pelican</h2>
													</a></li>
											</ul>
										</li>
									</ul>
									<ul class="minor">
										<li class="menu-item"><a href="#"><i class="fa fa-th-large"></i>
												<h2>Ống Nhòm</h2><i class="fa fa-angle-right"></i>
											</a>
											<ul class="menu-sub">
												<li> <a href="#">
														<h2>Ống Nhòm Nikon</h2>
													</a></li>
												<li> <a href="#">
														<h2>Ống Nhòm Steiner</h2>
													</a></li>
											</ul>
										</li>
									</ul>
									<ul class="minor">
										<li class="menu-item"><a href="#"><i class="fa fa-th-large"></i>
												<h2>Smart Home</h2><i class="fa fa-angle-right"></i>
											</a>
											<ul class="menu-sub">
												<li> <a href="#">
														<h2>Asus Smart Home</h2>
													</a></li>
											</ul>
										</li>
									</ul>
									<ul class="minor">
										<li class="menu-item"><a href="#"><i class="fa fa-th-large"></i>
												<h2>Tivi</h2><i class="fa fa-angle-right"></i>
											</a>
											<ul class="menu-sub">
												<li> <a href="#">
														<h2>Tivi Sony</h2>
													</a></li>
												<li> <a href="#">
														<h2> Tivi LG</h2>
													</a></li>
												<li> <a href="#">
														<h2>Tivi Samsung</h2>
													</a></li>
												<li> <a href="#">
														<h2>Tivi Toshiba</h2>
													</a></li>
												<li> <a href="#">
														<h2>Tivi Panasonic</h2>
													</a></li>
												<li> <a href="#">
														<h2>Tivi Darling</h2>
													</a></li>
												<li> <a href="#">
														<h2>Tivi Asanzo</h2>
													</a></li>
												<li> <a href="#">
														<h2>Tivi Ruby</h2>
													</a></li>
												<li> <a href="#">
														<h2>Tivi VTB</h2>
													</a></li>
											</ul>
										</li>
									</ul>
									<ul class="minor">
										<li class="menu-item"><a href="#"><i class="fa fa-th-large"></i>
												<h2>Bảng vẽ điện tử</h2><i class="fa fa-angle-right"></i>
											</a>
											<ul class="menu-sub">
												<li> <a href="#">
														<h2>Bảng Vẽ Điện Tử Wacom</h2>
													</a></li>
												<li> <a href="#">
														<h2>Bút Cảm Ứng Wacom</h2>
													</a></li>
												<li> <a href="#">
														<h2>Sổ Ghi Chú Điện Tử Wacom</h2>
													</a></li>
												<li> <a href="#">
														<h2>Phụ Kiện Wacom</h2>
													</a></li>
											</ul>
										</li>
										<div class="clearfix"></div>
									</ul>
								</div>
							</div>

						</div>
						<div class="clearfix"></div>
					</div>
					<div class="nav-bar">
						<div class="bar">
							<ul class="clearfix">
								<li><a href="<?= base_url() ?>">trang chủ</a></li>
								<li><a href="<?= base_url('product') ?>">sản phẩm</a></li>
								<li>
									<a href="<?= base_url('newspaper') ?>">tin tức</a><i class="fa fa-angle-down" id="angle1"></i>
									<ul class="down" id="down1">
										<li><a href="#">tin tức nội bộ</a></li>
										<li><a href="#">tin tức thị trường</a></li>
										<li><a href="#">tin tức khuyến mại</a></li>
									</ul>
								</li>
								<li>
									<a href="<?= base_url('service') ?>">dịch vụ </a><i class="fa fa-angle-down" id="angle2"></i>
									<ul class="down" id="down2">
										<li><a href="#">giao hàng miễn phí</a></li>
										<li><a href="#">bảo hành - sửa chữa</a></li>
										<li><a href="#">đổi máy cũ lấy máy mới</a></li>
									</ul>
								</li>
								<li><a href="<?= base_url('news') ?>">thư viên </a><i class="fa fa-angle-down" id="angle3"></i>
									<ul class="down" id="down3">
										<li><a href="#">thư viện ảnh</a></li>
										<li><a href="#">thư viện video</a></li>
									</ul>
								</li>
								<li><a href="<?= base_url('support') ?>">hỗ trợ khách</a><i class="fa fa-angle-down" id="angle4"></i>
									<ul class="down" id="down4">
										<li><a href="#">hướng dẫn mua hàng</a></li>
										<li><a href="#">chính sách bảo hành</a></li>
										<li><a href="#">hình thức thanh toán </a></li>
										<li><a href="#">phương thức giao hàng</a></li>
									</ul>
									<div class="clearfix"></div>
								</li>
								<li><a href="<?= base_url('contact') ?>">liên hệ</a></li>
								<li id="flag">
									<a href="#">
										<img src="public/img/Capture2.png">
									</a>
									<a href="#">
										<img src="public/img/Capture.png">
									</a>
								</li>
							</ul>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="khoi-slide" id="khoi-slide">
				<div class="cac-slide">
					<div class="slide active"><img src="public/img/banner.png"></div>
					<div class="slide"><img src="public/img/Capture3.png"></div>
					<div class="slide"><img src="public/img/Capture4.png"></div>
					<div class="slide"><img src="public/img/Capture5.png"></div>
					<div class="slide"><img src="public/img/Capture6.png"></div>
					<div class="slide"><img src="public/img/Capture7.png"></div>
				</div>
				<div class="nut-slide">
					<span id="btn-prev"><i class="fad fa-chevron-left fa-2x"></i></span>
					<span id="btn-next"><i class="fad fa-chevron-right fa-2x"></i></span>
					<ul>
						<li class="active_nut"><img src="public/img/Capture7.png" alt=""></li>
						<li><img src="public/img/Capture3.png" alt=""></li>
						<li><img src="public/img/Capture4.png" alt=""></li>
						<li><img src="public/img/Capture5.png" alt=""></li>
						<li><img src="public/img/Capture6.png" alt=""></li>
						<li><img src="public/img/banner.png" alt=""></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
			<div class="body-content">
				<div class="item-flag">
					<div class="item">
						<span><img src="public/img/img-1.png"></span>
					</div>
					<div class="item">
						<span><img src="public/img/img-2.png"></span>
					</div>
					<div class="item">
						<span><img src="public/img/img-3.png"></span>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="main_product_home">
					<div class="product_home">
						<div class="left-pd-new">
							<div class="title_page">
								<ul>
									<h3>Sản Phẩm Mới</h3>
									<div class="clearfix"></div>
								</ul>
							</div>
							<div class="sd_menu sd_menu_left">
								<div class="plc1_1 i-st1">
									<div class="status-tag still">Còn hàng</div>
									<a href="#">
										<div class="a-mobi-sp"><img src="public/img/left_product/img-sp4.png"></div>
										<h3>MICROLAB FC - 70BT / 2.1 (new)
											105 W RMS</h3>
										<div class="prc_compare_price">
											<s2>800.000 ₫</s2>
										</div>
									</a>
									<ul class="a_icon">
										<li><a href="#" title="Thêm giỏ hàng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Thêm yêu thích"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
										<li><a href="#" title="So sánh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
									</ul>
								</div>
								<div class="plc1_1 i-st1">
									<div class="status-tag still">Còn hàng</div>
									<a href="#">
										<div class="a-mobi-sp"><img src="public/img/left_product/img-sp5.png"></div>
										<h3>Loa Bluetooth Thonet
											and Vander Dunn</h3>
										<div class="prc_compare_price">
											<s2>800.000 ₫</s2>
										</div>
									</a>
									<ul class="a_icon">
										<li><a href="#" title="Thêm giỏ hàng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Thêm yêu thích"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
										<li><a href="#" title="So sánh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
									</ul>
								</div>
								<div class="plc1_1 i-st1">
									<div class="status-tag still">Còn hàng</div>
									<a href="#">
										<div class="a-mobi-sp"><img src="public/img/left_product/img-sp6.png"></div>
										<h3>Loa Bluetooth Thonet
											and Vander RISS 2.1</h3>
										<div class="prc_compare_price">
											<s2>800.000 ₫</s2>
										</div>
									</a>
									<ul class="a_icon">
										<li><a href="#" title="Thêm giỏ hàng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Thêm yêu thích"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
										<li><a href="#" title="So sánh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
									</ul>
								</div>

							</div>
						</div>
						<div class="right-pd-sale">
							<div class="max">
								<h3 class="hey">Sản Phẩm Khuyến Mãi</h3>
								<a href="#">Xem tất cả<i class="fa fa-angle-double-right"></i></a>
							</div>
							<div class="box_pro">
								<div class="pro_home_id pro_home_id_home">
									<ul>
										<div class="discount-tag">20%</div>
										<div class="status-tag still">Còn hàng</div>
										<a href="#">
											<li><img src="public/img/right_product/img-sp4.png">
											</li>
											<h3>Loa Bluetooth Thonet and Vander Dunn</h3>
											<h4><span>1.000.000 ₫</span>800.000 ₫</h4>
											<br>
											<div class="a_icon buy">
												<lbl><i class="fa fa-cart-plus"></i>Thêm vào giỏ hàng</lbl>
											</div>
										</a>
										<ul class="a_icon">
											<li><a href="#" title="Thêm giỏ hàng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
											<li><a href="#" title="Thêm yêu thích"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
											<li><a href="#" title="So sánh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
											<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
										</ul>
									</ul>
									<ul>
										<div class="discount-tag">20%</div>
										<div class="status-tag still">Còn hàng</div>
										<a href="#">
											<li><img src="public/img/right_product/img-sp8.png">
											</li>
											<h3>MICROLAB FC - 70BT / 2.1 (new) 105 W RMS Màu: Đen Kết nối Bluetooth 4.0</h3>
											<h4><span>1.000.000 ₫</span>800.000 ₫</h4>
											<br>
											<div class="a_icon buy">
												<lbl><i class="fa fa-cart-plus"></i>Thêm vào giỏ hàng</lbl>
											</div>
										</a>
										<ul class="a_icon">
											<li><a href="#" title="Thêm giỏ hàng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
											<li><a href="#" title="Thêm yêu thích"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
											<li><a href="#" title="So sánh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
											<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
										</ul>
									</ul>
									<ul>
										<div class="discount-tag">20%</div>
										<div class="status-tag still">Còn hàng</div>
										<a href="#">
											<li><img src="public/img/right_product/img-sp7.png">
											</li>
											<h3>Loa Bluetooth Thonet and Vander Dunn</h3>
											<h4><span>1.000.000 ₫</span>800.000 ₫</h4>
											<br>
											<div class="a_icon buy">
												<lbl><i class="fa fa-cart-plus"></i>Thêm vào giỏ hàng</lbl>
											</div>
										</a>
										<ul class="a_icon">
											<li><a href="#" title="Thêm giỏ hàng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
											<li><a href="#" title="Thêm yêu thích"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
											<li><a href="#" title="So sánh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
											<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
										</ul>
									</ul>
									<ul>
										<div class="discount-tag">20%</div>
										<div class="status-tag still">Còn hàng</div>
										<a href="#">
											<li><img src="public/img/right_product/img-sp5.png">
											</li>
											<h3>MICROLAB FC - 70BT / 2.1 (new) 105 W RMS Màu: Đen Kết nối Bluetooth 4.0</h3>
											<h4><span>1.000.000 ₫</span>800.000 ₫</h4>
											<br>
											<div class="a_icon buy">
												<lbl><i class="fa fa-cart-plus"></i>Thêm vào giỏ hàng</lbl>
											</div>
										</a>
										<ul class="a_icon">
											<li><a href="#" title="Thêm giỏ hàng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
											<li><a href="#" title="Thêm yêu thích"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
											<li><a href="#" title="So sánh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
											<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
										</ul>
									</ul>
									<ul>
										<div class="discount-tag">20%</div>
										<div class="status-tag still">Còn hàng</div>
										<a href="#">
											<li><img src="public/img/right_product/img-sp4.png">
											</li>
											<h3>Loa Bluetooth Thonet and Vander Dunn</h3>
											<h4><span>1.000.000 ₫</span>800.000 ₫</h4>
											<br>
											<div class="a_icon buy">
												<lbl><i class="fa fa-cart-plus"></i>Thêm vào giỏ hàng</lbl>
											</div>
										</a>
										<ul class="a_icon">
											<li><a href="#" title="Thêm giỏ hàng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
											<li><a href="#" title="Thêm yêu thích"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
											<li><a href="#" title="So sánh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
											<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
										</ul>
									</ul>
									<ul>
										<div class="discount-tag">20%</div>
										<div class="status-tag still">Còn hàng</div>
										<a href="#">
											<li><img src="public/img/right_product/img-sp6.png">
											</li>
											<h3>MICROLAB FC - 70BT / 2.1 (new) 105 W RMS Màu: Đen Kết nối Bluetooth 4.0</h3>
											<h4><span>1.000.000 ₫</span>800.000 ₫</h4>
											<br>
											<div class="a_icon buy">
												<lbl><i class="fa fa-cart-plus"></i>Thêm vào giỏ hàng</lbl>
											</div>
										</a>
										<ul class="a_icon">
											<li><a href="#" title="Thêm giỏ hàng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
											<li><a href="#" title="Thêm yêu thích"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
											<li><a href="#" title="So sánh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
											<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
										</ul>
									</ul>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>

				<div class="banner_ad_home">
					<a href="#">
						<img src="public/img/slide/img-5.png">
					</a>
					<a href="#">
						<img src="public/img/slide/img-6.png">
					</a>
					<div class="clearfix"></div>
					<div class="main_home_pp_product">
						<div class="home_pp_product">
							<div>
								<ul>
									<h3 class="hi">Sản phẩm nổi bật</h3>
								</ul>
								<div class="link_view_all">
									<a href="#">Máy ảnh</a>
									<a href="#">Âm thanh</a>
									<a href="#">Thiết bị studio</a>
									<a href="#">Ống kính</a>
									<a href="#">Máy tính</a>
									<a href="#">Ti vi</a>
									<a href="#">Đồng hồ</a>
									<a href="#">Bảng vẽ điện tử</a>
								</div>
							</div>

						</div>
					</div>

					<div class="clearfix"></div>
				</div>
				<div class="main_pro_home">
					<div class="pro_home">
						<ul>
							<li class="pr-hot"><img src="public/img/speaker/hot.png"></li>
							<li class="diff"><img src="public/img/speaker/img10.png">
							</li>
							<li>
								<h3>Loa Bluetooth Thonet &amp; Vander HOCH BT 2.0 – 70W WHITE</h3>
							</li>
							<li>
								<h4>800.000 ₫</h4>
							</li>
							<ul class="a_icon">
								<li><a href="#" title="Thêm giỏ hàng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
								<li><a href="#" title="Thêm yêu thích"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
								<li><a href="#" title="So sánh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
								<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
							</ul>
						</ul>
						<ul>
							<li class="discount-tag">20%</li>
							<li class="status-empty">Hết hàng</li>

							<li><img src="public/img/speaker/img11.png">
							</li>
							<li>
								<h3>Loa Bluetooth honet &amp; Vander KOLOSS 2.0 – 70W WHITE</h3>
							</li>
							<li>
								<h4><span>1.000.000 ₫</span>800.000 ₫</h4>
							</li>
							<ul class="a_icon">
								<li><a href="#" title="Thêm giỏ hàng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
								<li><a href="#" title="Thêm yêu thích"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
								<li><a href="#" title="So sánh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
								<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
							</ul>
						</ul>
						<ul>
							<li class="pr-hot"><img src="public/img/speaker/hot.png"></li>
							<li class="diff"><img src="public/img/speaker/img10.png">
							</li>
							<li>
								<h3>Loa Bluetooth Thonet &amp; Vander HOCH BT 2.0 – 70W WHITE</h3>
							</li>
							<li>
								<h4>800.000 ₫</h4>
							</li>
							<ul class="a_icon">
								<li><a href="#" title="Thêm giỏ hàng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
								<li><a href="#" title="Thêm yêu thích"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
								<li><a href="#" title="So sánh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
								<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
							</ul>
						</ul>
						<ul>
							<li class="discount-tag">20%</li>
							<li class="status-still">Còn hàng</li>
							<li><img src="public/img/speaker/img11.png">
							</li>
							<li>
								<h3>Loa Bluetooth honet &amp; Vander KOLOSS 2.0 – 70W WHITE</h3>
							</li>
							<li>
								<h4><span>1.000.000 ₫</span>800.000 ₫</h4>
							</li>
							<ul class="a_icon">
								<li><a href="#" title="Thêm giỏ hàng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
								<li><a href="#" title="Thêm yêu thích"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
								<li><a href="#" title="So sánh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
								<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
							</ul>
						</ul>
						<ul>
							<div class="pr-hot"><img src="public/img/speaker/hot.png">
							</div>
							<li><img src="public/img/speaker/img11.png">
							</li>
							<li>
								<h3>Loa Bluetooth honet &amp; Vander KOLOSS 2.0 – 70W WHITE</h3>
							</li>
							<li>
								<h4><span>1.000.000 ₫</span>800.000 ₫</h4>
							</li>
							<ul class="a_icon">
								<li><a href="#" title="Thêm giỏ hàng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
								<li><a href="#" title="Thêm yêu thích"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
								<li><a href="#" title="So sánh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
								<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
							</ul>
						</ul>
						<ul>
							<div class="discount-tag">20%</div>
							<div class="status-still">Còn hàng</div>
							<li><img src="public/img/speaker/img11.png">
							</li>
							<li>
								<h3>Loa Bluetooth honet &amp; Vander KOLOSS 2.0 – 70W WHITE</h3>
							</li>
							<li>
								<h4><span>1.000.000 ₫</span>800.000 ₫</h4>
							</li>
							<ul class="a_icon">
								<li><a href="#" title="Thêm giỏ hàng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
								<li><a href="#" title="Thêm yêu thích"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
								<li><a href="#" title="So sánh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
								<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
							</ul>
						</ul>
						<ul>
							<div class="pr-hot"><img src="public/img/speaker/hot.png">
							</div>
							<li><img src="public/img/speaker/img11.png">
							</li>
							<li>
								<h3>Loa Bluetooth honet &amp; Vander KOLOSS 2.0 – 70W WHITE</h3>
							</li>
							<li>
								<h4><span>1.000.000 ₫</span>800.000 ₫</h4>
							</li>
							<ul class="a_icon">
								<li><a href="#" title="Thêm giỏ hàng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
								<li><a href="#" title="Thêm yêu thích"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
								<li><a href="#" title="So sánh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
								<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
							</ul>
						</ul>
						<ul>
							<div class="discount-tag">20%</div>
							<div class="status-empty">Hết hàng</div>
							<li><img src="public/img/speaker/img11.png">
							</li>
							<li>
								<h3>Loa Bluetooth honet &amp; Vander KOLOSS 2.0 – 70W WHITE</h3>
							</li>
							<li>
								<h4><span>1.000.000 ₫</span>800.000 ₫</h4>
							</li>
							<ul class="a_icon">
								<li><a href="#" title="Thêm giỏ hàng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
								<li><a href="#" title="Thêm yêu thích"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
								<li><a href="#" title="So sánh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
								<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
							</ul>
						</ul>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="main_home_pp_product2">
					<div class="home_pp_product2">
						<div>
							<ul>
								<h3 class="hi">sản phẩm bán chạy</h3>
							</ul>
							<div class="link_view_all">
								<a href="#">Xem tất cả<i class="fa fa-angle-double-right"></i></a>
							</div>
						</div>
						<div class="content">
							<div class="slick-tracker">
								<div><button class="slick-prev slick-arrow">pre</button></div>
								<ul class="slick-sliden">
									<a href="#">
										<li><img src="public/img/speaker/img10.png" style="width:190px;height:187px">
										</li>
										<h3>Speaker</h3>
										<h4>3000đ</h4>
									</a>
									<ul class="a_icon">
										<li><a href="#" title="Thêm giỏ hàng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Thêm yêu thích"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
										<li><a href="#" title="So sánh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
									</ul>
								</ul>
								<ul class="slick-sliden">
									<a href="#">
										<li><img src="public/img/speaker/img11.png" style="width:190px;height:187px">
										</li>
										<h3>Speaker</h3>
										<h4>3000đ</h4>
									</a>
									<h3>Speaker</h3>
									<h4>3000đ</h4>
									<ul class="a_icon">
										<li><a href="#" title="Thêm giỏ hàng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Thêm yêu thích"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
										<li><a href="#" title="So sánh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
									</ul>
								</ul>
								<ul class="slick-sliden">
									<a href="#">
										<li><img src="public/img/speaker/img10.png" style="width:190px;height:187px">
										</li>
									</a>
									<h3>Speaker</h3>
									<h4>3000đ</h4>
									<ul class="a_icon">
										<li><a href="#" title="Thêm giỏ hàng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Thêm yêu thích"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
										<li><a href="#" title="So sánh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
									</ul>
								</ul>
								<ul class="slick-sliden">
									<a href="#">
										<li><img src="public/img/speaker/img11.png" style="width:190px;height:187px">
										</li>
									</a>
									<h3>Speaker</h3>
									<h4>3000đ</h4>
									<ul class="a_icon">
										<li><a href="#" title="Thêm giỏ hàng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Thêm yêu thích"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
										<li><a href="#" title="So sánh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
									</ul>
								</ul>
								<ul class="slick-sliden">
									<a href="#">
										<li><img src="public/img/speaker/img10.png" style="width:190px;height:187px">
										</li>
									</a>
									<h3>Speaker</h3>
									<h4>3000đ</h4>
									<ul class="a_icon">
										<li><a href="#" title="Thêm giỏ hàng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Thêm yêu thích"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
										<li><a href="#" title="So sánh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
									</ul>
								</ul>
								<ul class="slick-sliden">
									<a href="#">
										<li><img src="public/img/speaker/img11.png" style="width:190px;height:187px">
										</li>
									</a>
									<h3>Speaker</h3>
									<h4>3000đ</h4>
									<ul class="a_icon">
										<li><a href="#" title="Thêm giỏ hàng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Thêm yêu thích"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
										<li><a href="#" title="So sánh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
									</ul>
								</ul>
								<ul class="slick-sliden">
									<a href="#">
										<li><img src="public/img/speaker/img10.png" style="width:190px;height:187px">
										</li>
									</a>
									<h3>Speaker</h3>
									<h4>3000đ</h4>
									<ul class="a_icon">
										<li><a href="#" title="Thêm giỏ hàng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Thêm yêu thích"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
										<li><a href="#" title="So sánh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
									</ul>
								</ul>
								<ul class="slick-sliden">
									<a href="#">
										<li><img src="public/img/speaker/img10.png" style="width:190px;height:187px">
										</li>
									</a>
								</ul>
								<ul class="slick-sliden">
									<a href="#">
										<li><img src="public/img/speaker/img11.png" style="width:190px;height:187px">
										</li>
									</a>
									<h3>Speaker</h3>
									<h4>3000đ</h4>
									<ul class="a_icon">
										<li><a href="#" title="Thêm giỏ hàng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Thêm yêu thích"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
										<li><a href="#" title="So sánh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
									</ul>
								</ul>
								<ul class="slick-sliden">
									<li><img src="public/img/speaker/img10.png" style="width:190px;height:187px">
									</li>
									</a>
									<h3>Speaker</h3>
									<h4>3000đ</h4>
									<ul class="a_icon">
										<li><a href="#" title="Thêm giỏ hàng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Thêm yêu thích"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
										<li><a href="#" title="So sánh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
									</ul>
								</ul>
								<ul class="slick-sliden">
									<a href="#" tabindex="0">
										<li><img src="public/img/speaker/img11.png" style="width:190px;height:187px">
										</li>
									</a>
									<h3>Speaker</h3>
									<h4>3000đ</h4>
									<ul class="a_icon">
										<li><a href="#" title="Thêm giỏ hàng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Thêm yêu thích"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
										<li><a href="#" title="So sánh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
									</ul>
								</ul>
								<ul class="slick-sliden">
									<a href="#" tabindex="0">
										<li><img src="public/img/speaker/img10.png" style="width:190px;height:187px">
										</li>
									</a>
									<h3>Speaker</h3>
									<h4>3000đ</h4>
									<ul class="a_icon">
										<li><a href="#" title="Thêm giỏ hàng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Thêm yêu thích"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
										<li><a href="#" title="So sánh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
									</ul>
								</ul>
								<ul class="slick-sliden">
									<a href="#" tabindex="0">
										<li><img src="public/img/speaker/img11.png" style="width:190px;height:187px">
										</li>
									</a>
									<h3>Speaker</h3>
									<h4>3000đ</h4>
									<ul class="a_icon">
										<li><a href="#" title="Thêm giỏ hàng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Thêm yêu thích"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
										<li><a href="#" title="So sánh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
									</ul>
								</ul>
								<ul class="slick-sliden">
									<a href="#" tabindex="0">
										<li><img src="public/img/speaker/img10.png" style="width:190px;height:187px">
										</li>
									</a>
									<h3>Speaker</h3>
									<h4>3000đ</h4>
									<ul class="a_icon">
										<li><a href="#" title="Thêm giỏ hàng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Thêm yêu thích"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
										<li><a href="#" title="So sánh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
									</ul>
								</ul>
								<ul class="slick-sliden">
									<a href="#">
										<li><img src="public/img/speaker/img11.png" style="width:190px;height:187px">
										</li>
									</a>
									<h3>Speaker</h3>
									<h4>3000đ</h4>
									<ul class="a_icon">
										<li><a href="#" title="Thêm giỏ hàng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Thêm yêu thích"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
										<li><a href="#" title="So sánh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
									</ul>
								</ul>
								<ul class="slick-sliden">
									<a href="#">
										<li><img src="public/img/speaker/img10.png" style="width:190px;height:187px">
										</li>
									</a>
									<h3>Speaker</h3>
									<h4>3000đ</h4>
									<ul class="a_icon">
										<li><a href="#" title="Thêm giỏ hàng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Thêm yêu thích"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
										<li><a href="#" title="So sánh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
									</ul>
								</ul>
								<ul class="slick-sliden">
									<a href="#">
										<li><img src="public/img/speaker/img11.png" style="width:190px;height:187px">
										</li>
									</a>
									<h3>Speaker</h3>
									<h4>3000đ</h4>
									<ul class="a_icon">
										<li><a href="#" title="Thêm giỏ hàng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Thêm yêu thích"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
										<li><a href="#" title="So sánh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
									</ul>
								</ul>
								<ul class="slick-sliden">
									<a href="#">
										<li><img src="public/img/speaker/img10.png" style="width:190px;height:187px">
										</li>
									</a>
									<h3>Speaker</h3>
									<h4>3000đ</h4>
									<ul class="a_icon">
										<li><a href="#" title="Thêm giỏ hàng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Thêm yêu thích"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
										<li><a href="#" title="So sánh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
									</ul>
								</ul>
								<ul class="slick-sliden">
									<a href="#">
										<li><img src="public/img/speaker/img11.png" style="width:190px;height:187px">
										</li>
									</a>
									<h3>Speaker</h3>
									<h4>3000đ</h4>
									<ul class="a_icon">
										<li><a href="#" title="Thêm giỏ hàng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Thêm yêu thích"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
										<li><a href="#" title="So sánh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
									</ul>
								</ul>
								<ul class="slick-sliden">
									<a href="#">
										<li><img src="public/img/speaker/img10.png" style="width:190px;height:187px">
										</li>
									</a>
									<h3>Speaker</h3>
									<h4>3000đ</h4>
									<ul class="a_icon">
										<li><a href="#" title="Thêm giỏ hàng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Thêm yêu thích"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
										<li><a href="#" title="So sánh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
									</ul>
								</ul>
								<div><button class="slick-next slick-arrow">next</button></div>
							</div>
							<div class="clearfix"></div>
						</div>

					</div>
				</div>

				<div class="main_home_pp_product3">
					<div class="home_pp_product3">
						<div>
							<ul>
								<h3 class="hi">sản phẩm bán chạy</h3>
							</ul>
							<div class="link_view_all">
								<a href="#">máy ảnh canon</a>
								<a href="#">máy ảnh nikon</a>
								<a href="#">máy ảnh fujifilm</a>
								<a href="#">máy ảnh sony</a>
								<a href="#">máy ảnh pentax</a>
								<a href="#">máy ảnh panasonic</a>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="camera">
					<div class="child-camera">
						<ul>
							<div class="discount_tag">23%</div>
							<div class="status_tag empty">Hết hàng</div>
							<a href="#">
								<li><img src="public/img/camera/img-sp21.png" alt=""></li>
								<h3>máy ảnh soki</h3>
								<h4>300.00đ</h4>
							</a>
							<ul class="a_icon">
								<li><a href="#" title="Thêm giỏ hàng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
								<li><a href="#" title="Thêm yêu thích"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
								<li><a href="#" title="So sánh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
								<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
							</ul>
						</ul>
						<ul>
							<div class="pr_hot"><img src="public/img/camera/hot.png" alt=""></div>
							<a href="#">
								<li><img src="public/img/camera/img-sp20.png" alt=""></li>
								<h3 class="pep">máy ảnh soni</h3>
								<h4 class="pop"><span>400.00đ</span>300.00đ</h4>
							</a>
							<ul class="a_icon">
								<li><a href="#" title="Thêm giỏ hàng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
								<li><a href="#" title="Thêm yêu thích"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
								<li><a href="#" title="So sánh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
								<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
							</ul>
						</ul>
						<ul>
							<div class="discount_tag">23%</div>
							<div class="status_tag empty">Hết hàng</div>
							<a href="#">
								<li><img src="public/img/camera/img-sp21.png" alt=""></li>
								<h3>máy ảnh soki</h3>
								<h4>300.00đ</h4>
							</a>
							<ul class="a_icon">
								<li><a href="#" title="Thêm giỏ hàng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
								<li><a href="#" title="Thêm yêu thích"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
								<li><a href="#" title="So sánh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
								<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
							</ul>
						</ul>
						<ul>
							<div class="pr_hot"><img src="public/img/camera/hot.png" alt=""></div>
							<a href="#">
								<li><img src="public/img/camera/img-sp20.png" alt=""></li>
								<h3 class="pep">máy ảnh soni</h3>
								<h4 class="pop"><span>400.00đ</span>300.00đ</h4>
							</a>
							<ul class="a_icon">
								<li><a href="#" title="Thêm giỏ hàng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
								<li><a href="#" title="Thêm yêu thích"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
								<li><a href="#" title="So sánh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
								<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
							</ul>
						</ul>
						<ul>
							<div class="discount_tag">23%</div>
							<div class="status_tag empty">Hết hàng</div>
							<a href="#">
								<li><img src="public/img/camera/img-sp21.png" alt=""></li>
								<h3>máy ảnh soki</h3>
								<h4>300.00đ</h4>
							</a>
							<ul class="a_icon">
								<li><a href="#" title="Thêm giỏ hàng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
								<li><a href="#" title="Thêm yêu thích"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
								<li><a href="#" title="So sánh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
								<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
							</ul>
						</ul>
						<ul>
							<div class="pr_hot"><img src="public/img/camera/hot.png" alt=""></div>
							<a href="#">
								<li><img src="public/img/camera/img-sp20.png" alt=""></li>
								<h3 class="pep">máy ảnh soni</h3>
								<h4 class="pop"><span>400.00đ</span>300.00đ</h4>
							</a>
							<ul class="a_icon">
								<li><a href="#" title="Thêm giỏ hàng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
								<li><a href="#" title="Thêm yêu thích"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
								<li><a href="#" title="So sánh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
								<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
							</ul>
						</ul>
						<ul>
							<div class="pr_hot"><img src="public/img/camera/hot.png" alt=""></div>
							<a href="#">
								<li><img src="public/img/camera/img-sp21.png" alt=""></li>
								<h3 class="pep">máy ảnh soni</h3>
								<h4 class="pop"><span>400.00đ</span>300.00đ</h4>
							</a>
							<ul class="a_icon">
								<li><a href="#" title="Thêm giỏ hàng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
								<li><a href="#" title="Thêm yêu thích"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
								<li><a href="#" title="So sánh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
								<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
							</ul>
						</ul>
						<ul>
							<div class="discount_tag">23%</div>
							<div class="status_tag empty">Hết hàng</div>
							<a href="#">
								<li><img src="public/img/camera/img-sp20.png" alt=""></li>
								<h3 class="pep2">máy ảnh soni</h3>
								<h4 class="pop2"><span>400.00đ</span>300.00đ</h4>
							</a>
							<ul class="a_icon">
								<li><a href="#" title="Thêm giỏ hàng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
								<li><a href="#" title="Thêm yêu thích"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
								<li><a href="#" title="So sánh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
								<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
							</ul>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="main_home_pp_product4">
					<div class="home_pp_product4">
						<div>
							<ul>
								<h3 class="hi">tin tức & sự kiện</h3>
							</ul>
							<div class="link_view_all">
								<a href="#">xem tất cả<i class="fa fa-angle-double-right"></i></a>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<!-- new -->
				<div class="main_new">
					<div class="New">
						<div class="new_left">
							<ul>
								<a href="#">
									<li style="list-style:none"><img src="public/img/event/tintuc1.jpg" alt="" width="200" height="100"></li>
									<h3>Samsung ra mắt TV The Wall Luxury với kích thước 292 inch, độ phân giải 8K</h3>
									<span class="calen"><i class="fa fa-calendar-alt"></i> 24/07/2021</span>
									<p>Mới đây, nhà sản xuất Samsung đã cho ra mắt TV The Wall Luxury với kích thước 292 inch, cùng độ phân giải lên đến 8K.
										The Wall Luxury là phiên bản mới của mẫu TV The Wall đã được hãng cho ra mắt trước đây
									</p>
								</a>
							</ul>
							<div class="clearfix"></div>
						</div>
						<div class="new_right">
							<ul>
								<li>
									<img src="public/img/event/tintuc2.jpg">
								</li>
								<li class="tes">
									<h3><a href="">Samsung "đổi gió" khi ra mắt chiếc Tivi dọc để xem</a></h3>
									<span><i class="fa fa-calendar-alt"></i> 24/07/2021</span>
									<p>Gã khổng lồ Samsung vừa tiết lộ thông tin sẽ ra mắt chiếc tivi Sero với màn hình dọc...</p>
								</li>
							</ul>
							<ul>
								<li>
									<img src="public/img/event/tintuc3.jpg" alt="">
								</li>
								<li class="tes">
									<h3><a href="">Samsung "đổi gió" khi ra mắt chiếc Tivi dọc để xem</a></h3>
									<span><i class="fa fa-calendar-alt"></i> 24/07/2021</span>
									<p>Gã khổng lồ Samsung vừa tiết lộ thông tin sẽ ra mắt chiếc tivi Sero với màn hình dọc...</p>
								</li>
							</ul>
							<ul>
								<li>
									<img src="public/img/event/tintuc4.jpg" alt="">
								</li>
								<li class="tes">
									<h3><a href="#">Samsung "đổi gió" khi ra mắt chiếc Tivi dọc để xem</a></h3>
									<span><i class="fa fa-calendar-alt"></i> 24/07/2021</span>
									<p>Gã khổng lồ Samsung vừa tiết lộ thông tin sẽ ra mắt chiếc tivi Sero với màn hình dọc...</p>
								</li>
							</ul>

						</div>
					</div>
					<div class="clearfix"></div>
				</div>

				<div class="slider-khoi">
					<div class="slider-cac1">
						<div class="slide-cac">
							<div class="slider "><img src="public/img/brand-slide/2.jpg"></div>
							<div class="slider "><img src="public/img/brand-slide/3.jpg"></div>
							<div class="slider "><img src="public/img/brand-slide/4.jpg"></div>
							<div class="slider"><img src="public/img/brand-slide/5.jpg"></div>
							<div class="slider "><img src="public/img/brand-slide/6.jpg"></div>
							<div class="slider"><img src="public/img/brand-slide/7.jpg"></div>
							<div class="slider"><img src="public/img/brand-slide/5.jpg"></div>
							<div class="slider"><img src="public/img/brand-slide/3.jpg"></div>
							<!-- <div class="slider "><img src="public/img/brand-slide/4.jpg"></div>
						<div class="slider"><img src="public/img/brand-slide/5.jpg"></div>
						<div class="slider"><img src="public/img/brand-slide/6.jpg"></div>
						<div class="slider "><img src="public/img/brand-slide/7.jpg"></div> -->
						</div>
						<div class="slide-nut">
							<span id="btn-pre"><i class="fas fa-chevron-left"></i></span>
							<span id="btn-nex"><i class="fas fa-chevron-right"></i></span>
						</div>
					</div>

				</div>
			</div>
			<div class="clearfix"></div>
			<div class="footer">
				<div class="container-footer" style="background-image: url('public/img/brand-slide/footer.jpg')">
					<div class="address">
						<div class="float-left">
							<ul>
								<li><img src="public/img/logo.png" alt=""></li>
								<div class="float-text">
									<li class="float1">
										<h3>VĂN PHÒNG CHÍNH & TRUNG TÂM BẢO HÀNH</h3>
										<h4>196 Nguyễn Đình Chiểu, Phường 6, Quận 3, Tp.HCM.</h4>
										<h4>Hotline : 1900 2227 | Điện thoại : (028) 73073776</h4>
										<span>Fax : (028) 62906490</span>
									</li>
									<li class="float2">
										<h3>TẠI HÀ NỘI & BẢO HÀNH</h3>
										<h4>Tầng 9, toà nhà Diamond (Handico 6), Số 2 Hoàng Đạo Thuý,
											<br>Trung Hoà Nhân Chính, Quận Thanh Xuân, Hà Nội.
										</h4>
										<span>Điện thoại: (024) 73073776</span>
									</li>
								</div>
							</ul>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="list_pro">
				<div class="pro-list">
					<ul>
						<li>
							<h1>chính sách & quy định</h1>
							<span class="small-line"></span>
						</li>
						<li>
							<h3><a href="#">hướng dẫn mua hàng</a></h3>
						</li>
						<li>
							<h3><a href="#">chính sách bảo hành</a></h3>
						</li>
						<li>
							<h3><a href="#">hình thức thanh toán</a></h3>
						</li>
						<ul id="khac">
							<li>
								<h1>dịch vụ khác</h1>
								<span class="small-line"></span>
							</li>
							<li>
								<h3><a href="#">thư mời hợp tác</a></h3>
							</li>
							<li>
								<h3><a href="#">chính sách bảo mật thông tin</a></h3>
							</li>
						</ul>
					</ul>
					<ul>
						<li>
							<h1>thiết bị studio</h1>
							<span class="small-line"></span>
						</li>
						<a href=""></a>
						<li>
							<h3><a href="#">9.Solution</a></h3>
						</li>
						<li>
							<h3><a href="#">bàn trộn hình ảnh</a></h3>
						</li>
						<li>
							<h3><a href="#">phông-giá treo phông</a></h3>
						</li>
						<li>
							<h3><a href="#">đèn quay phim</a></h3>
						</li>
						<li>
							<h3><a href="#">dụng cụ tản sáng</a></h3>
						</li>
						<li>
							<h3><a href="#">lồng chụp-bàn chụp sản phẩm</a></h3>
						</li>
						<li>
							<h3><a href="#">phụ kiện studio khác</a></h3>
						</li>
					</ul>
					<ul>
						<li>
							<h1>máy ảnh</h1>
							<span class="small-line"></span>
						</li>
						<li>
							<h3><a href="#">máy ảnh canon</a></h3>
						</li>
						<li>
							<h3><a href="#">máy ảnh sony</a></h3>
						</li>
						<li>
							<h3><a href="#">máy ảnh nikon</a></h3>
						</li>
						<li>
							<h3><a href="#">máy ảnh panasonic</a></h3>
						</li>
						<li>
							<h3><a href="#">máy ảnh samsung</a></h3>
						</li>
						<li>
							<h3><a href="#">máy ảnh chuyên nghiệp</a></h3>
						</li>
						<li>
							<h3><a href="#">máy ảnh lomography</a></h3>
						</li>
					</ul>
					<ul>
						<li>
							<h1>âm thanh</h1>
							<span class="small-line"></span>
						</li>
						<li>
							<h3><a href="#">combo bộ dàn âm thanh</a></h3>
						</li>
						<li>
							<h3><a href="#">dàn âm thanh</a></h3>
						</li>
						<li>
							<h3><a href="#">micro karaoke</a></h3>
						</li>
						<li>
							<h3><a href="#">bộ trộn âm thanh mixer</a></h3>
						</li>
						<li>
							<h3><a href="#">bộ khuếch đại âm thanh</a></h3>
						</li>
						<li>
							<h3><a href="#">đầu CD,DVD,karaoke</a></h3>
						</li>
						<li>
							<h3><a href="#">phụ kiện âm thanh</a></h3>
						</li>
					</ul>
				</div>

			</div>
			<div class="clear"></div>
			<div class="clearfix"></div>
			<div class="bottom">
				<div class="sub-bottom">
					<div class="bottom-left">
						<ul>
							<li>
								<h2>CÔNG TY TNHH BANG.VN</h2>
							</li>
							<li>
								<h3>MST/ĐKKD/QĐTL: 0305449167</h3>
							</li>
							<li>
								<h4>Trụ sở: 750 Sư Vạn Hạnh, Phường 12, Quận 10, Tp. HCM</h4>
							</li>
							<li>
								<h5>
									Email:info@sieuthimaychu.vn
									<br>
									| Điện Thoại:(028) 73073776
								</h5>
							</li>
						</ul>
					</div>
					<div class="bottom-midd">
						<h3>NHẬN BẢN TIN KHUYẾN MÃI</h3>
						<div class="middle-inside">
							<input type="text" placeholder="Nhập Địa Chỉ Email...">
							<a href="#">Đăng ký</a>
						</div>
					</div>
					<div class="bottom-right">
						<img src="<?php echo base_url('public') ?>/img/bo-cong-thuong.png" alt="#">
						<br>
						<h4 class="title">
							Thiết kế website bởi
							<span>P.A Việt Nam</span>
							<img src="<?php echo base_url('public') ?>/img/logo-web30s.png" alt="">
						</h4>
					</div>
				</div>

			</div>
			<div class="logout">
				<ul class="log">
					<legend>Option</legend>
                    <?php if($user2):?>
					<li><a href="<?= base_url('user_main') ?>">user setting</a></li>
					<li><a href="<?= base_url('logout') ?>">Logout</a></li>
					<?php endif?>
				</ul>
			</div>

			<div class="coupon_sec">
				<ul id="coupon_list">
					<?php foreach ($scoupon->getResult() as $coupon) : ?>
						<li>
							<span>
								Voucher <br>
								<?php echo $coupon->type ?><br>
								<mark>QT [<?php echo $coupon->amount ?>]</mark>
								<span id="Get"><a href="<?= base_url('getCoupon') ?>/<?= $coupon->id ?>">Get</a></span>
							</span>
						</li>
					<?php endforeach ?>
				</ul>
			</div>

		</div>

	</div>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Bootstrap JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
	<!-- <script src="public/js/script218.js"></script> -->
	<script src="public/js/hover.js"></script>
	<script src="public/js/slide.js"></script>
	<script src="public/js/slide4.js"></script>
	<script src="public/js/reponsive.js"></script>

</body>

</html>