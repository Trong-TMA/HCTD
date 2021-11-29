<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" ng-app = "quan_ly_import_ton_vinh_gia_dinh-app">
<head>
    <title></title>
    <style type="text/css">
        body
        {
            font-family: Arial;
            font-size: 10pt;
        }
        table
        {
            border: 1px solid #ccc;
            border-collapse: collapse;
        }
        table th
        {
            background-color: #F7F7F7;
            color: #333;
            font-weight: bold;
        }
        table th, table td
        {
            padding: 5px;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body ng-controller = "quan_ly_import_ton_vinh_gia_dinhController">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.9/angular.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/danialfarid-angular-file-upload/12.2.13/ng-file-upload.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.13.5/xlsx.full.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.13.5/jszip.js"></script>
    <script type="text/javascript" src="<?php echo asset('app/quan_ly_import_ton_vinh_gia_dinh.js') ; ?>"></script>
    <div>
        <input type="file" ngf-select="SelectFile($file)" />
        <input type="button" value="Upload" ng-click="Upload()" />
        <hr />
        <table id="tblCustomers" cellpadding="0" cellspacing="0" ng-show="IsVisible">
            <tr>
                <th>TT</th>
                <th>Họ Tên</th>
                <th>Năm Sinh</th>
                <th>Nghề Nghiệp</th>
                <th>Địa Chỉ</th>
                <th>Số Lần Hiến</th>
            </tr>
            <tbody ng-repeat="m in Customers">
                <tr>
                    <td>{{m.TT}}</td>
                    <td>{{m.HoTen}}</td>
                    <td>{{m.NamSinh}}</td>
                    <td>{{m.NgheNghiep}}</td>
                    <td>{{m.DiaChi}}</td>
                    <td>{{m.SoLanHien}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
