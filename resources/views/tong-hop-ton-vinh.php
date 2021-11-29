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
        <h2>TÔNG HỢPTÔN VINH</h2>
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

                <tbody ng-if="list_1 != 0"> 
                    <tr >
                        <td colspan="11" style="text-align: center;background: rgb(218, 215, 215);">
                            <b>Quy Nhơn</b>
                        </td>  
                    </tr>  
                    <tr ng-repeat="item in list_1" ng-model = "getSoLanHien1(item.SoLanHien)">
                        <td>{{item.Id}}</td>
                        <td>{{item.HoTen}}</td>
                        <td>{{item.NgaySinh}}</td>
                        <td>{{item.NgheNghiep}}</td>
                        <td>{{item.DiaChi}}</td>
                        <td>{{sl5_1}}</td>
                        <td>{{sl10_1}}</td>
                        <td>{{sl15_1}}</td>
                        <td>{{sl20_1}}</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="text-align: center" colspan ="5">Tổng</td>
                        <td>{{Tong5_1/241}}</td>
                        <td>{{Tong10_1/241}}</td>
                        <td>{{Tong15_1/241}}</td>
                        <td>{{Tong20_1/241}}</td>
                        <td>{{Tong_1/241}}</td>
                    </tr>         
                </tbody>

                <tbody ng-if="list_2 != 0"> 
                    <tr >
                        <td colspan="11" style="text-align: center;background: rgb(218, 215, 215);">
                            <b>An Nhơn</b>
                        </td>
                    </tr> 
                    <tr ng-repeat="item in list_2" ng-model = "getSoLanHien2(item.SoLanHien)">
                        <td>{{item.Id}}</td>
                        <td>{{item.HoTen}}</td>
                        <td>{{item.NgaySinh}}</td>
                        <td>{{item.NgheNghiep}}</td>
                        <td>{{item.DiaChi}}</td>
                        <td>{{sl5_2}}</td>
                        <td>{{sl10_2}}</td>
                        <td>{{sl15_2}}</td>
                        <td>{{sl20_2}}</td>
                        <td></td>
                    </tr>  
                    <tr>
                        <td style="text-align: center" colspan ="5">Tổng</td>
                        <td>{{Tong5_2/241}}</td>
                        <td>{{Tong10_2/241}}</td>
                        <td>{{Tong15_2/241}}</td>
                        <td>{{Tong20_2/241}}</td>
                        <td>{{Tong_2/241}}</td>
                    </tr>         
                     
                </tbody>

                <tbody ng-if="list_3 != 0"> 
                    <tr >
                        <td colspan="11" style="text-align: center;background: rgb(218, 215, 215);">
                            <b>Tuy Phước</b>
                        </td>
                    </tr> 
                    <tr ng-repeat="item in list_3" ng-model = "getSoLanHien3(item.SoLanHien)">
                        <td>{{item.Id}}</td>
                        <td>{{item.HoTen}}</td>
                        <td>{{item.NgaySinh}}</td>
                        <td>{{item.NgheNghiep}}</td>
                        <td>{{item.DiaChi}}</td>
                        <td>{{sl5_3}}</td>
                        <td>{{sl10_3}}</td>
                        <td>{{sl15_3}}</td>
                        <td>{{sl20_3}}</td>
                        <td></td>
                    </tr>  
                    <tr>
                        <td style="text-align: center" colspan ="5">Tổng</td>
                        <td>{{Tong5_3/241}}</td>
                        <td>{{Tong10_3/241}}</td>
                        <td>{{Tong15_3/241}}</td>
                        <td>{{Tong20_3/241}}</td>
                        <td>{{Tong_3/241}}</td>
                    </tr>         
                     
                </tbody>

                <tbody ng-if="list_4 != 0"> 
                    <tr >
                        <td colspan="11" style="text-align: center;background: rgb(218, 215, 215);">
                            <b>Phù Cát</b>
                        </td>
                    </tr> 
                    <tr ng-repeat="item in list_4" ng-model = "getSoLanHien4(item.SoLanHien)">
                        <td>{{item.Id}}</td>
                        <td>{{item.HoTen}}</td>
                        <td>{{item.NgaySinh}}</td>
                        <td>{{item.NgheNghiep}}</td>
                        <td>{{item.DiaChi}}</td>
                        <td>{{sl5_4}}</td>
                        <td>{{sl10_4}}</td>
                        <td>{{sl15_4}}</td>
                        <td>{{sl20_4}}</td>
                        <td></td>
                    </tr>  
                    <tr>
                        <td style="text-align: center" colspan ="5">Tổng</td>
                        <td>{{Tong5_4/241}}</td>
                        <td>{{Tong10_4/241}}</td>
                        <td>{{Tong15_4/241}}</td>
                        <td>{{Tong20_4/241}}</td>
                        <td>{{Tong_4/241}}</td>
                    </tr>         
                     
                </tbody>

                <tbody ng-if="list_5 != 0"> 
                    <tr >
                        <td colspan="11" style="text-align: center;background: rgb(218, 215, 215);">
                            <b>Phù Mỹ</b>
                        </td>
                    </tr> 
                    <tr ng-repeat="item in list_5" ng-model = "getSoLanHien5(item.SoLanHien)">
                        <td>{{item.Id}}</td>
                        <td>{{item.HoTen}}</td>
                        <td>{{item.NgaySinh}}</td>
                        <td>{{item.NgheNghiep}}</td>
                        <td>{{item.DiaChi}}</td>
                        <td>{{sl5_5}}</td>
                        <td>{{sl10_5}}</td>
                        <td>{{sl15_5}}</td>
                        <td>{{sl20_5}}</td>
                        <td></td>
                    </tr>  
                    <tr>
                        <td style="text-align: center" colspan ="5">Tổng</td>
                        <td>{{Tong5_5/241}}</td>
                        <td>{{Tong10_5/241}}</td>
                        <td>{{Tong15_5/241}}</td>
                        <td>{{Tong20_5/241}}</td>
                        <td>{{Tong_5/241}}</td>
                    </tr>         
                     
                </tbody>

                <tbody ng-if="list_6 != 0"> 
                    <tr >
                        <td colspan="11" style="text-align: center;background: rgb(218, 215, 215);">
                            <b>Hoài Nhơn</b>
                        </td>
                    </tr> 
                    <tr ng-repeat="item in list_6" ng-model = "getSoLanHien6(item.SoLanHien)">
                        <td>{{item.Id}}</td>
                        <td>{{item.HoTen}}</td>
                        <td>{{item.NgaySinh}}</td>
                        <td>{{item.NgheNghiep}}</td>
                        <td>{{item.DiaChi}}</td>
                        <td>{{sl5_6}}</td>
                        <td>{{sl10_6}}</td>
                        <td>{{sl15_6}}</td>
                        <td>{{sl20_6}}</td>
                        <td></td>
                    </tr>  
                    <tr>
                        <td style="text-align: center" colspan ="5">Tổng</td>
                        <td>{{Tong5_6/241}}</td>
                        <td>{{Tong10_6/241}}</td>
                        <td>{{Tong15_6/241}}</td>
                        <td>{{Tong20_6/241}}</td>
                        <td>{{Tong_6/241}}</td>
                    </tr>         
                     
                </tbody>

                <tbody ng-if="list_7 != 0"> 
                    <tr >
                        <td colspan="11" style="text-align: center;background: rgb(218, 215, 215);">
                            <b>Hoài Ân</b>
                        </td>
                    </tr> 
                    <tr ng-repeat="item in list_7" ng-model = "getSoLanHien7(item.SoLanHien)">
                        <td>{{item.Id}}</td>
                        <td>{{item.HoTen}}</td>
                        <td>{{item.NgaySinh}}</td>
                        <td>{{item.NgheNghiep}}</td>
                        <td>{{item.DiaChi}}</td>
                        <td>{{sl5_7}}</td>
                        <td>{{sl10_7}}</td>
                        <td>{{sl15_7}}</td>
                        <td>{{sl20_7}}</td>
                        <td></td>
                    </tr>  
                    <tr>
                        <td style="text-align: center" colspan ="5">Tổng</td>
                        <td>{{Tong5_7/241}}</td>
                        <td>{{Tong10_7/241}}</td>
                        <td>{{Tong15_7/241}}</td>
                        <td>{{Tong20_7/241}}</td>
                        <td>{{Tong_7/241}}</td>
                    </tr>         
                     
                </tbody>

                <tbody ng-if="list_8 != 0"> 
                    <tr >
                        <td colspan="11" style="text-align: center;background: rgb(218, 215, 215);">
                            <b>Tây Sơn</b>
                        </td>
                    </tr> 
                    <tr ng-repeat="item in list_8" ng-model = "getSoLanHien8(item.SoLanHien)">
                        <td>{{item.Id}}</td>
                        <td>{{item.HoTen}}</td>
                        <td>{{item.NgaySinh}}</td>
                        <td>{{item.NgheNghiep}}</td>
                        <td>{{item.DiaChi}}</td>
                        <td>{{sl5_8}}</td>
                        <td>{{sl10_8}}</td>
                        <td>{{sl15_8}}</td>
                        <td>{{sl20_8}}</td>
                        <td></td>
                    </tr>  
                    <tr>
                        <td style="text-align: center" colspan ="5">Tổng</td>
                        <td>{{Tong5_8/241}}</td>
                        <td>{{Tong10_8/241}}</td>
                        <td>{{Tong15_8/241}}</td>
                        <td>{{Tong20_8/241}}</td>
                        <td>{{Tong_8/241}}</td>
                    </tr>         
                     
                </tbody>

                <tbody ng-if="list_9 != 0"> 
                    <tr >
                        <td colspan="11" style="text-align: center;background: rgb(218, 215, 215);">
                            <b>Vân Canh</b>
                        </td>
                    </tr> 
                    <tr ng-repeat="item in list_9" ng-model = "getSoLanHien9(item.SoLanHien)">
                        <td>{{item.Id}}</td>
                        <td>{{item.HoTen}}</td>
                        <td>{{item.NgaySinh}}</td>
                        <td>{{item.NgheNghiep}}</td>
                        <td>{{item.DiaChi}}</td>
                        <td>{{sl5_9}}</td>
                        <td>{{sl10_9}}</td>
                        <td>{{sl15_9}}</td>
                        <td>{{sl20_9}}</td>
                        <td></td>
                    </tr>  
                    <tr>
                        <td style="text-align: center" colspan ="5">Tổng</td>
                        <td>{{Tong5_9/241}}</td>
                        <td>{{Tong10_9/241}}</td>
                        <td>{{Tong15_9/241}}</td>
                        <td>{{Tong20_9/241}}</td>
                        <td>{{Tong_9/241}}</td>
                    </tr>         
                     
                </tbody>

                <tbody ng-if="list_10 != 0"> 
                    <tr >
                        <td colspan="11" style="text-align: center;background: rgb(218, 215, 215);">
                            <b>Vĩnh Thạnh</b>
                        </td>
                    </tr> 
                    <tr ng-repeat="item in list_10" ng-model = "getSoLanHien10(item.SoLanHien)">
                        <td>{{item.Id}}</td>
                        <td>{{item.HoTen}}</td>
                        <td>{{item.NgaySinh}}</td>
                        <td>{{item.NgheNghiep}}</td>
                        <td>{{item.DiaChi}}</td>
                        <td>{{sl5_10}}</td>
                        <td>{{sl10_19}}</td>
                        <td>{{sl15_10}}</td>
                        <td>{{sl20_10}}</td>
                        <td></td>
                    </tr>  
                    <tr>
                        <td style="text-align: center" colspan ="5">Tổng</td>
                        <td>{{Tong5_10/241}}</td>
                        <td>{{Tong10_10/241}}</td>
                        <td>{{Tong15_10/241}}</td>
                        <td>{{Tong20_10/241}}</td>
                        <td>{{Tong_10/241}}</td>
                    </tr>         
                     
                </tbody>

                <tbody ng-if="list_11 != 0"> 
                    <tr >
                        <td colspan="11" style="text-align: center;background: rgb(218, 215, 215);">
                            <b>An Lão</b>
                        </td>
                    </tr> 
                    <tr ng-repeat="item in list_11" ng-model = "getSoLanHien11(item.SoLanHien)">
                        <td>{{item.Id}}</td>
                        <td>{{item.HoTen}}</td>
                        <td>{{item.NgaySinh}}</td>
                        <td>{{item.NgheNghiep}}</td>
                        <td>{{item.DiaChi}}</td>
                        <td>{{sl5_11}}</td>
                        <td>{{sl10_11}}</td>
                        <td>{{sl15_11}}</td>
                        <td>{{sl20_11}}</td>
                        <td></td>
                    </tr>  
                    <tr>
                        <td style="text-align: center" colspan ="5">Tổng</td>
                        <td>{{Tong5_11/241}}</td>
                        <td>{{Tong10_11/241}}</td>
                        <td>{{Tong15_11/241}}</td>
                        <td>{{Tong20_11/241}}</td>
                        <td>{{Tong_11/241}}</td>
                    </tr>         
                     
                </tbody>

                <tbody ng-if="list_12 != 0"> 
                    <tr >
                        <td colspan="11" style="text-align: center;background: rgb(218, 215, 215);">
                            <b>Liên đoàn Lao động tỉnh</b>
                        </td>
                    </tr> 
                    <tr ng-repeat="item in list_12" ng-model = "getSoLanHien12(item.SoLanHien)">
                        <td>{{item.Id}}</td>
                        <td>{{item.HoTen}}</td>
                        <td>{{item.NgaySinh}}</td>
                        <td>{{item.NgheNghiep}}</td>
                        <td>{{item.DiaChi}}</td>
                        <td>{{sl5_12}}</td>
                        <td>{{sl10_12}}</td>
                        <td>{{sl15_12}}</td>
                        <td>{{sl20_12}}</td>
                        <td></td>
                    </tr>  
                    <tr>
                        <td style="text-align: center" colspan ="5">Tổng</td>
                        <td>{{Tong5_12/241}}</td>
                        <td>{{Tong10_12/241}}</td>
                        <td>{{Tong15_12/241}}</td>
                        <td>{{Tong20_12/241}}</td>
                        <td>{{Tong_12/241}}</td>
                    </tr>         
                     
                </tbody>

                <tbody ng-if="list_13 != 0"> 
                    <tr >
                        <td colspan="11" style="text-align: center;background: rgb(218, 215, 215);">
                            <b>Đoàn khối Doanh nghiệp tỉnh</b>
                        </td>
                    </tr> 
                    <tr ng-repeat="item in list_13" ng-model = "getSoLanHien14(item.SoLanHien)">
                        <td>{{item.Id}}</td>
                        <td>{{item.HoTen}}</td>
                        <td>{{item.NgaySinh}}</td>
                        <td>{{item.NgheNghiep}}</td>
                        <td>{{item.DiaChi}}</td>
                        <td>{{sl5_13}}</td>
                        <td>{{sl10_13}}</td>
                        <td>{{sl15_13}}</td>
                        <td>{{sl20_13}}</td>
                        <td></td>
                    </tr>  
                    <tr>
                        <td style="text-align: center" colspan ="5">Tổng</td>
                        <td>{{Tong5_13/241}}</td>
                        <td>{{Tong10_13/241}}</td>
                        <td>{{Tong15_13/241}}</td>
                        <td>{{Tong20_13/241}}</td>
                        <td>{{Tong_13/241}}</td>
                    </tr>         
                     
                </tbody>

                <tbody ng-if="list_14 != 0"> 
                    <tr >
                        <td colspan="11" style="text-align: center;background: rgb(218, 215, 215);">
                            <b>Đoàn khối Doanh nghiệp tỉnh</b>
                        </td>
                    </tr> 
                    <tr ng-repeat="item in list_14" ng-model = "getSoLanHien14(item.SoLanHien)">
                        <td>{{item.Id}}</td>
                        <td>{{item.HoTen}}</td>
                        <td>{{item.NgaySinh}}</td>
                        <td>{{item.NgheNghiep}}</td>
                        <td>{{item.DiaChi}}</td>
                        <td>{{sl5_14}}</td>
                        <td>{{sl10_14}}</td>
                        <td>{{sl15_14}}</td>
                        <td>{{sl20_14}}</td>
                        <td></td>
                    </tr>  
                    <tr>
                        <td style="text-align: center" colspan ="5">Tổng</td>
                        <td>{{Tong5_14/241}}</td>
                        <td>{{Tong10_14/241}}</td>
                        <td>{{Tong15_14/241}}</td>
                        <td>{{Tong20_14/241}}</td>
                        <td>{{Tong_14/241}}</td>
                    </tr>         
                     
                </tbody>

                <tbody ng-if="list_15 != 0"> 
                    <tr >
                        <td colspan="11" style="text-align: center;background: rgb(218, 215, 215);">
                            <b>Đại học Quy Nhơn</b>
                        </td>
                    </tr> 
                    <tr ng-repeat="item in list_15" ng-model = "getSoLanHien15(item.SoLanHien)">
                        <td>{{item.Id}}</td>
                        <td>{{item.HoTen}}</td>
                        <td>{{item.NgaySinh}}</td>
                        <td>{{item.NgheNghiep}}</td>
                        <td>{{item.DiaChi}}</td>
                        <td>{{sl5_15}}</td>
                        <td>{{sl10_15}}</td>
                        <td>{{sl15_15}}</td>
                        <td>{{sl20_15}}</td>
                        <td></td>
                    </tr>  
                    <tr>
                        <td style="text-align: center" colspan ="5">Tổng</td>
                        <td>{{Tong5_15/241}}</td>
                        <td>{{Tong10_15/241}}</td>
                        <td>{{Tong15_15/241}}</td>
                        <td>{{Tong20_15/241}}</td>
                        <td>{{Tong_15/241}}</td>
                    </tr>         
                     
                </tbody>

                <tbody ng-if="list_16 != 0"> 
                    <tr >
                        <td colspan="11" style="text-align: center;background: rgb(218, 215, 215);">
                            <b>Đại học Quang Trung</b>
                        </td>
                    </tr> 
                    <tr ng-repeat="item in list_16" ng-model = "getSoLanHien16(item.SoLanHien)">
                        <td>{{item.Id}}</td>
                        <td>{{item.HoTen}}</td>
                        <td>{{item.NgaySinh}}</td>
                        <td>{{item.NgheNghiep}}</td>
                        <td>{{item.DiaChi}}</td>
                        <td>{{sl5_16}}</td>
                        <td>{{sl10_16}}</td>
                        <td>{{sl15_16}}</td>
                        <td>{{sl20_16}}</td>
                        <td></td>
                    </tr>  
                    <tr>
                        <td style="text-align: center" colspan ="5">Tổng</td>
                        <td>{{Tong5_16/241}}</td>
                        <td>{{Tong10_16/241}}</td>
                        <td>{{Tong15_16/241}}</td>
                        <td>{{Tong20_16/241}}</td>
                        <td>{{Tong_16/241}}</td>
                    </tr>         
                     
                </tbody>

                <tbody ng-if="list_17 != 0"> 
                    <tr >
                        <td colspan="11" style="text-align: center;background: rgb(218, 215, 215);">
                            <b>Cao Đẳng kỹ thuật công nghệ Quy Nhơn</b>
                        </td>
                    </tr> 
                    <tr ng-repeat="item in list_17" ng-model = "getSoLanHien17(item.SoLanHien)">
                        <td>{{item.Id}}</td>
                        <td>{{item.HoTen}}</td>
                        <td>{{item.NgaySinh}}</td>
                        <td>{{item.NgheNghiep}}</td>
                        <td>{{item.DiaChi}}</td>
                        <td>{{sl5_17}}</td>
                        <td>{{sl10_17}}</td>
                        <td>{{sl15_17}}</td>
                        <td>{{sl20_17}}</td>
                        <td></td>
                    </tr>  
                    <tr>
                        <td style="text-align: center" colspan ="5">Tổng</td>
                        <td>{{Tong5_17/241}}</td>
                        <td>{{Tong10_17/241}}</td>
                        <td>{{Tong15_17/241}}</td>
                        <td>{{Tong20_17/241}}</td>
                        <td>{{Tong_17/241}}</td>
                    </tr>         
                     
                </tbody>

                <tbody ng-if="list_18 != 0"> 
                    <tr >
                        <td colspan="11" style="text-align: center;background: rgb(218, 215, 215);">
                            <b>Cao đẳng Y tế Bình Định</b>
                        </td>
                    </tr> 
                    <tr ng-repeat="item in list_18" ng-model = "getSoLanHien18(item.SoLanHien)">
                        <td>{{item.Id}}</td>
                        <td>{{item.HoTen}}</td>
                        <td>{{item.NgaySinh}}</td>
                        <td>{{item.NgheNghiep}}</td>
                        <td>{{item.DiaChi}}</td>
                        <td>{{sl5_18}}</td>
                        <td>{{sl10_18}}</td>
                        <td>{{sl15_18}}</td>
                        <td>{{sl20_18}}</td>
                        <td></td>
                    </tr>  
                    <tr>
                        <td style="text-align: center" colspan ="5">Tổng</td>
                        <td>{{Tong5_18/241}}</td>
                        <td>{{Tong10_18/241}}</td>
                        <td>{{Tong15_18/241}}</td>
                        <td>{{Tong20_18/241}}</td>
                        <td>{{Tong_18/241}}</td>
                    </tr>         
                     
                </tbody>

                <tbody ng-if="list_19 != 0"> 
                    <tr >
                        <td colspan="11" style="text-align: center;background: rgb(218, 215, 215);">
                            <b>Cao đẳng Bình Định</b>
                        </td>
                    </tr> 
                    <tr ng-repeat="item in list_19" ng-model = "getSoLanHien19(item.SoLanHien)">
                        <td>{{item.Id}}</td>
                        <td>{{item.HoTen}}</td>
                        <td>{{item.NgaySinh}}</td>
                        <td>{{item.NgheNghiep}}</td>
                        <td>{{item.DiaChi}}</td>
                        <td>{{sl5_19}}</td>
                        <td>{{sl10_19}}</td>
                        <td>{{sl15_19}}</td>
                        <td>{{sl20_19}}</td>
                        <td></td>
                    </tr>  
                    <tr>
                        <td style="text-align: center" colspan ="5">Tổng</td>
                        <td>{{Tong5_19/241}}</td>
                        <td>{{Tong10_19/241}}</td>
                        <td>{{Tong15_19/241}}</td>
                        <td>{{Tong20_19/241}}</td>
                        <td>{{Tong_19/241}}</td>
                    </tr>         
                     
                </tbody>

                <tbody ng-if="list_20 != 0"> 
                    <tr >
                        <td colspan="11" style="text-align: center;background: rgb(218, 215, 215);">
                            <b>Cao đẳng nghề CĐ-XĐ & Nông Lâm Trung bộ</b>
                        </td>
                    </tr> 
                    <tr ng-repeat="item in list_20" ng-model = "getSoLanHien20(item.SoLanHien)">
                        <td>{{item.Id}}</td>
                        <td>{{item.HoTen}}</td>
                        <td>{{item.NgaySinh}}</td>
                        <td>{{item.NgheNghiep}}</td>
                        <td>{{item.DiaChi}}</td>
                        <td>{{sl5_20}}</td>
                        <td>{{sl10_20}}</td>
                        <td>{{sl15_20}}</td>
                        <td>{{sl20_20}}</td>
                        <td></td>
                    </tr>  
                    <tr>
                        <td style="text-align: center" colspan ="5">Tổng</td>
                        <td>{{Tong5_20/241}}</td>
                        <td>{{Tong10_20/241}}</td>
                        <td>{{Tong15_20/241}}</td>
                        <td>{{Tong20_20/241}}</td>
                        <td>{{Tong_20/241}}</td>
                    </tr>         
                     
                </tbody>

                <tbody ng-if="list_21 != 0"> 
                    <tr >
                        <td colspan="11" style="text-align: center;background: rgb(218, 215, 215);">
                            <b>Câu lạc bộ 25 - Hội CTĐ tỉnh</b>
                        </td>
                    </tr> 
                    <tr ng-repeat="item in list_21" ng-model = "getSoLanHien21(item.SoLanHien)">
                        <td>{{item.Id}}</td>
                        <td>{{item.HoTen}}</td>
                        <td>{{item.NgaySinh}}</td>
                        <td>{{item.NgheNghiep}}</td>
                        <td>{{item.DiaChi}}</td>
                        <td>{{sl5_21}}</td>
                        <td>{{sl10_21}}</td>
                        <td>{{sl15_21}}</td>
                        <td>{{sl20_21}}</td>
                        <td></td>
                    </tr>  
                    <tr>
                        <td style="text-align: center" colspan ="5">Tổng</td>
                        <td>{{Tong5_21/241}}</td>
                        <td>{{Tong10_21/241}}</td>
                        <td>{{Tong15_21/241}}</td>
                        <td>{{Tong20_21/241}}</td>
                        <td>{{Tong_21/241}}</td>
                    </tr>         
                     
                </tbody>

                <tbody ng-if="list_22 != 0"> 
                    <tr >
                        <td colspan="11" style="text-align: center;background: rgb(218, 215, 215);">
                            <b>Trung đoàn KQ 925</b>
                        </td>
                    </tr> 
                    <tr ng-repeat="item in list_22" ng-model = "getSoLanHien22(item.SoLanHien)">
                        <td>{{item.Id}}</td>
                        <td>{{item.HoTen}}</td>
                        <td>{{item.NgaySinh}}</td>
                        <td>{{item.NgheNghiep}}</td>
                        <td>{{item.DiaChi}}</td>
                        <td>{{sl5_22}}</td>
                        <td>{{sl10_22}}</td>
                        <td>{{sl15_22}}</td>
                        <td>{{sl20_22}}</td>
                        <td></td>
                    </tr>  
                    <tr>
                        <td style="text-align: center" colspan ="5">Tổng</td>
                        <td>{{Tong5_22/241}}</td>
                        <td>{{Tong10_22/241}}</td>
                        <td>{{Tong15_22/241}}</td>
                        <td>{{Tong20_22/241}}</td>
                        <td>{{Tong_22/241}}</td>
                    </tr>         
                     
                </tbody>

                <tbody ng-if="list_23 != 0"> 
                    <tr >
                        <td colspan="11" style="text-align: center;background: rgb(218, 215, 215);">
                            <b>Công an tỉnh Bình Định</b>
                        </td>
                    </tr> 
                    <tr ng-repeat="item in list_23" ng-model = "getSoLanHien23(item.SoLanHien)">
                        <td>{{item.Id}}</td>
                        <td>{{item.HoTen}}</td>
                        <td>{{item.NgaySinh}}</td>
                        <td>{{item.NgheNghiep}}</td>
                        <td>{{item.DiaChi}}</td>
                        <td>{{sl5_23}}</td>
                        <td>{{sl10_23}}</td>
                        <td>{{sl15_23}}</td>
                        <td>{{sl20_23}}</td>
                        <td></td>
                    </tr>  
                    <tr>
                        <td style="text-align: center" colspan ="5">Tổng</td>
                        <td>{{Tong5_23/241}}</td>
                        <td>{{Tong10_23/241}}</td>
                        <td>{{Tong15_23/241}}</td>
                        <td>{{Tong20_23/241}}</td>
                        <td>{{Tong_23/241}}</td>
                    </tr>         
                     
                </tbody>

                <tbody ng-if="list_24 != 0"> 
                    <tr >
                        <td colspan="11" style="text-align: center;background: rgb(218, 215, 215);">
                            <b>BVĐK tỉnh, bệnh viện chuyên khoa & các BV TW trên ...</b>
                        </td>
                    </tr> 
                    <tr ng-repeat="item in list_24" ng-model = "getSoLanHien24(item.SoLanHien)">
                        <td>{{item.Id}}</td>
                        <td>{{item.HoTen}}</td>
                        <td>{{item.NgaySinh}}</td>
                        <td>{{item.NgheNghiep}}</td>
                        <td>{{item.DiaChi}}</td>
                        <td>{{sl5_24}}</td>
                        <td>{{sl10_24}}</td>
                        <td>{{sl15_24}}</td>
                        <td>{{sl20_24}}</td>
                        <td></td>
                    </tr>  
                    <tr>
                        <td style="text-align: center" colspan ="5">Tổng</td>
                        <td>{{Tong5_24/241}}</td>
                        <td>{{Tong10_24/241}}</td>
                        <td>{{Tong15_24/241}}</td>
                        <td>{{Tong20_24/241}}</td>
                        <td>{{Tong_24/241}}</td>
                    </tr>         
                     
                </tbody>

                <tbody ng-if="list_25 != 0"> 
                    <tr >
                        <td colspan="11" style="text-align: center;background: rgb(218, 215, 215);">
                            <b>Trung đoàn Cảnh sát cơ động Nam Trung bộ  E23</b>
                        </td>
                    </tr> 
                    <tr ng-repeat="item in list_25" ng-model = "getSoLanHien25(item.SoLanHien)">
                        <td>{{item.Id}}</td>
                        <td>{{item.HoTen}}</td>
                        <td>{{item.NgaySinh}}</td>
                        <td>{{item.NgheNghiep}}</td>
                        <td>{{item.DiaChi}}</td>
                        <td>{{sl5_25}}</td>
                        <td>{{sl10_25}}</td>
                        <td>{{sl15_25}}</td>
                        <td>{{sl20_25}}</td>
                        <td></td>
                    </tr>  
                    <tr>
                        <td style="text-align: center" colspan ="5">Tổng</td>
                        <td>{{Tong5_25/241}}</td>
                        <td>{{Tong10_25/241}}</td>
                        <td>{{Tong15_25/241}}</td>
                        <td>{{Tong20_25/241}}</td>
                        <td>{{Tong_25/241}}</td>
                    </tr>         
                     
                </tbody>

                <tbody ng-if="list_26 != 0"> 
                    <tr >
                        <td colspan="11" style="text-align: center;background: rgb(218, 215, 215);">
                            <b>Hành trình đỏ</b>
                        </td>
                    </tr> 
                    <tr ng-repeat="item in list_26" ng-model = "getSoLanHien26(item.SoLanHien)">
                        <td>{{item.Id}}</td>
                        <td>{{item.HoTen}}</td>
                        <td>{{item.NgaySinh}}</td>
                        <td>{{item.NgheNghiep}}</td>
                        <td>{{item.DiaChi}}</td>
                        <td>{{sl5_26}}</td>
                        <td>{{sl10_26}}</td>
                        <td>{{sl15_26}}</td>
                        <td>{{sl20_26}}</td>
                        <td></td>
                    </tr>  
                    <tr>
                        <td style="text-align: center" colspan ="5">Tổng</td>
                        <td>{{Tong5_26/241}}</td>
                        <td>{{Tong10_26/241}}</td>
                        <td>{{Tong15_26/241}}</td>
                        <td>{{Tong20_26/241}}</td>
                        <td>{{Tong_26/241}}</td>
                    </tr>         
                     
                </tbody>

                <tbody ng-if="list_27 != 0"> 
                    <tr >
                        <td colspan="11" style="text-align: center;background: rgb(218, 215, 215);">
                            <b>Các ĐV ngoài kế hoạch và HMTN đột xuất</b>
                        </td>
                    </tr> 
                    <tr ng-repeat="item in list_27" ng-model = "getSoLanHien27(item.SoLanHien)">
                        <td>{{item.Id}}</td>
                        <td>{{item.HoTen}}</td>
                        <td>{{item.NgaySinh}}</td>
                        <td>{{item.NgheNghiep}}</td>
                        <td>{{item.DiaChi}}</td>
                        <td>{{sl5_27}}</td>
                        <td>{{sl10_27}}</td>
                        <td>{{sl15_27}}</td>
                        <td>{{sl20_27}}</td>
                        <td></td>
                    </tr>  
                    <tr>
                        <td style="text-align: center" colspan ="5">Tổng</td>
                        <td>{{Tong5_27/241}}</td>
                        <td>{{Tong10_27/241}}</td>
                        <td>{{Tong15_27/241}}</td>
                        <td>{{Tong20_27/241}}</td>
                        <td>{{Tong_27/241}}</td>
                    </tr>         
                     
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
