
    <!--  page-wrapper -->
    <div id="page-wrapper">
        <div class="row">
           <!-- page header -->
           <div class="col-lg-12">
            <h1 class="page-header">Thay đổi danh mục phụ</h1>
        </div>
        <!--end page header -->
    </div>
    <div class="row">
        <div class="col-lg-12">
            <!-- Form Elements -->
            <div class="panel panel-default">
               
                <div class="panel-heading">
                    Sửa danh mục phụ
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                           <h5 style='color:red'> <?php echo validation_errors();?></h5>
                                <?php echo form_open('update-sub-category'.'/'.$sub_cat_by_id->sub_cat_id,'');?>
                                <div class="form-group">
                                    <label>Sửa danh mục phụ</label>
                                    <input type="text" class="form-control" value="<?php echo $sub_cat_by_id->sub_category_name;?>" name="sub_category_name" required="">
                                </div>
                                <button type="submit" class="btn btn-primary">Sửa</button>
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


