<!DOCTYPE html>
<html lang="en"  ng-app="ket_qua_import_benh_vien-app">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link href="<?php echo asset('template/font-awesome/css/font-awesome.css');?>" rel="stylesheet">

    <link href="<?php echo asset('template/css/plugins/dataTables/datatables.min.css');?>" rel="stylesheet">

    <link href="<?php echo asset('template/css/animate.css');?>" rel="stylesheet">
    <link href="<?php echo asset('template/css/style.css');?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo asset('template/css/quanlytonvinh.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo asset('template/css/menu.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo asset('template/css/header.css');?>">
    <!-- Load Bootstrap CSS -->
    <link type="text/css" rel="stylesheet" href="<?php echo asset('template/template/css/bootstrap.min.css');?>" />
    <!-- <link type="text/css" rel="stylesheet" href="<?php echo asset('template/template/css/style.css');?>" /> -->

    <script type="text/javascript" src="<?php echo asset('app/lib/angular.min.js') ; ?>"></script>
    <script type="text/javascript" src="<?php echo asset('app/ket_qua_import_benh_vien.js') ; ?>"></script>
</head>

<body ng-controller="ket_qua_import_benh_vienController">
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
        <div class="form-tt">
            <h2>
                KẾT QUẢ IMPORT
            </h2>
            <table class="center">
                <tr>
                    <td class="lb">
                       Số người được cập nhật: 
                    </td>
                    <td>
                        {{count_capnhat}}
                     </td>
                </tr>
                <tr>
                    <td class="lb">
                       Số người được thêm mới: 
                    </td>
                    <td>
                        {{count_themmoi}} 
                     </td>
                </tr>
                <tr>
                    <td class="lb">
                       Số người cần xử lý: 
                    </td>
                    <td>
                        {{count_xuly}} 
                     </td>
                </tr>
            </table>
            
        </div>
        
        <div class="ibox-content">

            <div class="table-responsive">
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
                    <th></th>
                </tr>
                </thead>
                <tbody >
                <tr class="gradeA" ng-repeat="item in listnguoixuly">
                    <td>1<img class="ic" src="<?php echo asset('template/image/exel.png');?>"></td>
                    <td>{{item.HoTen}}</td>
                    <td>{{item.NgaySinh}}</td>
                    <td>{{item.NoiLamviec}}</td>
                    <td>{{item.SDT}}</td>
                    <td>{{item.DiaChi}}</td>
                    <td>{{item.SoLanHien}}</td>
                    <td>{{item.Nhom_ABO}}</td>
                    <td>{{item.Nhom_Rh}}</td>
                    <td><button type="button" id="btn-add" ng-click="edit(item)" class="btn btn-primary btn-sm sb">Edit</button></td>
                    
                </tr>
                
               
                </tbody>
                
                </table>
            </div>


        </div>
     
    </form>

        <!-- Modal -->
        <div class="modal fade" tabindex="-1" role="dialog" id="myModal">
            <div class="modal-dialog" style="width: 1300px">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Modal title</h4>
                    </div>
                    <div class="modal-body">
                    <div class="table-responsive">
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
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr class="gradeA">
                    <td>1<img class="ic" src="<?php echo asset('template/image/exel.png');?>"></td>
                    <td>{{nguoi_hien.HoTen}}</td>
                    <td>{{nguoi_hien.NgaySinh}}</td>
                    <td>{{nguoi_hien.NoiLamviec}}</td>
                    <td>{{nguoi_hien.SDT}}</td>
                    <td>{{nguoi_hien.DiaChi}}</td>
                    <td>{{nguoi_hien.SoLanHien}}</td>
                    <td>{{nguoi_hien.Nhom_ABO}}</td>
                    <td>{{nguoi_hien.Nhom_Rh}}</td>
                    <td>Chọn</td>
                </tr>
                <tr class="gradeB b" style="background: white;" ng-repeat="item in list">
                    <td>1<img class="ic" src="<?php echo asset('template/image/database_16px.png');?>"></td>
                    <td>-</td>
                    <td>-</td>
                    <td>{{item.NoiLamviec}}</td>
                    <td>{{item.SDT}}</td>
                    <td>{{item.DiaChi}}</td>
                    <td>{{item.SoLanHien}}</td>
                    <td>-</td>
                    <td>-</td>
                    <td>
                        <!-- <input type="radio"  name="select" ng-value="{{item.Id}}" ng-model="select"/> -->
                        <button type="button" class="btn btn-primary"  style="{{style}}" ng-click="import(nguoi_hien.Id,item.Id)">Import</button>
                        
                    </td>
                </tr>
                
               
               
                </tbody>
                
                </table>
            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary"  style="{{style}}" ng-click="delete(nguoi_hien)">Delete</button>
                        
                    </div>
                </div>
                
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
    </div>

    <!-- Load Bootstrap JS -->
    <script type="text/javascript" src="<?php echo asset('template/template/js/jquery.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo asset('template/template/js/bootstrap.min.js');?>"></script>
    
</body>

</html>


