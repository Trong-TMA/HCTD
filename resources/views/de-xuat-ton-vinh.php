<!DOCTYPE html>
<html ng-app="de_xuat_ton_vinh-app"> 

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
    <script type="text/javascript" src="<?php echo asset('app/de_xuat_ton_vinh.js') ; ?>"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.4.3/angular-sanitize.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ng-csv/0.3.3/ng-csv.min.js"></script>

</head>

<body ng-controller="de_xuat_ton_vinhController">
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
                    <button type="button" class="btn btn-primary btn-sm add" style="margin-bottom: 0px;" ng-click="xacnhan()">Xác nhận</button>
                </div>
                
                <div class="tabs-container">
                    <ul class="nav nav-tabs" role="tablist">
                        <li><a class="nav-link active" ng-if="list_5.length != 0" data-toggle="tab" href="#tab-1">Mức 5</a></li>
                        <li><a class="nav-link" ng-if="list_10.length != 0" data-toggle="tab" href="#tab-2">Mức 10</a></li>
                        <li><a class="nav-link" ng-if="list_15.length != 0" data-toggle="tab" href="#tab-3">Mức 15</a></li>
                        <li><a class="nav-link" ng-if="list_20.length != 0" data-toggle="tab" href="#tab-4">Mức 20</a></li>
                        <li><a class="nav-link" ng-if="list_30.length != 0" data-toggle="tab" href="#tab-5">Mức 30</a></li>
                        <li><a class="nav-link" ng-if="list_40.length != 0" data-toggle="tab" href="#tab-6">Mức 40</a></li>
                        <li><a class="nav-link" ng-if="list_50.length != 0" data-toggle="tab" href="#tab-7">Mức 50</a></li>
                        <li><a class="nav-link" ng-if="list_60.length != 0" data-toggle="tab" href="#tab-8">Mức 60</a></li>
                        <li><a class="nav-link" ng-if="list_70.length != 0" data-toggle="tab" href="#tab-9">Mức 70</a></li>
                        <li><a class="nav-link" ng-if="list_80.length != 0" data-toggle="tab" href="#tab-10">Mức 80</a></li>
                        <li><a class="nav-link" ng-if="list_90.length != 0" data-toggle="tab" href="#tab-11">Mức 90</a></li>
                        <li><a class="nav-link" ng-if="list_100.length != 0" data-toggle="tab" href="#tab-12">Mức 100</a></li>
                    </ul>
                    <div class="tab-content">
                        <!-- <div role="tabpanel" id="tab-1" class="tab-pane active" >
                            <div class="panel-body">
                                <strong>Tổng số người được đề xuất tôn vinh: {{list_5.length}}</strong>
                                <table class="table table-striped table-bordered table-hover dataTables-example" id="exportable" >
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Họ tên</th>
                                            <th>Ngày sinh</th>
                                            <th>Nơi làm việc</th>
                                            <th>Số điện thoại</th>
                                            <th>Địa chỉ thường trú</th>
                                            <th>Số lần đã hiến</th>
                                            <th>Nhóm ABO</th>
                                            <th>Nhóm Rh</th>
                                            <th>Đã tôn vinh</th>
                                            <th>Sửa tôn vinh</th>
                                        </tr>
                                    </thead>
                                    <tbody ng-repeat="item in list_5">
                                    <tr class="gradeA" >
                                        <td>1</td>
                                        <td>{{item.HoTen}}</td>
                                        <td>{{item.NgaySinh}}</td>
                                        <td>{{item.NoiLamviec}}</td>
                                        <td>{{item.SDT}}</td>
                                        <td>{{item.DiaChi}}</td>
                                        <td>{{item.SoLanHien}}</td>
                                        <td>{{item.Nhom_ABO}}</td>
                                        <td>{{item.Nhom_Rh}}</td>
                                        <td>
                                        </td>
                                        <td>
                                            <select class="mtv" disabled="true">
                                            <option>Không tôn vinh</option>
                                            <option selected="selected">Mức 5</option>
                                            <option>Mức 10</option>
                                            <option>Mức 15</option>
                                            <option>Mức 20</option>
                                            <option>Mức 30</option>
                                            <option>Mức 40</option>
                                            <option>Mức 50</option>
                                            <option>Mức 60</option>
                                            <option>Mức 70</option>
                                            <option>Mức 80</option>
                                            <option>Mức 90</option>
                                            <option>Mức 100</option>
                                            
                                        </select>
                                        <br/>
                                        <button type="button" class="btn btn-primary btn-sm add">Sửa</button>

                                    </td>
                                    </tr>
                                    
                                   
                                           
                                    </tbody>
                                </table>
                            </div>
                        </div> -->

                        <div role="tabpanel" id="tab-1" class="tab-pane active">
                            <div class="panel-body">

                                <strong>Tổng số người được đề xuất tôn vinh: 4</strong>
                                

                                <table class="table table-striped table-bordered table-hover dataTables-example" >
                                    <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Họ tên</th>
                                        <th>Ngày sinh</th>
                                        <th>Nơi làm việc</th>
                                        <th>Số điện thoại</th>
                                        <th>Địa chỉ thường trú</th>
                                        <th>Số lần đã hiến</th>
                                        <th>Nhóm ABO</th>
                                        <th>Nhóm Rh</th>
                                        <th>Đã tôn vinh</th>
                                        <th>Sửa tôn vinh</th>
                                        
                                        
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr ng-if="list_1_5[0] != NULL">
                                        <td colspan="11" style="text-align: center;background: rgb(218, 215, 215);">
                                            <b>Thành Phố Quy Nhơn</b>
                                        </td>
                                    </tr>
                                    <tr class="gradeA" ng-repeat="item in list_1_5">
                                        <td>1</td>
                                        <td>{{item.HoTen}}</td>
                                        <td>{{item.NgaySinh}}</td>
                                        <td>{{item.NoiLamviec}}</td>
                                        <td>{{item.SDT}}</td>
                                        <td>{{item.DiaChi}}</td>
                                        <td>{{item.SoLanHien}}</td>
                                        <td>{{item.Nhom_ABO}}</td>
                                        <td>{{item.Nhom_Rh}}</td>
                                        <td>
                                        </td>
                                        <td>
                                            <select class="mtv" disabled="true">
                                            <option>Không tôn vinh</option>
                                            <option selected="selected">Mức 5</option>
                                            <option>Mức 10</option>
                                            <option>Mức 15</option>
                                            <option>Mức 20</option>
                                            <option>Mức 30</option>
                                            <option>Mức 40</option>
                                            <option>Mức 50</option>
                                            <option>Mức 60</option>
                                            <option>Mức 70</option>
                                            <option>Mức 80</option>
                                            <option>Mức 90</option>
                                            <option>Mức 100</option>
                                            
                                        </select>
                                        <br/>
                                        <button type="button" class="btn btn-primary btn-sm add">Sửa</button>

                                    </td>
                                    </tr>


                                    <tr ng-if="list_2_5[0] != NULL">
                                        <td colspan="11" style="text-align: center;background: rgb(218, 215, 215);">
                                            <b>Thị xã An Nhơn</b>
                                        </td>
                                    </tr>
                                    <tr class="gradeA" ng-repeat="item in list_2_5">
                                        <td>1</td>
                                        <td>{{item.HoTen}}</td>
                                        <td>{{item.NgaySinh}}</td>
                                        <td>{{item.NoiLamviec}}</td>
                                        <td>{{item.SDT}}</td>
                                        <td>{{item.DiaChi}}</td>
                                        <td>{{item.SoLanHien}}</td>
                                        <td>{{item.Nhom_ABO}}</td>
                                        <td>{{item.Nhom_Rh}}</td>
                                        <td>
                                        </td>
                                        <td>
                                            <select class="mtv" disabled="true">
                                            <option>Không tôn vinh</option>
                                            <option selected="selected">Mức 5</option>
                                            <option>Mức 10</option>
                                            <option>Mức 15</option>
                                            <option>Mức 20</option>
                                            <option>Mức 30</option>
                                            <option>Mức 40</option>
                                            <option>Mức 50</option>
                                            <option>Mức 60</option>
                                            <option>Mức 70</option>
                                            <option>Mức 80</option>
                                            <option>Mức 90</option>
                                            <option>Mức 100</option>
                                            
                                        </select>
                                        <br/>
                                        <button type="button" class="btn btn-primary btn-sm add">Sửa</button>

                                    </td>
                                    </tr>


                                    <tr ng-if="list_3_5[0] != NULL">
                                        <td colspan="11" style="text-align: center;background: rgb(218, 215, 215);">
                                            <b>Huyện Tuy Phước</b>
                                        </td>
                                    </tr>
                                    <tr class="gradeA" ng-repeat="item in list_3_5">
                                        <td>1</td>
                                        <td>{{item.HoTen}}</td>
                                        <td>{{item.NgaySinh}}</td>
                                        <td>{{item.NoiLamviec}}</td>
                                        <td>{{item.SDT}}</td>
                                        <td>{{item.DiaChi}}</td>
                                        <td>{{item.SoLanHien}}</td>
                                        <td>{{item.Nhom_ABO}}</td>
                                        <td>{{item.Nhom_Rh}}</td>
                                        <td>
                                        </td>
                                        <td>
                                            <select class="mtv" disabled="true">
                                            <option>Không tôn vinh</option>
                                            <option selected="selected">Mức 5</option>
                                            <option>Mức 10</option>
                                            <option>Mức 15</option>
                                            <option>Mức 20</option>
                                            <option>Mức 30</option>
                                            <option>Mức 40</option>
                                            <option>Mức 50</option>
                                            <option>Mức 60</option>
                                            <option>Mức 70</option>
                                            <option>Mức 80</option>
                                            <option>Mức 90</option>
                                            <option>Mức 100</option>
                                            
                                        </select>
                                        <br/>
                                        <button type="button" class="btn btn-primary btn-sm add">Sửa</button>

                                    </td>
                                    </tr>


                                    <tr ng-if="list_4_5[0] != NULL">
                                        <td colspan="11" style="text-align: center;background: rgb(218, 215, 215);">
                                            <b>Huyện Phù Cát</b>
                                        </td>
                                    </tr>
                                    <tr class="gradeA" ng-repeat="item in list_4_5">
                                        <td>1</td>
                                        <td>{{item.HoTen}}</td>
                                        <td>{{item.NgaySinh}}</td>
                                        <td>{{item.NoiLamviec}}</td>
                                        <td>{{item.SDT}}</td>
                                        <td>{{item.DiaChi}}</td>
                                        <td>{{item.SoLanHien}}</td>
                                        <td>{{item.Nhom_ABO}}</td>
                                        <td>{{item.Nhom_Rh}}</td>
                                        <td>
                                        </td>
                                        <td>
                                            <select class="mtv" disabled="true">
                                            <option>Không tôn vinh</option>
                                            <option selected="selected">Mức 5</option>
                                            <option>Mức 10</option>
                                            <option>Mức 15</option>
                                            <option>Mức 20</option>
                                            <option>Mức 30</option>
                                            <option>Mức 40</option>
                                            <option>Mức 50</option>
                                            <option>Mức 60</option>
                                            <option>Mức 70</option>
                                            <option>Mức 80</option>
                                            <option>Mức 90</option>
                                            <option>Mức 100</option>
                                            
                                        </select>
                                        <br/>
                                        <button type="button" class="btn btn-primary btn-sm add">Sửa</button>

                                    </td>
                                    </tr>


                                    <tr ng-if="list_5_5[0] != NULL">
                                        <td colspan="11" style="text-align: center;background: rgb(218, 215, 215);">
                                            <b>Huyện Phù Mỹ</b>
                                        </td>
                                    </tr>
                                    <tr class="gradeA" ng-repeat="item in list_5_5">
                                        <td>1</td>
                                        <td>{{item.HoTen}}</td>
                                        <td>{{item.NgaySinh}}</td>
                                        <td>{{item.NoiLamviec}}</td>
                                        <td>{{item.SDT}}</td>
                                        <td>{{item.DiaChi}}</td>
                                        <td>{{item.SoLanHien}}</td>
                                        <td>{{item.Nhom_ABO}}</td>
                                        <td>{{item.Nhom_Rh}}</td>
                                        <td>
                                        </td>
                                        <td>
                                            <select class="mtv" disabled="true">
                                            <option>Không tôn vinh</option>
                                            <option selected="selected">Mức 5</option>
                                            <option>Mức 10</option>
                                            <option>Mức 15</option>
                                            <option>Mức 20</option>
                                            <option>Mức 30</option>
                                            <option>Mức 40</option>
                                            <option>Mức 50</option>
                                            <option>Mức 60</option>
                                            <option>Mức 70</option>
                                            <option>Mức 80</option>
                                            <option>Mức 90</option>
                                            <option>Mức 100</option>
                                            
                                        </select>
                                        <br/>
                                        <button type="button" class="btn btn-primary btn-sm add">Sửa</button>

                                    </td>
                                    </tr>


                                    <tr ng-if="list_6_5[0] != NULL">
                                        <td colspan="11" style="text-align: center;background: rgb(218, 215, 215);">
                                            <b>Thị xã hoài Nhơn</b>
                                        </td>
                                    </tr>
                                    <tr class="gradeA" ng-repeat="item in list_6_5">
                                        <td>1</td>
                                        <td>{{item.HoTen}}</td>
                                        <td>{{item.NgaySinh}}</td>
                                        <td>{{item.NoiLamviec}}</td>
                                        <td>{{item.SDT}}</td>
                                        <td>{{item.DiaChi}}</td>
                                        <td>{{item.SoLanHien}}</td>
                                        <td>{{item.Nhom_ABO}}</td>
                                        <td>{{item.Nhom_Rh}}</td>
                                        <td>
                                        </td>
                                        <td>
                                            <select class="mtv" disabled="true">
                                            <option>Không tôn vinh</option>
                                            <option selected="selected">Mức 5</option>
                                            <option>Mức 10</option>
                                            <option>Mức 15</option>
                                            <option>Mức 20</option>
                                            <option>Mức 30</option>
                                            <option>Mức 40</option>
                                            <option>Mức 50</option>
                                            <option>Mức 60</option>
                                            <option>Mức 70</option>
                                            <option>Mức 80</option>
                                            <option>Mức 90</option>
                                            <option>Mức 100</option>
                                            
                                        </select>
                                        <br/>
                                        <button type="button" class="btn btn-primary btn-sm add">Sửa</button>

                                    </td>
                                    </tr>


                                    <tr ng-if="list_7_5[0] != NULL">
                                        <td colspan="11" style="text-align: center;background: rgb(218, 215, 215);">
                                            <b>Huyện Hoài Ân</b>
                                        </td>
                                    </tr>
                                    <tr class="gradeA" ng-repeat="item in list_7_5">
                                        <td>1</td>
                                        <td>{{item.HoTen}}</td>
                                        <td>{{item.NgaySinh}}</td>
                                        <td>{{item.NoiLamviec}}</td>
                                        <td>{{item.SDT}}</td>
                                        <td>{{item.DiaChi}}</td>
                                        <td>{{item.SoLanHien}}</td>
                                        <td>{{item.Nhom_ABO}}</td>
                                        <td>{{item.Nhom_Rh}}</td>
                                        <td>
                                        </td>
                                        <td>
                                            <select class="mtv" disabled="true">
                                            <option>Không tôn vinh</option>
                                            <option selected="selected">Mức 5</option>
                                            <option>Mức 10</option>
                                            <option>Mức 15</option>
                                            <option>Mức 20</option>
                                            <option>Mức 30</option>
                                            <option>Mức 40</option>
                                            <option>Mức 50</option>
                                            <option>Mức 60</option>
                                            <option>Mức 70</option>
                                            <option>Mức 80</option>
                                            <option>Mức 90</option>
                                            <option>Mức 100</option>
                                            
                                        </select>
                                        <br/>
                                        <button type="button" class="btn btn-primary btn-sm add">Sửa</button>

                                    </td>
                                    </tr>


                                    <tr ng-if="list_8_5[0] != NULL">
                                        <td colspan="11" style="text-align: center;background: rgb(218, 215, 215);">
                                            <b>Huyện Tây Sơn</b>
                                        </td>
                                    </tr>
                                    <tr class="gradeA" ng-repeat="item in list_8_5">
                                        <td>1</td>
                                        <td>{{item.HoTen}}</td>
                                        <td>{{item.NgaySinh}}</td>
                                        <td>{{item.NoiLamviec}}</td>
                                        <td>{{item.SDT}}</td>
                                        <td>{{item.DiaChi}}</td>
                                        <td>{{item.SoLanHien}}</td>
                                        <td>{{item.Nhom_ABO}}</td>
                                        <td>{{item.Nhom_Rh}}</td>
                                        <td>
                                        </td>
                                        <td>
                                            <select class="mtv" disabled="true">
                                            <option>Không tôn vinh</option>
                                            <option selected="selected">Mức 5</option>
                                            <option>Mức 10</option>
                                            <option>Mức 15</option>
                                            <option>Mức 20</option>
                                            <option>Mức 30</option>
                                            <option>Mức 40</option>
                                            <option>Mức 50</option>
                                            <option>Mức 60</option>
                                            <option>Mức 70</option>
                                            <option>Mức 80</option>
                                            <option>Mức 90</option>
                                            <option>Mức 100</option>
                                            
                                        </select>
                                        <br/>
                                        <button type="button" class="btn btn-primary btn-sm add">Sửa</button>

                                    </td>
                                    </tr>


                                    <tr ng-if="list_9_5[0] != NULL">
                                        <td colspan="11" style="text-align: center;background: rgb(218, 215, 215);">
                                            <b>Huyện Vân Canh</b>
                                        </td>
                                    </tr>
                                    <tr class="gradeA" ng-repeat="item in list_9_5">
                                        <td>1</td>
                                        <td>{{item.HoTen}}</td>
                                        <td>{{item.NgaySinh}}</td>
                                        <td>{{item.NoiLamviec}}</td>
                                        <td>{{item.SDT}}</td>
                                        <td>{{item.DiaChi}}</td>
                                        <td>{{item.SoLanHien}}</td>
                                        <td>{{item.Nhom_ABO}}</td>
                                        <td>{{item.Nhom_Rh}}</td>
                                        <td>
                                        </td>
                                        <td>
                                            <select class="mtv" disabled="true">
                                            <option>Không tôn vinh</option>
                                            <option selected="selected">Mức 5</option>
                                            <option>Mức 10</option>
                                            <option>Mức 15</option>
                                            <option>Mức 20</option>
                                            <option>Mức 30</option>
                                            <option>Mức 40</option>
                                            <option>Mức 50</option>
                                            <option>Mức 60</option>
                                            <option>Mức 70</option>
                                            <option>Mức 80</option>
                                            <option>Mức 90</option>
                                            <option>Mức 100</option>
                                            
                                        </select>
                                        <br/>
                                        <button type="button" class="btn btn-primary btn-sm add">Sửa</button>

                                    </td>
                                    </tr>


                                    <tr ng-if="list_10_5[0] != NULL">
                                        <td colspan="11" style="text-align: center;background: rgb(218, 215, 215);">
                                            <b>Huyện Vĩnh Thạnh</b>
                                        </td>
                                    </tr>
                                    <tr class="gradeA" ng-repeat="item in list_10_5">
                                        <td>1</td>
                                        <td>{{item.HoTen}}</td>
                                        <td>{{item.NgaySinh}}</td>
                                        <td>{{item.NoiLamviec}}</td>
                                        <td>{{item.SDT}}</td>
                                        <td>{{item.DiaChi}}</td>
                                        <td>{{item.SoLanHien}}</td>
                                        <td>{{item.Nhom_ABO}}</td>
                                        <td>{{item.Nhom_Rh}}</td>
                                        <td>
                                        </td>
                                        <td>
                                            <select class="mtv" disabled="true">
                                            <option>Không tôn vinh</option>
                                            <option selected="selected">Mức 5</option>
                                            <option>Mức 10</option>
                                            <option>Mức 15</option>
                                            <option>Mức 20</option>
                                            <option>Mức 30</option>
                                            <option>Mức 40</option>
                                            <option>Mức 50</option>
                                            <option>Mức 60</option>
                                            <option>Mức 70</option>
                                            <option>Mức 80</option>
                                            <option>Mức 90</option>
                                            <option>Mức 100</option>
                                            
                                        </select>
                                        <br/>
                                        <button type="button" class="btn btn-primary btn-sm add">Sửa</button>

                                    </td>
                                    </tr>


                                    <tr ng-if="list_11_5[0] != NULL">
                                        <td colspan="11" style="text-align: center;background: rgb(218, 215, 215);">
                                            <b>Huyện An Lão</b>
                                        </td>
                                    </tr>
                                    <tr class="gradeA" ng-repeat="item in list_11_5">
                                        <td>1</td>
                                        <td>{{item.HoTen}}</td>
                                        <td>{{item.NgaySinh}}</td>
                                        <td>{{item.NoiLamviec}}</td>
                                        <td>{{item.SDT}}</td>
                                        <td>{{item.DiaChi}}</td>
                                        <td>{{item.SoLanHien}}</td>
                                        <td>{{item.Nhom_ABO}}</td>
                                        <td>{{item.Nhom_Rh}}</td>
                                        <td>
                                        </td>
                                        <td>
                                            <select class="mtv" disabled="true">
                                            <option>Không tôn vinh</option>
                                            <option selected="selected">Mức 5</option>
                                            <option>Mức 10</option>
                                            <option>Mức 15</option>
                                            <option>Mức 20</option>
                                            <option>Mức 30</option>
                                            <option>Mức 40</option>
                                            <option>Mức 50</option>
                                            <option>Mức 60</option>
                                            <option>Mức 70</option>
                                            <option>Mức 80</option>
                                            <option>Mức 90</option>
                                            <option>Mức 100</option>
                                            
                                        </select>
                                        <br/>
                                        <button type="button" class="btn btn-primary btn-sm add">Sửa</button>

                                    </td>
                                    </tr>


                                    <tr ng-if="list_12_5[0] != NULL">
                                        <td colspan="11" style="text-align: center;background: rgb(218, 215, 215);">
                                            <b>Liên Đoàn Tỉnh Bình Định</b>
                                        </td>
                                    </tr>
                                    <tr class="gradeA" ng-repeat="item in list_12_5">
                                        <td>1</td>
                                        <td>{{item.HoTen}}</td>
                                        <td>{{item.NgaySinh}}</td>
                                        <td>{{item.NoiLamviec}}</td>
                                        <td>{{item.SDT}}</td>
                                        <td>{{item.DiaChi}}</td>
                                        <td>{{item.SoLanHien}}</td>
                                        <td>{{item.Nhom_ABO}}</td>
                                        <td>{{item.Nhom_Rh}}</td>
                                        <td>
                                        </td>
                                        <td>
                                            <select class="mtv" disabled="true">
                                            <option>Không tôn vinh</option>
                                            <option selected="selected">Mức 5</option>
                                            <option>Mức 10</option>
                                            <option>Mức 15</option>
                                            <option>Mức 20</option>
                                            <option>Mức 30</option>
                                            <option>Mức 40</option>
                                            <option>Mức 50</option>
                                            <option>Mức 60</option>
                                            <option>Mức 70</option>
                                            <option>Mức 80</option>
                                            <option>Mức 90</option>
                                            <option>Mức 100</option>
                                            
                                        </select>
                                        <br/>
                                        <button type="button" class="btn btn-primary btn-sm add">Sửa</button>

                                    </td>
                                    </tr>


                                    <tr ng-if="list_13_5[0] != NULL">
                                        <td colspan="11" style="text-align: center;background: rgb(218, 215, 215);">
                                            <b>Đoàn khối Các cơ quan tỉnh</b>
                                        </td>
                                    </tr>
                                    <tr class="gradeA" ng-repeat="item in list_13_5">
                                        <td>1</td>
                                        <td>{{item.HoTen}}</td>
                                        <td>{{item.NgaySinh}}</td>
                                        <td>{{item.NoiLamviec}}</td>
                                        <td>{{item.SDT}}</td>
                                        <td>{{item.DiaChi}}</td>
                                        <td>{{item.SoLanHien}}</td>
                                        <td>{{item.Nhom_ABO}}</td>
                                        <td>{{item.Nhom_Rh}}</td>
                                        <td>
                                        </td>
                                        <td>
                                            <select class="mtv" disabled="true">
                                            <option>Không tôn vinh</option>
                                            <option selected="selected">Mức 5</option>
                                            <option>Mức 10</option>
                                            <option>Mức 15</option>
                                            <option>Mức 20</option>
                                            <option>Mức 30</option>
                                            <option>Mức 40</option>
                                            <option>Mức 50</option>
                                            <option>Mức 60</option>
                                            <option>Mức 70</option>
                                            <option>Mức 80</option>
                                            <option>Mức 90</option>
                                            <option>Mức 100</option>
                                            
                                        </select>
                                        <br/>
                                        <button type="button" class="btn btn-primary btn-sm add">Sửa</button>

                                    </td>
                                    </tr>   
                                            
                                    <tr ng-if="list_14_5[0] != NULL">
                                        <td colspan="11" style="text-align: center;background: rgb(218, 215, 215);">
                                            <b>Đoàn khối Doanh nghiệp tỉnh</b>
                                        </td>
                                    </tr>
                                    <tr class="gradeA" ng-repeat="item in list_14_5">
                                        <td>1</td>
                                        <td>{{item.HoTen}}</td>
                                        <td>{{item.NgaySinh}}</td>
                                        <td>{{item.NoiLamviec}}</td>
                                        <td>{{item.SDT}}</td>
                                        <td>{{item.DiaChi}}</td>
                                        <td>{{item.SoLanHien}}</td>
                                        <td>{{item.Nhom_ABO}}</td>
                                        <td>{{item.Nhom_Rh}}</td>
                                        <td>
                                        </td>
                                        <td>
                                            <select class="mtv" disabled="true">
                                            <option>Không tôn vinh</option>
                                            <option selected="selected">Mức 5</option>
                                            <option>Mức 10</option>
                                            <option>Mức 15</option>
                                            <option>Mức 20</option>
                                            <option>Mức 30</option>
                                            <option>Mức 40</option>
                                            <option>Mức 50</option>
                                            <option>Mức 60</option>
                                            <option>Mức 70</option>
                                            <option>Mức 80</option>
                                            <option>Mức 90</option>
                                            <option>Mức 100</option>
                                            
                                        </select>
                                        <br/>
                                        <button type="button" class="btn btn-primary btn-sm add">Sửa</button>

                                    </td>
                                    </tr>   


                                    <tr ng-if="list_15_5[0] != NULL">
                                        <td colspan="11" style="text-align: center;background: rgb(218, 215, 215);">
                                            <b>Trường Đại Học Quy Nhơn</b>
                                        </td>
                                    </tr>
                                    <tr class="gradeA" ng-repeat="item in list_15_5">
                                        <td>1</td>
                                        <td>{{item.HoTen}}</td>
                                        <td>{{item.NgaySinh}}</td>
                                        <td>{{item.NoiLamviec}}</td>
                                        <td>{{item.SDT}}</td>
                                        <td>{{item.DiaChi}}</td>
                                        <td>{{item.SoLanHien}}</td>
                                        <td>{{item.Nhom_ABO}}</td>
                                        <td>{{item.Nhom_Rh}}</td>
                                        <td>
                                        </td>
                                        <td>
                                            <select class="mtv" disabled="true">
                                            <option>Không tôn vinh</option>
                                            <option selected="selected">Mức 5</option>
                                            <option>Mức 10</option>
                                            <option>Mức 15</option>
                                            <option>Mức 20</option>
                                            <option>Mức 30</option>
                                            <option>Mức 40</option>
                                            <option>Mức 50</option>
                                            <option>Mức 60</option>
                                            <option>Mức 70</option>
                                            <option>Mức 80</option>
                                            <option>Mức 90</option>
                                            <option>Mức 100</option>
                                            
                                        </select>
                                        <br/>
                                        <button type="button" class="btn btn-primary btn-sm add">Sửa</button>

                                    </td>
                                    </tr>   

                                    <tr ng-if="list_16_5[0] != NULL">
                                        <td colspan="11" style="text-align: center;background: rgb(218, 215, 215);">
                                            <b>Trường Đại Học Quang Trung</b>
                                        </td>
                                    </tr>
                                    <tr class="gradeA" ng-repeat="item in list_16_5">
                                        <td>1</td>
                                        <td>{{item.HoTen}}</td>
                                        <td>{{item.NgaySinh}}</td>
                                        <td>{{item.NoiLamviec}}</td>
                                        <td>{{item.SDT}}</td>
                                        <td>{{item.DiaChi}}</td>
                                        <td>{{item.SoLanHien}}</td>
                                        <td>{{item.Nhom_ABO}}</td>
                                        <td>{{item.Nhom_Rh}}</td>
                                        <td>
                                        </td>
                                        <td>
                                            <select class="mtv" disabled="true">
                                            <option>Không tôn vinh</option>
                                            <option selected="selected">Mức 5</option>
                                            <option>Mức 10</option>
                                            <option>Mức 15</option>
                                            <option>Mức 20</option>
                                            <option>Mức 30</option>
                                            <option>Mức 40</option>
                                            <option>Mức 50</option>
                                            <option>Mức 60</option>
                                            <option>Mức 70</option>
                                            <option>Mức 80</option>
                                            <option>Mức 90</option>
                                            <option>Mức 100</option>
                                            
                                        </select>
                                        <br/>
                                        <button type="button" class="btn btn-primary btn-sm add">Sửa</button>

                                    </td>
                                    </tr>   

                                    <tr ng-if="list_17_5[0] != NULL">
                                        <td colspan="11" style="text-align: center;background: rgb(218, 215, 215);">
                                            <b>Trường CĐ Kỹ thuật Công nghệ Quy Nhơn</b>
                                        </td>
                                    </tr>
                                    <tr class="gradeA" ng-repeat="item in list_17_5">
                                        <td>1</td>
                                        <td>{{item.HoTen}}</td>
                                        <td>{{item.NgaySinh}}</td>
                                        <td>{{item.NoiLamviec}}</td>
                                        <td>{{item.SDT}}</td>
                                        <td>{{item.DiaChi}}</td>
                                        <td>{{item.SoLanHien}}</td>
                                        <td>{{item.Nhom_ABO}}</td>
                                        <td>{{item.Nhom_Rh}}</td>
                                        <td>
                                        </td>
                                        <td>
                                            <select class="mtv" disabled="true">
                                            <option>Không tôn vinh</option>
                                            <option selected="selected">Mức 5</option>
                                            <option>Mức 10</option>
                                            <option>Mức 15</option>
                                            <option>Mức 20</option>
                                            <option>Mức 30</option>
                                            <option>Mức 40</option>
                                            <option>Mức 50</option>
                                            <option>Mức 60</option>
                                            <option>Mức 70</option>
                                            <option>Mức 80</option>
                                            <option>Mức 90</option>
                                            <option>Mức 100</option>
                                            
                                        </select>
                                        <br/>
                                        <button type="button" class="btn btn-primary btn-sm add">Sửa</button>

                                    </td>
                                    </tr> 
                                    
                                    <tr ng-if="list_18_5[0] != NULL">
                                        <td colspan="11" style="text-align: center;background: rgb(218, 215, 215);">
                                            <b>Trường CĐ Y tế Bình Định</b>
                                        </td>
                                    </tr>
                                    <tr class="gradeA" ng-repeat="item in list_18_5">
                                        <td>1</td>
                                        <td>{{item.HoTen}}</td>
                                        <td>{{item.NgaySinh}}</td>
                                        <td>{{item.NoiLamviec}}</td>
                                        <td>{{item.SDT}}</td>
                                        <td>{{item.DiaChi}}</td>
                                        <td>{{item.SoLanHien}}</td>
                                        <td>{{item.Nhom_ABO}}</td>
                                        <td>{{item.Nhom_Rh}}</td>
                                        <td>
                                        </td>
                                        <td>
                                            <select class="mtv" disabled="true">
                                            <option>Không tôn vinh</option>
                                            <option selected="selected">Mức 5</option>
                                            <option>Mức 10</option>
                                            <option>Mức 15</option>
                                            <option>Mức 20</option>
                                            <option>Mức 30</option>
                                            <option>Mức 40</option>
                                            <option>Mức 50</option>
                                            <option>Mức 60</option>
                                            <option>Mức 70</option>
                                            <option>Mức 80</option>
                                            <option>Mức 90</option>
                                            <option>Mức 100</option>
                                            
                                        </select>
                                        <br/>
                                        <button type="button" class="btn btn-primary btn-sm add">Sửa</button>

                                    </td>
                                    </tr> 

                                    <tr ng-if="list_19_5[0] != NULL">
                                        <td colspan="11" style="text-align: center;background: rgb(218, 215, 215);">
                                            <b>Trường Cao đẳng Bình Định</b>
                                        </td>
                                    </tr>
                                    <tr class="gradeA" ng-repeat="item in list_19_5">
                                        <td>1</td>
                                        <td>{{item.HoTen}}</td>
                                        <td>{{item.NgaySinh}}</td>
                                        <td>{{item.NoiLamviec}}</td>
                                        <td>{{item.SDT}}</td>
                                        <td>{{item.DiaChi}}</td>
                                        <td>{{item.SoLanHien}}</td>
                                        <td>{{item.Nhom_ABO}}</td>
                                        <td>{{item.Nhom_Rh}}</td>
                                        <td>
                                        </td>
                                        <td>
                                            <select class="mtv" disabled="true">
                                            <option>Không tôn vinh</option>
                                            <option selected="selected">Mức 5</option>
                                            <option>Mức 10</option>
                                            <option>Mức 15</option>
                                            <option>Mức 20</option>
                                            <option>Mức 30</option>
                                            <option>Mức 40</option>
                                            <option>Mức 50</option>
                                            <option>Mức 60</option>
                                            <option>Mức 70</option>
                                            <option>Mức 80</option>
                                            <option>Mức 90</option>
                                            <option>Mức 100</option>
                                            
                                        </select>
                                        <br/>
                                        <button type="button" class="btn btn-primary btn-sm add">Sửa</button>

                                    </td>
                                    </tr> 

                                    <tr ng-if="list_20_5[0] != NULL">
                                        <td colspan="11" style="text-align: center;background: rgb(218, 215, 215);">
                                            <b>Trường CĐ Nghề CĐ-XĐ &Nông Lâm Trung bộ</b>
                                        </td>
                                    </tr>
                                    <tr class="gradeA" ng-repeat="item in list_20_5">
                                        <td>1</td>
                                        <td>{{item.HoTen}}</td>
                                        <td>{{item.NgaySinh}}</td>
                                        <td>{{item.NoiLamviec}}</td>
                                        <td>{{item.SDT}}</td>
                                        <td>{{item.DiaChi}}</td>
                                        <td>{{item.SoLanHien}}</td>
                                        <td>{{item.Nhom_ABO}}</td>
                                        <td>{{item.Nhom_Rh}}</td>
                                        <td>
                                        </td>
                                        <td>
                                            <select class="mtv" disabled="true">
                                            <option>Không tôn vinh</option>
                                            <option selected="selected">Mức 5</option>
                                            <option>Mức 10</option>
                                            <option>Mức 15</option>
                                            <option>Mức 20</option>
                                            <option>Mức 30</option>
                                            <option>Mức 40</option>
                                            <option>Mức 50</option>
                                            <option>Mức 60</option>
                                            <option>Mức 70</option>
                                            <option>Mức 80</option>
                                            <option>Mức 90</option>
                                            <option>Mức 100</option>
                                            
                                        </select>
                                        <br/>
                                        <button type="button" class="btn btn-primary btn-sm add">Sửa</button>

                                    </td>
                                    </tr> 

                                    
                                    <tr ng-if="list_21_5[0] != NULL">
                                        <td colspan="11" style="text-align: center;background: rgb(218, 215, 215);">
                                            <b>Câu lạc bộ 25 - Hội CTĐ tỉnh</b>
                                        </td>
                                    </tr>
                                    <tr class="gradeA" ng-repeat="item in list_21_5">
                                        <td>1</td>
                                        <td>{{item.HoTen}}</td>
                                        <td>{{item.NgaySinh}}</td>
                                        <td>{{item.NoiLamviec}}</td>
                                        <td>{{item.SDT}}</td>
                                        <td>{{item.DiaChi}}</td>
                                        <td>{{item.SoLanHien}}</td>
                                        <td>{{item.Nhom_ABO}}</td>
                                        <td>{{item.Nhom_Rh}}</td>
                                        <td>
                                        </td>
                                        <td>
                                            <select class="mtv" disabled="true">
                                            <option>Không tôn vinh</option>
                                            <option selected="selected">Mức 5</option>
                                            <option>Mức 10</option>
                                            <option>Mức 15</option>
                                            <option>Mức 20</option>
                                            <option>Mức 30</option>
                                            <option>Mức 40</option>
                                            <option>Mức 50</option>
                                            <option>Mức 60</option>
                                            <option>Mức 70</option>
                                            <option>Mức 80</option>
                                            <option>Mức 90</option>
                                            <option>Mức 100</option>
                                            
                                        </select>
                                        <br/>
                                        <button type="button" class="btn btn-primary btn-sm add">Sửa</button>

                                    </td>
                                    </tr> 

                                    <tr ng-if="list_22_5[0] != NULL">
                                        <td colspan="11" style="text-align: center;background: rgb(218, 215, 215);">
                                            <b>Trung đoàn KQ 925</b>
                                        </td>
                                    </tr>
                                    <tr class="gradeA" ng-repeat="item in list_22_5">
                                        <td>1</td>
                                        <td>{{item.HoTen}}</td>
                                        <td>{{item.NgaySinh}}</td>
                                        <td>{{item.NoiLamviec}}</td>
                                        <td>{{item.SDT}}</td>
                                        <td>{{item.DiaChi}}</td>
                                        <td>{{item.SoLanHien}}</td>
                                        <td>{{item.Nhom_ABO}}</td>
                                        <td>{{item.Nhom_Rh}}</td>
                                        <td>
                                        </td>
                                        <td>
                                            <select class="mtv" disabled="true">
                                            <option>Không tôn vinh</option>
                                            <option selected="selected">Mức 5</option>
                                            <option>Mức 10</option>
                                            <option>Mức 15</option>
                                            <option>Mức 20</option>
                                            <option>Mức 30</option>
                                            <option>Mức 40</option>
                                            <option>Mức 50</option>
                                            <option>Mức 60</option>
                                            <option>Mức 70</option>
                                            <option>Mức 80</option>
                                            <option>Mức 90</option>
                                            <option>Mức 100</option>
                                            
                                        </select>
                                        <br/>
                                        <button type="button" class="btn btn-primary btn-sm add">Sửa</button>

                                    </td>
                                    </tr> 

                                    <tr ng-if="list_23_5[0] != NULL">
                                        <td colspan="11" style="text-align: center;background: rgb(218, 215, 215);">
                                            <b>Công an tỉnh Bình Định</b>
                                        </td>
                                    </tr>
                                    <tr class="gradeA" ng-repeat="item in list_23_5">
                                        <td>1</td>
                                        <td>{{item.HoTen}}</td>
                                        <td>{{item.NgaySinh}}</td>
                                        <td>{{item.NoiLamviec}}</td>
                                        <td>{{item.SDT}}</td>
                                        <td>{{item.DiaChi}}</td>
                                        <td>{{item.SoLanHien}}</td>
                                        <td>{{item.Nhom_ABO}}</td>
                                        <td>{{item.Nhom_Rh}}</td>
                                        <td>
                                        </td>
                                        <td>
                                            <select class="mtv" disabled="true">
                                            <option>Không tôn vinh</option>
                                            <option selected="selected">Mức 5</option>
                                            <option>Mức 10</option>
                                            <option>Mức 15</option>
                                            <option>Mức 20</option>
                                            <option>Mức 30</option>
                                            <option>Mức 40</option>
                                            <option>Mức 50</option>
                                            <option>Mức 60</option>
                                            <option>Mức 70</option>
                                            <option>Mức 80</option>
                                            <option>Mức 90</option>
                                            <option>Mức 100</option>
                                            
                                        </select>
                                        <br/>
                                        <button type="button" class="btn btn-primary btn-sm add">Sửa</button>

                                    </td>
                                    </tr> 

                                    <tr ng-if="list_24_5[0] != NULL">
                                        <td colspan="11" style="text-align: center;background: rgb(218, 215, 215);">
                                            <b>BVĐK tỉnh, bệnh viện chuyên khoa & các BV TW trên địa bàn Quy Nhơn</b>
                                        </td>
                                    </tr>
                                    <tr class="gradeA" ng-repeat="item in list_24_5">
                                        <td>1</td>
                                        <td>{{item.HoTen}}</td>
                                        <td>{{item.NgaySinh}}</td>
                                        <td>{{item.NoiLamviec}}</td>
                                        <td>{{item.SDT}}</td>
                                        <td>{{item.DiaChi}}</td>
                                        <td>{{item.SoLanHien}}</td>
                                        <td>{{item.Nhom_ABO}}</td>
                                        <td>{{item.Nhom_Rh}}</td>
                                        <td>
                                        </td>
                                        <td>
                                            <select class="mtv" disabled="true">
                                            <option>Không tôn vinh</option>
                                            <option selected="selected">Mức 5</option>
                                            <option>Mức 10</option>
                                            <option>Mức 15</option>
                                            <option>Mức 20</option>
                                            <option>Mức 30</option>
                                            <option>Mức 40</option>
                                            <option>Mức 50</option>
                                            <option>Mức 60</option>
                                            <option>Mức 70</option>
                                            <option>Mức 80</option>
                                            <option>Mức 90</option>
                                            <option>Mức 100</option>
                                            
                                        </select>
                                        <br/>
                                        <button type="button" class="btn btn-primary btn-sm add">Sửa</button>

                                    </td>
                                    </tr> 

                                    <tr ng-if="list_25_5[0] != NULL">
                                        <td colspan="11" style="text-align: center;background: rgb(218, 215, 215);">
                                            <b>Trung đoàn Cảnh sát cơ động Nam Trung bộ  E23</b>
                                        </td>
                                    </tr>
                                    <tr class="gradeA" ng-repeat="item in list_25_5">
                                        <td>1</td>
                                        <td>{{item.HoTen}}</td>
                                        <td>{{item.NgaySinh}}</td>
                                        <td>{{item.NoiLamviec}}</td>
                                        <td>{{item.SDT}}</td>
                                        <td>{{item.DiaChi}}</td>
                                        <td>{{item.SoLanHien}}</td>
                                        <td>{{item.Nhom_ABO}}</td>
                                        <td>{{item.Nhom_Rh}}</td>
                                        <td>
                                        </td>
                                        <td>
                                            <select class="mtv" disabled="true">
                                            <option>Không tôn vinh</option>
                                            <option selected="selected">Mức 5</option>
                                            <option>Mức 10</option>
                                            <option>Mức 15</option>
                                            <option>Mức 20</option>
                                            <option>Mức 30</option>
                                            <option>Mức 40</option>
                                            <option>Mức 50</option>
                                            <option>Mức 60</option>
                                            <option>Mức 70</option>
                                            <option>Mức 80</option>
                                            <option>Mức 90</option>
                                            <option>Mức 100</option>
                                            
                                        </select>
                                        <br/>
                                        <button type="button" class="btn btn-primary btn-sm add">Sửa</button>

                                    </td>
                                    </tr> 

                                    <tr ng-if="list_26_5[0] != NULL">
                                        <td colspan="11" style="text-align: center;background: rgb(218, 215, 215);">
                                            <b>Hành trình đỏ</b>
                                        </td>
                                    </tr>
                                    <tr class="gradeA" ng-repeat="item in list_26_5">
                                        <td>1</td>
                                        <td>{{item.HoTen}}</td>
                                        <td>{{item.NgaySinh}}</td>
                                        <td>{{item.NoiLamviec}}</td>
                                        <td>{{item.SDT}}</td>
                                        <td>{{item.DiaChi}}</td>
                                        <td>{{item.SoLanHien}}</td>
                                        <td>{{item.Nhom_ABO}}</td>
                                        <td>{{item.Nhom_Rh}}</td>
                                        <td>
                                        </td>
                                        <td>
                                            <select class="mtv" disabled="true">
                                            <option>Không tôn vinh</option>
                                            <option selected="selected">Mức 5</option>
                                            <option>Mức 10</option>
                                            <option>Mức 15</option>
                                            <option>Mức 20</option>
                                            <option>Mức 30</option>
                                            <option>Mức 40</option>
                                            <option>Mức 50</option>
                                            <option>Mức 60</option>
                                            <option>Mức 70</option>
                                            <option>Mức 80</option>
                                            <option>Mức 90</option>
                                            <option>Mức 100</option>
                                            
                                        </select>
                                        <br/>
                                        <button type="button" class="btn btn-primary btn-sm add">Sửa</button>

                                    </td>
                                    </tr> 

                                    <tr ng-if="list_27_5[0] != NULL">
                                        <td colspan="11" style="text-align: center;background: rgb(218, 215, 215);">
                                            <b>Các ĐV ngoài kế hoạch và HMTN đột xuất</b>
                                        </td>
                                    </tr>
                                    <tr class="gradeA" ng-repeat="item in list_27_5">
                                        <td>1</td>
                                        <td>{{item.HoTen}}</td>
                                        <td>{{item.NgaySinh}}</td>
                                        <td>{{item.NoiLamviec}}</td>
                                        <td>{{item.SDT}}</td>
                                        <td>{{item.DiaChi}}</td>
                                        <td>{{item.SoLanHien}}</td>
                                        <td>{{item.Nhom_ABO}}</td>
                                        <td>{{item.Nhom_Rh}}</td>
                                        <td>
                                        </td>
                                        <td>
                                            <select class="mtv" disabled="true">
                                            <option>Không tôn vinh</option>
                                            <option selected="selected">Mức 5</option>
                                            <option>Mức 10</option>
                                            <option>Mức 15</option>
                                            <option>Mức 20</option>
                                            <option>Mức 30</option>
                                            <option>Mức 40</option>
                                            <option>Mức 50</option>
                                            <option>Mức 60</option>
                                            <option>Mức 70</option>
                                            <option>Mức 80</option>
                                            <option>Mức 90</option>
                                            <option>Mức 100</option>
                                            
                                        </select>
                                        <br/>
                                        <button type="button" class="btn btn-primary btn-sm add">Sửa</button>

                                    </td>
                                    </tr> 



                                    </tbody>
                                    </table>
                            </div>
                        </div>


                        <div role="tabpanel" id="tab-2" class="tab-pane">
                            <div class="panel-body">
                                <strong>Tổng số người được đề xuất tôn vinh: {{list_10.length}}</strong>
                                <table class="table table-striped table-bordered table-hover dataTables-example" >
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Họ tên</th>
                                            <th>Ngày sinh</th>
                                            <th>Nơi làm việc</th>
                                            <th>Số điện thoại</th>
                                            <th>Địa chỉ thường trú</th>
                                            <th>Số lần đã hiến</th>
                                            <th>Nhóm ABO</th>
                                            <th>Nhóm Rh</th>
                                            <th>Đã tôn vinh</th>
                                            <th>Sửa tôn vinh</th>
                                        </tr>
                                    </thead>
                                    <tbody ng-repeat="item in list_10">
                                    <tr class="gradeA" >
                                        <td>1</td>
                                        <td>{{item.HoTen}}</td>
                                        <td>{{item.NgaySinh}}</td>
                                        <td>{{item.NoiLamviec}}</td>
                                        <td>{{item.SDT}}</td>
                                        <td>{{item.DiaChi}}</td>
                                        <td>{{item.SoLanHien}}</td>
                                        <td>{{item.Nhom_ABO}}</td>
                                        <td>{{item.Nhom_Rh}}</td>
                                        <td>
                                        </td>
                                        <td>
                                            <select class="mtv" disabled="true">
                                            <option>Không tôn vinh</option>
                                            <option >Mức 5</option>
                                            <option selected="selected">Mức 10</option>
                                            <option>Mức 15</option>
                                            <option>Mức 20</option>
                                            <option>Mức 30</option>
                                            <option>Mức 40</option>
                                            <option>Mức 50</option>
                                            <option>Mức 60</option>
                                            <option>Mức 70</option>
                                            <option>Mức 80</option>
                                            <option>Mức 90</option>
                                            <option>Mức 100</option>
                                            
                                        </select>
                                        <br/>
                                        <button type="button" class="btn btn-primary btn-sm add">Sửa</button>

                                    </td>
                                    </tr>
                                    
                                   
                                           
                                    </tbody>
                                </table>
                            </div>
                        </div>



                        <div role="tabpanel" id="tab-3" class="tab-pane">
                            <div class="panel-body">

                                <strong>Tổng số người được đề xuất tôn vinh: {{list_15.length}}</strong>
                                

                                <table class="table table-striped table-bordered table-hover dataTables-example" >
                                    <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Họ tên</th>
                                        <th>Ngày sinh</th>
                                        <th>Nơi làm việc</th>
                                        <th>Số điện thoại</th>
                                        <th>Địa chỉ thường trú</th>
                                        <th>Số lần đã hiến</th>
                                        <th>Nhóm ABO</th>
                                        <th>Nhóm Rh</th>
                                        <th>Đã tôn vinh</th>
                                        <th>Sửa tôn vinh</th>
                                    </tr>
                                    </thead>
                                    <tbody ng-repeat="item in list_15">
                                    <tr class="gradeA" >
                                        <td>1</td>
                                        <td>{{item.HoTen}}</td>
                                        <td>{{item.NgaySinh}}</td>
                                        <td>{{item.NoiLamviec}}</td>
                                        <td>{{item.SDT}}</td>
                                        <td>{{item.DiaChi}}</td>
                                        <td>{{item.SoLanHien}}</td>
                                        <td>{{item.Nhom_ABO}}</td>
                                        <td>{{item.Nhom_Rh}}</td>
                                        <td>
                                        </td>
                                        <td>
                                            <select class="mtv" disabled="true">
                                            <option>Không tôn vinh</option>
                                            <option >Mức 5</option>
                                            <option>Mức 10</option>
                                            <option selected="selected">Mức 15</option>
                                            <option>Mức 20</option>
                                            <option>Mức 30</option>
                                            <option>Mức 40</option>
                                            <option>Mức 50</option>
                                            <option>Mức 60</option>
                                            <option>Mức 70</option>
                                            <option>Mức 80</option>
                                            <option>Mức 90</option>
                                            <option>Mức 100</option>
                                            
                                        </select>
                                        <br/>
                                        <button type="button" class="btn btn-primary btn-sm add">Sửa</button>

                                    </td>
                                    </tr>
                                    
                                   
                                           
                                    </tbody>
                                    </table>
                            </div>
                        </div>


                        <div role="tabpanel" id="tab-4" class="tab-pane">
                            <div class="panel-body">

                                <strong>Tổng số người được đề xuất tôn vinh: {{list_20.length}}</strong>
                                

                                <table class="table table-striped table-bordered table-hover dataTables-example" >
                                    <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Họ tên</th>
                                        <th>Ngày sinh</th>
                                        <th>Nơi làm việc</th>
                                        <th>Số điện thoại</th>
                                        <th>Địa chỉ thường trú</th>
                                        <th>Số lần đã hiến</th>
                                        <th>Nhóm ABO</th>
                                        <th>Nhóm Rh</th>
                                        <th>Đã tôn vinh</th>
                                        <th>Sửa tôn vinh</th>
                                    </tr>
                                    </thead>
                                    <tbody ng-repeat="item in list_20">
                                    <tr class="gradeA" >
                                        <td>1</td>
                                        <td>{{item.HoTen}}</td>
                                        <td>{{item.NgaySinh}}</td>
                                        <td>{{item.NoiLamviec}}</td>
                                        <td>{{item.SDT}}</td>
                                        <td>{{item.DiaChi}}</td>
                                        <td>{{item.SoLanHien}}</td>
                                        <td>{{item.Nhom_ABO}}</td>
                                        <td>{{item.Nhom_Rh}}</td>
                                        <td>
                                        </td>
                                        <td>
                                            <select class="mtv" disabled="true">
                                            <option>Không tôn vinh</option>
                                            <option >Mức 20</option>
                                            <option>Mức 10</option>
                                            <option>Mức 15</option>
                                            <option selected="selected">Mức 20</option>
                                            <option>Mức 30</option>
                                            <option>Mức 40</option>
                                            <option>Mức 50</option>
                                            <option>Mức 60</option>
                                            <option>Mức 70</option>
                                            <option>Mức 80</option>
                                            <option>Mức 90</option>
                                            <option>Mức 100</option>
                                            
                                        </select>
                                        <br/>
                                        <button type="button" class="btn btn-primary btn-sm add">Sửa</button>

                                    </td>
                                    </tr>




                                    <div role="tabpanel" id="tab-5" class="tab-pane">
                            <div class="panel-body">

                                <strong>Tổng số người được đề xuất tôn vinh: {{list_30.length}}</strong>
                                

                                <table class="table table-striped table-bordered table-hover dataTables-example" >
                                    <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Họ tên</th>
                                        <th>Ngày sinh</th>
                                        <th>Nơi làm việc</th>
                                        <th>Số điện thoại</th>
                                        <th>Địa chỉ thường trú</th>
                                        <th>Số lần đã hiến</th>
                                        <th>Nhóm ABO</th>
                                        <th>Nhóm Rh</th>
                                        <th>Đã tôn vinh</th>
                                        <th>Sửa tôn vinh</th>
                                    </tr>
                                    </thead>
                                    <tbody ng-repeat="item in list_30">
                                    <tr class="gradeA" >
                                        <td>1</td>
                                        <td>{{item.HoTen}}</td>
                                        <td>{{item.NgaySinh}}</td>
                                        <td>{{item.NoiLamviec}}</td>
                                        <td>{{item.SDT}}</td>
                                        <td>{{item.DiaChi}}</td>
                                        <td>{{item.SoLanHien}}</td>
                                        <td>{{item.Nhom_ABO}}</td>
                                        <td>{{item.Nhom_Rh}}</td>
                                        <td>
                                        </td>
                                        <td>
                                            <select class="mtv" disabled="true">
                                            <option>Không tôn vinh</option>
                                            <option >Mức 30</option>
                                            <option>Mức 10</option>
                                            <option>Mức 15</option>
                                            <option>Mức 20</option>
                                            <option selected="selected">Mức 30</option>
                                            <option>Mức 40</option>
                                            <option>Mức 50</option>
                                            <option>Mức 60</option>
                                            <option>Mức 70</option>
                                            <option>Mức 80</option>
                                            <option>Mức 90</option>
                                            <option>Mức 100</option>
                                            
                                        </select>
                                        <br/>
                                        <button type="button" class="btn btn-primary btn-sm add">Sửa</button>

                                    </td>
                                    </tr>
                                    
                                   
                                           
                                    </tbody>
                                    </table>
                            </div>
                        </div>
                                    
                                   
                        <div role="tabpanel" id="tab-6" class="tab-pane">
                            <div class="panel-body">

                                <strong>Tổng số người được đề xuất tôn vinh: {{list_40.length}}</strong>
                                

                                <table class="table table-striped table-bordered table-hover dataTables-example" >
                                    <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Họ tên</th>
                                        <th>Ngày sinh</th>
                                        <th>Nơi làm việc</th>
                                        <th>Số điện thoại</th>
                                        <th>Địa chỉ thường trú</th>
                                        <th>Số lần đã hiến</th>
                                        <th>Nhóm ABO</th>
                                        <th>Nhóm Rh</th>
                                        <th>Đã tôn vinh</th>
                                        <th>Sửa tôn vinh</th>
                                    </tr>
                                    </thead>
                                    <tbody ng-repeat="item in list_40">
                                    <tr class="gradeA" >
                                        <td>1</td>
                                        <td>{{item.HoTen}}</td>
                                        <td>{{item.NgaySinh}}</td>
                                        <td>{{item.NoiLamviec}}</td>
                                        <td>{{item.SDT}}</td>
                                        <td>{{item.DiaChi}}</td>
                                        <td>{{item.SoLanHien}}</td>
                                        <td>{{item.Nhom_ABO}}</td>
                                        <td>{{item.Nhom_Rh}}</td>
                                        <td>
                                        </td>
                                        <td>
                                            <select class="mtv" disabled="true">
                                            <option>Không tôn vinh</option>
                                            <option >Mức 5</option>
                                            <option>Mức 10</option>
                                            <option>Mức 15</option>
                                            <option>Mức 20</option>
                                            <option>Mức 30</option>
                                            <option selected="selected">Mức 40</option>
                                            <option>Mức 50</option>
                                            <option>Mức 60</option>
                                            <option>Mức 70</option>
                                            <option>Mức 80</option>
                                            <option>Mức 90</option>
                                            <option>Mức 100</option>
                                            
                                        </select>
                                        <br/>
                                        <button type="button" class="btn btn-primary btn-sm add">Sửa</button>

                                    </td>
                                    </tr>


                                    <div role="tabpanel" id="tab-7" class="tab-pane">
                            <div class="panel-body">

                                <strong>Tổng số người được đề xuất tôn vinh: {{list_50.length}}</strong>
                                

                                <table class="table table-striped table-bordered table-hover dataTables-example" >
                                    <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Họ tên</th>
                                        <th>Ngày sinh</th>
                                        <th>Nơi làm việc</th>
                                        <th>Số điện thoại</th>
                                        <th>Địa chỉ thường trú</th>
                                        <th>Số lần đã hiến</th>
                                        <th>Nhóm ABO</th>
                                        <th>Nhóm Rh</th>
                                        <th>Đã tôn vinh</th>
                                        <th>Sửa tôn vinh</th>
                                    </tr>
                                    </thead>
                                    <tbody ng-repeat="item in list_50">
                                    <tr class="gradeA" >
                                        <td>1</td>
                                        <td>{{item.HoTen}}</td>
                                        <td>{{item.NgaySinh}}</td>
                                        <td>{{item.NoiLamviec}}</td>
                                        <td>{{item.SDT}}</td>
                                        <td>{{item.DiaChi}}</td>
                                        <td>{{item.SoLanHien}}</td>
                                        <td>{{item.Nhom_ABO}}</td>
                                        <td>{{item.Nhom_Rh}}</td>
                                        <td>
                                        </td>
                                        <td>
                                            <select class="mtv" disabled="true">
                                            <option>Không tôn vinh</option>
                                            <option >Mức 5</option>
                                            <option>Mức 10</option>
                                            <option>Mức 15</option>
                                            <option>Mức 20</option>
                                            <option>Mức 30</option>
                                            <option>Mức 40</option>
                                            <option selected="selected">Mức 50</option>
                                            <option>Mức 60</option>
                                            <option>Mức 70</option>
                                            <option>Mức 80</option>
                                            <option>Mức 90</option>
                                            <option>Mức 100</option>
                                            
                                        </select>
                                        <br/>
                                        <button type="button" class="btn btn-primary btn-sm add">Sửa</button>

                                    </td>
                                    </tr>


                                <div role="tabpanel" id="tab-8" class="tab-pane">
                            <div class="panel-body">

                                <strong>Tổng số người được đề xuất tôn vinh: {{list_60.length}}</strong>
                                

                                <table class="table table-striped table-bordered table-hover dataTables-example" >
                                    <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Họ tên</th>
                                        <th>Ngày sinh</th>
                                        <th>Nơi làm việc</th>
                                        <th>Số điện thoại</th>
                                        <th>Địa chỉ thường trú</th>
                                        <th>Số lần đã hiến</th>
                                        <th>Nhóm ABO</th>
                                        <th>Nhóm Rh</th>
                                        <th>Đã tôn vinh</th>
                                        <th>Sửa tôn vinh</th>
                                    </tr>
                                    </thead>
                                    <tbody ng-repeat="item in list_60">
                                    <tr class="gradeA" >
                                        <td>1</td>
                                        <td>{{item.HoTen}}</td>
                                        <td>{{item.NgaySinh}}</td>
                                        <td>{{item.NoiLamviec}}</td>
                                        <td>{{item.SDT}}</td>
                                        <td>{{item.DiaChi}}</td>
                                        <td>{{item.SoLanHien}}</td>
                                        <td>{{item.Nhom_ABO}}</td>
                                        <td>{{item.Nhom_Rh}}</td>
                                        <td>
                                        </td>
                                        <td>
                                            <select class="mtv" disabled="true">
                                            <option>Không tôn vinh</option>
                                            <option >Mức 5</option>
                                            <option>Mức 10</option>
                                            <option>Mức 15</option>
                                            <option>Mức 20</option>
                                            <option>Mức 30</option>
                                            <option>Mức 40</option>
                                            <option>Mức 50</option>
                                            <option selected="selected">Mức 60</option>
                                            <option>Mức 70</option>
                                            <option>Mức 80</option>
                                            <option>Mức 90</option>
                                            <option>Mức 100</option>
                                            
                                        </select>
                                        <br/>
                                        <button type="button" class="btn btn-primary btn-sm add">Sửa</button>

                                    </td>
                                    </tr>

                                <div role="tabpanel" id="tab-9" class="tab-pane">
                            <div class="panel-body">

                                <strong>Tổng số người được đề xuất tôn vinh: {{list_70.length}}</strong>
                                

                                <table class="table table-striped table-bordered table-hover dataTables-example" >
                                    <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Họ tên</th>
                                        <th>Ngày sinh</th>
                                        <th>Nơi làm việc</th>
                                        <th>Số điện thoại</th>
                                        <th>Địa chỉ thường trú</th>
                                        <th>Số lần đã hiến</th>
                                        <th>Nhóm ABO</th>
                                        <th>Nhóm Rh</th>
                                        <th>Đã tôn vinh</th>
                                        <th>Sửa tôn vinh</th>
                                    </tr>
                                    </thead>
                                    <tbody ng-repeat="item in list_70">
                                    <tr class="gradeA" >
                                        <td>1</td>
                                        <td>{{item.HoTen}}</td>
                                        <td>{{item.NgaySinh}}</td>
                                        <td>{{item.NoiLamviec}}</td>
                                        <td>{{item.SDT}}</td>
                                        <td>{{item.DiaChi}}</td>
                                        <td>{{item.SoLanHien}}</td>
                                        <td>{{item.Nhom_ABO}}</td>
                                        <td>{{item.Nhom_Rh}}</td>
                                        <td>
                                        </td>
                                        <td>
                                            <select class="mtv" disabled="true">
                                            <option>Không tôn vinh</option>
                                            <option >Mức 5</option>
                                            <option>Mức 10</option>
                                            <option>Mức 15</option>
                                            <option>Mức 20</option>
                                            <option>Mức 30</option>
                                            <option>Mức 40</option>
                                            <option>Mức 50</option>
                                            <option>Mức 60</option>
                                            <option selected="selected">Mức 70</option>
                                            <option>Mức 80</option>
                                            <option>Mức 90</option>
                                            <option>Mức 100</option>
                                            
                                        </select>
                                        <br/>
                                        <button type="button" class="btn btn-primary btn-sm add">Sửa</button>

                                    </td>
                                    </tr>
                                    
                                    <div role="tabpanel" id="tab-10" class="tab-pane">
                            <div class="panel-body">

                                <strong>Tổng số người được đề xuất tôn vinh: {{list_80.length}}</strong>
                                

                                <table class="table table-striped table-bordered table-hover dataTables-example" >
                                    <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Họ tên</th>
                                        <th>Ngày sinh</th>
                                        <th>Nơi làm việc</th>
                                        <th>Số điện thoại</th>
                                        <th>Địa chỉ thường trú</th>
                                        <th>Số lần đã hiến</th>
                                        <th>Nhóm ABO</th>
                                        <th>Nhóm Rh</th>
                                        <th>Đã tôn vinh</th>
                                        <th>Sửa tôn vinh</th>
                                    </tr>
                                    </thead>
                                    <tbody ng-repeat="item in list_80">
                                    <tr class="gradeA" >
                                        <td>1</td>
                                        <td>{{item.HoTen}}</td>
                                        <td>{{item.NgaySinh}}</td>
                                        <td>{{item.NoiLamviec}}</td>
                                        <td>{{item.SDT}}</td>
                                        <td>{{item.DiaChi}}</td>
                                        <td>{{item.SoLanHien}}</td>
                                        <td>{{item.Nhom_ABO}}</td>
                                        <td>{{item.Nhom_Rh}}</td>
                                        <td>
                                        </td>
                                        <td>
                                            <select class="mtv" disabled="true">
                                            <option>Không tôn vinh</option>
                                            <option >Mức 5</option>
                                            <option>Mức 10</option>
                                            <option>Mức 15</option>
                                            <option>Mức 20</option>
                                            <option>Mức 30</option>
                                            <option>Mức 40</option>
                                            <option>Mức 50</option>
                                            <option>Mức 60</option>
                                            <option>Mức 70</option>
                                            <option selected="selected">Mức 80</option>
                                            <option>Mức 90</option>
                                            <option>Mức 100</option>
                                            
                                        </select>
                                        <br/>
                                        <button type="button" class="btn btn-primary btn-sm add">Sửa</button>

                                    </td>
                                    </tr>
                                    <div role="tabpanel" id="tab-11" class="tab-pane">
                            <div class="panel-body">

                                <strong>Tổng số người được đề xuất tôn vinh: {{list_90.length}}</strong>
                                

                                <table class="table table-striped table-bordered table-hover dataTables-example" >
                                    <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Họ tên</th>
                                        <th>Ngày sinh</th>
                                        <th>Nơi làm việc</th>
                                        <th>Số điện thoại</th>
                                        <th>Địa chỉ thường trú</th>
                                        <th>Số lần đã hiến</th>
                                        <th>Nhóm ABO</th>
                                        <th>Nhóm Rh</th>
                                        <th>Đã tôn vinh</th>
                                        <th>Sửa tôn vinh</th>
                                    </tr>
                                    </thead>
                                    <tbody ng-repeat="item in list_90">
                                    <tr class="gradeA" >
                                        <td>1</td>
                                        <td>{{item.HoTen}}</td>
                                        <td>{{item.NgaySinh}}</td>
                                        <td>{{item.NoiLamviec}}</td>
                                        <td>{{item.SDT}}</td>
                                        <td>{{item.DiaChi}}</td>
                                        <td>{{item.SoLanHien}}</td>
                                        <td>{{item.Nhom_ABO}}</td>
                                        <td>{{item.Nhom_Rh}}</td>
                                        <td>
                                        </td>
                                        <td>
                                            <select class="mtv" disabled="true">
                                            <option>Không tôn vinh</option>
                                            <option >Mức 5</option>
                                            <option>Mức 10</option>
                                            <option>Mức 15</option>
                                            <option>Mức 20</option>
                                            <option>Mức 30</option>
                                            <option>Mức 40</option>
                                            <option>Mức 50</option>
                                            <option>Mức 60</option>
                                            <option>Mức 70</option>
                                            <option>Mức 80</option>
                                            <option selected="selected">Mức 90</option>
                                            <option>Mức 100</option>
                                            
                                        </select>
                                        <br/>
                                        <button type="button" class="btn btn-primary btn-sm add">Sửa</button>

                                    </td>
                                    </tr>
                                    
                                   
                                           
                                    </tbody>
                                    </table>
                            </div>
                        </div>



                        <div role="tabpanel" id="tab-12" class="tab-pane">
                            <div class="panel-body">

                                <strong>Tổng số người được đề xuất tôn vinh: {{list_100.length}}</strong>
                                

                                <table class="table table-striped table-bordered table-hover dataTables-example" >
                                    <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Họ tên</th>
                                        <th>Ngày sinh</th>
                                        <th>Nơi làm việc</th>
                                        <th>Số điện thoại</th>
                                        <th>Địa chỉ thường trú</th>
                                        <th>Số lần đã hiến</th>
                                        <th>Nhóm ABO</th>
                                        <th>Nhóm Rh</th>
                                        <th>Đã tôn vinh</th>
                                        <th>Sửa tôn vinh</th>
                                    </tr>
                                    </thead>
                                    <tbody ng-repeat="item in list_100">
                                    <tr class="gradeA" >
                                        <td>1</td>
                                        <td>{{item.HoTen}}</td>
                                        <td>{{item.NgaySinh}}</td>
                                        <td>{{item.NoiLamviec}}</td>
                                        <td>{{item.SDT}}</td>
                                        <td>{{item.DiaChi}}</td>
                                        <td>{{item.SoLanHien}}</td>
                                        <td>{{item.Nhom_ABO}}</td>
                                        <td>{{item.Nhom_Rh}}</td>
                                        <td>
                                        </td>
                                        <td>
                                            <select class="mtv" disabled="true">
                                            <option>Không tôn vinh</option>
                                            <option >Mức 5</option>
                                            <option>Mức 10</option>
                                            <option>Mức 15</option>
                                            <option>Mức 20</option>
                                            <option>Mức 30</option>
                                            <option>Mức 40</option>
                                            <option>Mức 50</option>
                                            <option>Mức 60</option>
                                            <option>Mức 70</option>
                                            <option>Mức 80</option>
                                            <option>Mức 90</option>
                                            <option selected="selected">Mức 100</option>
                                            
                                        </select>
                                        <br/>
                                        <button type="button" class="btn btn-primary btn-sm add">Sửa</button>

                                    </td>
                                    </tr>
                                    
                                   
                                           
                                    </tbody>
                                    </table>
                            </div>
                        </div>        
                                   
                                           
                                    </tbody>
                                    </table>
                            </div>
                        </div>       
                                           
                                    </tbody>
                                    </table>
                            </div>
                        </div>    
                                   
                                           
                                    </tbody>
                                    </table>
                            </div>
                        </div>    
                                   
                                           
                                    </tbody>
                                    </table>
                            </div>
                        </div>

                                   
                                           
                                    </tbody>
                                    </table>
                            </div>
                        </div>












                
                        
                        
                    </div>


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
