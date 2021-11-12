<!DOCTYPE html>
<html ng-app="ton_vinh_tu_dong-app">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <!-- <link href="<?php echo asset('template/css/bootstrap.min.css');?>" rel="stylesheet"> -->
    <link href="<?php echo asset('template/font-awesome/css/font-awesome.css');?>" rel="stylesheet">

    <link href="<?php echo asset('template/css/plugins/dataTables/datatables.min.css');?>" rel="stylesheet">

    <link href="<?php echo asset('template/css/animate.css');?>" rel="stylesheet">
    <link href="<?php echo asset('template/css/style.css');?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo asset('template/css/quanlytonvinh.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo asset('template/css/menu.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo asset('template/css/header.css');?>">

    <link type="text/css" rel="stylesheet" href="<?php echo asset('template/template/css/bootstrap.min.css');?>" />

    <script type="text/javascript" src="<?php echo asset('app/lib/angular.min.js') ; ?>"></script>
    <script type="text/javascript" src="<?php echo asset('app/ton_vinh_tu_dong.js') ; ?>"></script>

</head>

<body ng-controller="ton_vinh_tu_dongController">
    <div>
    <div>

        <img src="<?php echo asset('template/image/banner-hctd-sau.png');?>"/>
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
    <form method="get">
        <h2>TÔN VINH TỰ ĐỘNG</h2>

        <div id="ipall">
            Thời gian tôn vinh:   
                        <select class="" ng-model="nam_tonvinh" ng-change="change_nam(nam_tonvinh)">
                            <option value="-1">Năm</option>
                            <option value="0">Năm {{nam1}}</option>
                            <option value="1">Năm {{nam2}}</option>
                            <option value="2">Năm {{nam3}}</option>
                        </select> 
                        <select class="" style="" ng-model="thang" ng-change="change(thang,nam_tonvinh)">
                            <option value="0">Tháng</option>
                            <option value="1">Tháng 1</option>
                            <option value="2">Tháng 2</option>
                            <option value="3">Tháng 3</option>
                            <option value="4">Tháng 4</option>
                            <option value="5">Tháng 5</option>
                            <option value="6">Tháng 6</option>
                            <option value="7">Tháng 7</option>
                            <option value="8">Tháng 8</option>
                            <option value="9">Tháng 9</option>
                            <option value="10">Tháng 10</option>
                            <option value="11">Tháng 11</option>
                            <option value="12">Tháng 12</option>
                        </select> 
                        
                        <select class="" ng-model="ngay" ng-change="change_ngay(ngay)">
                            <option ng-repeat="item in list_ngay" value="{{item}}">Ngày {{item}}</option>
                        </select> 
                        
        </div>
        <div class="ibox-content">

            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover dataTables-example" >
                <thead>
                <tr>
                    <th style="text-align: center;">STT</th>
                    <th style="text-align: center;">Họ tên</th>
                    <th style="text-align: center;">Ngày sinh</th>
                    <th style="text-align: center;">Số điện thoại</th>
                    <th style="text-align: center;">Địa chỉ thường trú</th>
                    <th style="text-align: center;">Số lần</th>
                    <th style="text-align: center;">Nhóm ABO</th>
                    <th style="text-align: center;">Đề xuất tôn vinh</th>
                    <th style="text-align: center;"></th>
                </tr>
                </thead>
                <tbody>
                <tr class="gradeA" ng-repeat="item in list_tonvinh" >
                    <td style="text-align: center;"><img class="ic" src="<?php echo asset('template/image/exel.png');?>"></td>
                    <td style="text-align: center;">{{item.HoTen}}</td>
                    <td style="text-align: center;">{{item.NgaySinh}}</td>
                    <td style="text-align: center;">{{item.SDT}}</td>
                    <td style="text-align: center;">{{item.DiaChi}}</td>
                    <td style="text-align: center;">{{item.MucTonVinh}}</td>
                    <td style="text-align: center;">{{item.Nhom_ABO}}</td>
                    <td style="text-align: center;">{{item.MucTonVinh}}</td>
                    <td style="text-align: center;">
                        <button type="button" ng-click="edit(item)" class="btn btn-primary btn-sm sb">Edit</button>
                    </td>
                </tr>
              
               
                </tbody>
                
                   
                   
                  
                    
                   
                   
                   
                </table>
             </div>

         </div>
    </form>
    <!-- Modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="myModal">
            <div class="modal-dialog" style="width: 1550px;">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Modal title</h4>
                    </div>
                    <div class="modal-body">
                    <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover dataTables-example" >
                <thead>
                <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover dataTables-example" >
                <thead>
                <tr>
                    <th style="text-align: center;">STT</th>
                    <th style="text-align: center;">Họ tên</th>
                    <th style="text-align: center;">Ngày sinh</th>
                    <th style="text-align: center;">Số điện thoại</th>
                    <th style="text-align: center;">Địa chỉ thường trú</th>
                    <th style="text-align: center;">Số lần</th>
                    <th style="text-align: center;">Nhóm ABO</th>
                    <th style="text-align: center;">Nhóm Rh</th>
                    <th style="text-align: center;">Đề xuất tôn vinh</th>
                    <th style="text-align: center;">Đã tôn vinh</th>
                    <th style="text-align: center;">Tình trạng</th>
                    <th style="text-align: center;"></th>
                </tr>
                </thead>
                <tbody>
                <tr class="gradeA">
                    <td style="text-align: center;">1<img class="ic" src="<?php echo asset('template/image/exel.png');?>"></td>
                    <td style="text-align: center;">{{nguoi_tonvinh.HoTen}}</td>
                    <td style="text-align: center;">{{nguoi_tonvinh.NgaySinh}}</td>
                    <td style="text-align: center;">{{nguoi_tonvinh.SDT}}</td>
                    <td style="text-align: center;">{{nguoi_tonvinh.DiaChi}}</td>
                    <td style="text-align: center;">-</td>
                    <td style="text-align: center;">{{nguoi_tonvinh.Nhom_ABO}}</td>
                    <td style="text-align: center;">-</td>
                    <td style="text-align: center;">{{nguoi_tonvinh.MucTonVinh}}</td>
                    <td style="text-align: center;">-</td>
                    <td style="text-align: center;"><img src="<?php echo asset('template/image/{{img_tinhtrang}}');?>" ng-if="danhdau == 3"/></td>
                    <td style="text-align: center;"><button type="button" class="btn btn-primary btn-sm sb" ng-if="danhdau == 3">Apply</button></td>
                </tr>
                <tr class="gradeB b" style="background: white;" ng-repeat="item in list_tonvinh_1">
                    <td style="text-align: center;">1<img class="ic" src="<?php echo asset('template/image/database_16px.png');?>"></td>
                    <td></td>
                    <td></td>
                    <td style="text-align: center;">{{item.SDT}}</td>
                    <td style="text-align: center;">{{item.DiaChi}}</td>
                    <td style="text-align: center;">{{item.SoLanHien}}</td>
                    <td style="text-align: center;">{{item.Nhom_ABO}}</td>
                    <td style="text-align: center;">{{item.Nhom_Rh}}</td>
                    <td style="text-align: center;">
                        <select class="mtv" ng-model="tonvinhmuc">
                            <option value="0">Không tôn vinh</option>
                            <option value="5">Mức 5</option>
                            <option value="10" >Mức 10</option>
                            <option value="15">Mức 15</option>
                            <option value="20">Mức 20</option>
                            <option value="30">Mức 30</option>
                            <option value="40">Mức 40</option>
                            <option value="50">Mức 50</option>
                            <option value="60">Mức 60</option>
                            <option value="70">Mức 70</option>
                            <option value="80">Mức 80</option>
                            <option value="90">Mức 90</option>
                            <option value="100">Mức 100</option>
                        </select> 
                        
                    </td>
                    <td style="text-align: center;"><select class="mtv">
                            <option value="5" ng-if="item.Muc_5 != null">Mức 5: {{item.Muc_5}}</option>
                            <option value="10" ng-if="item.Muc_10 != null">Mức 10: {{item.Muc_10}}</option>
                            <option value="15" ng-if="item.Muc_15 != null">Mức 15: {{item.Muc_15}}</option>
                            <option value="20" ng-if="item.Muc_20 != null">Mức 20: {{item.Muc_20}}</option>
                            <option value="30" ng-if="item.Muc_30 != null">Mức 30: {{item.Muc_30}}</option>
                            <option value="40" ng-if="item.Muc_40 != null">Mức 40: {{item.Muc_40}}</option>
                            <option value="50" ng-if="item.Muc_50 != null">Mức 50: {{item.Muc_50}}</option>
                            <option value="60" ng-if="item.Muc_60 != null">Mức 60: {{item.Muc_60}}</option>
                            <option value="70" ng-if="item.Muc_70 != null">Mức 70: {{item.Muc_70}}</option>
                            <option value="80" ng-if="item.Muc_80 != null">Mức 80: {{item.Muc_80}}</option>
                            <option value="90" ng-if="item.Muc_90 != null">Mức 90: {{item.Muc_90}}</option>
                            <option value="100" ng-if="item.Muc_100 != null">Mức 100: {{item.Muc_100}}</option>
                        </select> </td>
                    <td style="text-align: center;"><img   src="<?php echo asset('template/image/{{tinhtrang}}');?>" class="tv"/></td>
                    <td  style="text-align: center;">
                        <button type="button" class="btn btn-primary btn-sm sb" >Apply</button>
                    </td>
                </tr>     
               
                </tbody>
                
                    
               
                   
                </table>
             </div>
                
               
               
                </tbody>
                
                </table>
            </div>
            <div class="modal-footer">
                        <button type="button" class="btn btn-primary"  style="{{style}}" ng-click="delete(nguoi_hien)">Delete</button>
                        <button type="button" class="btn btn-primary"  style="{{style}}" ng-click="Search()" >Search</button>
                        
                    </div>
                    </div>
                    
                </div>
                
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
</div>
 <script type="text/javascript" src="<?php echo asset('template/template/js/jquery.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo asset('template/template/js/bootstrap.min.js');?>"></script>
    
</body>

</html>
