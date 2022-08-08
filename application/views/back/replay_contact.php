
<script type="text/javascript" src="<?php echo base_url();?>/assets/back/ckeditor/ckeditor.js"></script>
    <!--  page-wrapper -->
    <div id="page-wrapper">
        <div class="row">
           <!-- page header -->
           <div class="col-lg-12">
            <h1 class="page-header">Forms Element</h1>
        </div>
        <!--end page header -->
    </div>
    <div class="row">
        <div class="col-lg-12">
            <!-- Form Elements -->
            <div class="panel panel-default">
              <?php echo $this->session->flashdata('flsh_msg'); ?>
               <h4 class="error">
                    <?php $msg = $this->session->userdata('error_image');
                        echo $msg;
                        $this->session->unset_userdata('error_image');
                     ?>                       
                </h4>
                <div class="panel-heading">
                    Thêm sản phẩm
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                           <h5 style='color:red'> <?php echo validation_errors();?></h5>
                             <?php echo form_open_multipart('save-product','');?>
                                <div class="form-group">
                                    <label>Tên sản phẩm</label>
                                    <input type="text" class="form-control" value="" name="pro_title" required="">
                                </div>
                                 <div class="form-group">
                                    <label>Thêm mô tả sản phẩm</label>
                                    <textarea  id="ck" class="form-control" rows="3" name="pro_desc"></textarea>
                                    <script>CKEDITOR.replace('ck')</script>
                                </div>
                                 <div class="form-group">
                                    <label>Chọn danh mục</label>
                                    <select class="form-control" name="pro_cat">
                                        <option>Chọn</option>
                                        <?php
                                         foreach ($all_cat as $category) {  ?>
                                        <option value="<?php echo $category->category_id;?>"><?php echo $category->category_name?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                <label>Chọn danh mục phụ </label>
                                    <select class="form-control" name="pro_sub_cat">
                                            <?php foreach ($all_sub_cat as $sub_cat) {?>
                                            <option  value="<?php echo $sub_cat->sub_cat_id?>">
                                                <?php echo $sub_cat->sub_category_name?>
                                                </option>
                                        <?php } ?>
                                    </select>
                                </div>
                                 <div class="form-group">
                                    <label>Chọn kiểu dáng</label>
                                    <select class="form-control" name="pro_brand">
                                        <option>Chọn</option>
                                        <?php $all_brand = $this->ProductModel->get_all_brand()?>
                                        <?php foreach ($all_brand as $brand) { ?>
                                        <option value="<?php echo $brand->brand_id;?>"><?php echo $brand->brand_name;?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                 <div class="form-group">
                                    <label>Thêm giá sản phẩm</label>
                                    <input type="number" class="form-control" value="" name="pro_price" required="">
                                </div>
                                 <div class="form-group">
                                    <label>Thêm số lượng sản phẩm</label>
                                    <input type="number" class="form-control" value="" name="pro_quantity" required="">
                                </div>
                                <div class="form-group">
                                    <label>Trạng thái sản phẩm</label>
                                    <select class="form-control" name="pro_status">
                                        <option>Chọn</option>
                                        <option value="1">Đang bán</option>
                                        <option value="2">Sản phẩm mẫu</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Sản phẩm nổi bật</label>
                                    <select class="form-control" name="pro_availability">
                                        <option>Chọn</option>
                                        <option value="1">Có sẵn</option>
                                        <option value="2">Đặt hàng</option>
                                        <option value="3">Sản phẩm mới</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Upload ảnh sản phẩm</label>
                                    <input type="file" name="pro_image">
                                </div>
                                 <div class="form-group">
                                    <label>Sản phẩm bán chạy</label>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="top_product" value="1">Sản phẩm bán chạy
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Lưu</button>
                            <?php echo form_close();?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Form Elements -->
        </div>
    </div>
</div>
<!-- end page-wrapper -->


