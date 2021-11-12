var app = angular.module('profile_khachhang-app', []).constant('API', 'http://localhost:8080/Cinema/public/');





app.controller('profile_khachhangController', function($scope, $http, API, $rootScope, $location, $window) {
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
                var khachhang = response.data;
                if (khachhang.Id_khach == 0)
                    $window.location.href = '/Cinema/public/admin/dashboard';
                else {
                    $http.get(API + 'getkhachhangfirst/' + khachhang.Id_khach).then(function(response) {
                        $scope.khachfrst = response.data;
                    });

                    $http.get(API + 'thongke_doanhthu_theokhach/' + khachhang.Id_khach).then(function(response) {
                        $scope.doanhthu = response.data;
                    });


                    $http.get(API + 'listve_khachhang/' + khachhang.Id_khach).then(function(response) {
                        $scope.listxem = response.data;
                    });


                    $scope.delete = function(MaKhach) {

                        $http.get(API + 'xoa_khachhang/' + MaKhach).then(function(response) {
                            alert('Khách hàng: ' + response.data.TenKH + ' đã xóa');

                        });

                        $http.get(API + 'luu_Userkhach/' + MaKhach).then(function(response) {

                            $window.location.href = '/Cinema/public/admin/list_khachhang';
                        });
                    };




                }

            });








        }
    });




});