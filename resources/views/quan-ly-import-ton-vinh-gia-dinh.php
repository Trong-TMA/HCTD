<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" ng-app = "quan_ly_import_ton_vinh_gia_dinh-app">
<head>
    <title></title>
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
    
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.9/angular.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/danialfarid-angular-file-upload/12.2.13/ng-file-upload.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.13.5/xlsx.full.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.13.5/jszip.js"></script>
    <script type="text/javascript" src="<?php echo asset('app/quan_ly_import_ton_vinh_gia_dinh.js') ; ?>"></script>
</head>
<body ng-controller = "quan_ly_import_ton_vinh_gia_dinhController">
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
    <form role="form" id="form_sample_2" id="container" data-ng-submit="submit1()">
   

        <div>
            <input type="file"  class="btn btn-primary"  file-reader="fileContent" ng-model="fileContent" ngf-select="SelectFile($file)" />
            <input type="button" value="Upload" ng-click="Upload()" />

            <br/>
            <table id="tblCustomers" cellpadding="0" cellspacing="0" ng-show="IsVisible" class="table table-striped table-bordered table-hover dataTables-example">
                <tr>
                    <th rowspan = "3">TT</th>
                    <th rowspan = "3">Họ Tên</th>
                    <th rowspan = "3">Năm Sinh</th>
                    <th rowspan = "3">Nghề Nghiệp</th>
                    <th rowspan = "3">Địa Chỉ</th>
                    <th rowspan = "3">Số Lần Hiến</th>
                    <th rowspan = "3">Tổng cộng gia đình</th>
                    <th rowspan = "3">Quan Hệ</th>
                    <th colspan = "4">BCĐ VĐHMTN tỉnh</th>
                    <th rowspan = "3">Tổng</th>
                </tr>
                <tr>
                    <th>Cúp thủy tinh màu đồng</th>
                    <th>Cúp thủy tinh màu bạc</th>
                    <th>Cúp thủy tinh màu vàng</th>
                    <th>Cúp thủy tinh màu Kim cương</th>
                </tr>
                <tr>
                    <th>5 lần</th>
                    <th>10 lần</th>
                    <th>15 lần</th>
                    <th>20 lần</th>
                </tr>
                <tbody ng-repeat="m in Customers" ng-model= "getTT(m.TT)">
                    <tr>
                        <td>{{ID}}</td>
                        <td>{{m.HoTen}}</td>
                        <td>{{m.NamSinh}}</td>
                        <td>{{m.NgheNghiep}}</td>
                        <td>{{m.DiaChi}}</td>
                        <td>{{m.SoLanHien}}</td>
                        <td></td>
                        <td>{{m.QuanHe}}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            
        </div>
    </form>
    
</body>
</html>
