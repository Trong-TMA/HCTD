var app = angular.module('xemchitiet-app', []).constant('API', 'http://localhost:8080/Cinema/public/');





app.controller('xemchitietController', function($scope, $http, API, $rootScope, $location, $window) {
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
                if (response.data.MaPhim == 0)
                    $window.location.href = '/Cinema/public/admin/dashboard';
                else {


                    $http.get(API + 'getfilmfirst').then(function(response) {
                        $scope.film = response.data;
                        $http.get(API + 'thongke_doanhthu_theophim/' + response.data.MaPhim).then(function(response) {
                            $scope.doanhthu = response.data;
                        });
                    });


                    $scope.delete = function(MaPhim) {

                        $http.get(API + 'xoa_phim/' + MaPhim).then(function(response) {
                            alert('Phim ' + response.data + ' đã được xóa');

                            $http.get(API + 'luumaphim/' + 0).then(function(response) {
                                console.log('đã xóa mã phim');
                            });
                            $window.location.href = '/Cinema/public/admin/list_film';
                        });
                    };

                    $scope.edit = function() {
                        $window.location.href = '/Cinema/public/admin/insert_film';
                    };

                    $scope.showtime = function() {
                        $window.location.href = '/Cinema/public/admin/suatchieu';
                    };




                }
            });




        }
    });



});