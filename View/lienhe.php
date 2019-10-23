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
<body>
	
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
					<div class="col-xs-12">
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
									<div class="col-xs-12 mg-bot15">
										<input id="responseCaptcha" name="responseCaptcha" type="hidden" value="">
										<div class="g-recaptcha" data-theme="light" data-sitekey="6LcezicTAAAAAIbBsNL6IS14WAowVVhd_iL0hVNf">
											<div style="width: 304px; height: 78px;">
												<div>
													<iframe src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LcezicTAAAAAIbBsNL6IS14WAowVVhd_iL0hVNf&amp;co=aHR0cHM6Ly90cmF2ZWwuY29tLnZuOjQ0Mw..&amp;hl=vi&amp;v=Zy-zVXWdnDW6AUZkKlojAKGe&amp;theme=light&amp;size=normal&amp;cb=w2p3wfi8ilyc" width="304" height="78" role="presentation" name="a-d0poy7wyqnbv" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe>
												</div>
												<textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
											</div>
										</div>
									</div>
									<div class="col-xs-12 text-center gui_lh">
										<button type="submit" class="btn btn-md btn-general">Gửi đi &nbsp;&nbsp;<i class="fas fa-paper-plane"></i></button>
									</div>

								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>