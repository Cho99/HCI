<?php include'../Model/server.php'; ?>
<div class="khoiheader">	
	<nav class="navbar navbar-expand-lg navbar-dark info-color khoinav ">
		<div class="header">
			<div class="trai">
				<li class="nav-item hotline">
					<a class="nav-link" href="lienhe.php">
						<span class="textnavbar">Hotline: <span>0989000410</span></span>
					</a>
				</li>
			</div>


			<div class="phai">
				<ul class="navbar-nav ml-auto dsphai">

					<li class="nav-item">
						<a class="nav-link theasearch" href="#">
							<div class="input-group nutsearch">
								<input type="search" ng-model="searchName" placeholder="Search">
							</div>
						</a>
					</li>

					<li class="nav-item">
						<img src="images/line.png" alt="">
					</li>

					<li class="nav-item active">
						<a class="nav-link" href="#">
							<i class="fas fa-shopping-cart textnavbar"></i>
							<span class="sr-only">(current)</span>
						</a>
					</li>

					<li class="nav-item">
						<img src="images/line.png" alt="">
					</li>
					<?php if (isset($_SESSION['login'])):  ?>
						<li class="nav-item dropdown user">
						<a class="nav-link dropdown-toggle _1user" data-toggle="dropdown">
							<span class="textnavbar">đây là kỷ</span>
							<img src="images/avatar.svg" alt="">
						</a>
						<div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
							<a class="dropdown-item textnavbar" href="#">My account</a>
							<a class="dropdown-item textnavbar" href="../Model/server.php?logout=true" name="logout">Log out</a>
						</div>
					</li> 
					<?php else: ?>
						<li class="nav-item dropdown user">
							<a class="nav-link dropdown-toggle _1user" data-toggle="dropdown">
								<img src="images/user.png" alt="Tài Khoản">
							</a>
							<div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
								<a class="dropdown-item textnavbar" href="form-login.php">Đăng nhập</a>
								<a class="dropdown-item textnavbar" href="#">Đăng ký</a>
							</div>
						</li>
					<?php endif; ?>

			    	
				

					<li class="nav-item">
						<img src="images/line.png" alt="">
					</li>

					<li class="nav-item">
						<a class="nav-link" href="#">
							<img src="images/vn.png" alt="">
							<i class="textnavbar">VN</i>
						</a>
					</li>
				</ul>
			</div> <!-- hết header phai -->
		</div> <!-- hết container -->
		</nav> <!-- hết nav -->


		<nav class="navbar navbar-light navduoi ">
			<div class="container header">
				<button class="navbar-toggler hidden-sm-up float-xs-right" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2">
				</button>

				<div class="trai">
					<li class="nav-item hotline">
						<a class="nav-link logotravel" href="index.php">
							<span class="">502-Travel.vn</span>
						</a>
					</li>
				</div>

				<div class="collapse navbar-toggleable-xs phai" id="exCollapsingNavbar2">
					<ul class="nav navbar-nav float-sm-right text-xs-center text-xs-right dsheaderduoi">
						<li class="nav-item active ndheaderduoi">
							<a class="nav-link " href="#">Du lịch <span class="sr-only">(current)</span></a>
							<div class="gnl_inner"> 
								<div class="global_inner" id="navmore"> 
									<ul> 
										<li class=""> 
											<a href="dulichmienbac.php" class="noafter"> 
												<span>Hùng vĩ miền Bắc</span> 
											</a> 
										</li> 
										<li class=""> 
											<a href="" class="noafter"> 
												<span>Nắng gió miền Trung</span> 
											</a> 
										</li> 
										<li class=""> 
											<a href="#" class="noafter"> 
												<span>Sông nước miền Nam</span> 
											</a> 
										</li> 
									</ul> 
								</div> 
							</div> 
						</li>
						<li class="nav-item ndheaderduoi">
							<a class="nav-link" href="hotel.php">Khách sạn</a>
						</li>
						<li class="nav-item ndheaderduoi">
							<a class="nav-link" href="thuexe.php">Vận chuyển</a>
							<div class="gnl_inner"> 
								<div class="global_inner" id="navmore"> 
									<ul> 
										<li class=""> 
											<a href="thuexe.php" class="noafter"> 
												<span>Thuê xe</span> 
											</a> 
										</li> 
										<li class=""> 
											<a href="#" class="noafter"> 
												<span>Đặt vé máy bay</span> 
											</a> 
										</li> 
									</ul> 
								</div> 
							</div> 
						</li>
						<li class="nav-item ndheaderduoi">
							<a class="nav-link" href="#">Tin tức</a>
						</li>
						<li class="nav-item ndheaderduoi">
							<a class="nav-link" href="#">khuyến mại</a>
						</li>
						<li class="nav-item ndheaderduoi">
							<a class="nav-link" href="lienhe.php">liên hệ</a>
						</li>
					</ul>
				</div>
			</div> <!-- hết container -->
		</nav><!--  hết nav -->
	</div>