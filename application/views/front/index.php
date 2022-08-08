
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Trang chủ |Flower Shop</title>

	<link href="<?php echo base_url()?>assets/front/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/front/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/front/css/prettyPhoto.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/front/css/price-range.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/front/css/animate.css" rel="stylesheet">
	
	<!-- <link href="<?php echo base_url()?>assets/front/css/sliderprice.css" rel="stylesheet"> -->
	<link href="<?php echo base_url()?>assets/front/css/jquery-ui.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/front/css/responsive.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/front/css/main.css" rel="stylesheet">
	
    <!--[if lt IE 9]>
    <script src="<?php echo base_url()?>assets/front/js/html5shiv.js"></script>
    <script src="<?php echo base_url()?>assets/front/js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="<?php echo base_url()?>assets/front/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url()?>assets/front/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url()?>assets/front/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url()?>assets/front/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url()?>assets/front/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i>  +84 1234 789</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> Flowershop@gmail.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
							<li><a href="https://www.facebook.com/Flower-Shop-673467356412693/?modal=admin_todo_tour"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://twitter.com/?lang=vi"><i class="fa fa-twitter"></i></a></li>
								<li><a href="https://myaccount.google.com/u/1/?utm_source=OGB&tab=wk&utm_medium=act"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="https://mail.google.com/mail/u/0/?view=cm&fs=1&to&su=&body="><i class="fa fa-envelope"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="<?php echo base_url();?>"><img src="<?php echo base_url()?>assets/front/images/home/logo.png" alt="" /></a>
						</div>
					
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								
								<li><a href="account"><i class="fa fa-user"></i> Tài khoản</a></li>
								<?php $customer_id = $this->session->userdata('cus_id');?>
								<?php $shipping_id = $this->session->userdata('shipping_id');?>

									<?php if($this->cart->total_items()!=Null && $customer_id!=NULL && $shipping_id!=NULL){
										?>
								<li>
									<a href="<?php echo base_url()?>payment"><i class="fa fa-crosshairs"></i> Thanh toán</a>

								</li>
									<?php }elseif($this->cart->total_items()!=Null && $customer_id!=NULL){?>

								<li>
									<a href="<?php echo base_url()?>billing"><i class="fa fa-crosshairs"></i> Thanh toán</a>

								</li>

									<?php }else{?>
								<li>
									<a href="<?php echo base_url()?>checkout"><i class="fa fa-crosshairs"></i> Thanh toán</a>

								</li>
									<?php } ?>
								<!-- <li>
									<?php if($this->cart->total_items()!=Null && $customer_id!=NULL && $shipping_id!=NULL){?>
									<a href="<?php echo base_url()?>payment"><i class="fa fa-credit-card"></i>Payment</a>
									<?php } ?>
								</li> -->
								<li>	
									<a href="<?php echo base_url()?>show-cart"><i class="fa fa-shopping-cart"></i>
									<?php $cart_items =  $this->cart->total_items();
										if($cart_items>0){
									?> 
									Giỏ hàng(<?php echo $cart_items;?>)
									 <?php }else{?>
									Giỏ hàng(0)
									 <?php } ?>
									</a>

								</li>
								<?php 
									
								if($customer_id){?>
								<li>
									<a href="<?php echo base_url()?>logout"><i class="fa fa-lock"></i> Đăng xuất</a>
								</li>
								<?php }else{ ?>
								<li>
									<a href="<?php echo base_url()?>checkout"><i class="fa fa-lock"></i> Đăng nhập</a>
								</li>
								<?php } ?>
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->

		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="<?php echo base_url();?>" class="active">Trang chủ</a></li>
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
									<ul role="menu" class="sub-menu">
										<li><a href="<?php echo base_url()?>products">Sản phẩm</a></li>
											<?php if($this->cart->total_items()!=Null && $customer_id!=NULL){
													?>
											<li>
												<a href="<?php echo base_url()?>billing">Thanh toán</a>

											</li>
												<?php }elseif($this->cart->total_items()!=Null){?>
											<li>
												<a href="<?php echo base_url()?>checkout">Thanh toán</a>

											</li>
												<?php } ?>
											<li>	
												<a href="<?php echo base_url()?>show-cart">
												<?php $cart_items =  $this->cart->total_items();
													if($cart_items>0){
												?> 
												 Giỏ hàng(<?php echo $cart_items;?>)
												 <?php }else{?>
												  Giỏ hàng(0)
												 <?php } ?>
												</a>

											</li>
											<?php if($customer_id){?>
											<li>
												<a href="<?php echo base_url()?>logout"><i class="fa fa-lock"></i> Đăng xuất</a>
											</li>
											<?php }else{ ?>
											<li>
												<a href="<?php echo base_url()?>checkout"><i class="fa fa-lock"></i> Đăng nhập</a>
											</li>
											<?php } ?>
			 
									</ul>
								</li> 
								<!-- <li><a href="<?php echo base_url()?>home/_404_page">404</a></li> -->
								<li><a href="<?php echo base_url()?>contact">Liên hệ</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<form action="<?php echo base_url()?>search" method="post">
							<input type="text" name="search" placeholder="Tìm kiếm" />							
							</form>
						</div> 
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->

	<?php if(isset($main_content) && $main_content!=NULL){
	echo $main_content; // Load a single page under header and footer
}else{?>
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<?php if(isset($slider)){
						echo $slider;
					}?>
				</div>
			</div>
		</div>
	</section><!--/slider-->
	<section>
		<div class="container">
			<div class="row">
					<?php if(isset($category_brand)){
						echo $category_brand;
					}?>
				
				<div class="col-sm-9 padding-right">
					<?php if(isset($feature)){
						echo $feature;
					}?>
					
					<!-- This is Category Post option -->
					
					<?php if(isset($recommended)){
						echo $recommended;
					}?>
					
				</div>
			</div>
		</div>
	</section>
<?php } ?>

	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
						<img src="<?php echo base_url()?>assets/back/img/logo.png" alt=""/>
						<p>Hoa của trời cứ để gió cuốn đi...</p>	
						</div>
					</div>
					<div class="col-sm-7">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="<?php echo base_url()?>assets/front/images/home/ship.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Giao hàng tiết kiệm</p>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="<?php echo base_url()?>assets/front/images/home/loại.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Đa dạng loại hoa</p>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="<?php echo base_url()?>assets/front/images/home/Gift.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Quà tặng hấp dẫn</p>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="<?php echo base_url()?>assets/front/images/home/gấu.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Đa dạng dịch vụ</p>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="<?php echo base_url()?>assets/front/images/home/map.png" alt="" />
							<p>129 Nguyễn Trãi- Thanh Xuân- Hà Nội</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
						<h2>Dịch vụ</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Tư vấn trực tiếp</a></li>
								<li><a href="#">Liên hệ với chúng tôi</a></li>
								<li><a href="#">Tình trạng đặt hàng</a></li>
								<li><a href="#">Thay đổi thông tin</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
						<h2>Sản phẩm</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Hoa chúc mừng</a></li>
								<li><a href="#">Hoa cưới</a></li>
								<li><a href="#">Hoa sinh nhật</a></li>
								<li><a href="#">Hoa chia buồn</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
						<h2>Chính sách</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Bảo mật thông tin</a></li>
								<li><a href="#">Giảm giá</a></li>
								<li><a href="#">Khách hàng thân thiết</a></li>
								<li><a href="#">Dịch vụ đa dạng</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
						<h2>Cửa hàng</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Thông tin cửa hàng</a></li>
								<li><a href="#">Vị trí cửa hàng</a></li>
								<li><a href="#">Chương trình liên lết</a></li>
								<li><a href="#">Bản quyền</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<form action="#" class="searchform">
							<h2>Facebook</h2>
							<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.3"></script>
