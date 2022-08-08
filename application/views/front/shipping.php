<style type="text/css">
	.shipping_info p{color:red;font-weight: bold;font-size: 12px}
</style>
<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="<?php echo base_url();?>">Trang chủ</a></li>
				  <li class="active">Thanh toán</li>
				</ol>
			</div><!--/breadcrums-->

			<div class="step-one">
				<h2 class="heading">Thông tin</h2>
			</div>
		
			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-2">
						
					</div>
					<div class="col-sm-8 clearfix">
						<div class="bill-to">
							<h5 class="shipping_info">
                   			 <?php echo validation_errors();?>
			              </h5>
							<p>Địa chỉ giao hàng</p>
							<div class="form-two">
								<form action="<?php echo base_url()?>insert-shipping" method="post" name="shiping_info">
									<input type="text" placeholder="Họ và tên" name="cus_name">
									
									<input type="hidden" name="shipping_id" value="">
									<input type="text" placeholder="Email*" name="cus_email">
									<input type="text" placeholder="Điện thoại" name="cus_mobile">
									<input type="text" placeholder="Địa chỉ*" name="cus_address">
									<input type="text" placeholder="Quốc gia" name="cus_city">
									<select name="cus_country">
										<option>-- Quốc gia --</option>
										<option>Việt Nam</option>
										<option>Bangladesh</option>
										<option>UK</option>
									</select>
									<input type="text" placeholder="Zip" name="cus_zip">
									<input type="text" placeholder="Fax" name="cus_fax">
									<input type="submit" value="Lưu & tiếp tục" class="btn btn-primary">
								</form>
							</div>
							
						</div>
					</div>
					<div class="col-sm-2">
						
					</div>					
				</div>
			</div>
			
		</div>
	</section> <!--/#cart_items-->
	<script type="text/javascript">
		
		

	</script>