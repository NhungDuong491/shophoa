<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <!-- <li><a href="<?php echo base_url();?>">Trang chủ</a></li>
				  <li class="active">Thanh toán</li> -->
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Sản phẩm</td>
							<td class="description"></td>
							<td class="price">Giá</td>
							<td class="quantity">Số lượng</td>
							<td class="total">Tổng tiền</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						<?php $cart_content = $this->cart->contents();
						
						?>

						<?php foreach ($cart_content as $items){ ?>

						<tr>
							<td class="cart_product">
								<a href=""><img  width="100" src="<?php echo $items['options']['pro_image']?>" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href=""><?php echo $items['name']?></a></h4>
							</td>
							<td class="cart_price">
								<p><?php echo $items['price']?>,000 đ</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<form action="<?php echo base_url()?>update-cart-qty-payment" method="post">
										<a class="cart_quantity_up" href=""> + </a>
										<input class="cart_quantity_input" type="text" name="qty" value="<?php echo $items['qty']?>" autocomplete="off" size="2">
										<a class="cart_quantity_down" href=""> - </a>
										<input  type="hidden" name="rowid" value="<?php echo $items['rowid']?>">
										<input  type="submit"  value="Thay đổi"/>
									<form>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price"><?php echo $items['subtotal']?>,000 đ</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="<?php echo base_url()?>delete-to-cart-payment/<?php echo $items['rowid']?>"><i class="fa fa-times"></i></a>
							</td>
						</tr>
						<?php } ?>

					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			
			<div class="row">
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<?php 
								$cart_total = $this->cart->total();
							?>
							<li>Tổng sản phẩm: <span><?php echo $cart_total;?>,000 đ</span></li>
							<?php
								$tax = ($cart_total*2)/100;
							?>
							<li>VAT: <span><?php echo $tax?>,000 đ</span></li>
							<!-- Shipping Cost Dependend Quantity, price, buyer distance etc -->
							<?php
							$shiping = "0";
							if($cart_total>0 && $cart_total<200){
								$shiping = 10;
							}elseif($cart_total>200 && $cart_total<=600){
								$shiping = 20;
							}elseif($cart_total>600 && $cart_total<1000){
								$shiping = 30;
							}elseif($cart_total>1000){
								$shiping = 35;
							}elseif($cart_total==0){
								$shiping = 0;
								}
							?>
							<li>Phí vẩn chuyển: <span><?php echo $shiping?>,000 đ</span></li>
							<?php $g_total = $cart_total+$tax+$shiping;?>
							<li>Tổng thanh toán: <span><?php echo $g_total;?>,000 đ</span></li>
						</ul>
							<form action="<?php echo base_url()?>update-cart-qty-payment" method="post" >	
							
							</form>	
					</div>
				</div>
				<div class="col-sm-6">
					<form action="<?php echo base_url()?>place-order" method="post" >
						<div class="payment-options">
							<div class="order-message">
								<p class="alert alert-warning">Vận chuyển</p>
								<?php echo $this->session->flashdata("flash_msg")?>
								<textarea name="payment_message"  placeholder="Ghi chú về đơn hàng của bạn" rows="10"></textarea>
							</div>	
							<span>
								<label><input type="radio"  name="payment_gateway" value="cash_on_delivery"> Thanh toán khi giao hàng</label>
							</span>
							<span>
								<label><input type="radio"  name="payment_gateway" value="paypal_payment"> Thanh toán bằng thẻ</label>
							</span>
							<span>
								<input type="submit" name="btn" class="btn btn-primary" value="Thanh toán">
							</span>
						</div>
					</form>
				</div>

			</div>
		</div>
	</section><!--/#do_action-->
	