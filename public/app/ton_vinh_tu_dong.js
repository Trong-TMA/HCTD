var app = angular.module('ton_vinh_tu_dong-app', []).constant('API', 'http://localhost/HCTD/public/');



app.controller('ton_vinh_tu_dongController', function($scope, $http, API, $rootScope, $location, $window) {
    var d = new Date();
    $nam = d.getFullYear();
    $scope.nam1 = $nam;
    $scope.nam2 = $nam + 1;
    $scope.nam3 = $nam + 2;
    $scope.i = 0;
    $scope.thang = "0";
    $scope.nam_tonvinh = "-1";
    $scope.ngay = "";
    $scope.danhdau = 0;
    $scope.tinhtrang = "";
    $scope.img_tinhtrang = "high_priority_48px.png";

    $scope.list_apply = [];
    $scope.list_radio = [];

    $http.get(API + 'getlistexceltonvinh').then(function(response) {
        $scope.list_tonvinh = response.data;
    });

    $http.get(API + 'getlist_nguoihienmau_vs1').then(function(response) {
        $scope.list_tonvinh_vs1 = response.data;
        for ($i = 0; $i < response.data.length; $i++) {
            console.log(response.data[$i].list_hienmau.TinhTrang);
            if (response.data[$i].list_hienmau.TinhTrang == 0) {
                $scope.list_apply[response.data[$i].excel_tonvinh.Id] = "cursor: not-allowed; pointer-events: none;background-color: #ddd;background: #ddd;";
            } else {
                $scope.list_apply[response.data[$i].excel_tonvinh.Id] = "";
                $scope.list_radio[response.data[$i].excel_tonvinh.Id] = false;
            }

        }


    });

    $scope.Search = function() {
        $scope.thang = "0";

    };

    $scope.allpy_All = function() {
        $http.get(API + 'get_tonvinh').then(function(response) {
            for ($i = 0; $i < response.data.length; $i++) {
                $scope.list_apply[response.data[$i].Id_excel] = "cursor: not-allowed; pointer-events: none;background-color: #ddd;background: #ddd;";
            }
            $http.get(API + 'luucsdl_vs1').then(function(response) {
                console.log("thành công!");
            });
        });


    };


    $scope.search = function() {

        $(document).ready(function() {
            $('#myModal').modal('show')
        });


    };
    $scope.edit = function(item) {
        if ($scope.thang == "0" || $scope.nam_tonvinh == "-1" || $scope.ngay == "") {
            alert("Mời bạn chọn thời gian tôn vinh!");
            return;
        }
        $scope.nguoi_tonvinh = item;
        $http.get(API + 'getlist_nguoihienmau/' + item.HoTen + '/' + item.NgaySinh + '/' + item.Nhom_ABO).then(function(response) {
            // $tr = response.data[0];
            $scope.list_tonvinh_1 = response.data;
            if (response.data.length == 0) {
                $scope.danhdau = 3;
                $scope.tinhtrang = "";
                $scope.img_tinhtrang = "high_priority_48px.png";
            }
            $nguoihien = response.data[0];
            if (response.data.length == 1) {
                $http.get(API + 'tinhtrang_tonvinh/' + $nguoihien.Id + '/' + item.MucTonVinh).then(function(response) {
                    if (response.data == 0) {
                        $scope.tonvinhmuc = "0";
                        $scope.tinhtrang = "red_circle_48px.png";
                        return;
                    }
                    if (response.data == item.MucTonVinh) {
                        $scope.tonvinhmuc = String(response.data);
                        $scope.danhdau = 0;
                        $scope.tinhtrang = "green_circle_48px.png";
                        return;
                    }
                    if (response.data != item.MucTonVinh) {
                        $scope.danhdau = 0;
                        $scope.tonvinhmuc = String(response.data);
                        $scope.tinhtrang = "yellow_circle_48px.png";
                        return;
                    }

                });
            }
            $(document).ready(function() {
                $('#myModal').modal('show')
            });

        });

    };
    $scope.apply = function(item_excel) {
        alert(item_excel.Id);
        $http.get(API + 'luucsdl/' + item_excel.Id).then(function(response) {
            console.log(response.data);
            $scope.list_apply[item_excel.Id] = "cursor: not-allowed; pointer-events: none;background-color: #ddd;background: #ddd;";
            alert("trọng");
            $scope.list_radio[item_excel.Id] = true;
        });
    };
    $scope.luu_Api_TonVinh = function(item_excel, item_hienmau, muctonvinh) {
        $http.get(API + 'luu_api_tv/' + item_excel.Id + '/' + item_hienmau.Id + '/' + muctonvinh).then(function(response) {
            console.log("thành công");
            alert(item_excel);
        });
    };


    $scope.change_nam = function(item) {
        $scope.thang = "0";

    };
    $scope.change_radio = function() {
        alert("item_excel");
        alert("item_hienmau");


    };

    $scope.change = function(t, n) {

        if (n == "-1") {
            alert("Mời bạn chọn năm");
            $scope.thang = "0";
            return;
        }
        var d = new Date();
        na = d.getFullYear();
        if (n == "0")
            year = na;
        else if (n == "1")
            year = na + 1;
        else year = na + 2;

        $list = [];
        switch (t) {
            case '1':
                for ($i = 1; $i <= 31; $i++)
                    $list[$i] = $i;
                break;
            case '2':
                if (((year % 4 == 0) && (year % 100 != 0)) || (year % 400 == 0)) {
                    for ($i = 1; $i <= 29; $i++)
                        $list[$i] = $i;
                } else
                    for ($i = 1; $i <= 28; $i++)
                        $list[$i] = $i;
                break;
            case '3':
                for ($i = 1; $i <= 31; $i++)
                    $list[$i] = $i;
                break;
            case '4':
                for ($i = 1; $i <= 30; $i++)
                    $list[$i] = $i;
                break;
            case '5':
                for ($i = 1; $i <= 31; $i++)
                    $list[$i] = $i;
                break;
            case '6':
                for ($i = 1; $i <= 30; $i++)
                    $list[$i] = $i;
                break;
            case '7':
                for ($i = 1; $i <= 31; $i++)
                    $list[$i] = $i;
                break;
            case '8':
                for ($i = 1; $i <= 31; $i++)
                    $list[$i] = $i;
                break;
            case '9':
                for ($i = 1; $i <= 30; $i++)
                    $list[$i] = $i;
                break;
            case '10':
                for ($i = 1; $i <= 31; $i++)
                    $list[$i] = $i;
                break;
            case '11':
                for ($i = 1; $i <= 30; $i++)
                    $list[$i] = $i;
                break;
            case '12':
                for ($i = 1; $i <= 31; $i++)
                    $list[$i] = $i;
                break;

        }
        $scope.list_ngay = $list;

    };



});