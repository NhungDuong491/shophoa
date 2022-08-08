<div class="product-details"><!--product-details-->
	<div class="col-sm-5">
		<div class="view-product">
			<img src="<?php echo base_url().$product_info->pro_image?>" alt="" />
			<!-- <h3>ZOOM</h3> -->
		</div>
		<div id="similar-product" class="carousel slide" data-ride="carousel">

			<!-- Wrapper for slides -->
			<div class="carousel-inner-2">
				<div class="item active">
				</div>

			</div>

			<!-- Controls -->
		</div>

	</div>
	<div class="col-sm-7">
		<div class="product-information"><!--/product-information-->
			<h2><?php echo $product_info->pro_title?></h2>
			<p>Mã sản phẩm: <?php echo $product_info->pro_id?></p>
			<img src="<?php echo base_url()?>assets/front/images/product-details/rating.png" alt="" />
			<span>
				<form action="<?php echo base_url()?>add-to-cart"  method="post">
					<span><?php echo $product_info->pro_price?>,000 đ</span><!--This is under form because style factor when product price move to form then style is not formating-->
					<label>Số lượng:</label>
					<input type="text" value="1" name="qty"/>
					<input type="hidden" value="<?php echo $product_info->pro_id?>" name="pro_id"/>

					<button type="submit" class="btn btn-fefault cart">
						<i class="fa fa-shopping-cart"></i>
						Thêm vào giỏ hàng
					</button>
					
				</form>	
			</span>
		
      <p><b>Kiểu dáng :</b> <?php echo $product_info->brand_name?></p>
      <p><b>Khả dụng:</b>
				<?php if($product_info->pro_availability==1){
					echo "Có sẵn";
				}elseif($product_info->pro_availability==2){
					echo "Đặt hàng";
				}elseif($product_info->pro_availability==3){
					echo "Sản phẩm mới";
				}?>
			</p>
			<p><b>Mô tả :</b> <?php echo $product_info->pro_desc?></p>

<div class="socials-share">
    <a class="bg-facebook" href="https://www.facebook.com/Flower-Shop-673467356412693/?modal=admin_todo_tour" target="_blank"><span class="fa fa-facebook"></span> Like</a>
    <a class="bg-twitter" href="https://twitter.com/?lang=vi" target="_blank"><span class="fa fa-twitter"></span> Tweet</a>
    <a class="bg-google-plus" href="https://myaccount.google.com/u/1/?utm_source=OGB&tab=wk&utm_medium=act" target="_blank"><span class="fa fa-google-plus"></span> Plus</a>
    <a class="bg-email" href="https://mail.google.com/mail/u/0/?view=cm&fs=1&to&su=&body=" target="_blank"><span class="fa fa-envelope"></span> Gmail</a>
</div>
		
		
		</div><!--/product-information-->
	</div>
	</div>
	<!-- test -->
	<div class="product-page-content">
                  <!-- <ul id="myTab" class="nav nav-tabs">
                    <li class="active"><a href="#Reviews" data-toggle="tab">Bình luận</a></li> -->
                  </ul>
                      <!-- BEGIN FORM COMMENT-->
                      <!-- <form action="" class="reviews-form" role="form" method="post">
                        <h4>Viết bình luận</h4>
                        <div class="form-group"> -->
                          <!-- image comment : nếu không có hình user thì dùng hình mặc định -->
                          <!-- <img style="border-radius: 50% !important;width: 40px;height: 40px" src="<?php if(isset($cus_info)){ echo base_url("upload/user/".$cus_info->image_link);}
                          else echo base_url("upload/user/papers.jpg"); ?>" alt="">
                         

                          <input style="max-width: 720px;float: right;margin-top: 4px;border-radius: 5px !important" type="text" class="form-control" id="content" name="content" required="" placeholder="Nhập nội dung bình luận ở đây!" value="">
                        </div>
                        <div class="padding-top-20">                  
                          <input style="border-radius: 5px !important" type="submit" name="btn_submit" value="Bình luận" class="btn btn-primary">
                        </div>
                      </form>  -->
                      <!-- END FORM--> 

					  <script type="text/javascript">
    //document ready
    $(document).ready(function () {
        // config plugin comment
        nh_comments.init({
            object: '#comment-product',
            type: 'products',
            awaiting_approval:parseInt("{if !empty($config_comment.awaiting_approval)}{$config_comment.awaiting_approval}{else}0{/if}"),
            login_require:parseInt("{if !empty($config_comment.require_login)}{$config_comment.require_login}{else}0{/if}"),
            time_reload: parseInt("{if !empty($config_comment.interval)}{$config_comment.interval}{else}600000{/if}"),
            show_notice_success:parseInt("{if !empty($config_comment.show_notice_success)}{$config_comment.show_notice_success}{else}0{/if}"),
            show_avatar: parseInt("{if !empty($config_comment.show_avatar)}{$config_comment.show_avatar}{else}0{/if}"),
            accept_emoticon:parseInt("{if !empty($config_comment.accept_emoticon)}{$config_comment.accept_emoticon}{else}0{/if}"),
            accept_photo:parseInt("{if !empty($config_comment.accept_photo)}{$config_comment.accept_photo}{else}0{/if}"),
            accept_like:parseInt("{if !empty($config_comment.accept_like)}{$config_comment.accept_like}{else}0{/if}"),
            accept_comment:parseInt("{if !empty($config_comment.accept_comment)}{$config_comment.accept_comment}{else}0{/if}"),

            foreign_id: parseInt("{if !empty($arr_data.product_id)}{$arr_data.product_id}{else}0{/if}"),
            limit: parseInt("{if !empty($config_comment.limit_on_page)}{$config_comment.limit_on_page}{else}5{/if}"),

            logged:parseInt("{if !empty($arr_member.id)}1{else}0{/if}"),
            member_id:parseInt("{if !empty($arr_member.id)}{$arr_member.id}{else}0{/if}"),
            full_name:"{if !empty($arr_member.full_name)}{$arr_member.full_name}{/if}",
            phone:"{if !empty($arr_member.phone)}{$arr_member.phone}{/if}",
            email:"{if !empty($arr_member.email)}{$arr_member.email}{/if}",
            avatar:"{if !empty($arr_member.url_img)}{$arr_member.url_img}{/if}",
        });
    });
</script>

<div class="fb-comments" data-href="localhost/flower/product-details/.$id"
     data-colorscheme="light"
     data-numposts="5" data-width="100%"></div>



</div>