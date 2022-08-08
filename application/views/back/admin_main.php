 <!--  page-wrapper -->
 <div id="page-wrapper">

<div class="row">
    <!-- Page Header -->
    <div class="col-lg-12">
        <h1 class="page-header">Báo cáo</h1>
    </div>
    <!--End Page Header -->
</div>

<div class="row">
    <!-- Welcome -->
    <div class="col-lg-12">
        <div class="alert alert-info">
            <i class="fa fa-folder-open"></i><b>&nbsp;Hello ! </b>Chào mừng bạn quay lại 
<!-- <i class="fa  fa-pencil"></i><b>&nbsp;2,000 </b>Support Tickets Pending to Answere. nbsp; -->
        </div>
    </div>
    <!--end  Welcome -->
</div>


<div class="row">
    <!--quick info section -->
    <!-- <div class="col-lg-3">
                    <div class="alert alert-danger text-center">
                        <i class="fa fa-calendar fa-3x"></i>&nbsp;<b>20 </b>Cuộc họp trong tháng

                    </div>
    </div>
    <div class="col-lg-3">
        <div class="alert alert-success text-center">
            <i class="fa  fa-beer fa-3x"></i>&nbsp;<b>27 % </b>Lợi nhuận trong tháng
        </div>
    </div>
    <div class="col-lg-3">
        <div class="alert alert-info text-center">
            <i class="fa fa-rss fa-3x"></i>&nbsp;<b>20</b> Người đăng ký mới

        </div>
    </div>
    <div class="col-lg-3">
        <div class="alert alert-warning text-center">
            <i class="fa  fa-pencil fa-3x"></i>&nbsp;<b>200 </b>Phí thanh toán cho các mặt hàng bị từ chối
        </div>
    </div> -->
    <!--end quick info section -->
</div>

<div class="row">
    <div class="col-lg-8">



        <!--Area chart example -->
        <div class="panel panel-primary">
            <div class="panel-heading">
                <i class="fa fa-bar-chart-o fa-fw"></i>Biểu đồ 
                <div class="pull-right">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                            Lựa chọn
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu pull-right" role="menu">
                            <li><a href="#">Lựa chọn</a>
                            </li>
                            <li><a href="#">Lựa chọn khác</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="#">Liên kết riêng</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="panel-body">
                <div id="morris-area-chart"></div>
            </div>

        </div>
        <!--End area chart example -->
        <!--Simple table example -->
        <div class="panel panel-primary">
            <div class="panel-heading">
                <i class="fa fa-bar-chart-o fa-fw"></i>Đơn hàng
                <div class="pull-right">
                    <div class="btn-group">
                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                            Lựa chọn
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu pull-right" role="menu">
                            <li><a href="#">Lựa chọn</a>
                            </li>
                            <li><a href="#">Lựa chọn khác</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="#">Liên kết riêng</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped" id="dataTables-example-one">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Đơn hàng </th>
                                        <th>Tên Khách Hàng</th>
                                        <th>Tổng tiền</th>
                                        <th>Ngày Orders</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                $i = 0;
                                if(isset($all_order)){
                                  foreach ($all_order as $value){
                                    $i++;

                                ?>
                                <tr class="gradeC">
                                    <td><?php echo $i;?></td>
                                    <td>#<?php echo $value->order_id;?></td>
                                    <td><?php echo $value->cus_name;?></td>
                                    <td><?php echo $value->order_total;?></td>
                                    <td><?php echo $value->order_date;?></td>                                        
                                </tr>
                                <?php }} ?>


                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
                <!-- /.row -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!--End simple table example -->

    </div>

    <div class="col-lg-4">
        <div class="panel panel-primary text-center no-boder">
            <div class="panel-body yellow">
                <i class="fa fa-bar-chart-o fa-3x"></i>
                <h3>89 </h3>
            </div>
            <div class="panel-footer">
                <span class="panel-eyecandy-title">Lượt truy cập hàng ngày
                </span>
            </div>
        </div>
        <div class="panel panel-primary text-center no-boder">
            <div class="panel-body blue">
                <i class="fa fa-pencil-square-o fa-3x"></i>
                <h3>62 </h3>
            </div>
            <div class="panel-footer">
                <span class="panel-eyecandy-title">Đơn hàng đang chờ xác nhận
                </span>
            </div>
        </div>
        <div class="panel panel-primary text-center no-boder">
            <div class="panel-body green">
                <i class="fa fa fa-floppy-o fa-3x"></i>
                <h3>20 GB</h3>
            </div>
            <div class="panel-footer">
                <span class="panel-eyecandy-title">Cập nhật dữ liệu mới
                </span>
            </div>
        </div>
        <div class="panel panel-primary text-center no-boder">
            <div class="panel-body red">
                <i class="fa fa-thumbs-up fa-3x"></i>
                <h3>45 </h3>
            </div>
            <div class="panel-footer">
                <span class="panel-eyecandy-title">Khách hàng đăng ký mới
                </span>
            </div>
        </div>

    </div>

</div>

