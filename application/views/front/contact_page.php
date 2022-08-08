<div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center">Liên hệ <strong></strong></h2> 	    				
					<div id="map" class="contact-map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1862.5927638201044!2d105.79744213652609!3d20.98519891759982!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135acc6bdc7f95f%3A0x58ffc66343a45247!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2jhu4cgR2lhbyB0aMO0bmcgVuG6rW4gdOG6o2k!5e0!3m2!1svi!2s!4v1560350328996!5m2!1svi!2s" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>			 		
			</div>    	
    		<div class="row">  	
	    		<div class="col-sm-8">
	    			<div class="contact-form">
	    				<h2 class="title text-center">Lời nhắn</h2>
	    				<?php echo $this->session->flashdata("flash_msg");?>
						
	    				<div class="status alert alert-success" style="display: none"></div>
				    	<form action="<?php echo base_url()?>contact-form" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
				            <div class="form-group col-md-6">
				                <input type="text" name="contact_name" class="form-control" required="required" placeholder="Họ tên">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="email" name="contact_email" class="form-control" required="required" placeholder="">
				            </div>
				            <div class="form-group col-md-12">
				                <input type="text" name="contact_subject" class="form-control" required="required" placeholder="Tiêu đề">
				            </div>
				            <div class="form-group col-md-12">
				                <textarea name="contact_message" id="message" required="required" class="form-control" rows="8" placeholder="Lời nhắn gửi "></textarea>
				            </div>  
							
							                    
				            <div class="form-group col-md-12">
				                <input type="submit" class="btn btn-primary pull-right" value="Gửi">
				            </div>
				        </form>
	    			</div>
	    		</div>
	    		<div class="col-sm-4">
	    			<div class="contact-info">
	    				<h2 class="title text-center">Thông tin liên hệ</h2>
	    				<address>
	    					<p>Flower Shop</p>
							<p>54 Triều Khúc- Thanh Xuân- Hà Nội</p>
							<p>Mobile: +84 1234 789</p>
							<p>Fax: 1-714-252-0026</p>
							<p>Email: Flowershop@gmail.com</p>
	    				</address>
	    				<div class="social-networks">
	    					<h2 class="title text-center">Mạng xã hội</h2>
							<ul>
							<li><a href="https://www.facebook.com/Flower-Shop-673467356412693/?modal=admin_todo_tour"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://twitter.com/?lang=vi"><i class="fa fa-twitter"></i></a></li>
								<li><a href="https://myaccount.google.com/u/1/?utm_source=OGB&tab=wk&utm_medium=act"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="https://mail.google.com/mail/u/0/?view=cm&fs=1&to&su=&body="><i class="fa fa-envelope"></i></a></li>

								</li>
							</ul>
	    				</div>
	    			</div>
    			</div>    			
	    	</div>  
    	</div>	
    </div><!--/#contact-page-->