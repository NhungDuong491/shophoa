
       <!--  page-wrapper -->
       <div id="page-wrapper" style="background:#fff">

<div class="row">
    <!-- Page Header -->
    <div class="col-lg-12">
        <h1 class="page-header">Thông tin đặt hàng</h1>
    </div>
    <!--End Page Header -->
</div>
<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
               Thông tin khách hàng
            </div>
            <div class="panel-body">
              <h4><b>Tên khách hàng:</b><?php echo $cus_info->cus_name?></h4>
              <h4><b>Địa chỉ email:</b><?php echo $cus_info->cus_email?></h4>
              <h4><b>Số điện thoại:</b><?php echo $cus_info->cus_mobile?></h4>
              <h4><b>Địa chỉ:</b><?php echo $cus_info->cus_address?></h4>
              <h4><b>Thành phố:</b><?php echo $cus_info->cus_city?></h4>
              <!-- <h4><b>Country:</b><?php echo $cus_info->cus_country?></h4> -->
              <!-- <h4><b>Zip:</b><?php echo $cus_info->cus_zip?></h4> -->
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
              Địa chỉ giao hàng
            </div>
            <div class="panel-body">
            <h4><b>Tên khách hàng:</b><?php echo $cus_info->cus_name?></h4>
              <h4><b>Địa chỉ email:</b><?php echo $cus_info->cus_email?></h4>
              <h4><b>Số điện thoại:</b><?php echo $cus_info->cus_mobile?></h4>
              <h4><b>Địa chỉ:</b><?php echo $cus_info->cus_address?></h4>
              <h4><b>Thành phố:</b><?php echo $cus_info->cus_city?></h4>
              <!-- <h4><b>Country:</b><?php echo $ship_info->cus_country?></h4>
              <h4><b>Zip:</b><?php echo $ship_info->cus_zip?></h4> -->
              <!-- <h4><b>Fax:</b><?php echo $ship_info->cus_fax?></h4> -->
            </div>
        </div>
    </div>
</div>
    <div class="row">
         <div class="col-lg-12">
             <div class="panel panel-default">
                <div class="panel-heading">
                   Mã đơn hàng: <?php echo $order_info->order_id?>
                </div>
             <h5>
                 Thời gian đặt hàng: <?php $date=  $order_info->order_date;
                   echo date('m-d-y',strtotime($date));
                 ?>
             </h5>
             
             </div>
         </div>
    </div>
   <div class="row">
    <div class="col-lg-12">
        <!-- Advanced Tables -->
        <div class="panel panel-primary">
            <div class="panel-heading">
              Chi tiết đặt hàng
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Tên sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Giá</th>
                                <th>Tổng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $total=0;
                            foreach ($order_details_info as $order) {?>
                            <tr class="odd gradeX">
                                <td><?php echo $order->product_name?></td>
                                <td><?php echo $order->sales_quantity?></td>
                                <td><?php echo $order->product_price;?>,000 đ</td>
                                <td class="center"><?php echo $order->sales_quantity * $order->product_price;?>,000 đ</td>  

                            </tr>
                            <?php 
                            $total = $total+$order->sales_quantity * $order->product_price;
                               
                             } ?>
                             <?php
                $shiping = "0";
                if($total>0 && $total<200){
                    $shiping = 10;
                }elseif($total>200 && $total<=600){
                    $shiping = 20;
                }elseif($total>600 && $total<1000){
                    $shiping = 30;
                }elseif($total>1000){
                    $shiping = 35;
                }elseif($total==0){
                    $shiping = 0;
                    }
                ?>
                <!-- <li>Phí giao hàng <span><?php echo $shiping?>,000 đ</span></li> -->
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
        <!--End Advanced Tables -->   
    </div>
</div>
<div class="row">
    <div class="col-lg-4"></div>
    <div class="col-lg-4"></div>
    <div class="col-lg-4">
        <div class="panel panel-primary">
            <div class="panel-heading">
               Tổng thanh toán
               </div>
            <div class="panel-body">
               <h4><strong>Tổng sản phẩm: </strong><?php echo $total?>,000 đ</h4>
               <h4><strong>Thuế Vat 2%: </strong><?php echo $vat = $total*2/100;?>,000 đ</h4>
               <h4><strong>Phí giao hàng: </strong><?php echo $shiping?>,000 đ</h4>
               <h4><strong>Tổng thanh toán: </strong><?php echo $vat+$shiping+$total;?>,000 đ</h4>
            </div>
            <!-- <div class="panel-footer">
                Panel Footer
            </div> -->
        </div>
    </div>
</div>
</div>
<!-- end page-wrapper -->
