<!DOCTYPE html>
<html lang="en">
<head>
	<title>Chi tiết</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link href="{{url('client/css/vendor.css')}}" rel="stylesheet" />
	<link href="{{url('client/css/style_Info.css')}}" rel="stylesheet" />
	<link href="{{url('client/css/style-switcher.css')}}" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="{{url('client/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('client/css/myCSS/myCSS-info.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('client/css/bootstrap.css')}}">
</head>
<body>


<div class="full_100">
	<div class="full_box">
		<!-- header section -->
		<div class="header_section fixed">
			<div class="id-header">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<!-- logo -->
							<div class="section-logo">
								<img src="{{url('client/images/logo.png')}}" alt="">
							</div>
							<!-- logo ends -->
						</div>
						<div class="col-md-9">
							<!-- menu -->
							<ul id="id_menu" class="nav pull-right">
								<li>
									<a onclick="fadeLogin()" href="#id_slider_big" title="">Đăng nhập</a>
									<ul id="login-dp" class="dropdown-menu">
										<li id="title-Login">
											<div class="row">
												<div class="col-md-12">
													<b>Đăng nhập với</b>
													<div class="social-buttons">
														<a href="#" class="btn btn-primary"><i class="fa fa-facebook"></i> Facebook</a>
														<a href="#" class="btn btn-danger"><i class="fa fa-google-plus"></i> Google+</a>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</li>
							</ul>
							<!-- menu ends -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- header section ends -->
		
		<!-- content section -->
		<div class="content_section">
			
			<!-- slider start -->
			<div id="id_slider_big">
				<div class="wa-slider-container">
					<!-- slider background -->
					<div class="wa-slider-bg">
						<div class="cycle-slideshow">
							<img src="{{url('client/images/slider/main_img_1.jpg')}}"  data-cycle-fx=tileSlide data-cycle-tile-vertical=false alt="" />
						</div>
					</div>
					<!-- slider background ends -->
					
					<!-- slider front -->
					<div class="wa-slider-front">
						<div class="container">
							<div class="row">
							
								<div class="col-md-5"></div>
								
								<div class="col-md-7">
									<div class="slider-info-container">
										<div class="slider-info">
											<div class="slider-info-div	">
												<div class="s-where">
													<div class="s-title hidden-27"><h1>Tên địa điểm</h1></div>
													<div class="s-location">Có <b>123</b> người thích địa điểm này</div>
													<div class="s-where-line"></div>
												</div>
												<div class="s-content">
													<p class="first-p hidden-278">Giới thiệu về địa điểm Sáng nay, UB TƯ MTTQ Việt Nam tổ chức hội thảo “MTTQ Việt Nam với công tác phòng chống tham nhũng”. Bà Nguyễn Thị Bích Ngà, ủy viên UB Kiểm tra TƯ cho rằng phải làm thế nào để chống tham nhũng thành phong trào thấy cái đúng phải bảo vệ, thấy cái sai phải ...</p>
													<div class="localScroll">
														<a class="wa-button" href="#id_register_a"><span>CHƠI LUÔN</span></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
					<!-- slider front ends -->
				</div>
			</div>
			<!-- slider ends -->
			
			<!-- about start -->
			<div id="id_about_a">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<!-- big element ends -->
							<div class="wa-big-element">
								<!-- heading -->
								<div class="wow fadeIn" data-wow-delay="0.2s">
									<div class="heading-container">
										<h2 class="heading-title">TIÊU DỀ BÀI VIẾT</h2>
										<span class="heading-subtitle"><h3>Địa chỉ bài viết</h3></span>
										<span class="heading-subtitle">Giới thiệu chi tiết Tuy nhiên, bà nhìn nhận nói thì dễ nhưng qua nhiều vụ việc cụ thể của UB Kiểm tra TƯ mới thấy ở dưới cơ sở không đơn giản chút nào. Thấy cái đúng để bảo vệ cũng không dám, sai không dám đấu tranh. Chuyện này chính là của Mặt trận, cán bộ mặt trận tác động toàn dân thế nào, khen thưởng ra sao để khơi dậy phong trào rất quan trọng.</span>
									</div>
								</div>
								<!-- heading ends -->
								
								<!-- divider -->
								<div class="wa-divider"></div>
								<!-- divider ends -->

								<!-- photo slider -->
								<div class="row">
									<div class="col-md-6">
										<div class="wow fadeIn">
											<!-- photo slider -->
											<div id="photo-slider" class="wa-element">
												<div class="wa-photo-slider">
													<div class="cycle-slideshow"
													data-cycle-slides=">img"
													data-cycle-fx=scrollHorz
													data-cycle-auto-height="container"
													data-cycle-pager=".wa-photo-pager"
													data-cycle-pager-template=""
													data-cycle-prev="#wa-slider-navigation .cycle-prev"
													data-cycle-next="#wa-slider-navigation .cycle-next"
													>
														<img src="{{url('client/images/about/img_1.png')}}" alt="" />
														<img src="{{url('client/images/about/img_2.png')}}" alt="" />
														<img src="{{url('client/images/about/img_3.png')}}" alt="" />
														<img src="{{url('client/images/about/img_4.png')}}" alt="" />
														<img src="{{url('client/images/about/img_5.png')}}" alt="" />
													</div>
												</div>
												<div class="wa-photo-pager-container">
													<div class="wa-photo-pager-row">
														<div class="wa-photo-pager">
															<div><img src="{{url('client/images/about/img_1_tumbnail.png')}}" alt="" /></div>
															<div><img src="{{url('client/images/about/img_2_tumbnail.png')}}" alt="" /></div>
															<div><img src="{{url('client/images/about/img_3_tumbnail.png')}}" alt="" /></div>
															<div><img src="{{url('client/images/about/img_4_tumbnail.png')}}" alt="" /></div>
															<div><img src="{{url('client/images/about/img_5_tumbnail.png')}}" alt="" /></div>
														</div>
													</div>
												</div>
												<div class="clearfix"></div>
											</div>
											<!-- photo slider ends -->
										</div>
									</div>
									<div class="col-md-6">
										<div class="wow fadeIn">
											<div class="text-left wa-element last">
												<h3>Các bài viết về địa điểm này</h3>
												<div class="wa-list-check left">
													<ul>
														<li>
															<a href="#" class="hidden-57" title="Full text">Nunc ullamcorper lobortis tortor, eget eleifend erat placerat ac.</a>
															<span class="label label-success hidden-17" title="Nguồn bài viết"> Nguồn bài viết</span>
														</li>
														<li>
															<a href="#" class="hidden-57" title="Full text">Nunc ullamcorper lobortis tortor, eget eleifend erat placerat ac.</a>
															<span class="label label-success hidden-17" title="Nguồn bài viết"> Nguồn bài viết</span>
														</li>
														<li>
															<a href="#" class="hidden-57" title="Full text">Nunc ullamcorper lobortis tortor, eget eleifend erat placerat ac.</a>
															<span class="label label-success hidden-17" title="Nguồn bài viết"> Nguồn bài viết</span>
														</li>
														<li>
															<a href="#" class="hidden-57" title="Full text">Nunc ullamcorper lobortis tortor, eget eleifend erat placerat ac.</a>
															<span class="label label-success hidden-17" title="Nguồn bài viết"> Nguồn bài viết</span>
														</li>
														<li>
															<a href="#" class="hidden-57" title="Full text">Nunc ullamcorper lobortis tortor, eget eleifend erat placerat ac.</a>
															<span class="label label-success hidden-17" title="Nguồn bài viết"> Nguồn bài viết</span>
														</li>
														<li>
															<a href="#" class="hidden-57" title="Full text">Nunc ullamcorper lobortis tortor, eget eleifend erat placerat ac.</a>
															<span class="label label-success hidden-17" title="Nguồn bài viết"> Nguồn bài viết</span>
														</li>
														<li>
															<a href="#" class="hidden-57" title="Full text">Nunc ullamcorper lobortis tortor, eget eleifend erat placerat ac.</a>
															<span class="label label-success hidden-17" title="Nguồn bài viết"> Nguồn bài viết</span>
														</li>
														<li>
															<a href="#" class="hidden-57" title="Full text">Nunc ullamcorper lobortis tortor, eget eleifend erat placerat ac.</a>
															<span class="label label-success hidden-17" title="Nguồn bài viết"> Nguồn bài viết</span>
														</li>
													</ul>
												</div>
												<div class="wa-event-padding-button">
												</div>
												<div class="localScroll">
													<a class="wa-button" href="#id_register_a"><span>Đi thôi</span></a>
												</div>
												
											</div>
										</div>
									</div>
								</div>
								<!-- photo slider ends -->
							</div>
							<!-- big element ends -->
						</div>
					</div>
				</div>
			</div>
			<!-- about ends -->
			<!-- divider -->
			<div class="wa-divider-1"></div>
			<!-- divider ends -->
			<!-- Maps start -->
			<div class="wa-flying-top">
				<div id="id_location_a">
					<div class="wa-map-container">
						<div class="container">
							<!-- maps -->
							<div id="map"></div>
							<!-- maps ends-->
							
							<!-- info -->
							<div class="wa-map-info">
								<div class="container">
									<div class="row">
										<div class="col-md-1"></div>
										<div class="col-md-10">
											<div class="wa-map-info-container">
												<div class="col-1-4" onclick="goToThisLocation()">
													<img class="d-1" src="{{url('client/images/678111-map-marker-48.png')}}" title="click để tìm đại điểm du lịch đã chọn">
													<div class="d-2">
														<span class="s-1 hidden-27"><b>Địa chỉ thăm quan</b></span><br />
														<span class="s-2">địa chỉ ở đây</span>
													</div>
												</div>
												<div class="col-1-4" onclick="FindMe()">
													<img class="d-1" src="{{url('client/images/678111-map-marker-48.png')}}" title="click để biết vị trí của bạn">
													<div class="d-2">
														<span class="s-1" id="selectAddress"><b>Khoảng cách tới vị trí bạn chọn</b></span><br />
														<span class="s-2" id="kc">Bấm tìm vị trí để biết</span>		
													</div>
												</div>
												<div class="col-1-4">
													<button class="wa-button" id="showKC"><span>Tính khoảng cách</span></button>
												</div>
												<div class="clearfix"></div>
											</div>
										</div>
										<div class="col-md-1"></div>
									</div>
								</div>
							</div>
							<!-- info -->
						</div>
					</div>
				
				</div>
			</div>
			<!--  Maps ends -->
			
			<!--  button bắt đầu xây duwg lịch trình start -->
			<div id="btn-start" class="bg_1">
				<div class="container">
					<form class="form-register">
						<div class="row">
							<div class="col-md-2"></div>
							<div class="col-md-8">
								<button>Tạo lịch trình của bạn</button>
							</div>
							<div class="col-md-2"></div>
						</div>
					</form>
				</div>
			</div>
			<!--  button bắt đầu xây duwg lịch trình ends -->

			<!--  1 số địa điểm khác start -->
			<div id="id_price_a" class="bg_2">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<!-- wa-big-element-->
							<div class="wa-big-element">
								<!-- heading -->
								<div class="heading-container">
									<h2 class="heading-title">MỘT SỐ ĐỊA ĐIỂM DU LỊCH KHÁC</h2>
								</div>
								<!-- heading ends -->	
								<div class="row">
									<div class="col-md-3">
										<div class="wow fadeIn">
											<!-- table -->
											<div class="wa-pricing-table">
												<div class="wa-pricing">
													<div class="wa-pricing-header">
														<h5 class="hidden-12">TIÊU ĐỀ</h5>
														<div class="wa-pricing-per hidden-27">Địa chỉ</div>
														<div class="wa-pricing-cost"></div>
														<img src="{{url('client/images/slider/main_img_1.jpg')}}">
													</div>
													<div class="wa-pricing-content">
														<ul>
															<li><i class="fa fa-eye text-eye"></i>&nbsp; Đã xem: &nbsp;<b>131231</b></li>
															<li><i class="fa fa-heart text-heart"></i>&nbsp; Ưa thích: &nbsp;<b>131231</b></li>
														</ul>
													</div>
													<div class="wa-pricing-button localScroll">
														<a title="" class="wa-button-price" href="#id_register_a">
															<span class="wa-button-inner">Chi tiết</span>
														</a>
													</div>
												</div>
											</div>
											<!-- table ends -->
										</div>
									</div>
									<div class="col-md-3">
										<div class="wow fadeIn">
											<!-- table -->
											<div class="wa-pricing-table">
												<div class="wa-pricing">
													<div class="wa-pricing-header">
														<h5 class="hidden-12">TIÊU ĐỀ</h5>
														<div class="wa-pricing-per hidden-27">Địa chỉ</div>
														<div class="wa-pricing-cost"></div>
														<img src="{{url('client/images/slider/main_img_1.jpg')}}">
													</div>
													<div class="wa-pricing-content">
														<ul>
															<li><i class="fa fa-eye text-eye"></i>&nbsp; Đã xem: &nbsp;<b>131231</b></li>
															<li><i class="fa fa-heart text-heart"></i>&nbsp; Ưa thích: &nbsp;<b>131231</b></li>
														</ul>
													</div>
													<div class="wa-pricing-button localScroll">
														<a title="" class="wa-button-price" href="#id_register_a">
															<span class="wa-button-inner">Chi tiết</span>
														</a>
													</div>
												</div>
											</div>
											<!-- table ends -->
										</div>
									</div>
									<div class="col-md-3">
										<div class="wow fadeIn">
											<!-- table -->
											<div class="wa-pricing-table">
												<div class="wa-pricing">
													<div class="wa-pricing-header">
														<h5 class="hidden-12">TIÊU ĐỀ</h5>
														<div class="wa-pricing-per hidden-27">Địa chỉ</div>
														<div class="wa-pricing-cost"></div>
														<img src="{{url('client/images/slider/main_img_1.jpg')}}">
													</div>
													<div class="wa-pricing-content">
														<ul>
															<li><i class="fa fa-eye text-eye"></i>&nbsp; Đã xem: &nbsp;<b>131231</b></li>
															<li><i class="fa fa-heart text-heart"></i>&nbsp; Ưa thích: &nbsp;<b>131231</b></li>
														</ul>
													</div>
													<div class="wa-pricing-button localScroll">
														<a title="" class="wa-button-price" href="#id_register_a">
															<span class="wa-button-inner">Chi tiết</span>
														</a>
													</div>
												</div>
											</div>
											<!-- table ends -->
										</div>
									</div>
									<div class="col-md-3">
										<div class="wow fadeIn">
											<!-- table -->
											<div class="wa-pricing-table">
												<div class="wa-pricing">
													<div class="wa-pricing-header">
														<h5 class="hidden-12">TIÊU ĐỀ</h5>
														<div class="wa-pricing-per hidden-27">Địa chỉ</div>
														<div class="wa-pricing-cost"></div>
														<img src="{{url('client/images/slider/main_img_1.jpg')}}">
													</div>
													<div class="wa-pricing-content">
														<ul>
															<li><i class="fa fa-eye text-eye"></i>&nbsp; Đã xem: &nbsp;<b>131231</b></li>
															<li><i class="fa fa-heart text-heart"></i>&nbsp; Ưa thích: &nbsp;<b>131231</b></li>
														</ul>
													</div>
													<div class="wa-pricing-button localScroll">
														<a title="" class="wa-button-price" href="#id_register_a">
															<span class="wa-button-inner">Chi tiết</span>
														</a>
													</div>
												</div>
											</div>
											<!-- table ends -->
										</div>
									</div>
								</div>
							</div>
							<!-- wa-big-element ends -->
						</div>
					</div>
				</div>
			</div>
			<!--  1 số địa điểm khác ends -->

		</div>
		<!-- content section ends -->
		
		
		<!-- footer section -->
		<div class="footer_section">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="footer-text">Copyright 2017 &copy; Thiết kế và lập trình bởi sinh viên ĐH Khoa Học Tự Nhiên!</div>
					</div>
				</div>
			</div>		
		</div>
		<!-- footer section ends -->
		
	</div>