<div class="row">
    <div class="col-lg-4">
        <!-- Notifications-->
        <div class="panel panel-primary">
            <div class="panel-heading">
                <i class="fa fa-bell fa-fw"></i>Bảng thông báo
            </div>

            <div class="panel-body">
                <div class="list-group">
                    <a href="#" class="list-group-item">
                        <i class="fa fa-comment fa-fw"></i>Bình luận mới
                        <span class="pull-right text-muted small"><em>4 minutes ago</em>
                        </span>
                    </a>
                    <a href="#" class="list-group-item">
                        <i class="fa fa-twitter fa-fw"></i>Theo dõi
                        <span class="pull-right text-muted small"><em>12 minutes ago</em>
                        </span>
                    </a>
                    <a href="#" class="list-group-item">
                        <i class="fa fa-envelope fa-fw"></i>Tin nhắn gửi
                        <span class="pull-right text-muted small"><em>27 minutes ago</em>
                        </span>
                    </a>
                    <a href="#" class="list-group-item">
                        <i class="fa fa-tasks fa-fw"></i>Nhiệm vụ mới
                        <span class="pull-right text-muted small"><em>43 minutes ago</em>
                        </span>
                    </a>
                    <a href="#" class="list-group-item">
                        <i class="fa fa-upload fa-fw"></i>Máy chủ khởi động lại
                        <span class="pull-right text-muted small"><em>11:32 AM</em>
                        </span>
                    </a>
                    <a href="#" class="list-group-item">
                        <i class="fa fa-bolt fa-fw"></i>Máy chủ gặp sự cố
                        <span class="pull-right text-muted small"><em>11:13 AM</em>
                        </span>
                    </a>
                    <a href="#" class="list-group-item">
                        <i class="fa fa-warning fa-fw"></i>Máy chủ không phản hồi
                        <span class="pull-right text-muted small"><em>10:57 AM</em>
                        </span>
                    </a>
                    <a href="#" class="list-group-item">
                        <i class="fa fa-shopping-cart fa-fw"></i>Đặt hàng mới
                        <span class="pull-right text-muted small"><em>9:49 AM</em>
                        </span>
                    </a>

                </div>
                <!-- /.list-group -->
                <a href="#" class="btn btn-default btn-block">Xem tất cả cảnh báo</a>
            </div>

        </div>
        <!--End Notifications-->
    </div>
    <div class="col-lg-4">
        <!-- Donut Example-->
        <div class="panel panel-primary">
            <div class="panel-heading">
                <i class="fa fa-bar-chart-o fa-fw"></i>Biều đồ 
            </div>
            <div class="panel-body">
                <div id="morris-donut-chart"></div>
                <a href="#" class="btn btn-default btn-block">Xem chi tiết</a>
            </div>

        </div>
        <!--End Donut Example-->
    </div>
    <div class="col-lg-4">
        <!-- Chat Panel Example-->
        <div class="chat-panel panel panel-primary">
            <div class="panel-heading">
                <i class="fa fa-comments fa-fw"></i>
                Chat
                <div class="btn-group pull-right">
                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-chevron-down"></i>
                    </button>
                    <ul class="dropdown-menu slidedown">
                        <li>
                            <a href="#">
                                <i class="fa fa-refresh fa-fw"></i>Làm mới
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-check-circle fa-fw"></i>Có sẵn
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-times fa-fw"></i>Đang bận
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-clock-o fa-fw"></i>Chưa có hàng
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <i class="fa fa-sign-out fa-fw"></i>Đăng xuất
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="panel-body">
                <ul class="chat">
                    <li class="left clearfix">
                        <span class="chat-img pull-left">
                            <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle" />
                        </span>
                        <div class="chat-body clearfix">
                            <div class="header">
                                <strong class="primary-font">Chia sẻ</strong>
                                <small class="pull-right text-muted">
                                    <i class="fa fa-clock-o fa-fw"></i>12 mins ago
                                </small>
                            </div>
                            <p>
                            Bó hoa là sự kết hợp hài hòa giữa các gam màu nhẹ nhàng như chính vẻ đẹp tâm hồn của người con gái
                            </p>
                        </div>
                    </li>
                    <li class="right clearfix">
                        <span class="chat-img pull-right">
                            <img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar" class="img-circle" />
                        </span>
                        <div class="chat-body clearfix">
                            <div class="header">
                                <small class=" text-muted">
                                    <i class="fa fa-clock-o fa-fw"></i>13 mins ago</small>
                                <strong class="pull-right primary-font">Nhung Dương</strong>
                            </div>
                            <p>
                            Bó hoa sẽ là món quà hoàn hảo dành tặng các cô gái nhân ngày sinh nhật,…
                            </p>
                        </div>
                    </li>
                    <li class="left clearfix">
                        <span class="chat-img pull-left">
                            <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle" />
                        </span>
                        <div class="chat-body clearfix">
                            <div class="header">
                                <strong class="primary-font">Chia sẻ</strong>
                                <small class="pull-right text-muted">
                                    <i class="fa fa-clock-o fa-fw"></i>14 mins ago</small>
                            </div>
                            <p>
                            Bó hoa sẽ là món quà hoàn hảo dành tặng các cô gái nhân ngày sinh nhật,…
                            </p>
                        </div>
                    </li>
                    <li class="right clearfix">
                        <span class="chat-img pull-right">
                            <img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar" class="img-circle" />
                        </span>
                        <div class="chat-body clearfix">
                            <div class="header">
                                <small class=" text-muted">
                                    <i class="fa fa-clock-o fa-fw"></i>15 mins ago</small>
                                <strong class="pull-right primary-font">Bhaumik Patel</strong>
                            </div>
                            <p>
                            Bó hoa sẽ là món quà hoàn hảo dành tặng các cô gái nhân ngày sinh nhật,…
                            </p>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="panel-footer">
                <div class="input-group">
                    <input id="btn-input" type="text" class="form-control input-sm" placeholder="Điền email..." />
                    <span class="input-group-btn">
                        <button class="btn btn-warning btn-sm" id="btn-chat">
                            Gửi
                        </button>
                    </span>
                </div>
            </div>

        </div>
        <!--End Chat Panel Example-->
    </div>
</div>
</div>
<!-- end page-wrapper -->

<script src="<?php echo base_url()?>assets/back/plugins/dataTables/jquery.dataTables.js"></script>
   
   <script>
       $(document).ready(function () {
           $('#dataTables-example-one').dataTable();
       });
   </script> 