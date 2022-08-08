


<section id="cart_items">
		<div class="container">
			<h3>Dear <?php echo $this->session->userdata("cus_name");?></h3>
<h4>Bạn đã đặt hàng thành công.</h4><hr/>
			
<h6>Tổng thanh toán của bạn (bao gồm VAT và phí ship) : <?php echo $this->session->userdata("g_total");?>,000 đ</h6>

<h5 style="text-align: justify;"></h5>
Cảm ơn đã đặt hàng. Chúng tôi sẽ sớm liên hệ với bạn về chi tiết giao hàng. Để biết thêm chi tiết xin vui lòng kiểm tra thư đăng ký của bạn.
		</div>
	</section> <!--/#cart_items-->

	