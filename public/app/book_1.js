var app = angular.module('book1-app', []).constant('API', 'http://localhost:8080/Cinema/public/');



app.controller('Book1Controller', function($scope, $http, API, $rootScope, $location, $window) {



    $scope.Anh_user = 'anhmacdinh.png';
    $scope.Ten_user = 'Sign in';
    // kiểm tra đăng nhập
    $http.get(API + 'user').then(function(response) {
        $MaUser = response.data.Id_nguoidung;
        if ($MaUser != 0 || $MaUser != null) {
            $scope.user = response.data;
            if (response.data.Id_nguoidung != 0) {
                $http.get(API + 'getkhachhangfirst/' + response.data.Id_nguoidung).then(function(response) {
                    $scope.Anh_user = response.data.Anh;
                    $scope.Ten_user = response.data.TenKH;
                    var splitted = $scope.Ten_user.split(" ", 5);
                    for (let item of splitted) {
                        $scope.Ten_user = item;
                    }
                });

            } else
                $scope.Maus = $MaUser;
        } else $scope.Maus = 0;

    });
    $danhdau_maphim = 0;
    $danhdau_ngayxem = 0;
    $danhdau_suatchieu = 0;
    $http.get(API + 'user').then(function(response) {
        $id = response.data.Id_nguoidung;
        $scope.Id_nguoidung = $id;
        if ($id == 0)
            $window.location.href = '/Cinema/public';
        else {

            $scope.time1_1 = 'null';
            $scope.time1_2 = 'null';
            $scope.time1_3 = 'null';
            $scope.time1_4 = 'null';
            $scope.time1_5 = 'null';
            $scope.time1_6 = 'null';

            $scope.time2_1 = 'null';
            $scope.time2_2 = 'null';
            $scope.time2_3 = 'null';
            $scope.time2_4 = 'null';
            $scope.time2_5 = 'null';
            $scope.time2_6 = 'null';

            $http.get(API + 'maphim').then(function(response) {
                $scope.MaPhim = response.data.MaPhim;
            });
            $danhdau1 = 0;
            $danhdau2 = 0;

            $scope.load = function() {

                $http.get(API + 'getsuatchieu/' + $scope.MaPhim + '/' + 1).then(function(response) {
                    var t = $('#input_store_date_booking').val();
                    if (t == undefined)
                        t = '01/03/2021';
                    var i = 0;
                    var mydate = new Date(t);
                    var date1 = mydate.getDate();
                    var month1 = mydate.getMonth() + 1;
                    var year1 = mydate.getFullYear();
                    $NgayXem = year1 + "-" + month1 + "-" + date1;
                    $http.get(API + 'luungayxem/' + $NgayXem).then(function(response) {
                        $danhdau_ngayxem = 1;
                    });
                    var listsuatchieu = [];
                    for (let item of response.data) {


                        var mydate1 = new Date(item.NgayChieu);
                        var date = mydate1.getDate();
                        var month = mydate1.getMonth() + 1;
                        var year = mydate1.getFullYear();

                        if (date == date1 && month == month1 && year == year1) {
                            listsuatchieu[i] = item;
                            i++;
                        }

                    }
                    i--;
                    if (i == -1) {
                        $danhdau1 = 1;
                    }
                    if (i >= 0)
                        $scope.time1_1 = listsuatchieu[0].TGBatDau;
                    else $scope.time1_1 = 'null';

                    if (i >= 1)
                        $scope.time1_2 = listsuatchieu[1].TGBatDau;
                    else $scope.time1_2 = 'null';

                    if (i >= 2)
                        $scope.time1_3 = listsuatchieu[2].TGBatDau;
                    else $scope.time1_3 = 'null';

                    if (i >= 3)
                        $scope.time1_4 = listsuatchieu[3].TGBatDau;
                    else $scope.time1_4 = 'null';

                    if (i >= 4)
                        $scope.time1_5 = listsuatchieu[4].TGBatDau;
                    else $scope.time1_5 = 'null';

                    if (i >= 5)
                        $scope.time1_6 = listsuatchieu[5].TGBatDau;
                    else $scope.time1_6 = 'null';

                });


                $http.get(API + 'getsuatchieu/' + $scope.MaPhim + '/' + 2).then(function(response) {
                    var i = 0;
                    var t = $('#input_store_date_booking').val();
                    var mydate = new Date(t);
                    var date1 = mydate.getDate();
                    var month1 = mydate.getMonth() + 1;
                    var year1 = mydate.getFullYear();


                    var listsuatchieu = [];
                    for (let item of response.data) {


                        var mydate1 = new Date(item.NgayChieu);
                        var date = mydate1.getDate();
                        var month = mydate1.getMonth() + 1;
                        var year = mydate1.getFullYear();

                        if (date == date1 && month == month1 && year == year1) {
                            listsuatchieu[i] = item;
                            i++;
                        }
                    }
                    i--;
                    if (i == -1) {
                        $danhdau2 = 1;
                    }
                    if (i >= 0)
                        $scope.time2_1 = listsuatchieu[0].TGBatDau;
                    else $scope.time2_1 = 'null';

                    if (i >= 1)
                        $scope.time2_2 = listsuatchieu[1].TGBatDau;
                    else $scope.time2_2 = 'null';

                    if (i >= 2)
                        $scope.time2_3 = listsuatchieu[2].TGBatDau;
                    else $scope.time2_3 = 'null';

                    if (i >= 3)
                        $scope.time2_4 = listsuatchieu[3].TGBatDau;
                    else $scope.time2_4 = 'null';

                    if (i >= 4)
                        $scope.time2_5 = listsuatchieu[4].TGBatDau;
                    else $scope.time2_5 = 'null';

                    if (i >= 5)
                        $scope.time2_6 = listsuatchieu[5].TGBatDau;
                    else $scope.time2_6 = 'null';
                    if ($danhdau1 == 1 && $danhdau2 == 1) {
                        alert("Phim không có lịch chiếu trong ngày này!");
                        $danhdau1 = 0;
                        $danhdau2 = 0;
                    }

                });


                var t = $('#input_store_times_booking').val();
                console.log(t);
            }

            //get phim đang và sắp chiếu

            $http.get(API + 'getlichchieu_1').then(function(response) {
                $scope.listchieuphim = response.data;
            });

            $scope.chonphim = function(phim) {

                $http.get(API + 'getuser/' + $scope.Id_nguoidung).then(function(response) {
                    $nguoidung = response.data;

                    var mydate = new Date(response.data.NgaySinh);
                    var year = mydate.getFullYear();
                    var today = new Date().getFullYear();
                    var age = today - year;
                    if (phim.AgeDuocXem > age)
                        alert("Xin lỗi, bạn chưa đủ tuổi để xem phim này");
                    else {
                        $http.get(API + 'luumaphim/' + phim.MaPhim).then(function(response) {
                            $danhdau_maphim = 1;

                        });
                        alert("Bạn vừa chọn phim: " + phim.TenPhim + ", Đạo diễn: " + phim.DaoDien + ', mã phim: ' + phim.MaPhim);
                    }
                });
            }


            // xử lý chức năng tìm kiếm
            $scope.timkiem = function() {
                var l = $('#input_store_select_search').val();
                if (l == undefined)
                    l = 1;
                if ($scope.search_text == "" || $scope.search_text == null)
                    alert("Mời bạn nhập nội dung tìm kiếm!");
                else {
                    $http.get(API + 'listtimkiem/' + $scope.search_text + '/' + l).then(function(response) {
                        if (response.data.length == 0) {
                            alert("Không tìm thấy!");
                        } else {
                            $http.get(API + 'luutimkiem/' + $scope.search_text + '/' + l).then(function(response) {
                                $window.location.href = 'listphim';
                            });

                        }
                    });
                }
            };

            $scope.chonrap1 = function() {
                var t = $('#input_store_times_booking').val();
                if (t == 'null')
                    alert("xin lỗi, giờ chiếu không tồn tại");
                else {
                    $http.get(API + 'getmachieu/' + t).then(function(response) {
                        $http.get(API + 'luumasc_rap/' + response.data.MaSC + '/' + 1).then(function(response) {
                            $danhdau_suatchieu = 1;
                        });
                    });
                }


            };

            $scope.chonrap2 = function() {
                var t = $('#input_store_times_booking').val();
                if (t == 'null')
                    alert("xin lỗi, giờ chiếu không tồn tại");
                else {
                    $http.get(API + 'getmachieu/' + t).then(function(response) {
                        $http.get(API + 'luumasc_rap/' + response.data.MaSC + '/' + 2).then(function(response) {
                            $danhdau_suatchieu = 1;
                        });
                    });
                }
            };

            $scope.kiemtra = function() {
                var t = $('#input_store_times_booking').val();
                if ($danhdau_ngayxem == 1 && $danhdau_maphim == 1 && $danhdau_suatchieu == 1)
                    $window.location.href = 'book_2';
                else if ($danhdau_maphim == 0)
                    alert("Bạn chưa chọn phim");
                else if ($danhdau_ngayxem == 0)
                    alert("Bạn chưa chọn ngày xem");
                else if ($danhdau_suatchieu == 0)
                    alert("Bạn chưa chọn giờ xem");
            };



        }
    });




});