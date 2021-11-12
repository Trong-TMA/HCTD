var app = angular.module('suatchieu-app', []).constant('API', 'http://localhost:8080/Cinema/public/');





app.controller('suatchieuController', function($scope, $http, API, $rootScope, $location, $window) {

    $http.get(API + 'user').then(function(response) {
        $id = response.data.Id_nguoidung;
        $scope.Id_nguoidung = $id;
        if ($id == 0)
            $window.location.href = '/Cinema/public/signin';
        else {

            $scope.logout = function() {
                $http.get(API + 'luu_User_1/' + 0).then(function(response) {
                    $window.location.href = '/Cinema/public/signin';
                });
            };
            //rạp 1;

            var listlichchieu = [];
            var lichchieu = [];
            var d = new Date();

            $nam = d.getFullYear();
            $ngay = d.getDate();
            $thang = d.getMonth() + 1;
            $da_now = $nam + "-" + $thang + "-" + $ngay;

            var d = new Date();
            d.setDate(d.getDate() + 60);
            $nam = d.getFullYear();
            $ngay = d.getDate();
            $thang = d.getMonth() + 1;
            $da_finish = $nam + "-" + $thang + "-" + $ngay;
            $http.get(API + 'get_ngaychieu_suatchieu/' + $da_now + '/' + $da_finish).then(function(response) {
                lichchieu = response.data;
                for (var i = 0; i <= 60; i++) {
                    var d = new Date();
                    d.setDate(d.getDate() + i);
                    $nam = d.getFullYear();
                    $ngay = d.getDate();
                    $thang = d.getMonth() + 1;
                    $da_now = $nam + "-" + $thang + "-" + $ngay;


                    var s1 = 'Trống';
                    var s2 = 'Trống';
                    var s3 = 'Trống';
                    var s4 = 'Trống';

                    var s1_m = '';
                    var s2_m = '';
                    var s3_m = '';
                    var s4_m = '';

                    for (let item of lichchieu) {
                        var d1 = new Date(item.NgayChieu);
                        $nam1 = d1.getFullYear();
                        $ngay1 = d1.getDate();
                        $thang1 = d1.getMonth() + 1;
                        if ($nam == $nam1 && $ngay == $ngay1 && $thang == $thang1 && item.MaRap == 1) {
                            console.log(item.MaSC);
                            switch (item.MaSC) {
                                case 1:
                                    s1 = item.TGBatDau;
                                    break;
                                case 2:
                                    s2 = item.TGBatDau;
                                    break;
                                case 3:
                                    s3 = item.TGBatDau;
                                    break;
                                case 4:
                                    s4 = item.TGBatDau;
                                    break;
                            }
                        }
                    }
                    if (s1 == 'Trống')
                        s1_m = '#1ab394';
                    else s1_m = '';
                    if (s2 == 'Trống')
                        s2_m = '#1ab394';
                    else s2_m = '';
                    if (s3 == 'Trống')
                        s3_m = '#1ab394';
                    else s3_m = '';
                    if (s4 == 'Trống')
                        s4_m = '#1ab394';
                    else s4_m = '';
                    var li = [$da_now, s1, s2, s3, s4, s1_m, s2_m, s3_m, s4_m];
                    listlichchieu[i] = li;
                }
                $scope.listlichchieu = listlichchieu;
            });


            //rạp 2;

            var listlichchieu_2 = [];
            var lichchieu_2 = [];
            var d = new Date();

            $nam = d.getFullYear();
            $ngay = d.getDate();
            $thang = d.getMonth() + 1;
            $da_now = $nam + "-" + $thang + "-" + $ngay;

            var d = new Date();
            d.setDate(d.getDate() + 60);
            $nam = d.getFullYear();
            $ngay = d.getDate();
            $thang = d.getMonth() + 1;
            $da_finish = $nam + "-" + $thang + "-" + $ngay;
            $http.get(API + 'get_ngaychieu_suatchieu/' + $da_now + '/' + $da_finish).then(function(response) {
                lichchieu_2 = response.data;
                for (var i = 0; i <= 60; i++) {
                    var d = new Date();
                    d.setDate(d.getDate() + i);
                    $nam = d.getFullYear();
                    $ngay = d.getDate();
                    $thang = d.getMonth() + 1;
                    $da_now = $nam + "-" + $thang + "-" + $ngay;


                    var s1 = 'Trống';
                    var s2 = 'Trống';
                    var s3 = 'Trống';
                    var s4 = 'Trống';

                    var s1_m = '';
                    var s2_m = '';
                    var s3_m = '';
                    var s4_m = '';

                    for (let item of lichchieu_2) {
                        var d1 = new Date(item.NgayChieu);
                        $nam1 = d1.getFullYear();
                        $ngay1 = d1.getDate();
                        $thang1 = d1.getMonth() + 1;
                        if ($nam == $nam1 && $ngay == $ngay1 && $thang == $thang1 && item.MaRap == 2) {
                            console.log(item.MaSC);
                            switch (item.MaSC) {
                                case 1:
                                    s1 = item.TGBatDau;
                                    break;
                                case 2:
                                    s2 = item.TGBatDau;
                                    break;
                                case 3:
                                    s3 = item.TGBatDau;
                                    break;
                                case 4:
                                    s4 = item.TGBatDau;
                                    break;
                            }
                        }
                    }
                    if (s1 == 'Trống')
                        s1_m = '#1ab394';
                    else s1_m = '';
                    if (s2 == 'Trống')
                        s2_m = '#1ab394';
                    else s2_m = '';
                    if (s3 == 'Trống')
                        s3_m = '#1ab394';
                    else s3_m = '';
                    if (s4 == 'Trống')
                        s4_m = '#1ab394';
                    else s4_m = '';
                    var li = [$da_now, s1, s2, s3, s4, s1_m, s2_m, s3_m, s4_m];
                    listlichchieu_2[i] = li;
                }
                $scope.listlichchieu_2 = listlichchieu_2;
            });






            $scope.showtime = function(date, time, dieukien, rap) {
                if (dieukien != 'Trống')
                    alert('Xin lỗi, bạn không thể chọn!');
                else {
                    $http.get(API + 'getfilmfirst').then(function(response) {
                        $scope.tenphim = response.data.TenPhim;
                    });
                    $scope.ngaychieu = date;
                    $scope.suatchieu = time;
                    $scope.rapchieu = rap;
                    alert('Bạn đã chọn ngày ' + date + ', với suất chiếu: ' + time + ' giờ');
                }
            };


            $scope.savechange = function() {
                $http.get(API + 'getfilmfirst').then(function(response) {
                    var mp = response.data.MaPhim;
                    if ($scope.suatchieu == '08:00')
                        $i = 1;
                    else if ($scope.suatchieu == '12:00')
                        $i = 2;
                    else if ($scope.suatchieu == '15:00')
                        $i = 3;
                    else
                        $i = 4;
                    $http.get(API + 'create_lichchieu/' + mp + '/' + $scope.ngaychieu + '/' + $scope.rapchieu + '/' + $i).then(function(response) {
                        alert('Tạo lịch chiếu thành công');
                        if ($scope.rapchieu == 1) {
                            //rạp 1;

                            var listlichchieu = [];
                            var lichchieu = [];
                            var d = new Date();

                            $nam = d.getFullYear();
                            $ngay = d.getDate();
                            $thang = d.getMonth() + 1;
                            $da_now = $nam + "-" + $thang + "-" + $ngay;

                            var d = new Date();
                            d.setDate(d.getDate() + 60);
                            $nam = d.getFullYear();
                            $ngay = d.getDate();
                            $thang = d.getMonth() + 1;
                            $da_finish = $nam + "-" + $thang + "-" + $ngay;
                            $http.get(API + 'get_ngaychieu_suatchieu/' + $da_now + '/' + $da_finish).then(function(response) {
                                lichchieu = response.data;
                                for (var i = 0; i <= 60; i++) {
                                    var d = new Date();
                                    d.setDate(d.getDate() + i);
                                    $nam = d.getFullYear();
                                    $ngay = d.getDate();
                                    $thang = d.getMonth() + 1;
                                    $da_now = $nam + "-" + $thang + "-" + $ngay;


                                    var s1 = 'Trống';
                                    var s2 = 'Trống';
                                    var s3 = 'Trống';
                                    var s4 = 'Trống';

                                    var s1_m = '';
                                    var s2_m = '';
                                    var s3_m = '';
                                    var s4_m = '';

                                    for (let item of lichchieu) {
                                        var d1 = new Date(item.NgayChieu);
                                        $nam1 = d1.getFullYear();
                                        $ngay1 = d1.getDate();
                                        $thang1 = d1.getMonth() + 1;
                                        if ($nam == $nam1 && $ngay == $ngay1 && $thang == $thang1 && item.MaRap == 1) {
                                            console.log(item.MaSC);
                                            switch (item.MaSC) {
                                                case 1:
                                                    s1 = item.TGBatDau;
                                                    break;
                                                case 2:
                                                    s2 = item.TGBatDau;
                                                    break;
                                                case 3:
                                                    s3 = item.TGBatDau;
                                                    break;
                                                case 4:
                                                    s4 = item.TGBatDau;
                                                    break;
                                            }
                                        }
                                    }
                                    if (s1 == 'Trống')
                                        s1_m = '#1ab394';
                                    else s1_m = '';
                                    if (s2 == 'Trống')
                                        s2_m = '#1ab394';
                                    else s2_m = '';
                                    if (s3 == 'Trống')
                                        s3_m = '#1ab394';
                                    else s3_m = '';
                                    if (s4 == 'Trống')
                                        s4_m = '#1ab394';
                                    else s4_m = '';
                                    var li = [$da_now, s1, s2, s3, s4, s1_m, s2_m, s3_m, s4_m];
                                    listlichchieu[i] = li;
                                }
                                $scope.listlichchieu = listlichchieu;
                            });

                        } else {
                            //rạp 2;

                            var listlichchieu_2 = [];
                            var lichchieu_2 = [];
                            var d = new Date();

                            $nam = d.getFullYear();
                            $ngay = d.getDate();
                            $thang = d.getMonth() + 1;
                            $da_now = $nam + "-" + $thang + "-" + $ngay;

                            var d = new Date();
                            d.setDate(d.getDate() + 60);
                            $nam = d.getFullYear();
                            $ngay = d.getDate();
                            $thang = d.getMonth() + 1;
                            $da_finish = $nam + "-" + $thang + "-" + $ngay;
                            $http.get(API + 'get_ngaychieu_suatchieu/' + $da_now + '/' + $da_finish).then(function(response) {
                                lichchieu_2 = response.data;
                                for (var i = 0; i <= 60; i++) {
                                    var d = new Date();
                                    d.setDate(d.getDate() + i);
                                    $nam = d.getFullYear();
                                    $ngay = d.getDate();
                                    $thang = d.getMonth() + 1;
                                    $da_now = $nam + "-" + $thang + "-" + $ngay;


                                    var s1 = 'Trống';
                                    var s2 = 'Trống';
                                    var s3 = 'Trống';
                                    var s4 = 'Trống';

                                    var s1_m = '';
                                    var s2_m = '';
                                    var s3_m = '';
                                    var s4_m = '';

                                    for (let item of lichchieu_2) {
                                        var d1 = new Date(item.NgayChieu);
                                        $nam1 = d1.getFullYear();
                                        $ngay1 = d1.getDate();
                                        $thang1 = d1.getMonth() + 1;
                                        if ($nam == $nam1 && $ngay == $ngay1 && $thang == $thang1 && item.MaRap == 2) {
                                            console.log(item.MaSC);
                                            switch (item.MaSC) {
                                                case 1:
                                                    s1 = item.TGBatDau;
                                                    break;
                                                case 2:
                                                    s2 = item.TGBatDau;
                                                    break;
                                                case 3:
                                                    s3 = item.TGBatDau;
                                                    break;
                                                case 4:
                                                    s4 = item.TGBatDau;
                                                    break;
                                            }
                                        }
                                    }
                                    if (s1 == 'Trống')
                                        s1_m = '#1ab394';
                                    else s1_m = '';
                                    if (s2 == 'Trống')
                                        s2_m = '#1ab394';
                                    else s2_m = '';
                                    if (s3 == 'Trống')
                                        s3_m = '#1ab394';
                                    else s3_m = '';
                                    if (s4 == 'Trống')
                                        s4_m = '#1ab394';
                                    else s4_m = '';
                                    var li = [$da_now, s1, s2, s3, s4, s1_m, s2_m, s3_m, s4_m];
                                    listlichchieu_2[i] = li;
                                }
                                $scope.listlichchieu_2 = listlichchieu_2;
                            });

                        }

                    });
                });

            };




            $http.get(API + 'maphim').then(function(response) {
                if (response.data.MaPhim == 0)
                    $window.location.href = '/Cinema/public/admin/dashboard';
                else {


                    $http.get(API + 'getfilmfirst').then(function(response) {
                        $scope.film = response.data;
                        $scope.tenphim = response.data.TenPhim;
                        $http.get(API + 'thongke_doanhthu_theophim/' + response.data.MaPhim).then(function(response) {
                            $scope.doanhthu = response.data;
                        });
                    });



                    $scope.edit = function() {
                        $window.location.href = '/Cinema/public/admin/insert_film';
                    };

                    $http.get(API + 'get_nhacungcap').then(function(response) {
                        $scope.listncc = response.data;
                    });


                    $scope.load_theloai = function(select_theloai) {
                        if (select_theloai != null)
                            $http.get(API + 'get_tentheloai/' + select_theloai).then(function(response) {
                                $scope.tentheloai = response.data;
                            });
                    };











                }
            });


        }
    });





});