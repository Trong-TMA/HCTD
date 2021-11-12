var app = angular.module('profile_nhanvien-app', []).constant('API', 'http://localhost:8080/Cinema/public/');





app.controller('profile_nhanvienController', function($scope, $http, API, $rootScope, $location, $window) {
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


            $http.get(API + 'user').then(function(response) {
                $id = response.data.Id_nguoidung;
                $scope.Id_nguoidung = $id;
                if ($id == 0)
                    $window.location.href = '/Cinema/public/signin';
                else {



                }
            });
            $http.get(API + 'user').then(function(response) {
                var khachhang = response.data;
                if (khachhang.Id_khach == 0)
                    $window.location.href = '/Cinema/public/admin/dashboard';
                else {
                    $http.get(API + 'get_nhanvien/' + khachhang.Id_khach).then(function(response) {
                        $scope.nhanvien = response.data;
                    });

                    $http.get(API + 'thongke_doanhthu_nhanvien/' + khachhang.Id_khach).then(function(response) {
                        $scope.doanhthu = response.data;
                    });


                    $http.get(API + 'listve_nhanvien/' + khachhang.Id_khach).then(function(response) {
                        $scope.listban = response.data;
                    });

                    $http.get(API + 'thongke_veban_nhanvien/' + khachhang.Id_khach).then(function(response) {
                        $scope.soveban = response.data;
                    });


                    $scope.delete = function(MaKhach) {

                        $http.get(API + 'xoa_nhanvien/' + MaKhach).then(function(response) {
                            alert('Nhân Viên: ' + response.data.TenKH + ' đã xóa');

                        });

                        $http.get(API + 'luu_Userkhach/' + MaKhach).then(function(response) {

                            $window.location.href = '/Cinema/public/admin/list_nhanvien';
                        });
                    };

                    $scope.tinhluong = function(MaKhach) {

                        $http.get(API + 'xoa_nhanvien/' + MaKhach).then(function(response) {
                            alert('Nhân Viên: ' + response.data.TenKH + ' đã xóa');

                        });

                        $http.get(API + 'luu_Userkhach/' + MaKhach).then(function(response) {

                            $window.location.href = '/Cinema/public/admin/list_nhanvien';
                        });
                    };

                    $http.get(API + 'get_lichsuwork/' + khachhang.Id_khach).then(function(response) {
                        $scope.lichsuwork = response.data;
                        console.log($scope.lichsuwork);

                    });



                }

            });





        }
    });





});