<div class="fb-page" data-href="https://www.facebook.com/Flower-Shop-673467356412693/?modal=admin_todo_tour" data-tabs="timeline" data-width="600" data-height="120" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Flower-Shop-673467356412693/?modal=admin_todo_tour" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Flower-Shop-673467356412693/?modal=admin_todo_tour">Flower Shop</a></blockquote></div>
								<!-- <p>Get the most recent updates from <br />our site and be updated your self...</p> -->
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
				<p class="pull-left">Flower Shop</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="https://www.facebook.com/nttrang5122000/">Thu Trang</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	<script src="<?php echo base_url()?>assets/front/js/jquery.js"></script>
	<script src="<?php echo base_url()?>assets/front/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url()?>assets/front/js/jquery.scrollUp.min.js"></script>
	<script src="<?php echo base_url()?>assets/front/js/price-range.js"></script>
	<script src="<?php echo base_url()?>assets/front/js/jquery.prettyPhoto.js"></script>
	<script src="<?php echo base_url()?>assets/front/js/jquery-ui.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="<?php echo base_url()?>assets/front/js/gmaps.js"></script>
	<script src="<?php echo base_url()?>assets/front/js/contact.js"></script>

	<script src="<?php echo base_url()?>assets/front/js/main.js"></script>
	<!-- Price Range Script Start-->
	<script type="text/javascript">  
 $(function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 1000,
      values: [ 200,500 ],
      slide: function( event, ui ) {
        $( "#amount" ).html( ui.values[ 0 ] + "K"  + " - " + ui.values[ 1 ] + "K" );
		$( "#amount1" ).val(ui.values[ 0 ]);
		$( "#amount2" ).val(ui.values[ 1 ]);
      }
    });
    $( "#amount" ).html( $( "#slider-range" ).slider( "values", 0 ) + "K" + 
     " - "+ $( "#slider-range" ).slider( "values", 1 ) + "K"  );
  });
  </script>

	<!-- Price Range Code end -->
</body>



</html>