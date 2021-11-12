var app = angular.module('xemchitiet-app', []).constant('API', 'http://localhost:8080/Cinema/public/');




app.controller('xemchitietController', function($scope, $http, API, $rootScope, $window) {
    // kiểm tra đăng nhập
    $http.get(API + 'maphim').then(function(response) {
        if (response.data.MaPhim == 0)
            $window.location.href = '/Cinema/public';
        else {



            $danhdau = 0;
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

            $scope.DangXuat = function() {

                var data = 0;
                var url = API + 'luuuser/' + 0;
                $http({
                        method: 'POST',
                        url: url,
                        data: data,
                        headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
                    })
                    .then(function(response) {
                        $Maus = 0;
                        location.reload();
                    });
            };


            $http.get(API + 'getfilmfirst').then(function(response) {
                $scope.phimfirst = response.data;
                console.log(response.data);
            });

            $http.get(API + 'maphim').then(function(response) {
                $scope.MaPhim = response.data.MaPhim;
                $http.get(API + 'getlistcomment/' + $scope.MaPhim).then(function(response) {
                    $scope.listcmt = response.data;
                    console.log(response.data);
                });

                $http.get(API + 'count_comment/' + $scope.MaPhim).then(function(response) {
                    $scope.count_Comment = response.data;
                });

                //load danh sách comment

                $http.get(API + 'getlistcomment/' + $scope.MaPhim).then(function(response) {
                    $scope.listcmt = response.data;
                    console.log(response.data);
                });


            });

            //kiểm tra có đăng nhập không rồi cho comment




            //load danh sách comment







            $scope.addComment = function() {
                $http.get(API + 'user').then(function(response) {
                    var id_nguoidung = response.data.Id_nguoidung;
                    var nd = $scope.noidung;
                    if (id_nguoidung == null || id_nguoidung == "")
                        alert("Bạn cần phải đăng nhập");
                    else {
                        $scope.Id_user = id_nguoidung;
                        $http.get(API + 'getkhachhangfirst/' + id_nguoidung).then(function(response) {
                            $http.get(API + 'create_comment/' + $scope.MaPhim + '/' + response.data.MaKH + '/' + nd).then(function(response) {
                                $http.get(API + 'count_comment/' + $scope.MaPhim).then(function(response) {
                                    $scope.count_Comment = response.data;
                                });

                                $http.get(API + 'getlistcomment/' + $scope.MaPhim).then(function(response) {
                                    $scope.listcmt = response.data;
                                });
                            });

                        });


                    }
                });
            };
            $scope.listsuatchieu1 = [];

            $scope.loadgiochieu = function() {
                if ($scope.date_chieuphim == null)
                    alert('Mời bạn chọn ngày chiếu')
                else {
                    $http.get(API + 'getsuatchieu/' + $scope.MaPhim + '/' + 1).then(function(response) {
                        var i = 0;
                        var listsuatchieu = [];
                        for (let item of response.data) {

                            var date1 = $scope.date_chieuphim.getDate();
                            var month1 = $scope.date_chieuphim.getMonth() + 1;
                            var year1 = $scope.date_chieuphim.getFullYear();

                            var mydate = new Date(item.NgayChieu);
                            var date = mydate.getDate();
                            var month = mydate.getMonth() + 1;
                            var year = mydate.getFullYear();

                            if (date == date1 && month == month1 && year == year1) {
                                listsuatchieu[i] = item;
                            }
                            i++;
                        }
                        $scope.listsuatchieu1 = listsuatchieu;
                    });


                    $http.get(API + 'getsuatchieu/' + $scope.MaPhim + '/' + 2).then(function(response) {
                        var j = 0;
                        var listsuatchieu2 = [];
                        for (let item of response.data) {

                            var date1 = $scope.date_chieuphim.getDate();
                            var month1 = $scope.date_chieuphim.getMonth() + 1;
                            var year1 = $scope.date_chieuphim.getFullYear();

                            var mydate = new Date(item.NgayChieu);
                            var date = mydate.getDate();
                            var month = mydate.getMonth() + 1;
                            var year = mydate.getFullYear();

                            if (date == date1 && month == month1 && year == year1) {
                                listsuatchieu2[j] = item;
                            }
                            j++;
                        }
                        $scope.listsuatchieu2 = listsuatchieu2;
                    });
                }

            };

            $http.get(API + 'getimgtrailerfirst').then(function(response) {
                $scope.imgtrailerfirst = response.data;

            });

            $scope.trtr = $scope.date_chieuphim;


            //xử lý ngày tháng năm hiển thị lịch chiếu
            var today = new Date();
            var date = today.getDate();
            var month = today.getMonth() + 1;
            var year = today.getFullYear();
            var current_date = month + '/' + date + '/' + year;





            // xử lý tìm kiếm


            $scope.xemchitiet = function(MaPhim) {

                var data = 2;
                var url = API + 'luumaphim/' + MaPhim;
                $http({
                        method: 'POST',
                        url: url,
                        data: data,
                        headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
                    })
                    .then(function(response) {
                        console.log(MaPhim);

                    });
            };

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


            $scope.next_dat_ve = function() {
                if ($scope.user.Id_nguoidung == 0)
                    $window.location.href = 'signin';
                else $window.location.href = 'book_1';

            };


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




        }
    });



});