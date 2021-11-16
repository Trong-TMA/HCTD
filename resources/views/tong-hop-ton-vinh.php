<!DOCTYPE html>
<html ng-app="tong_hop_ton_vinh-app"> 

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link href="<?php echo asset('template/css/bootstrap.min.css') ; ?>" rel="stylesheet">
    <link href="<?php echo asset('template/font-awesome/css/font-awesome.css') ; ?>" rel="stylesheet">

    <link href="<?php echo asset('template/css/plugins/dataTables/datatables.min.css') ; ?>" rel="stylesheet">

    <link href="<?php echo asset('template/css/animate.css') ; ?>" rel="stylesheet">
    <link href="<?php echo asset('template/css/style.css') ; ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo asset('template/css/quanlytonvinh.css') ; ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo asset('template/css/menu.css') ; ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo asset('template/css/header.css') ; ?>">

    <script type="text/javascript" src="<?php echo asset('app/lib/angular.min.js') ; ?>"></script>
    <script type="text/javascript" src="<?php echo asset('app/tong_hop_ton_vinh.js') ; ?>"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.4.3/angular-sanitize.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ng-csv/0.3.3/ng-csv.min.js"></script>

</head>

<body ng-controller="tong_hop_ton_vinhController">
    <div>
        <img src="<?php echo asset('template/image/banner-hctd-sau.png') ; ?>"/>
    </div>
    <div class="menu-bar">
        <ul>
          <li class="active">
             <a href="index.php"> Quản lý tôn vinh </a>
             <div class="sub-menu">
                 <ul>
                     <li>
                         <a href="index.php">Tôn vinh cá nhân</a>
                     </li>
                     <li>
                         <a href="tonvinhgiadinh.php">Tôn vinh gia đình</a>
                     </li>
                 </ul>
             </div>
          </li>
          <li>
          <a href="huydongnguonmau.php"> Quản lý nguồn máu </a>
          </li>
          <li>
          <a href="dangnhap.php"> Đăng xuất </a>
          </li>
      </ul>
       </div>
    
                    
            <div class="ibox-content">
                <h2>ĐỀ XUẤT TÔN VINH</h2>
                <div style="text-align:right ;">
                    <button type="button" class="btn btn-primary btn-sm add" style="margin-bottom: 0px;" ng-click="xacnhan('#tab-1')">Xác nhận</button>
                </div>
                <div id ="tab-1"> 
                    <table class="table table-striped table-bordered table-hover dataTables-example">
                        <thead style="text-align: center" >
                            <tr >
                                <th rowspan = "3">STT</th>
                                <th rowspan = "3">Họ tên</th>
                                <th rowspan = "3">Năm sinh</th>
                                <th rowspan = "3">Nghề nghiệp</th>
                                <th rowspan = "3">Địa chỉ</th>
                                <th colspan = "4">BCĐ VĐHMTN tỉnh</th>
                                <th rowspan = "3">Tổng</th>
                            </tr>
                            <tr>
                                <td>Cúp thủy tinh màu đồng</td>
                                <td>Cúp thủy tinh màu bạc</td>
                                <td>Cúp thủy tinh màu vàng</td>
                                <td>Cúp thủy tinh màu Kim cương</td>
                            </tr>
                            <tr>
                                <td>5 lần</td>
                                <td>10 lần</td>
                                <td>15 lần</td>
                                <td>20 lần</td>
                            </tr>
                        </thead>
                        <tbody ng-repeat="item in list_1_5">
                                <tr>
                                    <td>{{item.Id}}</td>
                                    <td>{{item.HoTen}}</td>
                                    <td>{{item.NgaySinh}}</td>
                                    <td>{{item.NgheNghiep}}</td>
                                    <td>{{item.DiaChi}}</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                        </tbody>
                        <tbody>

                        </tbody>
                    </table>
                </div>

             </div>
</body>
<!-- Mainly scripts -->
<script src="<?php echo asset('template/js/jquery-3.1.1.min.js') ; ?>"></script>
<script src="<?php echo asset('template/js/popper.min.js') ; ?>"></script>
<script src="<?php echo asset('template/js/bootstrap.js') ; ?>"></script>
<script src="<?php echo asset('template/js/plugins/metisMenu/jquery.metisMenu.js') ; ?>"></script>
<script src="<?php echo asset('template/js/plugins/slimscroll/jquery.slimscroll.min.js') ; ?>"></script>

<!-- Custom and plugin javascript -->
<script src="<?php echo asset('template/js/inspinia.js') ; ?>"></script>
<script src="<?php echo asset('template/js/plugins/pace/pace.min.js') ; ?>"></script>

</html>
