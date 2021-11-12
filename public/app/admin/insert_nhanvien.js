var app = angular.module('insert_nhanvien-app', []).constant('API', 'http://localhost:8080/Cinema/public/');





app.controller('insert_nhanvienController', function($scope, $http, API, $rootScope, $location, $window) {
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

            $scope.cancel = function() {
                document.getElementById("userName_1").value = null;
                document.getElementById("password").value = null;
                document.getElementById("re_password").value = null;
                document.getElementById("hoten_1").value = null;
                document.getElementById("gioitinh_1").value = null;
                document.getElementById("cmnd_1").value = null;
                document.getElementById("diachi_1").value = null;
                document.getElementById("sdt_1").value = null;
                document.getElementById("ngaysinh_1").value = null;
            };

            $scope.savechange = function() {
                var userName_1 = document.getElementById("userName_1").value;
                var password = document.getElementById("password").value;
                var re_password = document.getElementById("re_password").value;
                var hoten_1 = document.getElementById("hoten_1").value;
                var gioitinh_1 = document.getElementById("gioitinh_1").value;
                var cmnd_1 = document.getElementById("cmnd_1").value;
                var diachi_1 = document.getElementById("diachi_1").value;
                var ngaysinh_1 = document.getElementById("ngaysinh_1").value;
                var sdt_1 = document.getElementById("diachi_1").value;

                $http.get(API + 'testdangky/' + userName_1).then(function(response) {
                    if (response.data == 1)
                        alert('Xin lỗi bạn không thể đăng ký với username là ' + userName_1);
                    else {
                        $http.get(API + 'create_user/' + userName_1 + '/' + password + '/' + 3).then(function(response) {
                            $http.get(API + 'getuserfirst/' + userName_1 + '/' + password).then(function(response) {
                                var today = new Date();
                                var date = today.getDate();
                                var month = today.getMonth() + 1;
                                var year = today.getFullYear();
                                var current_date = year + '-' + month + '-' + date;
                                var anh = 'anhmacdinh.jpg';
                                $http.get(API + 'create_nhanvien/' + response.data.ID + '/' + hoten_1 + '/' + gioitinh_1 + '/' + cmnd_1 + '/' + diachi_1 + '/' + sdt_1 + '/' + ngaysinh_1 + '/' + current_date + '/' + anh).then(function(response) {
                                    alert('Đăng ký nhân viên thành công');

                                });;
                            });;

                        });

                    }

                });
            };





        }
    });



});