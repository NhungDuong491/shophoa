<section id="cart_items">
		<div class="container">
        <h3>Dear <?php echo $this->session->userdata("cus_name");?></h3>
<h4>Bạn đã đặt hàng thành công.</h4><hr/>
			
<h6>Tổng thanh toán của bạn (bao gồm VAT và phí ship) : <?php echo $this->session->userdata("g_total");?>,000 đ</h6>

<h5 style="text-align: justify;"></h5>
Cảm ơn đã đặt hàng. Chúng tôi sẽ sớm liên hệ với bạn về chi tiết giao hàng. Để biết thêm chi tiết xin vui lòng kiểm tra thư đăng ký của bạn
<hr/><h4>Banking Information.</h4>
<div class="table-responsive">
                <table class="table table-bordered">
                    <tbody>
						<tr>
                            <td><b class="bg-info">Số tài khoản</b></td>
                            <td><b class="bg-info">02968646801</b></td>
                        </tr>
						<tr>
                            <td><b class="bg-info">Ngân Hàng</b></td>
                            <td><b class="bg-info">TPBank</b></td>
                        </tr>
						<tr>
                            <td><b class="bg-info">Tên chủ thẻ</b></td>
                            <td><b class="bg-info">Nguyen Thu Trang</b></td>
                        </tr>
                    </tbody>
                </table>
            </div>
		<hr/><h4>Sau khi chuyển xong vui lòng hãy nhắn tin hoặc gọi đến số <a style= "color :red">Hotline : 09999999 </a> để xác nhận. </h4>
    </div>
</div>
		</div>

	</section> <!--/#cart_items-->