</div>
	<script src="{{url('client/js/jquery-1.11.0.min.js')}}"></script>
	<script src="{{url('client/js/myJS/myJS-info.js')}}"></script>
	<script src="{{url('client/js/jquery.placeholder.js')}}"></script>
	<script src="{{url('client/js/less-1.6.1.min.js')}}"></script>
	<script src="{{url('client/js/imagesloaded.js')}}"></script>
	<script src="{{url('client/js/flexmenu.js')}}"></script>
	<script src="{{url('client/js/jquery.cycle2.min.js')}}"></script>
	<script src="{{url('client/js/jquery.cycle2.tile.min.js')}}"></script>
	<script src="{{url('client/js/jquery-ui-core.min.js')}}"></script>
	<script src="{{url('client/js/jquery-ui-widget.js')}}"></script>
	<script src="{{url('client/js/jquery-ui-tabs.min.js')}}"></script>
	<script src="{{url('client/js/jquery.countdown.min.js')}}"></script>
	<script src="{{url('client/js/jquery.validate.min.js')}}"></script>
	<script src="{{url('client/js/jquery.scrollTo.min.js')}}"></script>
	<script src="{{url('client/js/jquery.localScroll.min.js')}}"></script>
	<script src="{{url('client/js/jquery.nav.js')}}"></script>
	<script src="{{url('client/js/wow.min.js')}}"></script>
	<script src="{{url('client/js/custom.js')}}"></script>
	<script src="{{url('client/js/jquery-style-switcher.js')}}"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBEn8DqcOIU6VdZit9-RPhWrjyGoaFWksc&language=vi&libraries=places&callback=initMap"></script>
</body>
</html>
