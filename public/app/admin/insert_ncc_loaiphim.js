var app = angular.module('insert_ncc_loaiphim-app', []).constant('API', 'http://localhost:8080/Cinema/public/');





app.controller('insert_ncc_loaiphimController', function($scope, $http, API, $rootScope, $location, $window) {
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

            $http.get(API + 'get_theloai').then(function(response) {
                $scope.listtheloai = response.data;
            });
            $http.get(API + 'get_nhacungcap').then(function(response) {
                $scope.listncc = response.data;
            });


            $scope.load_theloai = function(select_theloai) {
                if (select_theloai != null)
                    $http.get(API + 'get_tentheloai/' + select_theloai).then(function(response) {
                        $scope.tentheloai = response.data;
                    });
            };

            $scope.loadnhacungcap = function(select_nhacungcap) {
                $http.get(API + 'get_nhacungcap_first/' + select_nhacungcap).then(function(response) {
                    $scope.tennhacungcap = response.data.TenNCC;
                    $scope.diachinhacungcap = response.data.DiaChi;
                    $scope.sdt = response.data.SDT;
                });
            };



            $scope.savechange_theloai = function(selected_theloai) {
                if (selected_theloai != null)
                    $http.get(API + 'update_theloai/' + selected_theloai + '/' + $scope.tentheloai).then(function(response) {
                        $scope.selected_theloai = selected_theloai;
                        $http.get(API + 'get_tentheloai/' + select_theloai).then(function(response) {
                            $scope.tentheloai = response.data;
                        });
                    });
                else
                    $http.get(API + 'create_theloai/' + $scope.tentheloai).then(function(response) {
                        alert('Đã thêm thể loại ' + response.data + ' thành công');
                    });
                $http.get(API + 'get_theloai').then(function(response) {
                    $scope.listtheloai = response.data;
                });
            };

            $scope.cancel_theloai = function() {
                $scope.selected_theloai = null;
                $scope.tentheloai = null;
            };

            $scope.savechange_ncc = function(select_nhacungcap) {
                if (select_nhacungcap != null)
                    $http.get(API + 'update_nhacungcap/' + select_nhacungcap + '/' + $scope.tennhacungcap + '/' + $scope.diachinhacungcap + '/' + $scope.sdt).then(function(response) {
                        $scope.nhacungcap = response.data;
                        $scope.selected_nhacungcap = select_nhacungcap;
                        $http.get(API + 'get_nhacungcap/' + select_nhacungcap).then(function(response) {
                            $scope.tennhacungcap = response.data.TenNCC;
                            $scope.diachinhacungcap = response.data.DiaChi;
                            $scope.sdt = response.data.SDT;
                        });
                    });
                else
                    $http.get(API + 'create_nhacungcap/' + $scope.tennhacungcap + '/' + $scope.diachinhacungcap + '/' + $scope.sdt).then(function(response) {
                        alert('Đã thêm nhà cung cấp ' + response.data + ' thành công');
                    });
                $http.get(API + 'get_nhacungcap').then(function(response) {
                    $scope.listncc = response.data;
                });
            };

            $scope.cancel_ncc = function() {
                $scope.select_nhacungcap = null;
                $scope.tennhacungcap = null;
                $scope.diachinhacungcap = null;
                $scope.sdt = null;
            };

            $scope.delete_ncc = function(select_nhacungcap) {
                $http.get(API + 'xoa_nhacungcap/' + select_nhacungcap).then(function(response) {
                    alert('Bạn đã xóa nhà cung cấp ' + response.data);
                    $scope.tennhacungcap = null;
                    $scope.diachinhacungcap = null;
                    $scope.sdt = null;
                    $http.get(API + 'get_nhacungcap').then(function(response) {
                        $scope.listncc = response.data;
                    });
                });
            };

            $scope.delete_theloai = function(select_theloai) {
                $http.get(API + 'xoa_theloai/' + select_theloai).then(function(response) {
                    alert('Bạn đã xóa thể loại ' + response.data);
                    $scope.tentheloai = null;
                    $http.get(API + 'get_theloai').then(function(response) {
                        $scope.listtheloai = response.data;
                    });
                });
            };


        }
    });




});