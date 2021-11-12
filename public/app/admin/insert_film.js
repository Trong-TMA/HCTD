var app = angular.module('insertfilm-app', []).constant('API', 'http://localhost:8080/Cinema/public/');





app.controller('insertfilmController', function($scope, $http, API, $rootScope, $location, $window) {
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

            $http.get(API + 'maphim').then(function(response) {
                $scope.api_maphim = response.data.MaPhim;
                if (response.data != 0) {
                    $http.get(API + 'get_theloai').then(function(response) {
                        $scope.listtheloai = response.data;
                    });

                    $http.get(API + 'get_nhacungcap').then(function(response) {
                        $scope.listnhacungcap = response.data;
                    });

                    $http.get(API + 'getfilmfirst').then(function(response) {
                        $scope.listnhacungcap = response.data;
                        $scope.tenphim = response.data.TenPhim;
                        $scope.daodien = response.data.DaoDien;
                        $scope.quocgia = response.data.QuocGia;
                        $scope.namsanxuat = response.data.NamSX;
                        $scope.thoiluong = response.data.ThoiLuong;
                        $scope.ngonngu = response.data.NgonNgu;
                        $scope.noidung = response.data.NoiDung;
                        $scope.selected_theloai = response.data.MaTL;
                        $scope.selected_nhacungcap = response.data.MaNCC;
                        $scope.tuoigioihan = response.data.AgeDuocXem;
                    });

                    $scope.savechange = function() {
                        $http.get(API + 'update_phim/' + $scope.api_maphim + '/' + $scope.tenphim + '/' + $scope.daodien + '/' + $scope.quocgia + '/' + $scope.namsanxuat + '/' + $scope.thoiluong + '/' + $scope.ngonngu + '/' + $scope.noidung + '/' + $scope.selected_theloai + '/' + $scope.selected_nhacungcap + '/' + $scope.tuoigioihan).then(function(response) {
                            console.log(response.data);
                            alert("Đã thay đổi phim " + response.data + ' thành công');
                        });

                    };

                    $scope.cancel = function() {
                        $http.get(API + 'getfilmfirst').then(function(response) {
                            $scope.listnhacungcap = response.data;
                            $scope.tenphim = response.data.TenPhim;
                            $scope.daodien = response.data.DaoDien;
                            $scope.quocgia = response.data.QuocGia;
                            $scope.namsanxuat = response.data.NamSX;
                            $scope.thoiluong = response.data.ThoiLuong;
                            $scope.ngonngu = response.data.NgonNgu;
                            $scope.noidung = response.data.NoiDung;
                            $scope.selected_theloai = response.data.MaTL;
                            $scope.selected_nhacungcap = response.data.MaNCC;
                            $scope.tuoigioihan = response.data.AgeDuocXem;
                        });

                    };


                } else {


                    $http.get(API + 'get_theloai').then(function(response) {
                        $scope.listtheloai = response.data;
                    });

                    $http.get(API + 'get_nhacungcap').then(function(response) {
                        $scope.listnhacungcap = response.data;
                    });

                    $scope.cancel = function() {
                        $scope.tenphim = null;
                        $scope.daodien = null;
                        $scope.quocgia = null;
                        $scope.namsanxuat = null;
                        $scope.thoiluong = null;
                        $scope.ngonngu = null;
                        $scope.noidung = null;
                        $scope.selected_theloai = null;
                        $scope.selected_nhacungcap = null;
                        $scope.tuoigioihan = null;
                    };

                    $('#form-upload-msds').submit(function(e) {
                        e.preventDefault();

                        let img_trailler_1 = $("#img_1")[0].files[0];
                        let img_trailler_2 = $("#img_2")[0].files[0];
                        let img_trailler_3 = $("#img_3")[0].files[0];
                        let img_trailler_4 = $("#img_4")[0].files[0];
                        let img_trailler_5 = $("#img_5")[0].files[0];
                        let img_trailler_6 = $("#img_6")[0].files[0];
                        let img_trailler_7 = $("#img_7")[0].files[0];
                        let img_trailler_8 = $("#img_8")[0].files[0];
                        let img_trailler_9 = $("#img_9")[0].files[0];
                        let img_trailler_10 = $("#img_10")[0].files[0];
                        let img_trailler_0 = $("#img_trailler")[0].files[0];
                        let video_trailler = $("#video_trailler")[0].files[0];

                        if ($scope.tenphim == '' || $scope.tenphim == null)
                            alert('Bạn chưa nhập tên phim!');
                        else if ($scope.daodien == '' || $scope.daodien == null)
                            alert('Bạn chưa nhập đạo diễn!');
                        else if ($scope.quocgia == '' || $scope.quocgia == null)
                            alert('Bạn chưa nhập quốc gia!');
                        else if ($scope.namsanxuat == '' || $scope.namsanxuat == null)
                            alert('Bạn chưa nhập năm sản xuất!');
                        else if ($scope.thoiluong == '' || $scope.thoiluong == null)
                            alert('Bạn chưa nhập thời lượng!');
                        else if ($scope.ngonngu == '' || $scope.ngonngu == null)
                            alert('Bạn chưa nhập ngôn ngữ!');
                        else if ($scope.noidung == '' || $scope.noidung == null)
                            alert('Bạn chưa nhập nội dung!');
                        else if ($scope.selected_theloai == '' || $scope.selected_theloai == null)
                            alert('Bạn chưa chọn thể loại!');
                        else if ($scope.selected_nhacungcap == '' || $scope.selected_nhacungcap == null)
                            alert('Bạn chưa chọn nhà cung cấp!');
                        else if ($scope.tuoigioihan == '' || $scope.tuoigioihan == null)
                            alert('Bạn chưa nhập giới hạn tuổi xem!');
                        else if (img_trailler_0 == '' || img_trailler_0 == null)
                            alert('Bạn chưa chọn ảnh hiển thị!');
                        else if (video_trailler == '' || video_trailler == null)
                            alert('Bạn chưa chọn phim trailler!');
                        else if (img_trailler_1 == '' || img_trailler_1 == null)
                            alert('Bạn chưa chọn ảnh trailler số 1!');
                        else if (img_trailler_2 == '' || img_trailler_2 == null)
                            alert('Bạn chưa chọn ảnh trailler số 2!');
                        else if (img_trailler_3 == '' || img_trailler_3 == null)
                            alert('Bạn chưa chọn ảnh trailler số 3!');
                        else if (img_trailler_4 == '' || img_trailler_4 == null)
                            alert('Bạn chưa chọn ảnh trailler số 4!');
                        else if (img_trailler_5 == '' || img_trailler_5 == null)
                            alert('Bạn chưa chọn ảnh trailler số 5!');
                        else if (img_trailler_6 == '' || img_trailler_6 == null)
                            alert('Bạn chưa chọn ảnh trailler số 6!');
                        else if (img_trailler_7 == '' || img_trailler_7 == null)
                            alert('Bạn chưa chọn ảnh trailler số 7!');
                        else if (img_trailler_8 == '' || img_trailler_8 == null)
                            alert('Bạn chưa chọn ảnh trailler số 8!');
                        else if (img_trailler_9 == '' || img_trailler_9 == null)
                            alert('Bạn chưa chọn ảnh trailler số 9!');
                        else if (img_trailler_10 == '' || img_trailler_10 == null)
                            alert('Bạn chưa chọn ảnh trailler số 10!');
                        else {
                            //upload file ảnh hiển thị
                            var formData = new FormData();
                            formData.append('file', img_trailler_0);
                            url = API + 'template/uploadfile_panel_phim.php'
                            $http.post(url, formData, {
                                    transformRequest: angular.identity,
                                    headers: { 'Content-Type': undefined, 'Process-Data': false }
                                })
                                .then(function() {
                                    console.log('success');
                                })

                            //upload file video trailler 
                            var formData = new FormData();
                            formData.append('file', video_trailler);
                            url = API + 'template/uploadfile_video_trailer.php'
                            $http.post(url, formData, {
                                    transformRequest: angular.identity,
                                    headers: { 'Content-Type': undefined, 'Process-Data': false }
                                })
                                .then(function() {
                                    console.log('success');
                                })

                            //upload file ảnh trailler 1
                            var formData = new FormData();
                            formData.append('file', img_trailler_1);
                            url = API + 'template/uploadfile_img_trailer.php'
                            $http.post(url, formData, {
                                    transformRequest: angular.identity,
                                    headers: { 'Content-Type': undefined, 'Process-Data': false }
                                })
                                .then(function() {
                                    console.log('success');
                                })
                                //upload file ảnh trailler 2
                            var formData = new FormData();
                            formData.append('file', img_trailler_2);
                            url = API + 'template/uploadfile_img_trailer.php'
                            $http.post(url, formData, {
                                    transformRequest: angular.identity,
                                    headers: { 'Content-Type': undefined, 'Process-Data': false }
                                })
                                .then(function() {
                                    console.log('success');
                                })
                                //upload file ảnh trailler 3
                            var formData = new FormData();
                            formData.append('file', img_trailler_3);
                            url = API + 'template/uploadfile_img_trailer.php'
                            $http.post(url, formData, {
                                    transformRequest: angular.identity,
                                    headers: { 'Content-Type': undefined, 'Process-Data': false }
                                })
                                .then(function() {
                                    console.log('success');
                                })
                                //upload file ảnh trailler 4
                            var formData = new FormData();
                            formData.append('file', img_trailler_4);
                            url = API + 'template/uploadfile_img_trailer.php'
                            $http.post(url, formData, {
                                    transformRequest: angular.identity,
                                    headers: { 'Content-Type': undefined, 'Process-Data': false }
                                })
                                .then(function() {
                                    console.log('success');
                                })
                                //upload file ảnh trailler 5
                            var formData = new FormData();
                            formData.append('file', img_trailler_5);
                            url = API + 'template/uploadfile_img_trailer.php'
                            $http.post(url, formData, {
                                    transformRequest: angular.identity,
                                    headers: { 'Content-Type': undefined, 'Process-Data': false }
                                })
                                .then(function() {
                                    console.log('success');
                                })
                                //upload file ảnh trailler 6
                            var formData = new FormData();
                            formData.append('file', img_trailler_6);
                            url = API + 'template/uploadfile_img_trailer.php'
                            $http.post(url, formData, {
                                    transformRequest: angular.identity,
                                    headers: { 'Content-Type': undefined, 'Process-Data': false }
                                })
                                .then(function() {
                                    console.log('success');
                                })
                                //upload file ảnh trailler 7
                            var formData = new FormData();
                            formData.append('file', img_trailler_7);
                            url = API + 'template/uploadfile_img_trailer.php'
                            $http.post(url, formData, {
                                    transformRequest: angular.identity,
                                    headers: { 'Content-Type': undefined, 'Process-Data': false }
                                })
                                .then(function() {
                                    console.log('success');
                                })
                                //upload file ảnh trailler 8
                            var formData = new FormData();
                            formData.append('file', img_trailler_8);
                            url = API + 'template/uploadfile_img_trailer.php'
                            $http.post(url, formData, {
                                    transformRequest: angular.identity,
                                    headers: { 'Content-Type': undefined, 'Process-Data': false }
                                })
                                .then(function() {
                                    console.log('success');
                                })
                                //upload file ảnh trailler 9
                            var formData = new FormData();
                            formData.append('file', img_trailler_9);
                            url = API + 'template/uploadfile_img_trailer.php'
                            $http.post(url, formData, {
                                    transformRequest: angular.identity,
                                    headers: { 'Content-Type': undefined, 'Process-Data': false }
                                })
                                .then(function() {
                                    console.log('success');
                                })
                                //upload file ảnh trailler 10
                            var formData = new FormData();
                            formData.append('file', img_trailler_10);
                            url = API + 'template/uploadfile_img_trailer.php'
                            $http.post(url, formData, {
                                    transformRequest: angular.identity,
                                    headers: { 'Content-Type': undefined, 'Process-Data': false }
                                })
                                .then(function() {
                                    console.log('success');
                                })

                            $http.get(API + 'insert_phim/' + $scope.tenphim + '/' + $scope.daodien + '/' + $scope.quocgia + '/' + $scope.namsanxuat + '/' + $scope.thoiluong + '/' + $scope.ngonngu + '/' + $scope.noidung + '/' + $scope.selected_theloai + '/' + $scope.selected_nhacungcap + '/' + $scope.tuoigioihan + '/' + img_trailler_0.name + '/' + video_trailler.name).then(function(response) {
                                console.log(response.data);
                                alert("Thêm thành công!");
                            });
                        }




                        // $http.get(API + 'postFile/' + data).then(function(response) {
                        //     console.log(response.data);
                        // });
                        // var url = API + 'postFile';
                        // $http({
                        //         method: 'POST',
                        //         url: url,
                        //         data: data,
                        //     })
                        //     .then(function(response) {
                        //         console.log('insertRes', response);

                        //     });
                        // $.post(url, data).then(
                        //     function(res) {
                        //         console.log('insertRes', res);
                        //     }
                        // );
                    });

                }


            });

        }
    });






});