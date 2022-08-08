
<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <!-- <li><a href="<?php echo base_url();?>">Trang chủ</a></li> -->
				  <!-- <li class="active">Shopping Cart</li> -->
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Sản phẩm</td>
							<td class="description"></td>
							<td class="price">Đơn gián</td>
							<td class="quantity">Số lượng</td>
							<td class="total">Tổng đơn hàng</td>
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
									<form action="<?php echo base_url()?>update-cart-qty" method="post">
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
								<a class="cart_quantity_delete" href="<?php echo base_url()?>delete-to-cart/<?php echo $items['rowid']?>"><i class="fa fa-times"></i></a>
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
			<div class="heading">
				<p>Chọn nếu bạn có mã giảm giá hoặc điểm thưởng bạn muốn sử dụng</p>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="chose_area">
						<ul class="user_option">
							<li>
								<input type="checkbox">
								<label>Sử dụng mã phiếu giảm giá</label>
							</li>
							<li>
								<input type="checkbox">
								<label> Sử dụng phiêu qua tặng</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Ước tính phí ship & Thuế</label>
							</li>
						</ul>
						<ul class="user_info">
							<li class="single_field">
								<label>Quốc gia:</label>
								<select>
									<option>Việt Nam</option>
									<option>United States</option>
									<option>UK</option>
								
								</select>
								
							</li>
							<li class="single_field">
								<label>Tỉnh thành:</label>
								<select>
									<option>Hà Nội</option>
									<option>Đà Nẵng</option>
									<option>TP.Hồ Chí Minh</option>
									
								</select>
							
							</li>
							<li class="single_field zip-field">
								<label>Mã code:</label>
								<input type="text">
							</li>
						</ul>
						<!-- <a class="btn btn-default update" href="">Get Quotes</a> -->
						<a class="btn btn-default check_out" href="">Tiếp tục</a>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<?php 
								$cart_total = $this->cart->total();
							?>
							<li>Tổng giỏ hàng <span><?php echo $cart_total;?>,000 đ</span></li>
							<?php
								$tax = ($cart_total*2)/100;
							?>
							<li>VAT <span><?php echo $tax?>,000 đ</span></li>
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
							<li>Phí giao hàng <span><?php echo $shiping?>,000 đ</span></li>
							<?php $g_total = $cart_total+$tax+$shiping;?>
							<li>Tổng thanh toán<span>
								<?php
									$gdata = array();
									$gdata['g_total'] = $g_total;
									$this->session->set_userdata($gdata);
							 		echo "$g_total,000 đ";
							 	?>
							 </span></li>
						</ul>
							<form action="<?php echo base_url()?>update-cart-qty" method="post" >	
							<input type="submit" class="btn btn-default update"  value="Thay đổi đơn hàng"/>
							<?php $customer_id = $this->session->userdata('cus_id');?>
							<?php $shipping_id = $this->session->userdata('shipping_id');?>
							<?php if($this->cart->total_items()!=Null && $customer_id!=NULL && $shipping_id!=NULL){?>
							<a class="btn btn-default check_out" href="<?php echo base_url()?>payment">Thanh toán</a>
							<?php } elseif($customer_id!=NULL && $this->cart->total_items()!=Null){?>
							<a class="btn btn-default check_out" href="<?php echo base_url()?>billing">Thanh toán</a>
							<?php }elseif($this->cart->total_items()!=Null){ ?>
							<a class="btn btn-default check_out" href="<?php echo base_url()?>checkout">Thanh toán</a>
							<?php } ?>
							</form>	
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->