var app = angular.module('quan_ly_import_ton_vinh-app', []).constant('API', 'http://localhost/HCTD/public/');



app.controller('quan_ly_import_ton_vinhController', function($scope, $http, API, $rootScope, $location, $window) {
    var d = new Date();
    $nam = d.getFullYear();
    $scope.nam1 = $nam;
    $scope.nam2 = $nam + 1;
    $scope.nam3 = $nam + 2;
    $scope.i = 0;
    $scope.thang = "0";
    $scope.nam_tonvinh = "-1";
    $scope.ngay = "";


    $scope.trong_2 = function(item) {
        alert(tr);
        $scope.thang = "0";

    };
    $scope.trong = function(t, n) {
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

    $scope.select_huyen = "0";
    $scope.tenfile = "";
    $scope.dis = 0;
    $http.get(API + 'get_donvi').then(function(response) {
        $scope.list_donvi = response.data;
    });

    $http.get(API + 'getlistexceltonvinh').then(function(response) {
        for ($i = 0; $i < response.data.length; $i++) {
            switch (response.data[$i].MaVung) {
                case 1:
                    $scope.style_1 = "cursor: not-allowed; pointer-events: none;background-color: #ddd;background: #ddd;";
                    $scope.dis_1 = 1;
                    $scope.tenfile_1 = response.data[$i].TenFile;
                    break;
                case 2:
                    $scope.style_2 = "cursor: not-allowed; pointer-events: none;background-color: #ddd;background: #ddd;";
                    $scope.dis_2 = 1;
                    $scope.tenfile_2 = response.data[$i].TenFile;
                    break;
                case 3:
                    $scope.style_3 = "cursor: not-allowed; pointer-events: none;background-color: #ddd;background: #ddd;";
                    $scope.dis_3 = 1;
                    $scope.tenfile_3 = response.data[$i].TenFile;
                    break;
                case 4:
                    $scope.style_4 = "cursor: not-allowed; pointer-events: none;background-color: #ddd;background: #ddd;";
                    $scope.dis_4 = 1;
                    $scope.tenfile_4 = response.data[$i].TenFile;
                    break;
                case 5:
                    $scope.style_5 = "cursor: not-allowed; pointer-events: none;background-color: #ddd;background: #ddd;";
                    $scope.dis_5 = 1;
                    $scope.tenfile_5 = response.data[$i].TenFile;
                    break;
                case 6:
                    $scope.style_6 = "cursor: not-allowed; pointer-events: none;background-color: #ddd;background: #ddd;";
                    $scope.dis_6 = 1;
                    $scope.tenfile_6 = response.data[$i].TenFile;
                    break;
                case 7:
                    $scope.style_7 = "cursor: not-allowed; pointer-events: none;background-color: #ddd;background: #ddd;";
                    $scope.dis_7 = 1;
                    $scope.tenfile_7 = response.data[$i].TenFile;
                    break;
                case 8:
                    $scope.style_8 = "cursor: not-allowed; pointer-events: none;background-color: #ddd;background: #ddd;";
                    $scope.dis_8 = 1;
                    $scope.tenfile_8 = response.data[$i].TenFile;
                    break;
                case 9:
                    $scope.style_9 = "cursor: not-allowed; pointer-events: none;background-color: #ddd;background: #ddd;";
                    $scope.dis_9 = 1;
                    $scope.tenfile_9 = response.data[$i].TenFile;
                    break;
                case 10:
                    $scope.style_10 = "cursor: not-allowed; pointer-events: none;background-color: #ddd;background: #ddd;";
                    $scope.dis_10 = 1;
                    $scope.tenfile_10 = response.data[$i].TenFile;
                    break;
                case 11:
                    $scope.style_11 = "cursor: not-allowed; pointer-events: none;background-color: #ddd;background: #ddd;";
                    $scope.dis_11 = 1;
                    $scope.tenfile_11 = response.data[$i].TenFile;
                    break;
                case 12:
                    $scope.style_12 = "cursor: not-allowed; pointer-events: none;background-color: #ddd;background: #ddd;";
                    $scope.dis_12 = 1;
                    $scope.tenfile_12 = response.data[$i].TenFile;
                    break;
                case 13:
                    $scope.style_13 = "cursor: not-allowed; pointer-events: none;background-color: #ddd;background: #ddd;";
                    $scope.dis_13 = 1;
                    $scope.tenfile_13 = response.data[$i].TenFile;
                case 14:
                    $scope.style_14 = "cursor: not-allowed; pointer-events: none;background-color: #ddd;background: #ddd;";
                    $scope.dis_14 = 1;
                    $scope.tenfile_14 = response.data[$i].TenFile;
                    break;
                case 15:
                    $scope.style_15 = "cursor: not-allowed; pointer-events: none;background-color: #ddd;background: #ddd;";
                    $scope.dis_15 = 1;
                    $scope.tenfile_15 = response.data[$i].TenFile;
                    break;
                case 16:
                    $scope.style_16 = "cursor: not-allowed; pointer-events: none;background-color: #ddd;background: #ddd;";
                    $scope.dis_16 = 1;
                    $scope.tenfile_16 = response.data[$i].TenFile;
                    break;
                case 17:
                    $scope.style_17 = "cursor: not-allowed; pointer-events: none;background-color: #ddd;background: #ddd;";
                    $scope.dis_17 = 1;
                    $scope.tenfile_17 = response.data[$i].TenFile;
                    break;
                case 18:
                    $scope.style_18 = "cursor: not-allowed; pointer-events: none;background-color: #ddd;background: #ddd;";
                    $scope.dis_18 = 1;
                    $scope.tenfile_18 = response.data[$i].TenFile;
                    break;
                case 19:
                    $scope.style_19 = "cursor: not-allowed; pointer-events: none;background-color: #ddd;background: #ddd;";
                    $scope.dis_19 = 1;
                    $scope.tenfile_19 = response.data[$i].TenFile;
                    break;

                case 20:
                    $scope.style_20 = "cursor: not-allowed; pointer-events: none;background-color: #ddd;background: #ddd;";
                    $scope.dis_20 = 1;
                    $scope.tenfile_20 = response.data[$i].TenFile;
                    break;
                case 21:
                    $scope.style_21 = "cursor: not-allowed; pointer-events: none;background-color: #ddd;background: #ddd;";
                    $scope.dis_21 = 1;
                    $scope.tenfile_21 = response.data[$i].TenFile;
                    break;
                case 22:
                    $scope.style_22 = "cursor: not-allowed; pointer-events: none;background-color: #ddd;background: #ddd;";
                    $scope.dis_22 = 1;
                    $scope.tenfile_22 = response.data[$i].TenFile;
                    break;
                case 23:
                    $scope.style_23 = "cursor: not-allowed; pointer-events: none;background-color: #ddd;background: #ddd;";
                    $scope.dis_23 = 1;
                    $scope.tenfile_23 = response.data[$i].TenFile;
                    break;
                case 24:
                    $scope.style_24 = "cursor: not-allowed; pointer-events: none;background-color: #ddd;background: #ddd;";
                    $scope.dis_24 = 1;
                    $scope.tenfile_24 = response.data[$i].TenFile;
                case 25:
                    $scope.style_25 = "cursor: not-allowed; pointer-events: none;background-color: #ddd;background: #ddd;";
                    $scope.dis_25 = 1;
                    $scope.tenfile_25 = response.data[$i].TenFile;
                    break;
                case 26:
                    $scope.style_26 = "cursor: not-allowed; pointer-events: none;background-color: #ddd;background: #ddd;";
                    $scope.dis_26 = 1;
                    $scope.tenfile_26 = response.data[$i].TenFile;
                    break;
                case 27:
                    $scope.style_27 = "cursor: not-allowed; pointer-events: none;background-color: #ddd;background: #ddd;";
                    $scope.dis_27 = 1;
                    $scope.tenfile_27 = response.data[$i].TenFile;
                    break;

            }

        }
    });

    $scope.change = function(select_huyen) {
        $http.get(API + 'count_mavung/' + select_huyen).then(function(response) {
            if (response.data != 0) {
                $scope.style = "cursor: not-allowed; pointer-events: none;background-color: #ddd;background: #ddd;";
                $scope.tenfile = response.data[0].TenFile;
                $scope.dis = 1;
            } else {
                $scope.style = "";
                $scope.tenfile = "";
                $scope.dis = 0;
            }
        });
    };
    $scope.import = function(select_huyen) {
        $http.get(API + 'count_mavung/' + select_huyen).then(function(response) {
            switch (select_huyen) {
                case 1:
                    var file = document.getElementById('file_1').files[0];
                    if (file == '' || file == null) {
                        alert('Bạn chưa chọn file!');
                        $scope.dis_1 = 0;
                    } else {
                        var formData = new FormData();
                        formData.append('file', file);
                        url = API + 'template/import_excel_ton_vinh.php'
                        $http.post(url, formData, {
                                transformRequest: angular.identity,
                                headers: { 'Content-Type': undefined, 'Process-Data': false }
                            })
                            .then(function() {
                                $http.get(API + 'update_mavung/' + select_huyen + '/' + file.name).then(function(response) {
                                    alert("Import thành công!");
                                    $scope.style_1 = "cursor: not-allowed; pointer-events: none;background-color: #ddd;background: #ddd;";
                                    $scope.dis_1 = 1;
                                    $scope.tenfile_1 = file.name;
                                });
                            })
                    }

                    break;
                case 2:
                    var file = document.getElementById('file_2').files[0];
                    if (file == '' || file == null) {
                        alert('Bạn chưa chọn file!');
                        $scope.dis_2 = 0;
                    } else {
                        var formData = new FormData();
                        formData.append('file', file);
                        url = API + 'template/import_excel_ton_vinh.php'
                        $http.post(url, formData, {
                                transformRequest: angular.identity,
                                headers: { 'Content-Type': undefined, 'Process-Data': false }
                            })
                            .then(function() {
                                $http.get(API + 'update_mavung/' + select_huyen + '/' + file.name).then(function(response) {
                                    alert("Import thành công!");
                                    $scope.style_2 = "cursor: not-allowed; pointer-events: none;background-color: #ddd;background: #ddd;";
                                    $scope.dis_2 = 1;
                                    $scope.tenfile_2 = file.name;
                                });
                            })
                    }
                    break;
                case 3:
                    var file = document.getElementById('file_3').files[0];
                    if (file == '' || file == null) {
                        alert('Bạn chưa chọn file!');
                        $scope.dis_3 = 0;
                    } else {
                        var formData = new FormData();
                        formData.append('file', file);
                        url = API + 'template/import_excel_ton_vinh.php'
                        $http.post(url, formData, {
                                transformRequest: angular.identity,
                                headers: { 'Content-Type': undefined, 'Process-Data': false }
                            })
                            .then(function() {
                                $http.get(API + 'update_mavung/' + select_huyen + '/' + file.name).then(function(response) {
                                    alert("Import thành công!");
                                    $scope.style_3 = "cursor: not-allowed; pointer-events: none;background-color: #ddd;background: #ddd;";
                                    $scope.dis_3 = 1;
                                    $scope.tenfile_3 = file.name;
                                });
                            })
                    }
                    break;
                case 4:
                    var file = document.getElementById('file_4').files[0];
                    if (file == '' || file == null) {
                        alert('Bạn chưa chọn file!');
                        $scope.dis_4 = 0;
                    } else {
                        var formData = new FormData();
                        formData.append('file', file);
                        url = API + 'template/import_excel_ton_vinh.php'
                        $http.post(url, formData, {
                                transformRequest: angular.identity,
                                headers: { 'Content-Type': undefined, 'Process-Data': false }
                            })
                            .then(function() {
                                $http.get(API + 'update_mavung/' + select_huyen + '/' + file.name).then(function(response) {
                                    alert("Import thành công!");
                                    $scope.style_4 = "cursor: not-allowed; pointer-events: none;background-color: #ddd;background: #ddd;";
                                    $scope.dis_4 = 1;
                                    $scope.tenfile_4 = file.name;
                                });
                            })
                    }
                    break;
                case 5:
                    var file = document.getElementById('file_5').files[0];
                    if (file == '' || file == null) {
                        alert('Bạn chưa chọn file!');
                        $scope.dis_5 = 0;
                    } else {
                        var formData = new FormData();
                        formData.append('file', file);
                        url = API + 'template/import_excel_ton_vinh.php'
                        $http.post(url, formData, {
                                transformRequest: angular.identity,
                                headers: { 'Content-Type': undefined, 'Process-Data': false }
                            })
                            .then(function() {
                                $http.get(API + 'update_mavung/' + select_huyen + '/' + file.name).then(function(response) {
                                    alert("Import thành công!");
                                    $scope.style_5 = "cursor: not-allowed; pointer-events: none;background-color: #ddd;background: #ddd;";
                                    $scope.dis_5 = 1;
                                    $scope.tenfile_5 = file.name;
                                });
                            })
                    }
                    break;
                case 6:
                    var file = document.getElementById('file_6').files[0];
                    if (file == '' || file == null) {
                        alert('Bạn chưa chọn file!');
                        $scope.dis_6 = 0;
                    } else {
                        var formData = new FormData();
                        formData.append('file', file);
                        url = API + 'template/import_excel_ton_vinh.php'
                        $http.post(url, formData, {
                                transformRequest: angular.identity,
                                headers: { 'Content-Type': undefined, 'Process-Data': false }
                            })
                            .then(function() {
                                $http.get(API + 'update_mavung/' + select_huyen + '/' + file.name).then(function(response) {
                                    alert("Import thành công!");
                                    $scope.style_6 = "cursor: not-allowed; pointer-events: none;background-color: #ddd;background: #ddd;";
                                    $scope.dis_6 = 1;
                                    $scope.tenfile_6 = file.name;
                                });
                            })
                    }
                    break;
                case 7:
                    var file = document.getElementById('file_7').files[0];
                    if (file == '' || file == null) {
                        alert('Bạn chưa chọn file!');
                        $scope.dis_7 = 0;
                    } else {
                        var formData = new FormData();
                        formData.append('file', file);
                        url = API + 'template/import_excel_ton_vinh.php'
                        $http.post(url, formData, {
                                transformRequest: angular.identity,
                                headers: { 'Content-Type': undefined, 'Process-Data': false }
                            })
                            .then(function() {
                                $http.get(API + 'update_mavung/' + select_huyen + '/' + file.name).then(function(response) {
                                    alert("Import thành công!");
                                    $scope.style_7 = "cursor: not-allowed; pointer-events: none;background-color: #ddd;background: #ddd;";
                                    $scope.dis_7 = 1;
                                    $scope.tenfile_7 = file.name;
                                });
                            })
                    }
                    break;
                case 8:
                    var file = document.getElementById('file_8').files[0];
                    if (file == '' || file == null) {
                        alert('Bạn chưa chọn file!');
                        $scope.dis_8 = 0;
                    } else {
                        var formData = new FormData();
                        formData.append('file', file);
                        url = API + 'template/import_excel_ton_vinh.php'
                        $http.post(url, formData, {
                                transformRequest: angular.identity,
                                headers: { 'Content-Type': undefined, 'Process-Data': false }
                            })
                            .then(function() {
                                $http.get(API + 'update_mavung/' + select_huyen + '/' + file.name).then(function(response) {
                                    alert("Import thành công!");
                                    $scope.style_8 = "cursor: not-allowed; pointer-events: none;background-color: #ddd;background: #ddd;";
                                    $scope.dis_8 = 1;
                                    $scope.tenfile_8 = file.name;
                                });
                            })
                    }
                    break;

                case 9:
                    var file = document.getElementById('file_9').files[0];
                    if (file == '' || file == null) {
                        alert('Bạn chưa chọn file!');
                        $scope.dis_9 = 0;
                    } else {
                        var formData = new FormData();
                        formData.append('file', file);
                        url = API + 'template/import_excel_ton_vinh.php'
                        $http.post(url, formData, {
                                transformRequest: angular.identity,
                                headers: { 'Content-Type': undefined, 'Process-Data': false }
                            })
                            .then(function() {
                                $http.get(API + 'update_mavung/' + select_huyen + '/' + file.name).then(function(response) {
                                    alert("Import thành công!");
                                    $scope.style_9 = "cursor: not-allowed; pointer-events: none;background-color: #ddd;background: #ddd;";
                                    $scope.dis_9 = 1;
                                    $scope.tenfile_9 = file.name;
                                });
                            })
                    }
                    break;
                case 10:
                    var file = document.getElementById('file_10').files[0];
                    if (file == '' || file == null) {
                        alert('Bạn chưa chọn file!');
                        $scope.dis_10 = 0;
                    } else {
                        var formData = new FormData();
                        formData.append('file', file);
                        url = API + 'template/import_excel_ton_vinh.php'
                        $http.post(url, formData, {
                                transformRequest: angular.identity,
                                headers: { 'Content-Type': undefined, 'Process-Data': false }
                            })
                            .then(function() {
                                $http.get(API + 'update_mavung/' + select_huyen + '/' + file.name).then(function(response) {
                                    alert("Import thành công!");
                                    $scope.style_10 = "cursor: not-allowed; pointer-events: none;background-color: #ddd;background: #ddd;";
                                    $scope.dis_10 = 1;
                                    $scope.tenfile_10 = file.name;
                                });
                            })
                    }
                    break;
                case 11:
                    var file = document.getElementById('file_11').files[0];
                    if (file == '' || file == null) {
                        alert('Bạn chưa chọn file!');
                        $scope.dis_11 = 0;
                    } else {
                        var formData = new FormData();
                        formData.append('file', file);
                        url = API + 'template/import_excel_ton_vinh.php'
                        $http.post(url, formData, {
                                transformRequest: angular.identity,
                                headers: { 'Content-Type': undefined, 'Process-Data': false }
                            })
                            .then(function() {
                                $http.get(API + 'update_mavung/' + select_huyen + '/' + file.name).then(function(response) {
                                    alert("Import thành công!");
                                    $scope.style_11 = "cursor: not-allowed; pointer-events: none;background-color: #ddd;background: #ddd;";
                                    $scope.dis_11 = 1;
                                    $scope.tenfile_11 = file.name;
                                });
                            })
                    }
                    break;
                case 12:
                    var file = document.getElementById('file_12').files[0];
                    if (file == '' || file == null) {
                        alert('Bạn chưa chọn file!');
                        $scope.dis_12 = 0;
                    } else {
                        var formData = new FormData();
                        formData.append('file', file);
                        url = API + 'template/import_excel_ton_vinh.php'
                        $http.post(url, formData, {
                                transformRequest: angular.identity,
                                headers: { 'Content-Type': undefined, 'Process-Data': false }
                            })
                            .then(function() {
                                $http.get(API + 'update_mavung/' + select_huyen + '/' + file.name).then(function(response) {
                                    alert("Import thành công!");
                                    $scope.style_12 = "cursor: not-allowed; pointer-events: none;background-color: #ddd;background: #ddd;";
                                    $scope.dis_12 = 1;
                                    $scope.tenfile_12 = file.name;
                                });
                            })
                    }
                case 13:
                    var file = document.getElementById('file_13').files[0];
                    if (file == '' || file == null) {
                        alert('Bạn chưa chọn file!');
                        $scope.dis_13 = 0;
                    } else {
                        var formData = new FormData();
                        formData.append('file', file);
                        url = API + 'template/import_excel_ton_vinh.php'
                        $http.post(url, formData, {
                                transformRequest: angular.identity,
                                headers: { 'Content-Type': undefined, 'Process-Data': false }
                            })
                            .then(function() {
                                $http.get(API + 'update_mavung/' + select_huyen + '/' + file.name).then(function(response) {
                                    alert("Import thành công!");
                                    $scope.style_13 = "cursor: not-allowed; pointer-events: none;background-color: #ddd;background: #ddd;";
                                    $scope.dis_13 = 1;
                                    $scope.tenfile_13 = file.name;
                                });
                            })
                    }
                    break;
                case 14:
                    var file = document.getElementById('file_14').files[0];
                    if (file == '' || file == null) {
                        alert('Bạn chưa chọn file!');
                        $scope.dis_14 = 0;
                    } else {
                        var formData = new FormData();
                        formData.append('file', file);
                        url = API + 'template/import_excel_ton_vinh.php'
                        $http.post(url, formData, {
                                transformRequest: angular.identity,
                                headers: { 'Content-Type': undefined, 'Process-Data': false }
                            })
                            .then(function() {
                                $http.get(API + 'update_mavung/' + select_huyen + '/' + file.name).then(function(response) {
                                    alert("Import thành công!");
                                    $scope.style_14 = "cursor: not-allowed; pointer-events: none;background-color: #ddd;background: #ddd;";
                                    $scope.dis_14 = 1;
                                    $scope.tenfile_14 = file.name;
                                });
                            })
                    }
                    break;
                case 15:
                    var file = document.getElementById('file_15').files[0];
                    if (file == '' || file == null) {
                        alert('Bạn chưa chọn file!');
                        $scope.dis_15 = 0;
                    } else {
                        var formData = new FormData();
                        formData.append('file', file);
                        url = API + 'template/import_excel_ton_vinh.php'
                        $http.post(url, formData, {
                                transformRequest: angular.identity,
                                headers: { 'Content-Type': undefined, 'Process-Data': false }
                            })
                            .then(function() {
                                $http.get(API + 'update_mavung/' + select_huyen + '/' + file.name).then(function(response) {
                                    alert("Import thành công!");
                                    $scope.style_15 = "cursor: not-allowed; pointer-events: none;background-color: #ddd;background: #ddd;";
                                    $scope.dis_15 = 1;
                                    $scope.tenfile_15 = file.name;
                                });
                            })
                    }
                    break;
                case 16:
                    var file = document.getElementById('file_16').files[0];
                    if (file == '' || file == null) {
                        alert('Bạn chưa chọn file!');
                        $scope.dis_16 = 0;
                    } else {
                        var formData = new FormData();
                        formData.append('file', file);
                        url = API + 'template/import_excel_ton_vinh.php'
                        $http.post(url, formData, {
                                transformRequest: angular.identity,
                                headers: { 'Content-Type': undefined, 'Process-Data': false }
                            })
                            .then(function() {
                                $http.get(API + 'update_mavung/' + select_huyen + '/' + file.name).then(function(response) {
                                    alert("Import thành công!");
                                    $scope.style_16 = "cursor: not-allowed; pointer-events: none;background-color: #ddd;background: #ddd;";
                                    $scope.dis_16 = 1;
                                    $scope.tenfile_16 = file.name;
                                });
                            })
                    }
                    break;
                case 17:
                    var file = document.getElementById('file_17').files[0];
                    if (file == '' || file == null) {
                        alert('Bạn chưa chọn file!');
                        $scope.dis_17 = 0;
                    } else {
                        var formData = new FormData();
                        formData.append('file', file);
                        url = API + 'template/import_excel_ton_vinh.php'
                        $http.post(url, formData, {
                                transformRequest: angular.identity,
                                headers: { 'Content-Type': undefined, 'Process-Data': false }
                            })
                            .then(function() {
                                $http.get(API + 'update_mavung/' + select_huyen + '/' + file.name).then(function(response) {
                                    alert("Import thành công!");
                                    $scope.style_17 = "cursor: not-allowed; pointer-events: none;background-color: #ddd;background: #ddd;";
                                    $scope.dis_17 = 1;
                                    $scope.tenfile_17 = file.name;
                                });
                            })
                    }
                    break;
                case 18:
                    var file = document.getElementById('file_18').files[0];
                    if (file == '' || file == null) {
                        alert('Bạn chưa chọn file!');
                        $scope.dis_18 = 0;
                    } else {
                        var formData = new FormData();
                        formData.append('file', file);
                        url = API + 'template/import_excel_ton_vinh.php'
                        $http.post(url, formData, {
                                transformRequest: angular.identity,
                                headers: { 'Content-Type': undefined, 'Process-Data': false }
                            })
                            .then(function() {
                                $http.get(API + 'update_mavung/' + select_huyen + '/' + file.name).then(function(response) {
                                    alert("Import thành công!");
                                    $scope.style_18 = "cursor: not-allowed; pointer-events: none;background-color: #ddd;background: #ddd;";
                                    $scope.dis_18 = 1;
                                    $scope.tenfile_18 = file.name;
                                });
                            })
                    }
                    break;

                case 19:
                    var file = document.getElementById('file_19').files[0];
                    if (file == '' || file == null) {
                        alert('Bạn chưa chọn file!');
                        $scope.dis_19 = 0;
                    } else {
                        var formData = new FormData();
                        formData.append('file', file);
                        url = API + 'template/import_excel_ton_vinh.php'
                        $http.post(url, formData, {
                                transformRequest: angular.identity,
                                headers: { 'Content-Type': undefined, 'Process-Data': false }
                            })
                            .then(function() {
                                $http.get(API + 'update_mavung/' + select_huyen + '/' + file.name).then(function(response) {
                                    alert("Import thành công!");
                                    $scope.style_19 = "cursor: not-allowed; pointer-events: none;background-color: #ddd;background: #ddd;";
                                    $scope.dis_19 = 1;
                                    $scope.tenfile_19 = file.name;
                                });
                            })
                    }
                    break;
                case 20:
                    var file = document.getElementById('file_20').files[0];
                    if (file == '' || file == null) {
                        alert('Bạn chưa chọn file!');
                        $scope.dis_20 = 0;
                    } else {
                        var formData = new FormData();
                        formData.append('file', file);
                        url = API + 'template/import_excel_ton_vinh.php'
                        $http.post(url, formData, {
                                transformRequest: angular.identity,
                                headers: { 'Content-Type': undefined, 'Process-Data': false }
                            })
                            .then(function() {
                                $http.get(API + 'update_mavung/' + select_huyen + '/' + file.name).then(function(response) {
                                    alert("Import thành công!");
                                    $scope.style_20 = "cursor: not-allowed; pointer-events: none;background-color: #ddd;background: #ddd;";
                                    $scope.dis_20 = 1;
                                    $scope.tenfile_20 = file.name;
                                });
                            })
                    }
                    break;
                case 21:
                    var file = document.getElementById('file_21').files[0];
                    if (file == '' || file == null) {
                        alert('Bạn chưa chọn file!');
                        $scope.dis_21 = 0;
                    } else {
                        var formData = new FormData();
                        formData.append('file', file);
                        url = API + 'template/import_excel_ton_vinh.php'
                        $http.post(url, formData, {
                                transformRequest: angular.identity,
                                headers: { 'Content-Type': undefined, 'Process-Data': false }
                            })
                            .then(function() {
                                $http.get(API + 'update_mavung/' + select_huyen + '/' + file.name).then(function(response) {
                                    alert("Import thành công!");
                                    $scope.style_21 = "cursor: not-allowed; pointer-events: none;background-color: #ddd;background: #ddd;";
                                    $scope.dis_21 = 1;
                                    $scope.tenfile_21 = file.name;
                                });
                            })
                    }
                    break;
                case 22:
                    var file = document.getElementById('file_22').files[0];
                    if (file == '' || file == null) {
                        alert('Bạn chưa chọn file!');
                        $scope.dis_22 = 0;
                    } else {
                        var formData = new FormData();
                        formData.append('file', file);
                        url = API + 'template/import_excel_ton_vinh.php'
                        $http.post(url, formData, {
                                transformRequest: angular.identity,
                                headers: { 'Content-Type': undefined, 'Process-Data': false }
                            })
                            .then(function() {
                                $http.get(API + 'update_mavung/' + select_huyen + '/' + file.name).then(function(response) {
                                    alert("Import thành công!");
                                    $scope.style_22 = "cursor: not-allowed; pointer-events: none;background-color: #ddd;background: #ddd;";
                                    $scope.dis_22 = 1;
                                    $scope.tenfile_22 = file.name;
                                });
                            })
                    }
                    break;
                case 23:
                    var file = document.getElementById('file_23').files[0];
                    if (file == '' || file == null) {
                        alert('Bạn chưa chọn file!');
                        $scope.dis_23 = 0;
                    } else {
                        var formData = new FormData();
                        formData.append('file', file);
                        url = API + 'template/import_excel_ton_vinh.php'
                        $http.post(url, formData, {
                                transformRequest: angular.identity,
                                headers: { 'Content-Type': undefined, 'Process-Data': false }
                            })
                            .then(function() {
                                $http.get(API + 'update_mavung/' + select_huyen + '/' + file.name).then(function(response) {
                                    alert("Import thành công!");
                                    $scope.style_23 = "cursor: not-allowed; pointer-events: none;background-color: #ddd;background: #ddd;";
                                    $scope.dis_23 = 1;
                                    $scope.tenfile_23 = file.name;
                                });
                            })
                    }
                case 24:
                    var file = document.getElementById('file_24').files[0];
                    if (file == '' || file == null) {
                        alert('Bạn chưa chọn file!');
                        $scope.dis_24 = 0;
                    } else {
                        var formData = new FormData();
                        formData.append('file', file);
                        url = API + 'template/import_excel_ton_vinh.php'
                        $http.post(url, formData, {
                                transformRequest: angular.identity,
                                headers: { 'Content-Type': undefined, 'Process-Data': false }
                            })
                            .then(function() {
                                $http.get(API + 'update_mavung/' + select_huyen + '/' + file.name).then(function(response) {
                                    alert("Import thành công!");
                                    $scope.style_24 = "cursor: not-allowed; pointer-events: none;background-color: #ddd;background: #ddd;";
                                    $scope.dis_24 = 1;
                                    $scope.tenfile_24 = file.name;
                                });
                            })
                    }
                    break;
                case 25:
                    var file = document.getElementById('file_25').files[0];
                    if (file == '' || file == null) {
                        alert('Bạn chưa chọn file!');
                        $scope.dis_25 = 0;
                    } else {
                        var formData = new FormData();
                        formData.append('file', file);
                        url = API + 'template/import_excel_ton_vinh.php'
                        $http.post(url, formData, {
                                transformRequest: angular.identity,
                                headers: { 'Content-Type': undefined, 'Process-Data': false }
                            })
                            .then(function() {
                                $http.get(API + 'update_mavung/' + select_huyen + '/' + file.name).then(function(response) {
                                    alert("Import thành công!");
                                    $scope.style_25 = "cursor: not-allowed; pointer-events: none;background-color: #ddd;background: #ddd;";
                                    $scope.dis_25 = 1;
                                    $scope.tenfile_25 = file.name;
                                });
                            })
                    }
                    break;
                case 26:
                    var file = document.getElementById('file_26').files[0];
                    if (file == '' || file == null) {
                        alert('Bạn chưa chọn file!');
                        $scope.dis_26 = 0;
                    } else {
                        var formData = new FormData();
                        formData.append('file', file);
                        url = API + 'template/import_excel_ton_vinh.php'
                        $http.post(url, formData, {
                                transformRequest: angular.identity,
                                headers: { 'Content-Type': undefined, 'Process-Data': false }
                            })
                            .then(function() {
                                $http.get(API + 'update_mavung/' + select_huyen + '/' + file.name).then(function(response) {
                                    alert("Import thành công!");
                                    $scope.style_26 = "cursor: not-allowed; pointer-events: none;background-color: #ddd;background: #ddd;";
                                    $scope.dis_26 = 1;
                                    $scope.tenfile_26 = file.name;
                                });
                            })
                    }
                    break;
                case 27:
                    var file = document.getElementById('file_27').files[0];
                    if (file == '' || file == null) {
                        alert('Bạn chưa chọn file!');
                        $scope.dis_27 = 0;
                    } else {
                        var formData = new FormData();
                        formData.append('file', file);
                        url = API + 'template/import_excel_ton_vinh.php'
                        $http.post(url, formData, {
                                transformRequest: angular.identity,
                                headers: { 'Content-Type': undefined, 'Process-Data': false }
                            })
                            .then(function() {
                                $http.get(API + 'update_mavung/' + select_huyen + '/' + file.name).then(function(response) {
                                    alert("Import thành công!");
                                    $scope.style_27 = "cursor: not-allowed; pointer-events: none;background-color: #ddd;background: #ddd;";
                                    $scope.dis_27 = 1;
                                    $scope.tenfile_27 = file.name;
                                });
                            })
                    }
                    break;

            }


        });





    };

    $scope.view = function(select_huyen) {
        $http.get(API + 'update_mavung/' + select_huyen).then(function(response) {

            console.log(response.data);
            $window.location.href = '/HCTD/public/ton_vinh_tu_dong_vs1';
        });

    };
});