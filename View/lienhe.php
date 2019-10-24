<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lieen he</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<script type="text/javascript" src="vendor/bootstrap.js"></script>
	<script type="text/javascript" src="scripts/1.js"></script>
	<!-- <script type="text/javascript" src="scripts/angular.min.js"></script> -->
	<!-- <script src="scripts/md-data-table.min.js"></script> -->
	<link rel="stylesheet" href="vendor/bootstrap.css">
	<!-- <link rel="stylesheet" href="styles/main.css"> -->
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
							<a title="Trang chủ" href="#">
								<span itemprop="title">Trang chủ</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span>Liên hệ</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div> <!-- hết breadcrumb -->
		<div class="main_lienhe">
			<div class="container ">
				<div class="row">
					<div class="col-xs-12">
						<div class="td_lienhe">
							<h2>Liên Hệ	</h2>
							<p class="text-center">Để có thể đáp ứng được các yêu cầu và các ý kiến đóng góp của quý vị một cách nhanh chóng xin vui lòng liên hệ</p>
						</div>
					</div>
					<div class="col-xs-12 lhmarginn">
						<form class="send_lienhe">
							<div class="frame-contact">
								<div class="row">
									<div class="col-lg-4">
										<label>Loại thông tin (" 
											<span class="star">*</span>")
										</label>
										<select class="form-control">
											<option value="1">Du lịch</option>
											<option value="2">Chăm sóc khách hàng</option>
										</select>
									</div>
									<div class="col-lg-4">
										<label>Họ tên (" 
											<span class="star">*</span>")
										</label>
										<input type="text" class="form-control" required="required" name="txtHoTen" id="txtHoTen">
									</div>
									<div class="col-lg-4">
										<label>Email (" 
											<span class="star">*</span>")
										</label>
										<input type="email" class="form-control" required="required" name="txtEmail" id="txtEmail">
									</div>
									<div class="col-lg-4">
										<label>Điện thoại (" 
											<span class="star">*</span>")
										</label>
										<input type="text" class="form-control" required="required" name="txtDienThoai" id="txtDienThoai">
									</div>
									<div class="col-lg-4">
										<label>Tên công ty</label>
										<input type="text" class="form-control" name="txtTenCongTy">
									</div>
									<div class="col-lg-4">
										<label>Số khách</label>
										<input type="text" class="form-control" name="txtSoKhach">
									</div>
									<div class="col-xs-12 mg-bot15">
										<label>Địa chỉ</label>
										<input type="text" class="form-control" name="txtDiaChi">
									</div>
									<div class="col-xs-12 mg-bot15">
										<label>Tiêu đề (<span class="star">*</span>)</label>
										<input type="text" class="form-control" required="required" name="txtTieuDe">
									</div>
									<div class="col-xs-12 mg-bot30">
										<label>Nội dung (<span class="star">*</span>)</label>
										<textarea class="form-control" rows="4" cols="5" required="required" name="txtNoiDung"></textarea>
									</div>
	<!-- 								<div class="col-xs-12 mg-bot15">
										<input id="responseCaptcha" name="responseCaptcha" type="hidden" value="">
										<div class="g-recaptcha" data-theme="light" data-sitekey="6LcezicTAAAAAIbBsNL6IS14WAowVVhd_iL0hVNf">
											<div style="width: 304px; height: 78px;">
												<div>
													<iframe src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LcezicTAAAAAIbBsNL6IS14WAowVVhd_iL0hVNf&amp;co=aHR0cHM6Ly90cmF2ZWwuY29tLnZuOjQ0Mw..&amp;hl=vi&amp;v=Zy-zVXWdnDW6AUZkKlojAKGe&amp;theme=light&amp;size=normal&amp;cb=w2p3wfi8ilyc" width="304" height="78" role="presentation" name="a-d0poy7wyqnbv" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe>
												</div>
												<textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
											</div>
										</div>
									</div> -->
									<div class="col-xs-12 text-center gui_lh">
										<button type="submit" class="btn btn-md btn-general">Gửi đi &nbsp;&nbsp;<i class="fas fa-paper-plane"></i></button>
									</div>

								</div>
							</div>
						</form>
					</div>
					<div class="col-xs-12 chinhanh">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mg-bot30">
								<div class="frame-cn">
									<div class="tencn">Hồ Chí Minh</div>
									<div class="mg-bot7">
										<div class="i-con"><i class="fas fa-map-signs"></i></div>
										<div class="i-text">190 Pasteur, Quận 3, Tp. Hồ Chí Minh, Việt Nam</div>
										<div class="clear"></div>
									</div>
									<div class="mg-bot7">
										<div class="i-con"><i class="fas fa-phone"></i></div>
										<div class="i-text">Tel: (84-28) 3822 8898</div>
										<div class="clear"></div>
									</div>
									<div class="mg-bot7">
										<div class="i-con"><i class="fas fa-fax"></i></div>
										<div class="i-text">Fax: (84-28) 3829 9142</div>
										<div class="clear"></div>
									</div>
									<div class="mg-bot7">
										<div class="i-con"><i class="fas fa-envelope"></i></div>
										<div class="i-text">Email: info@vietravel.com</div>
										<div class="clear"></div>
									</div>
								</div>
							</div>

							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mg-bot30">
								<div class="frame-cn">
									<div class="tencn">Chi Nhánh Hà Nội</div>
									<div class="mg-bot7">
										<div class="i-con"><i class="fas fa-map-signs"></i></div>
										<div class="i-text">03 Hai Bà Trưng, Quận Hoàn Kiếm, Hà Nội</div>
										<div class="clear"></div>
									</div>
									<div class="mg-bot7">
										<div class="i-con"><i class="fas fa-phone"></i></div>
										<div class="i-text">Tel: (84-24) 3933 1978</div>
										<div class="clear"></div>
									</div>
									<div class="mg-bot7">
										<div class="i-con"><i class="fas fa-fax"></i></div>
										<div class="i-text">Fax: (84-24) 3933 1979</div>
										<div class="clear"></div>
									</div>
									<div class="mg-bot7">
										<div class="i-con"><i class="fas fa-envelope"></i></div>
										<div class="i-text">Email: vtv.hanoi@vietravel.com</div>
										<div class="clear"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mg-bot30">
								<div class="frame-cn">
									<div class="tencn">Chi Nhánh Đà Nẵng</div>
									<div class="mg-bot7">
										<div class="i-con"><i class="fas fa-map-signs"></i></div>
										<div class="i-text">58 Pasteur, Hải Châu, Đà Nẵng</div>
										<div class="clear"></div>
									</div>
									<div class="mg-bot7">
										<div class="i-con"><i class="fas fa-phone"></i></div>
										<div class="i-text">Tel: (84-236) 3863 544</div>
										<div class="clear"></div>
									</div>
									<div class="mg-bot7">
										<div class="i-con"><i class="fas fa-fax"></i></div>
										<div class="i-text">Fax: (84-236) 3863 571</div>
										<div class="clear"></div>
									</div>
									<div class="mg-bot7">
										<div class="i-con"><i class="fas fa-envelope"></i></div>
										<div class="i-text">Email: vtv.danang@vietravel.com</div>
										<div class="clear"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mg-bot30">
								<div class="frame-cn">
									<div class="tencn">Chi Nhánh Cần Thơ</div>
									<div class="mg-bot7">
										<div class="i-con"><i class="fas fa-map-signs"></i></div>
										<div class="i-text">5 Trần Văn Khéo, Cái Khế, Ninh Kiều, Cần Thơ</div>
										<div class="clear"></div>
									</div>
									<div class="mg-bot7">
										<div class="i-con"><i class="fas fa-phone"></i></div>
										<div class="i-text">Tel: (84-292) 3763 085</div>
										<div class="clear"></div>
									</div>
									<div class="mg-bot7">
										<div class="i-con"><i class="fas fa-fax"></i></div>
										<div class="i-text">Fax: (84-292) 3763 086</div>
										<div class="clear"></div>
									</div>
									<div class="mg-bot7">
										<div class="i-con"><i class="fas fa-envelope"></i></div>
										<div class="i-text">Email: vtv.cantho@vietravel.com</div>
										<div class="clear"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="khoifooter">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 linefooter">
					<img src="images/line-bot.png" alt="">
				</div>
			</div>
		</div>
		<div class="container">
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
		<div class="pos_ft">
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
				if($('.body').scrollTop() > 350){
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