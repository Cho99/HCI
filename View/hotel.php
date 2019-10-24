<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hotel </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<script type="text/javascript" src="vendor/bootstrap.js"></script>
	<script type="text/javascript" src="scripts/1.js"></script>
	<script type="text/javascript" src="scripts/hotel.js"></script>
	<link rel="stylesheet" href="vendor/bootstrap.css">
	<link rel="stylesheet" href="main.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
</head>
<body class="body">
        <?php include'header.php'; ?>
	<div id="vnt-content">
		<div id="vnt-navation" class="breadcrumb">
			<div class="wrapper">
				<div class="navation">
					<ul>
						<li>
							<a title="Trang chủ" href="index.php">
								<span itemprop="title">Trang chủ</span>
							</a>
						</li>
						<li>
							<a href="hotel.php">
								<span>Khách sạn</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="ht_gioithieu">
			<div class="row">
				<div class="col-xs-12">
					<div class="text-xs-center">
						<h3 class="tdto mb-3 ht_tieude ">Du lịch ngay cùng 502-Travel</h3>
					</div>
				</div>
			</div> <!-- hết row -->
			<div class="bonnut">
				<ul>
					<li class="active"><b class="btn btn-outline-warning">Đẳng cấp</b></li>
					<li><b class="btn btn-outline-warning">Lãng mạn</b></li>
					<li><b class="btn btn-outline-warning">Nghỉ dưỡng</b></li>
					<li><b class="btn btn-outline-warning">Không gian</b></li>
				</ul>
			</div>
			<div class="bonnd">
				<ul>
					<li>
						<div class="ndct">
							<img src="images/ht_gt1.jpg" alt="" class="float-xs-left">
							<p>502-Travel chọn lọc những khách sạn đẳng cấp với mức giá lý tưởng dành cho người Việt</p>
						</div>
					</li>
					<li>
						<div class="ndct">
							<img src="images/ht_gt2.jpg" alt="" class="float-xs-left">
							<p> Đi khắp thế gian cùng người bạn yêu thương</p>
						</div>
					</li>
					<li>
						<div class="ndct">
							<img src="images/ht_gt3.jpg" alt="" class="float-xs-left">
							<p>Du lịch tháng 5 chẳng phải lăn tăn</p>
						</div>
					</li>
					<li class="hienlen">
						<div class="ndct">
							<img src="images/ht_gt4.jpeg" alt="" class="float-xs-left">
							<p>Thêm không gian cho gia đình và bạn bè.Rất nhiều lựa chọn hấp dẫn các căn hộ và biệt thự trên 502-Travel </p>
						</div>
					</li>
				</ul>
			</div>
		</div> <!-- hết ht_gioithieu -->

		<div class="traveldexuat noidung3">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="text-xs-center">
							<h3 class="tdto mb-3 ht_tieude">Điểm đến hot nhất do 502-Travel đề xuất</h3>
						</div>
					</div>
				</div> <!-- hết row -->
				<div class="hotel_global">
					<a href="#" class="hotel_inner">
						<div class="bgimg_ht" style="background-image: url(images/ht1.jpeg);">
							<div class="mau_rgba"></div>
							<div class="ht_hotel">
								<div class="hotel-detail">
									<h3 class="ht_name">Đà Nẵng</h3>
									<p>Có 763 khách sạn</p>
								</div>
							</div>
							<button class="btn_hotel" type="button">Xem khách sạn trống phòng</button>
						</div>
					</a>
					<a href="#" class="hotel_inner">
						<div class="bgimg_ht" style="background-image: url(images/ht2.jpeg);">
							<div class="mau_rgba"></div>
							<div class="ht_hotel">
								<div class="hotel-detail">
									<h3 class="ht_name">Nha Trang</h3>
									<p>Có 569 khách sạn</p>
								</div>
							</div>
							<button class="btn_hotel" type="button">Xem khách sạn trống phòng</button>
						</div>
					</a>
					<a href="#" class="hotel_inner">
						<div class="bgimg_ht" style="background-image: url(images/ht3.jpeg);">
							<div class="mau_rgba"></div>
							<div class="ht_hotel">
								<div class="hotel-detail">
									<h3 class="ht_name">Phú Quốc</h3>
									<p>Có 381 khách sạn</p>
								</div>
							</div>
							<button class="btn_hotel" type="button">Xem khách sạn trống phòng</button>
						</div>
					</a>
					<a href="#" class="hotel_inner">
						<div class="bgimg_ht" style="background-image: url(images/ht4.jpeg);">
							<div class="mau_rgba"></div>
							<div class="ht_hotel">
								<div class="hotel-detail">
									<h3 class="ht_name">Vũng Tàu</h3>
									<p>Có 339 khách sạn</p>
								</div>
							</div>
							<button class="btn_hotel" type="button">Xem khách sạn trống phòng</button>
						</div>
					</a>
					<a href="#" class="hotel_inner">
						<div class="bgimg_ht" style="background-image: url(images/ht5.jpeg);">
							<div class="mau_rgba"></div>
							<div class="ht_hotel">
								<div class="hotel-detail">
									<h3 class="ht_name">Hà Nội</h3>
									<p>Có 1049 khách sạn</p>
								</div>
							</div>
							<button class="btn_hotel" type="button">Xem khách sạn trống phòng</button>
						</div>
					</a>
					<a href="#" class="hotel_inner">
						<div class="bgimg_ht" style="background-image: url(images/ht6.jpeg);">
							<div class="mau_rgba"></div>
							<div class="ht_hotel">
								<div class="hotel-detail">
									<h3 class="ht_name">Đà Lạt</h3>
									<p>Có 591 khách sạn</p>
								</div>
							</div>
							<button class="btn_hotel" type="button">Xem khách sạn trống phòng</button>
						</div>
					</a>
					<a href="#" class="hotel_inner">
						<div class="bgimg_ht" style="background-image: url(images/ht7.jpeg);">
							<div class="mau_rgba"></div>
							<div class="ht_hotel">
								<div class="hotel-detail">
									<h3 class="ht_name">Hội An</h3>
									<p>Có 1249 khách sạn</p>
								</div>
							</div>
							<button class="btn_hotel" type="button">Xem khách sạn trống phòng</button>
						</div>
					</a>
					<a href="#" class="hotel_inner">
						<div class="bgimg_ht" style="background-image: url(images/ht8.jpeg);">
							<div class="mau_rgba"></div>
							<div class="ht_hotel">
								<div class="hotel-detail">
									<h3 class="ht_name">Phan Thiết</h3>
									<p>Có 620 khách sạn</p>
								</div>
							</div>
							<button class="btn_hotel" type="button">Xem khách sạn trống phòng</button>
						</div>
					</a>
					<a href="#" class="hotel_inner">
						<div class="bgimg_ht" style="background-image: url(images/ht9.jpeg);">
							<div class="mau_rgba"></div>
							<div class="ht_hotel">
								<div class="hotel-detail">
									<h3 class="ht_name">Huế</h3>
									<p>Có 759 khách sạn</p>
								</div>
							</div>
							<button class="btn_hotel" type="button">Xem khách sạn trống phòng</button>
						</div>
					</a>
				</div>
			</div>
		</div>  <!-- hết traveldexuat -->

		<div class="ht_doitac">
			<div class="container" style="padding:20px 0;">
				<div class="row">
					<div class="col-xs-12">
						<div class="text-xs-center">
							<h3 class="tdto mb-3 ht_tieude ">Đối tác khách sạn</h3>
						</div>
					</div>
				</div> <!-- hết row -->

				<div class="t_partnercontainer">
					<div class="t_right">
						<div id="t_hotelpartnerslider" class="t_hotelpartnerslider t_homeslider slick-initialized slick-slider">
							<div class="slick-list draggable">
								<div class="slick-track" style="opacity: 1; width: 1230px; transform: translate3d(0px, 0px, 0px);">
									<div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 1230px;" tabindex="0">
										<div>
											<div class="t_hotelpartneritem dl-parent-hover " style="width: 15.6667%; display: inline-block;">
												<a class="dl-overlay-hover-before" href="#" target="_blank" rel="" title="Best Western" tabindex="0">
													<img src="https://cdn.tripu.vn/vietravel/Slider/c9003118-fea1-4f07-b95e-2deec8cb351e" alt="Best Western" title="Best Western">
												</a>
											</div>
											<div class="t_hotelpartneritem dl-parent-hover " style="width: 15.6667%; display: inline-block;">
												<a class="dl-overlay-hover-before" href="#" target="_blank" rel="" title="Choice Hotels" tabindex="0">
													<img src="https://cdn.tripu.vn/vietravel/Slider/97ad406c-287c-4119-9196-63ee868026b8" alt="Choice Hotels" title="Choice Hotels">
												</a>
											</div>
											<div class="t_hotelpartneritem dl-parent-hover " style="width: 15.6667%; display: inline-block;">
												<a class="dl-overlay-hover-before" href="#" target="_blank" rel="" title="Pullman" tabindex="0">
													<img src="https://cdn.tripu.vn/vietravel/Slider/2d0f9f22-bc73-41fc-85ed-4e8a892ceb6a" alt="Pullman" title="Pullman">
												</a>
											</div>
											<div class="t_hotelpartneritem dl-parent-hover " style="width: 15.6667%; display: inline-block;">
												<a class="dl-overlay-hover-before" href="#" target="_blank" rel="" title="Novotel" tabindex="0">
													<img src="https://cdn.tripu.vn/vietravel/Slider/614653bb-f061-4689-aeb2-182e61474043" alt="Novotel" title="Novotel">
												</a>
											</div>
											<div class="t_hotelpartneritem dl-parent-hover " style="width: 15.6667%; display: inline-block;">
												<a class="dl-overlay-hover-before" href="#" target="_blank" rel="" title="Wyndham Partner" tabindex="0">
													<img src="https://cdn.tripu.vn/vietravel/Slider/c25101cf-7212-450d-a206-9ff9bbb0665e" alt="Wyndham Partner" title="Wyndham Partner">
												</a>
											</div>
											<div class="t_hotelpartneritem dl-parent-hover " style="width: 15.6667%; display: inline-block;">
												<a class="dl-overlay-hover-before" href="#" target="_blank" rel="" title="Vinpearl Partner" tabindex="0">
													<img src="https://cdn.tripu.vn/vietravel/Slider/2aa55a0a-1a3e-4668-8a2a-95deeb85d106" alt="Vinpearl Partner" title="Vinpearl Partner">
												</a>
											</div>
										</div>
										<div>
											<div class="t_hotelpartneritem dl-parent-hover " style="width: 15.6667%; display: inline-block;">
												<a class="dl-overlay-hover-before" href="#" target="_blank" rel="" title="Best Western" tabindex="0">
													<img src="https://cdn.tripu.vn/vietravel/Slider/c101eb24-00ca-4362-acfe-1b3d4ac0e2e5" alt="Best Western" title="Best Western">
												</a>
											</div>
											<div class="t_hotelpartneritem dl-parent-hover " style="width: 15.6667%; display: inline-block;">
												<a class="dl-overlay-hover-before" href="#" target="_blank" rel="" title="Choice Hotels" tabindex="0">
													<img src="https://cdn.tripu.vn/vietravel/Slider/d5656062-f710-435f-8d39-bc8fb87d03ff" alt="Choice Hotels" title="Choice Hotels">
												</a>
											</div>
											<div class="t_hotelpartneritem dl-parent-hover " style="width: 15.6667%; display: inline-block;">
												<a class="dl-overlay-hover-before" href="#" target="_blank" rel="" title="Pullman" tabindex="0">
													<img src="https://cdn.tripu.vn/vietravel/Slider/94991a75-489e-4827-8562-f395e4067537" alt="Pullman" title="Pullman">
												</a>
											</div>
											<div class="t_hotelpartneritem dl-parent-hover " style="width: 15.6667%; display: inline-block;">
												<a class="dl-overlay-hover-before" href="#" target="_blank" rel="" title="Novotel" tabindex="0">
													<img src="https://cdn.tripu.vn/vietravel/Slider/4f51fe78-a831-49ee-8098-0f594ebf5fe7" alt="Novotel" title="Novotel">
												</a>
											</div>
											<div class="t_hotelpartneritem dl-parent-hover " style="width: 15.6667%; display: inline-block;">
												<a class="dl-overlay-hover-before" href="#" target="_blank" rel="" title="Wyndham Partner" tabindex="0">
													<img src="https://cdn.tripu.vn/vietravel/Slider/e7169f8e-7294-433d-9f8c-179ebf59619e" alt="Wyndham Partner" title="Wyndham Partner">
												</a>
											</div>
											<div class="t_hotelpartneritem dl-parent-hover " style="width: 15.6667%; display: inline-block;">
												<a class="dl-overlay-hover-before" href="#" target="_blank" rel="" title="Vinpearl Partner" tabindex="0">
													<img src="https://cdn.tripu.vn/vietravel/Slider/9a81153f-52bd-4a5c-b73c-a9cbe102327f" alt="Vinpearl Partner" title="Vinpearl Partner">
												</a>
											</div>
										</div>
										<div>
											<div class="t_hotelpartneritem dl-parent-hover " style="width: 15.6667%; display: inline-block;">
												<a class="dl-overlay-hover-before" href="#" target="_blank" rel="" title="Best Western" tabindex="0">
													<img src="https://cdn.tripu.vn/vietravel/Slider/01e9293b-067c-4a23-be15-567ec98141bb" alt="Best Western" title="Best Western">
												</a>
											</div>
											<div class="t_hotelpartneritem dl-parent-hover " style="width: 15.6667%; display: inline-block;">
												<a class="dl-overlay-hover-before" href="#" target="_blank" rel="" title="Choice Hotels" tabindex="0">
													<img src="https://cdn.tripu.vn/vietravel/Slider/8745670c-7491-4a9f-9553-638e655583b3" alt="Choice Hotels" title="Choice Hotels">
												</a>
											</div>
											<div class="t_hotelpartneritem dl-parent-hover " style="width: 15.6667%; display: inline-block;">
												<a class="dl-overlay-hover-before" href="#" target="_blank" rel="" title="Pullman" tabindex="0">
													<img src="https://cdn.tripu.vn/vietravel/Slider/669caaf9-d51d-4a1d-a90f-ae648d99ab15" alt="Pullman" title="Pullman">
												</a>
											</div>
											<div class="t_hotelpartneritem dl-parent-hover " style="width: 15.6667%; display: inline-block;">
												<a class="dl-overlay-hover-before" href="#" target="_blank" rel="" title="Novotel" tabindex="0">
													<img src="https://cdn.tripu.vn/vietravel/Slider/3a59c1bb-d486-481c-ab25-180bead6be3c" alt="Novotel" title="Novotel">
												</a>
											</div>
											<div class="t_hotelpartneritem dl-parent-hover " style="width: 15.6667%; display: inline-block;">
												<a class="dl-overlay-hover-before" href="#" target="_blank" rel="" title="Wyndham Partner" tabindex="0">
													<img src="https://cdn.tripu.vn/vietravel/Slider/c3ae579f-17cb-4efc-adcc-e7ed460e419e" alt="Wyndham Partner" title="Wyndham Partner">
												</a>
											</div>
										</div> <!-- hết 1 doitac -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- hết content -->
	</div>
	

	<div class="khoifooter">
		<div class="container ">
			<div class="row">
				<div class="col-sm-12 linefooter">
					<img src="images/line-bot.png" alt="">
				</div>
			</div>
		</div>
		<div class="container ">
			<div class="mainft">
				<div class="tdft thongtinfooter">
					<h2>Liên hệ</h2>
					<p class="ppp">56 Triều Khúc-Hà Nội</p>
					<p><i class="fas fa-envelope-open-text iconnho"></i> Email: ducky173099@gmail.com</p>
					<p><i class="fas fa-phone-volume iconnho"></i> Hotline: 0989000410</p>
					<div class="gg-map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.1957565648145!2d105.80015872085212!3d20.98478874489245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135acc6bdc7f95f%3A0x58ffc66343a45247!2sUniversity%20of%20Transport%20Technology!5e0!3m2!1sen!2s!4v1570459833113!5m2!1sen!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
					</div>
				</div>
				<div class="tdft ft_ttmain">
					<h2>Thông tin</h2>
					<div class="tt_footerinner">
						<div class="tt_ft1">Tạp chí du lịch</div>
						<div class="tt_ft2">Tin tức</div>
					</div>
					<div class="tt_footerinner">
						<div class="tt_ft1">Cẩm nang du lịch</div>
						<div class="tt_ft2">Sitemap</div>
					</div>
					<div class="tt_footerinner">
						<div class="tt_ft1">Kinh nghiệm du lịch</div>
						<div class="tt_ft2">FAQ</div>
					</div>
					<div class="line_inner">
						<img src="images/ft-line.png" alt="">
					</div>
					<ul class="list_chinhsach">
						<li>
							<a href="#">502-Travel Toolbar</a>
						</li>
						<li>
							<a href="#">chính sách riêng tư</a>
						</li>
						<li>
							<a href="#">Thỏa thuận sử dụng</a>
						</li>
					</ul>
				</div>

				<div class="tdft form_ft">
					<h2>NEWSLETTER</h2>
					<div class="newsletter">
						<input type="text" class="form-control input-md" placeholder="email của bạn">
						<div class="iconemail_ft">
							<button type="submit">
								<i class="far fa-envelope"></i>
							</button>
						</div>
					</div>
					<h2 class="tenstore">Ứng dụng di động</h2>
					<div class="appstore ppp">
						<img src="images/app.png" alt="">
					</div>
					<h2 class="tenstore">Hotline</h2>
					<div class="hl_ft">
						<div class="iconhl_ft">
							<button>
								<i class="fas fa-headset"></i>
							</button>
						</div>
						<div class="sdt_ft">
							<span class="sdt_ft_inner">0989000410</span>
							<span>từ 8h đến 23h</span>
						</div>
					</div>
				</div>

			</div>
			<div class="tdft thanhtoan_ft">
				<h2>Chấp nhận thanh toán</h2>
				<div>
					<div class="ttcard_ft">
						<i class="_123pay"></i>
					</div>
					<div class="ttcard_ft">
						<i class="visa"></i>
					</div>
					<div class="ttcard_ft">
						<i class="master"></i>
					</div>
					<div class="ttcard_ft">
						<i class="jcb"></i>
					</div>
					<div class="ttcard_ft">
						<i class="vnpay"></i>
					</div>
					<div class="ttcard_ft">
						<i class="v-visa"></i>
					</div>
				</div>
			</div>
		</div>
		<div class="pos_ft ">
			<p class="text-center">Bản quyền của 502-Travel ® 2019. Bảo lưu mọi quyền. <br>Ghi rõ nguồn "www.502-Travel.com.vn" ® khi sử dụng lại thông tin từ website này. <br>Số giấy phép kinh doanh lữ hành Quốc tế: 10-234/2019/TCDL-GP LHQT</p>
		</div>
	</div>

	<div class="navbar-fixed-bottom fixxbot">
		<a href="" class="btn btn-primary nutlen float-xs-right">
			<i class="fa fa-chevron-up "></i>
		</a>
	</div>
	<script type="text/javascript">
		$(function(){
			$('.body').scroll(function(event) {
				if($('.body').scrollTop() > 550){
					$('.nutlen').addClass('hienthi');
				} else if($('.body').scrollTop() <= 190){
					$('.nutlen').removeClass('hienthi');
				}

			})

			$('.nutlen').click(function(event) {
				$('.body').animate({'scrollTop':0})
				return false;
			});
		})  
	</script>

</body>
</html>