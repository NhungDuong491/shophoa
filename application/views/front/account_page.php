<style type="text/css">
	.billing_info p{color: red;font-style: bold}
</style>
<section id="cart_items">
		<div class="container">

			<div class="step-one">
				<h2 class="heading">Thông tin tài khoản</h2>
			</div>
		
			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-2">
						
					</div>
					<div class="col-sm-8 clearfix">
						<div class="bill-to">
							<h5 class="billing_info">
                   			 <?php echo validation_errors();?>
			              </h5>
							
							<div class="form-two">
								<form action="<?php echo base_url()?>update-billing" method="post" name="billing_info">
								<p>Tên tài khoản</p>	<input type="text" placeholder="Họ và tên" name="cus_name" value="<?php echo $cus_info->cus_name?>" readonly="">
								<input type="hidden" name="cus_id" value="<?php echo $cus_info->cus_id?>" readonly="">
                            	<p>Địa chỉ email</p>	<input type="text" placeholder="Email*" name="cus_email" value="<?php echo $cus_info->cus_email?>" readonly="">
								<p>Số điện thoại</p>	<input type="text" placeholder="Điện thoại" name="cus_mobile" value="<?php echo $cus_info->cus_mobile?>" readonly="">
								<p>Quận/ huyện</p>	<input type="text" placeholder="Địa chỉ*" name="cus_address" value="<?php echo $cus_info->cus_address?>" readonly="">
								<p>Tỉnh thành</p>	<input type="text" placeholder="Quốc gia" name="cus_city" value="<?php echo $cus_info->cus_city?>" readonly="">
								<p>Đất nước</p>	<input name="cus_country" value="<?php echo $cus_info->cus_country?>" readonly="">
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
		document.forms['billing_info'].elements['cus_country'].value=<?php echo $cus_info->cus_country?>

	</script>