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
							<input type="text" class="form-control" value="Nh???p t??? kh??a t??m ki???m..." onfocus="if (this.value == 'Nh???p t??? kh??a t??m ki???m...'){this.value='';}" onblur="if (this.value == '') {this.value='Nh???p t??? kh??a t??m ki???m...';}">
							<button type="button"><i class="fa fa-search fa-2x"></i></button>
						</div>
					</div>
					<div class="right-header">
						<div class="shopping-header">
							<div class="shopping-cart">
								<span><i class="fa fa-shopping-cart fa-2x" style="color:white"></i></span>
								<a href="<?= base_url('cart_view') ?>">Gi??? h??ng</a>
							</div>
							<div class="login-header">
								<?php if (isset($user2)) : ?>
									<?php foreach ($user->getResult() as $row) : ?>
										<span id="well"><a href="<?=base_url('user_main')?>">Hello!<?= $row->name?></a></span>
									<?php endforeach; ?>
								<?php elseif(!isset($user2)): ?>
									<span><i class="fa fa-user fa-2x" style="color: white;"></i></span>
									<span id="alert">Click to login or register</span>
									<a href="<?= base_url('login') ?>" class="icon2">????ng nh???p</a>
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
								<span>Mua h??ng - g??p ?? - b???o h??nh</span>
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
								<div class="dv-nut-menu" id="bar"><i class="fa fa-bars" style="color:white"></i>&nbsp; <span>danh m???c s???n ph???m</span></div>
								<div class="dv-ul-menu ">
									<ul class="minor">
										<li class="menu-item">
											<a href="#"><i class="fa fa-th-large"></i>
												<h2>M??y ???nh</h2><i class="fa fa-angle-right"></i>
											</a>
											<ul class="menu-sub">
												<li><a href="#">
														<h2>M??y ???nh Canon</h2>
													</a></li>
												<li><a href="#">
														<h2>M??y ???nh Nikon</h2>
													</a></li>
												<li> <a href="#">
														<h2>M??y ???nh Sony</h2>
													</a></li>
												<li> <a href="#">
														<h2>M??y ???nh Fujifilm</h2>
													</a></li>
												<li> <a href="#">
														<h2>M??y ???nh Pentax</h2>
													</a></li>
												<li> <a href="#">
														<h2>M??y ???nh Panasonic</h2>
													</a></li>
												<li> <a href="#">
														<h2>M??y ???nh Olympus</h2>
													</a></li>
												<li> <a href="#">
														<h2>M??y ???nh Samsung</h2>
													</a></li>
												<li> <a href="#">
														<h2>M??y ???nh Mirrorless</h2>
													</a></li>
												<li> <a href="#">
														<h2>M??y ???nh Chuy??n Nghi???p</h2>
													</a></li>
												<li> <a href="#">
														<h2>M??y ???nh Du l???ch</h2>
													</a></li>
												<li> <a href="#">
														<h2>M??y ???nh Si??u Zoom</h2>
													</a></li>
												<li> <a href="#">
														<h2>M??y ???nh Ch???p D?????i N?????c</h2>
													</a></li>
												<li> <a href="#">
														<h2>M??y ???nh Ch???p L???y Li???n</h2>
													</a></li>
												<li> <a href="#">
														<h2>Mua Tr??? G??p 0 ?????ng</h2>
													</a></li>
												<li> <a href="#">
														<h2>M??y ???nh Ricoh</h2>
													</a></li>
												<li> <a href="#">
														<h2>M??y ???nh Leica</h2>
													</a></li>
												<li> <a href="#">
														<h2>M??y ???nh Lomography</h2>
													</a></li>
											</ul>
										</li>
									</ul>
									<ul class="minor">
										<li class="menu-item"><a href="#"><i class="fa fa-th-large"></i>
												<h2>??m Thanh</h2><i class="fa fa-angle-right"></i>
											</a>
											<ul class="menu-sub">
												<li><a href="#">
														<h2>Combo B??? D??n ??m Thanh</h2>
													</a></li>
												<li> <a href="#">
														<h2>D??n ??m Thanh</h2>
													</a></li>
												<li> <a href="#">
														<h2>Micro Karaoke</h2>
													</a></li>
												<li> <a href="#">
														<h2>B??? Tr???n ??m Thanh Mixer</h2>
													</a></li>
												<li> <a href="#">
														<h2>B??? Khu???ch ?????i ??m Thanh</h2>
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
														<h2>?????u CD, DVD, Karaoke</h2>
													</a></li>
												<li> <a href="#">
														<h2>M??y Ghi ??m</h2>
													</a></li>
												<li> <a href="#">
														<h2>M??y Nghe Nh???c</h2>
													</a></li>
												<li> <a href="#">
														<h2>Cassette, Radio</h2>
													</a></li>
												<li> <a href="#">
														<h2>Ph??? Ki???n ??m Thanh</h2>
													</a></li>
												<li> <a href="#">
														<h2>Loa Karaoke</h2>
													</a></li>
												<li> <a href="#">
														<h2>B??? Gi???i M?? DAC Yamaha</h2>
													</a></li>
												<li> <a href="#">
														<h2>Loa K??o Di ?????ng</h2>
													</a></li>
											</ul>
										</li>
									</ul>
									<ul class="minor">
										<li class="menu-item"><a href="#"><i class="fa fa-th-large"></i>
												<h2>Khuy???n M??i</h2><i class="fa fa-angle-right"></i>
											</a>
											<ul class="menu-sub">
												<li> <a href="#">
														<h2>M?? Gi???m Gi??</h2>
													</a></li>
												<li> <a href="#">
														<h2>Khuy???n M??i T???i H??? Ch?? Minh</h2>
													</a></li>
												<li> <a href="#">
														<h2>Khuy???n M??i T???i H?? N???i</h2>
													</a></li>
												<li> <a href="#">
														<h2>Khuy???n M??i T???i ???? N???ng</h2>
													</a></li>
												<li> <a href="#">
														<h2>Khuy???n M??i M??y ???nh v?? M??y Quay</h2>
													</a></li>
												<li> <a href="#">
														<h2>Khuy???n M??i Tivi</h2>
													</a></li>
												<li> <a href="#">
														<h2>Khuy???n M??i ??m Thanh</h2>
													</a></li>
												<li> <a href="#">
														<h2>Khuy???n M??i Action Cam Sony</h2>
													</a></li>
												<li> <a href="#">
														<h2>Voucher Khuy???n M??i</h2>
													</a></li>
											</ul>
										</li>
									</ul>
									<ul class="minor">
										<li class="menu-item"><a href="#"><i class="fa fa-th-large"></i>
												<h2>Ph??? Ki???n M??y ???nh - M??y Quay</h2><i class="fa fa-angle-right"></i>
											</a>
											<ul class="menu-sub">
												<li> <a href="#">
														<h2>Khung G???n Cho M??y ???nh</h2>
													</a></li>
												<li> <a href="#">
														<h2>????n Flash</h2>
													</a></li>
												<li> <a href="#">
														<h2>M??y In ???nh</h2>
													</a></li>
												<li> <a href="#">
														<h2>Gi???y - M???c In ???nh</h2>
													</a></li>
												<li> <a href="#">
														<h2>T??i ?????ng M??y ???nh</h2>
													</a></li>
												<li> <a href="#">
														<h2>Ch??n M??y ???nh</h2>
													</a></li>
												<li> <a href="#">
														<h2>T??? Ch???ng ???m</h2>
													</a></li>
												<li> <a href="#">
														<h2>Th??? Nh???</h2>
													</a></li>
												<li> <a href="#">
														<h2>K??nh L???c</h2>
													</a></li>
												<li> <a href="#">
														<h2>H???p Ch???ng ???m</h2>
													</a></li>
												<li> <a href="#">
														<h2>D??y ??eo</h2>
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
														<h2>S???c Pin</h2>
													</a></li>
												<li> <a href="#">
														<h2>????? Pin - Battery Grip</h2>
													</a></li>
												<li> <a href="#">
														<h2>Trigger - K??ch ????n</h2>
													</a></li>
												<li> <a href="#">
														<h2>Adapter - Mount Chuy???n</h2>
													</a></li>
												<li> <a href="#">
														<h2>?????u Quay Ch??n M??y ???nh</h2>
													</a></li>
												<li> <a href="#">
														<h2>Ch???ng S???c - Ch???ng N?????c</h2>
													</a></li>
												<li> <a href="#">
														<h2>D???ng C??? V??? Sinh M??y ???nh</h2>
													</a></li>
												<li> <a href="#">
														<h2>Thi???t B??? Ch???p Macro</h2>
													</a></li>
												<li> <a href="#">
														<h2>D??y C??p K???t N???i</h2>
													</a></li>
												<li> <a href="#">
														<h2>G???y Ch???p H??nh Selfie</h2>
													</a></li>
												<li> <a href="#">
														<h2>Qu?? T???ng</h2>
													</a></li>
												<li> <a href="#">
														<h2>?????u ?????c Th??? Nh???</h2>
													</a></li>
											</ul>
										</li>
									</ul>
									<ul class="minor">
										<li class="menu-item"><a href="#"><i class="fa fa-th-large"></i>
												<h2>Thi???t B??? Studio</h2><i class="fa fa-angle-right"></i>
											</a>
											<ul class="menu-sub">
												<li> <a href="#">
														<h2>9.Solution</h2>
													</a></li>
												<li> <a href="#">
														<h2>B??n Tr???n H??nh ???nh</h2>
													</a></li>
												<li> <a href="#">
														<h2>Ph??ng - Gi?? Treo Ph??ng</h2>
													</a></li>
												<li> <a href="#">
														<h2>????n Quay Phim</h2>
													</a></li>
												<li> <a href="#">
														<h2>????n Ch???p</h2>
													</a></li>
												<li> <a href="#">
														<h2>????n Led</h2>
													</a></li>
												<li> <a href="#">
														<h2>D???ng C??? T???n S??ng</h2>
													</a></li>
												<li> <a href="#">
														<h2>L???ng Ch???p - B??n Ch???p S???n Ph???m</h2>
													</a></li>
												<li> <a href="#">
														<h2>Ch??n ????n</h2>
													</a></li>
												<li> <a href="#">
														<h2>Ph??? Ki???n Studio Kh??c</h2>
													</a></li>
												<li> <a href="#">
														<h2>D???ng C??? H???t S??ng</h2>
													</a></li>
												<li> <a href="#">
														<h2>Thi???t B??? Ch???ng Rung</h2>
													</a></li>
												<li> <a href="#">
														<h2>Thi???t B??? Livestream</h2>
													</a></li>
												<li> <a href="#">
														<h2>M??n H??nh H??? Tr??? Quay</h2>
													</a></li>
												<li> <a href="#">
														<h2>Combo ????n Studio</h2>
													</a></li>
												<li> <a href="#">
														<h2>Microphone Thu ??m</h2>
													</a></li>
												<li> <a href="#">
														<h2>Ph??? Ki???n Blackmagic Kh??c</h2>
													</a></li>
											</ul>
										</li>
									</ul>
									<ul class="minor">
										<li class="menu-item"><a href="#"><i class="fa fa-th-large"></i>
												<h2>M??y Quay</h2><i class="fa fa-angle-right"></i>
											</a>
											<ul class="menu-sub">
												<li> <a href="#">
														<h2>M??y Quay Sony</h2>
													</a></li>
												<li> <a href="#">
														<h2>M??y Quay Panasonic</h2>
													</a></li>
												<li> <a href="#">
														<h2>M??y Quay Canon</h2>
													</a></li>
												<li> <a href="#">
														<h2>M??y Quay Brinno</h2>
													</a></li>
												<li> <a href="#">
														<h2>M??y Quay Nikon</h2>
													</a></li>
												<li> <a href="#">
														<h2>M??y Quay JVC</h2>
													</a></li>
												<li> <a href="#">
														<h2>M??y Quay Gopro</h2>
													</a></li>
												<li> <a href="#">
														<h2>M??y Quay Polaroid</h2>
													</a></li>
												<li> <a href="#">
														<h2>M??y Quay Sjcam</h2>
													</a></li>
												<li> <a href="#">
														<h2>M??y Quay Amkov</h2>
													</a></li>
												<li> <a href="#">
														<h2>M??y Quay Olympus</h2>
													</a></li>
												<li> <a href="#">
														<h2>M??y Quay Insta360</h2>
													</a></li>
												<li> <a href="#">
														<h2>M??y Quay Ricoh</h2>
													</a></li>
												<li> <a href="#">
														<h2>M??y Quay Chuy??n Nghi???p</h2>
													</a></li>
												<li> <a href="#">
														<h2>M??y Quay C???m Tay</h2>
													</a></li>
												<li> <a href="#">
														<h2>M??y Quay D?????i N?????c</h2>
													</a></li>
												<li> <a href="#">
														<h2>M??y Quay Xiaomi</h2>
													</a></li>
												<li> <a href="#">
														<h2>M??y Quay Blackmagic</h2>
													</a></li>
												<li> <a href="#">
														<h2>M??y Quay DJI</h2>
													</a></li>
												<li> <a href="#">
														<h2>M??y Quay Kandao</h2>
													</a></li>
											</ul>
										</li>
									</ul>
									<ul class="minor">
										<li class="menu-item"><a href="#"><i class="fa fa-th-large"></i>
												<h2>???ng k??nh</h2><i class="fa fa-angle-right"></i>
											</a>
											<ul class="menu-sub">
												<li> <a href="#">
														<h2>???ng K??nh Canon</h2>
													</a></li>
												<li> <a href="#">
														<h2>???ng K??nh Nikon</h2>
													</a></li>
												<li> <a href="#">
														<h2>???ng K??nh Fujifilm</h2>
													</a></li>
												<li> <a href="#">
														<h2>???ng K??nh Sony</h2>
													</a></li>
												<li> <a href="#">
														<h2>???ng K??nh Sigma</h2>
													</a></li>
												<li> <a href="#">
														<h2>???ng K??nh Samsung</h2>
													</a></li>
												<li> <a href="#">
														<h2>???ng K??nh Samyang</h2>
													</a></li>
												<li> <a href="#">
														<h2>???ng K??nh Tamron</h2>
													</a></li>
												<li> <a href="#">
														<h2>???ng K??nh Tokina</h2>
													</a></li>
												<li> <a href="#">
														<h2>???ng K??nh Voigtlander</h2>
													</a></li>
												<li> <a href="#">
														<h2>???ng K??nh Brinno</h2>
													</a></li>
												<li> <a href="#">
														<h2>???ng K??nh Yongnuo</h2>
													</a></li>
												<li> <a href="#">
														<h2>???ng K??nh Pentax</h2>
													</a></li>
												<li> <a href="#">
														<h2>???ng K??nh Olympus</h2>
													</a></li>
												<li> <a href="#">
														<h2>???ng K??nh Panasonic</h2>
													</a></li>
												<li> <a href="#">
														<h2>???ng K??nh Carl Zeiss</h2>
													</a></li>
												<li> <a href="#">
														<h2>???ng K??nh Leica</h2>
													</a></li>
												<li> <a href="#">
														<h2>???ng K??nh Laowa</h2>
													</a></li>
											</ul>
										</li>
									</ul>
									<ul class="minor">
										<li class="menu-item"><a href="#"><i class="fa fa-th-large"></i>
												<h2>M??y T??nh, Thi???t B??? M???ng, Game</h2><i class="fa fa-angle-right"></i>
											</a>
											<ul class="menu-sub">
												<li> <a href="#">
														<h2>iPad</h2>
													</a></li>
												<li> <a href="#">
														<h2>Macbook</h2>
													</a></li>
												<li> <a href="#">
														<h2>Ph??? Ki???n Apple</h2>
													</a></li>
												<li> <a href="#">
														<h2>M??y Ch??i Game Playstation</h2>
													</a></li>
												<li> <a href="#">
														<h2>??? C???ng</h2>
													</a></li>
												<li> <a href="#">
														<h2>Router Wifi</h2>
													</a></li>
												<li> <a href="#">
														<h2>M??n H??nh M??y Vi T??nh</h2>
													</a></li>
												<li> <a href="#">
														<h2>Chu???t v?? B??n Di Chu???t</h2>
													</a></li>
												<li> <a href="#">
														<h2>M??y Chi???u</h2>
													</a></li>
											</ul>
										</li>
									</ul>
									<ul class="minor">
										<li class="menu-item"><a href="#"><i class="fa fa-th-large"></i>
												<h2>????? Ch??i, Ph??? Ki???n Cao C???p</h2><i class="fa fa-angle-right"></i>
											</a>
											<ul class="menu-sub">
												<li> <a href="#">
														<h2>Ph??? Ki???n Cao C???p Kh??c</h2>
													</a></li>
												<li> <a href="#">
														<h2>????? D?? Ngo???i</h2>
													</a></li>
												<li> <a href="#">
														<h2>V??ng ??eo Cao C???p</h2>
													</a></li>
												<li> <a href="#">
														<h2>GPS H??? Tr??? Xe ?????p</h2>
													</a></li>
												<li> <a href="#">
														<h2>Ph??? Ki???n Pelican</h2>
													</a></li>
											</ul>
										</li>
									</ul>
									<ul class="minor">
										<li class="menu-item"><a href="#"><i class="fa fa-th-large"></i>
												<h2>???ng Nh??m</h2><i class="fa fa-angle-right"></i>
											</a>
											<ul class="menu-sub">
												<li> <a href="#">
														<h2>???ng Nh??m Nikon</h2>
													</a></li>
												<li> <a href="#">
														<h2>???ng Nh??m Steiner</h2>
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
												<h2>B???ng v??? ??i???n t???</h2><i class="fa fa-angle-right"></i>
											</a>
											<ul class="menu-sub">
												<li> <a href="#">
														<h2>B???ng V??? ??i???n T??? Wacom</h2>
													</a></li>
												<li> <a href="#">
														<h2>B??t C???m ???ng Wacom</h2>
													</a></li>
												<li> <a href="#">
														<h2>S??? Ghi Ch?? ??i???n T??? Wacom</h2>
													</a></li>
												<li> <a href="#">
														<h2>Ph??? Ki???n Wacom</h2>
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
								<li><a href="<?= base_url() ?>">trang ch???</a></li>
								<li><a href="<?= base_url('product') ?>">s???n ph???m</a></li>
								<li>
									<a href="<?= base_url('newspaper') ?>">tin t???c</a><i class="fa fa-angle-down" id="angle1"></i>
									<ul class="down" id="down1">
										<li><a href="#">tin t???c n???i b???</a></li>
										<li><a href="#">tin t???c th??? tr?????ng</a></li>
										<li><a href="#">tin t???c khuy???n m???i</a></li>
									</ul>
								</li>
								<li>
									<a href="<?= base_url('service') ?>">d???ch v??? </a><i class="fa fa-angle-down" id="angle2"></i>
									<ul class="down" id="down2">
										<li><a href="#">giao h??ng mi???n ph??</a></li>
										<li><a href="#">b???o h??nh - s???a ch???a</a></li>
										<li><a href="#">?????i m??y c?? l???y m??y m???i</a></li>
									</ul>
								</li>
								<li><a href="<?= base_url('news') ?>">th?? vi??n </a><i class="fa fa-angle-down" id="angle3"></i>
									<ul class="down" id="down3">
										<li><a href="#">th?? vi???n ???nh</a></li>
										<li><a href="#">th?? vi???n video</a></li>
									</ul>
								</li>
								<li><a href="<?= base_url('support') ?>">h??? tr??? kh??ch</a><i class="fa fa-angle-down" id="angle4"></i>
									<ul class="down" id="down4">
										<li><a href="#">h?????ng d???n mua h??ng</a></li>
										<li><a href="#">ch??nh s??ch b???o h??nh</a></li>
										<li><a href="#">h??nh th???c thanh to??n </a></li>
										<li><a href="#">ph????ng th???c giao h??ng</a></li>
									</ul>
									<div class="clearfix"></div>
								</li>
								<li><a href="<?= base_url('contact') ?>">li??n h???</a></li>
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
									<h3>S???n Ph???m M???i</h3>
									<div class="clearfix"></div>
								</ul>
							</div>
							<div class="sd_menu sd_menu_left">
								<div class="plc1_1 i-st1">
									<div class="status-tag still">C??n h??ng</div>
									<a href="#">
										<div class="a-mobi-sp"><img src="public/img/left_product/img-sp4.png"></div>
										<h3>MICROLAB FC - 70BT / 2.1 (new)
											105 W RMS</h3>
										<div class="prc_compare_price">
											<s2>800.000 ???</s2>
										</div>
									</a>
									<ul class="a_icon">
										<li><a href="#" title="Th??m gi??? h??ng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Th??m y??u th??ch"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
										<li><a href="#" title="So s??nh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
									</ul>
								</div>
								<div class="plc1_1 i-st1">
									<div class="status-tag still">C??n h??ng</div>
									<a href="#">
										<div class="a-mobi-sp"><img src="public/img/left_product/img-sp5.png"></div>
										<h3>Loa Bluetooth Thonet
											and Vander Dunn</h3>
										<div class="prc_compare_price">
											<s2>800.000 ???</s2>
										</div>
									</a>
									<ul class="a_icon">
										<li><a href="#" title="Th??m gi??? h??ng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Th??m y??u th??ch"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
										<li><a href="#" title="So s??nh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
									</ul>
								</div>
								<div class="plc1_1 i-st1">
									<div class="status-tag still">C??n h??ng</div>
									<a href="#">
										<div class="a-mobi-sp"><img src="public/img/left_product/img-sp6.png"></div>
										<h3>Loa Bluetooth Thonet
											and Vander RISS 2.1</h3>
										<div class="prc_compare_price">
											<s2>800.000 ???</s2>
										</div>
									</a>
									<ul class="a_icon">
										<li><a href="#" title="Th??m gi??? h??ng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Th??m y??u th??ch"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
										<li><a href="#" title="So s??nh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
									</ul>
								</div>

							</div>
						</div>
						<div class="right-pd-sale">
							<div class="max">
								<h3 class="hey">S???n Ph???m Khuy???n M??i</h3>
								<a href="#">Xem t???t c???<i class="fa fa-angle-double-right"></i></a>
							</div>
							<div class="box_pro">
								<div class="pro_home_id pro_home_id_home">
									<ul>
										<div class="discount-tag">20%</div>
										<div class="status-tag still">C??n h??ng</div>
										<a href="#">
											<li><img src="public/img/right_product/img-sp4.png">
											</li>
											<h3>Loa Bluetooth Thonet and Vander Dunn</h3>
											<h4><span>1.000.000 ???</span>800.000 ???</h4>
											<br>
											<div class="a_icon buy">
												<lbl><i class="fa fa-cart-plus"></i>Th??m v??o gi??? h??ng</lbl>
											</div>
										</a>
										<ul class="a_icon">
											<li><a href="#" title="Th??m gi??? h??ng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
											<li><a href="#" title="Th??m y??u th??ch"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
											<li><a href="#" title="So s??nh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
											<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
										</ul>
									</ul>
									<ul>
										<div class="discount-tag">20%</div>
										<div class="status-tag still">C??n h??ng</div>
										<a href="#">
											<li><img src="public/img/right_product/img-sp8.png">
											</li>
											<h3>MICROLAB FC - 70BT / 2.1 (new) 105 W RMS M??u: ??en K???t n???i Bluetooth 4.0</h3>
											<h4><span>1.000.000 ???</span>800.000 ???</h4>
											<br>
											<div class="a_icon buy">
												<lbl><i class="fa fa-cart-plus"></i>Th??m v??o gi??? h??ng</lbl>
											</div>
										</a>
										<ul class="a_icon">
											<li><a href="#" title="Th??m gi??? h??ng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
											<li><a href="#" title="Th??m y??u th??ch"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
											<li><a href="#" title="So s??nh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
											<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
										</ul>
									</ul>
									<ul>
										<div class="discount-tag">20%</div>
										<div class="status-tag still">C??n h??ng</div>
										<a href="#">
											<li><img src="public/img/right_product/img-sp7.png">
											</li>
											<h3>Loa Bluetooth Thonet and Vander Dunn</h3>
											<h4><span>1.000.000 ???</span>800.000 ???</h4>
											<br>
											<div class="a_icon buy">
												<lbl><i class="fa fa-cart-plus"></i>Th??m v??o gi??? h??ng</lbl>
											</div>
										</a>
										<ul class="a_icon">
											<li><a href="#" title="Th??m gi??? h??ng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
											<li><a href="#" title="Th??m y??u th??ch"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
											<li><a href="#" title="So s??nh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
											<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
										</ul>
									</ul>
									<ul>
										<div class="discount-tag">20%</div>
										<div class="status-tag still">C??n h??ng</div>
										<a href="#">
											<li><img src="public/img/right_product/img-sp5.png">
											</li>
											<h3>MICROLAB FC - 70BT / 2.1 (new) 105 W RMS M??u: ??en K???t n???i Bluetooth 4.0</h3>
											<h4><span>1.000.000 ???</span>800.000 ???</h4>
											<br>
											<div class="a_icon buy">
												<lbl><i class="fa fa-cart-plus"></i>Th??m v??o gi??? h??ng</lbl>
											</div>
										</a>
										<ul class="a_icon">
											<li><a href="#" title="Th??m gi??? h??ng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
											<li><a href="#" title="Th??m y??u th??ch"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
											<li><a href="#" title="So s??nh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
											<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
										</ul>
									</ul>
									<ul>
										<div class="discount-tag">20%</div>
										<div class="status-tag still">C??n h??ng</div>
										<a href="#">
											<li><img src="public/img/right_product/img-sp4.png">
											</li>
											<h3>Loa Bluetooth Thonet and Vander Dunn</h3>
											<h4><span>1.000.000 ???</span>800.000 ???</h4>
											<br>
											<div class="a_icon buy">
												<lbl><i class="fa fa-cart-plus"></i>Th??m v??o gi??? h??ng</lbl>
											</div>
										</a>
										<ul class="a_icon">
											<li><a href="#" title="Th??m gi??? h??ng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
											<li><a href="#" title="Th??m y??u th??ch"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
											<li><a href="#" title="So s??nh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
											<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
										</ul>
									</ul>
									<ul>
										<div class="discount-tag">20%</div>
										<div class="status-tag still">C??n h??ng</div>
										<a href="#">
											<li><img src="public/img/right_product/img-sp6.png">
											</li>
											<h3>MICROLAB FC - 70BT / 2.1 (new) 105 W RMS M??u: ??en K???t n???i Bluetooth 4.0</h3>
											<h4><span>1.000.000 ???</span>800.000 ???</h4>
											<br>
											<div class="a_icon buy">
												<lbl><i class="fa fa-cart-plus"></i>Th??m v??o gi??? h??ng</lbl>
											</div>
										</a>
										<ul class="a_icon">
											<li><a href="#" title="Th??m gi??? h??ng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
											<li><a href="#" title="Th??m y??u th??ch"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
											<li><a href="#" title="So s??nh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
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
									<h3 class="hi">S???n ph???m n???i b???t</h3>
								</ul>
								<div class="link_view_all">
									<a href="#">M??y ???nh</a>
									<a href="#">??m thanh</a>
									<a href="#">Thi???t b??? studio</a>
									<a href="#">???ng k??nh</a>
									<a href="#">M??y t??nh</a>
									<a href="#">Ti vi</a>
									<a href="#">?????ng h???</a>
									<a href="#">B???ng v??? ??i???n t???</a>
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
								<h3>Loa Bluetooth Thonet &amp; Vander HOCH BT 2.0 ??? 70W WHITE</h3>
							</li>
							<li>
								<h4>800.000 ???</h4>
							</li>
							<ul class="a_icon">
								<li><a href="#" title="Th??m gi??? h??ng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
								<li><a href="#" title="Th??m y??u th??ch"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
								<li><a href="#" title="So s??nh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
								<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
							</ul>
						</ul>
						<ul>
							<li class="discount-tag">20%</li>
							<li class="status-empty">H???t h??ng</li>

							<li><img src="public/img/speaker/img11.png">
							</li>
							<li>
								<h3>Loa Bluetooth honet &amp; Vander KOLOSS 2.0 ??? 70W WHITE</h3>
							</li>
							<li>
								<h4><span>1.000.000 ???</span>800.000 ???</h4>
							</li>
							<ul class="a_icon">
								<li><a href="#" title="Th??m gi??? h??ng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
								<li><a href="#" title="Th??m y??u th??ch"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
								<li><a href="#" title="So s??nh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
								<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
							</ul>
						</ul>
						<ul>
							<li class="pr-hot"><img src="public/img/speaker/hot.png"></li>
							<li class="diff"><img src="public/img/speaker/img10.png">
							</li>
							<li>
								<h3>Loa Bluetooth Thonet &amp; Vander HOCH BT 2.0 ??? 70W WHITE</h3>
							</li>
							<li>
								<h4>800.000 ???</h4>
							</li>
							<ul class="a_icon">
								<li><a href="#" title="Th??m gi??? h??ng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
								<li><a href="#" title="Th??m y??u th??ch"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
								<li><a href="#" title="So s??nh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
								<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
							</ul>
						</ul>
						<ul>
							<li class="discount-tag">20%</li>
							<li class="status-still">C??n h??ng</li>
							<li><img src="public/img/speaker/img11.png">
							</li>
							<li>
								<h3>Loa Bluetooth honet &amp; Vander KOLOSS 2.0 ??? 70W WHITE</h3>
							</li>
							<li>
								<h4><span>1.000.000 ???</span>800.000 ???</h4>
							</li>
							<ul class="a_icon">
								<li><a href="#" title="Th??m gi??? h??ng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
								<li><a href="#" title="Th??m y??u th??ch"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
								<li><a href="#" title="So s??nh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
								<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
							</ul>
						</ul>
						<ul>
							<div class="pr-hot"><img src="public/img/speaker/hot.png">
							</div>
							<li><img src="public/img/speaker/img11.png">
							</li>
							<li>
								<h3>Loa Bluetooth honet &amp; Vander KOLOSS 2.0 ??? 70W WHITE</h3>
							</li>
							<li>
								<h4><span>1.000.000 ???</span>800.000 ???</h4>
							</li>
							<ul class="a_icon">
								<li><a href="#" title="Th??m gi??? h??ng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
								<li><a href="#" title="Th??m y??u th??ch"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
								<li><a href="#" title="So s??nh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
								<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
							</ul>
						</ul>
						<ul>
							<div class="discount-tag">20%</div>
							<div class="status-still">C??n h??ng</div>
							<li><img src="public/img/speaker/img11.png">
							</li>
							<li>
								<h3>Loa Bluetooth honet &amp; Vander KOLOSS 2.0 ??? 70W WHITE</h3>
							</li>
							<li>
								<h4><span>1.000.000 ???</span>800.000 ???</h4>
							</li>
							<ul class="a_icon">
								<li><a href="#" title="Th??m gi??? h??ng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
								<li><a href="#" title="Th??m y??u th??ch"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
								<li><a href="#" title="So s??nh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
								<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
							</ul>
						</ul>
						<ul>
							<div class="pr-hot"><img src="public/img/speaker/hot.png">
							</div>
							<li><img src="public/img/speaker/img11.png">
							</li>
							<li>
								<h3>Loa Bluetooth honet &amp; Vander KOLOSS 2.0 ??? 70W WHITE</h3>
							</li>
							<li>
								<h4><span>1.000.000 ???</span>800.000 ???</h4>
							</li>
							<ul class="a_icon">
								<li><a href="#" title="Th??m gi??? h??ng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
								<li><a href="#" title="Th??m y??u th??ch"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
								<li><a href="#" title="So s??nh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
								<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
							</ul>
						</ul>
						<ul>
							<div class="discount-tag">20%</div>
							<div class="status-empty">H???t h??ng</div>
							<li><img src="public/img/speaker/img11.png">
							</li>
							<li>
								<h3>Loa Bluetooth honet &amp; Vander KOLOSS 2.0 ??? 70W WHITE</h3>
							</li>
							<li>
								<h4><span>1.000.000 ???</span>800.000 ???</h4>
							</li>
							<ul class="a_icon">
								<li><a href="#" title="Th??m gi??? h??ng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
								<li><a href="#" title="Th??m y??u th??ch"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
								<li><a href="#" title="So s??nh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
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
								<h3 class="hi">s???n ph???m b??n ch???y</h3>
							</ul>
							<div class="link_view_all">
								<a href="#">Xem t???t c???<i class="fa fa-angle-double-right"></i></a>
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
										<h4>3000??</h4>
									</a>
									<ul class="a_icon">
										<li><a href="#" title="Th??m gi??? h??ng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Th??m y??u th??ch"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
										<li><a href="#" title="So s??nh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
									</ul>
								</ul>
								<ul class="slick-sliden">
									<a href="#">
										<li><img src="public/img/speaker/img11.png" style="width:190px;height:187px">
										</li>
										<h3>Speaker</h3>
										<h4>3000??</h4>
									</a>
									<h3>Speaker</h3>
									<h4>3000??</h4>
									<ul class="a_icon">
										<li><a href="#" title="Th??m gi??? h??ng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Th??m y??u th??ch"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
										<li><a href="#" title="So s??nh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
									</ul>
								</ul>
								<ul class="slick-sliden">
									<a href="#">
										<li><img src="public/img/speaker/img10.png" style="width:190px;height:187px">
										</li>
									</a>
									<h3>Speaker</h3>
									<h4>3000??</h4>
									<ul class="a_icon">
										<li><a href="#" title="Th??m gi??? h??ng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Th??m y??u th??ch"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
										<li><a href="#" title="So s??nh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
									</ul>
								</ul>
								<ul class="slick-sliden">
									<a href="#">
										<li><img src="public/img/speaker/img11.png" style="width:190px;height:187px">
										</li>
									</a>
									<h3>Speaker</h3>
									<h4>3000??</h4>
									<ul class="a_icon">
										<li><a href="#" title="Th??m gi??? h??ng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Th??m y??u th??ch"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
										<li><a href="#" title="So s??nh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
									</ul>
								</ul>
								<ul class="slick-sliden">
									<a href="#">
										<li><img src="public/img/speaker/img10.png" style="width:190px;height:187px">
										</li>
									</a>
									<h3>Speaker</h3>
									<h4>3000??</h4>
									<ul class="a_icon">
										<li><a href="#" title="Th??m gi??? h??ng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Th??m y??u th??ch"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
										<li><a href="#" title="So s??nh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
									</ul>
								</ul>
								<ul class="slick-sliden">
									<a href="#">
										<li><img src="public/img/speaker/img11.png" style="width:190px;height:187px">
										</li>
									</a>
									<h3>Speaker</h3>
									<h4>3000??</h4>
									<ul class="a_icon">
										<li><a href="#" title="Th??m gi??? h??ng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Th??m y??u th??ch"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
										<li><a href="#" title="So s??nh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
									</ul>
								</ul>
								<ul class="slick-sliden">
									<a href="#">
										<li><img src="public/img/speaker/img10.png" style="width:190px;height:187px">
										</li>
									</a>
									<h3>Speaker</h3>
									<h4>3000??</h4>
									<ul class="a_icon">
										<li><a href="#" title="Th??m gi??? h??ng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Th??m y??u th??ch"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
										<li><a href="#" title="So s??nh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
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
									<h4>3000??</h4>
									<ul class="a_icon">
										<li><a href="#" title="Th??m gi??? h??ng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Th??m y??u th??ch"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
										<li><a href="#" title="So s??nh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
									</ul>
								</ul>
								<ul class="slick-sliden">
									<li><img src="public/img/speaker/img10.png" style="width:190px;height:187px">
									</li>
									</a>
									<h3>Speaker</h3>
									<h4>3000??</h4>
									<ul class="a_icon">
										<li><a href="#" title="Th??m gi??? h??ng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Th??m y??u th??ch"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
										<li><a href="#" title="So s??nh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
									</ul>
								</ul>
								<ul class="slick-sliden">
									<a href="#" tabindex="0">
										<li><img src="public/img/speaker/img11.png" style="width:190px;height:187px">
										</li>
									</a>
									<h3>Speaker</h3>
									<h4>3000??</h4>
									<ul class="a_icon">
										<li><a href="#" title="Th??m gi??? h??ng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Th??m y??u th??ch"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
										<li><a href="#" title="So s??nh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
									</ul>
								</ul>
								<ul class="slick-sliden">
									<a href="#" tabindex="0">
										<li><img src="public/img/speaker/img10.png" style="width:190px;height:187px">
										</li>
									</a>
									<h3>Speaker</h3>
									<h4>3000??</h4>
									<ul class="a_icon">
										<li><a href="#" title="Th??m gi??? h??ng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Th??m y??u th??ch"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
										<li><a href="#" title="So s??nh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
									</ul>
								</ul>
								<ul class="slick-sliden">
									<a href="#" tabindex="0">
										<li><img src="public/img/speaker/img11.png" style="width:190px;height:187px">
										</li>
									</a>
									<h3>Speaker</h3>
									<h4>3000??</h4>
									<ul class="a_icon">
										<li><a href="#" title="Th??m gi??? h??ng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Th??m y??u th??ch"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
										<li><a href="#" title="So s??nh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
									</ul>
								</ul>
								<ul class="slick-sliden">
									<a href="#" tabindex="0">
										<li><img src="public/img/speaker/img10.png" style="width:190px;height:187px">
										</li>
									</a>
									<h3>Speaker</h3>
									<h4>3000??</h4>
									<ul class="a_icon">
										<li><a href="#" title="Th??m gi??? h??ng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Th??m y??u th??ch"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
										<li><a href="#" title="So s??nh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
									</ul>
								</ul>
								<ul class="slick-sliden">
									<a href="#">
										<li><img src="public/img/speaker/img11.png" style="width:190px;height:187px">
										</li>
									</a>
									<h3>Speaker</h3>
									<h4>3000??</h4>
									<ul class="a_icon">
										<li><a href="#" title="Th??m gi??? h??ng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Th??m y??u th??ch"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
										<li><a href="#" title="So s??nh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
									</ul>
								</ul>
								<ul class="slick-sliden">
									<a href="#">
										<li><img src="public/img/speaker/img10.png" style="width:190px;height:187px">
										</li>
									</a>
									<h3>Speaker</h3>
									<h4>3000??</h4>
									<ul class="a_icon">
										<li><a href="#" title="Th??m gi??? h??ng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Th??m y??u th??ch"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
										<li><a href="#" title="So s??nh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
									</ul>
								</ul>
								<ul class="slick-sliden">
									<a href="#">
										<li><img src="public/img/speaker/img11.png" style="width:190px;height:187px">
										</li>
									</a>
									<h3>Speaker</h3>
									<h4>3000??</h4>
									<ul class="a_icon">
										<li><a href="#" title="Th??m gi??? h??ng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Th??m y??u th??ch"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
										<li><a href="#" title="So s??nh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
									</ul>
								</ul>
								<ul class="slick-sliden">
									<a href="#">
										<li><img src="public/img/speaker/img10.png" style="width:190px;height:187px">
										</li>
									</a>
									<h3>Speaker</h3>
									<h4>3000??</h4>
									<ul class="a_icon">
										<li><a href="#" title="Th??m gi??? h??ng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Th??m y??u th??ch"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
										<li><a href="#" title="So s??nh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
									</ul>
								</ul>
								<ul class="slick-sliden">
									<a href="#">
										<li><img src="public/img/speaker/img11.png" style="width:190px;height:187px">
										</li>
									</a>
									<h3>Speaker</h3>
									<h4>3000??</h4>
									<ul class="a_icon">
										<li><a href="#" title="Th??m gi??? h??ng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Th??m y??u th??ch"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
										<li><a href="#" title="So s??nh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
									</ul>
								</ul>
								<ul class="slick-sliden">
									<a href="#">
										<li><img src="public/img/speaker/img10.png" style="width:190px;height:187px">
										</li>
									</a>
									<h3>Speaker</h3>
									<h4>3000??</h4>
									<ul class="a_icon">
										<li><a href="#" title="Th??m gi??? h??ng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
										<li><a href="#" title="Th??m y??u th??ch"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
										<li><a href="#" title="So s??nh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
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
								<h3 class="hi">s???n ph???m b??n ch???y</h3>
							</ul>
							<div class="link_view_all">
								<a href="#">m??y ???nh canon</a>
								<a href="#">m??y ???nh nikon</a>
								<a href="#">m??y ???nh fujifilm</a>
								<a href="#">m??y ???nh sony</a>
								<a href="#">m??y ???nh pentax</a>
								<a href="#">m??y ???nh panasonic</a>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="camera">
					<div class="child-camera">
						<ul>
							<div class="discount_tag">23%</div>
							<div class="status_tag empty">H???t h??ng</div>
							<a href="#">
								<li><img src="public/img/camera/img-sp21.png" alt=""></li>
								<h3>m??y ???nh soki</h3>
								<h4>300.00??</h4>
							</a>
							<ul class="a_icon">
								<li><a href="#" title="Th??m gi??? h??ng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
								<li><a href="#" title="Th??m y??u th??ch"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
								<li><a href="#" title="So s??nh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
								<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
							</ul>
						</ul>
						<ul>
							<div class="pr_hot"><img src="public/img/camera/hot.png" alt=""></div>
							<a href="#">
								<li><img src="public/img/camera/img-sp20.png" alt=""></li>
								<h3 class="pep">m??y ???nh soni</h3>
								<h4 class="pop"><span>400.00??</span>300.00??</h4>
							</a>
							<ul class="a_icon">
								<li><a href="#" title="Th??m gi??? h??ng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
								<li><a href="#" title="Th??m y??u th??ch"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
								<li><a href="#" title="So s??nh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
								<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
							</ul>
						</ul>
						<ul>
							<div class="discount_tag">23%</div>
							<div class="status_tag empty">H???t h??ng</div>
							<a href="#">
								<li><img src="public/img/camera/img-sp21.png" alt=""></li>
								<h3>m??y ???nh soki</h3>
								<h4>300.00??</h4>
							</a>
							<ul class="a_icon">
								<li><a href="#" title="Th??m gi??? h??ng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
								<li><a href="#" title="Th??m y??u th??ch"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
								<li><a href="#" title="So s??nh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
								<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
							</ul>
						</ul>
						<ul>
							<div class="pr_hot"><img src="public/img/camera/hot.png" alt=""></div>
							<a href="#">
								<li><img src="public/img/camera/img-sp20.png" alt=""></li>
								<h3 class="pep">m??y ???nh soni</h3>
								<h4 class="pop"><span>400.00??</span>300.00??</h4>
							</a>
							<ul class="a_icon">
								<li><a href="#" title="Th??m gi??? h??ng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
								<li><a href="#" title="Th??m y??u th??ch"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
								<li><a href="#" title="So s??nh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
								<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
							</ul>
						</ul>
						<ul>
							<div class="discount_tag">23%</div>
							<div class="status_tag empty">H???t h??ng</div>
							<a href="#">
								<li><img src="public/img/camera/img-sp21.png" alt=""></li>
								<h3>m??y ???nh soki</h3>
								<h4>300.00??</h4>
							</a>
							<ul class="a_icon">
								<li><a href="#" title="Th??m gi??? h??ng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
								<li><a href="#" title="Th??m y??u th??ch"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
								<li><a href="#" title="So s??nh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
								<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
							</ul>
						</ul>
						<ul>
							<div class="pr_hot"><img src="public/img/camera/hot.png" alt=""></div>
							<a href="#">
								<li><img src="public/img/camera/img-sp20.png" alt=""></li>
								<h3 class="pep">m??y ???nh soni</h3>
								<h4 class="pop"><span>400.00??</span>300.00??</h4>
							</a>
							<ul class="a_icon">
								<li><a href="#" title="Th??m gi??? h??ng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
								<li><a href="#" title="Th??m y??u th??ch"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
								<li><a href="#" title="So s??nh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
								<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
							</ul>
						</ul>
						<ul>
							<div class="pr_hot"><img src="public/img/camera/hot.png" alt=""></div>
							<a href="#">
								<li><img src="public/img/camera/img-sp21.png" alt=""></li>
								<h3 class="pep">m??y ???nh soni</h3>
								<h4 class="pop"><span>400.00??</span>300.00??</h4>
							</a>
							<ul class="a_icon">
								<li><a href="#" title="Th??m gi??? h??ng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
								<li><a href="#" title="Th??m y??u th??ch"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
								<li><a href="#" title="So s??nh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
								<li><a href="#" title="Xem nhanh"><i class="fa fa-search" aria-hidden="true"></i></a></li>
							</ul>
						</ul>
						<ul>
							<div class="discount_tag">23%</div>
							<div class="status_tag empty">H???t h??ng</div>
							<a href="#">
								<li><img src="public/img/camera/img-sp20.png" alt=""></li>
								<h3 class="pep2">m??y ???nh soni</h3>
								<h4 class="pop2"><span>400.00??</span>300.00??</h4>
							</a>
							<ul class="a_icon">
								<li><a href="#" title="Th??m gi??? h??ng"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
								<li><a href="#" title="Th??m y??u th??ch"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
								<li><a href="#" title="So s??nh"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
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
								<h3 class="hi">tin t???c & s??? ki???n</h3>
							</ul>
							<div class="link_view_all">
								<a href="#">xem t???t c???<i class="fa fa-angle-double-right"></i></a>
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
									<h3>Samsung ra m???t TV The Wall Luxury v???i k??ch th?????c 292 inch, ????? ph??n gi???i 8K</h3>
									<span class="calen"><i class="fa fa-calendar-alt"></i> 24/07/2021</span>
									<p>M???i ????y, nh?? s???n xu???t Samsung ???? cho ra m???t TV The Wall Luxury v???i k??ch th?????c 292 inch, c??ng ????? ph??n gi???i l??n ?????n 8K.
										The Wall Luxury l?? phi??n b???n m???i c???a m???u TV The Wall ???? ???????c h??ng cho ra m???t tr?????c ????y
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
									<h3><a href="">Samsung "?????i gi??" khi ra m???t chi???c Tivi d???c ????? xem</a></h3>
									<span><i class="fa fa-calendar-alt"></i> 24/07/2021</span>
									<p>G?? kh???ng l??? Samsung v???a ti???t l??? th??ng tin s??? ra m???t chi???c tivi Sero v???i m??n h??nh d???c...</p>
								</li>
							</ul>
							<ul>
								<li>
									<img src="public/img/event/tintuc3.jpg" alt="">
								</li>
								<li class="tes">
									<h3><a href="">Samsung "?????i gi??" khi ra m???t chi???c Tivi d???c ????? xem</a></h3>
									<span><i class="fa fa-calendar-alt"></i> 24/07/2021</span>
									<p>G?? kh???ng l??? Samsung v???a ti???t l??? th??ng tin s??? ra m???t chi???c tivi Sero v???i m??n h??nh d???c...</p>
								</li>
							</ul>
							<ul>
								<li>
									<img src="public/img/event/tintuc4.jpg" alt="">
								</li>
								<li class="tes">
									<h3><a href="#">Samsung "?????i gi??" khi ra m???t chi???c Tivi d???c ????? xem</a></h3>
									<span><i class="fa fa-calendar-alt"></i> 24/07/2021</span>
									<p>G?? kh???ng l??? Samsung v???a ti???t l??? th??ng tin s??? ra m???t chi???c tivi Sero v???i m??n h??nh d???c...</p>
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
										<h3>V??N PH??NG CH??NH & TRUNG T??M B???O H??NH</h3>
										<h4>196 Nguy???n ????nh Chi???u, Ph?????ng 6, Qu???n 3, Tp.HCM.</h4>
										<h4>Hotline : 1900 2227 | ??i???n tho???i : (028) 73073776</h4>
										<span>Fax : (028) 62906490</span>
									</li>
									<li class="float2">
										<h3>T???I H?? N???I & B???O H??NH</h3>
										<h4>T???ng 9, to?? nh?? Diamond (Handico 6), S??? 2 Ho??ng ?????o Thu??,
											<br>Trung Ho?? Nh??n Ch??nh, Qu???n Thanh Xu??n, H?? N???i.
										</h4>
										<span>??i???n tho???i: (024) 73073776</span>
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
							<h1>ch??nh s??ch & quy ?????nh</h1>
							<span class="small-line"></span>
						</li>
						<li>
							<h3><a href="#">h?????ng d???n mua h??ng</a></h3>
						</li>
						<li>
							<h3><a href="#">ch??nh s??ch b???o h??nh</a></h3>
						</li>
						<li>
							<h3><a href="#">h??nh th???c thanh to??n</a></h3>
						</li>
						<ul id="khac">
							<li>
								<h1>d???ch v??? kh??c</h1>
								<span class="small-line"></span>
							</li>
							<li>
								<h3><a href="#">th?? m???i h???p t??c</a></h3>
							</li>
							<li>
								<h3><a href="#">ch??nh s??ch b???o m???t th??ng tin</a></h3>
							</li>
						</ul>
					</ul>
					<ul>
						<li>
							<h1>thi???t b??? studio</h1>
							<span class="small-line"></span>
						</li>
						<a href=""></a>
						<li>
							<h3><a href="#">9.Solution</a></h3>
						</li>
						<li>
							<h3><a href="#">b??n tr???n h??nh ???nh</a></h3>
						</li>
						<li>
							<h3><a href="#">ph??ng-gi?? treo ph??ng</a></h3>
						</li>
						<li>
							<h3><a href="#">????n quay phim</a></h3>
						</li>
						<li>
							<h3><a href="#">d???ng c??? t???n s??ng</a></h3>
						</li>
						<li>
							<h3><a href="#">l???ng ch???p-b??n ch???p s???n ph???m</a></h3>
						</li>
						<li>
							<h3><a href="#">ph??? ki???n studio kh??c</a></h3>
						</li>
					</ul>
					<ul>
						<li>
							<h1>m??y ???nh</h1>
							<span class="small-line"></span>
						</li>
						<li>
							<h3><a href="#">m??y ???nh canon</a></h3>
						</li>
						<li>
							<h3><a href="#">m??y ???nh sony</a></h3>
						</li>
						<li>
							<h3><a href="#">m??y ???nh nikon</a></h3>
						</li>
						<li>
							<h3><a href="#">m??y ???nh panasonic</a></h3>
						</li>
						<li>
							<h3><a href="#">m??y ???nh samsung</a></h3>
						</li>
						<li>
							<h3><a href="#">m??y ???nh chuy??n nghi???p</a></h3>
						</li>
						<li>
							<h3><a href="#">m??y ???nh lomography</a></h3>
						</li>
					</ul>
					<ul>
						<li>
							<h1>??m thanh</h1>
							<span class="small-line"></span>
						</li>
						<li>
							<h3><a href="#">combo b??? d??n ??m thanh</a></h3>
						</li>
						<li>
							<h3><a href="#">d??n ??m thanh</a></h3>
						</li>
						<li>
							<h3><a href="#">micro karaoke</a></h3>
						</li>
						<li>
							<h3><a href="#">b??? tr???n ??m thanh mixer</a></h3>
						</li>
						<li>
							<h3><a href="#">b??? khu???ch ?????i ??m thanh</a></h3>
						</li>
						<li>
							<h3><a href="#">?????u CD,DVD,karaoke</a></h3>
						</li>
						<li>
							<h3><a href="#">ph??? ki???n ??m thanh</a></h3>
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
								<h2>C??NG TY TNHH BANG.VN</h2>
							</li>
							<li>
								<h3>MST/??KKD/Q??TL: 0305449167</h3>
							</li>
							<li>
								<h4>Tr??? s???: 750 S?? V???n H???nh, Ph?????ng 12, Qu???n 10, Tp. HCM</h4>
							</li>
							<li>
								<h5>
									Email:info@sieuthimaychu.vn
									<br>
									| ??i???n Tho???i:(028) 73073776
								</h5>
							</li>
						</ul>
					</div>
					<div class="bottom-midd">
						<h3>NH???N B???N TIN KHUY???N M??I</h3>
						<div class="middle-inside">
							<input type="text" placeholder="Nh???p ?????a Ch??? Email...">
							<a href="#">????ng k??</a>
						</div>
					</div>
					<div class="bottom-right">
						<img src="<?php echo base_url('public') ?>/img/bo-cong-thuong.png" alt="#">
						<br>
						<h4 class="title">
							Thi???t k??? website b???i
							<span>P.A Vi???t Nam</span>
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