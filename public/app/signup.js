var app = angular.module('signup-app', []).constant('API', 'http://localhost:8080/Cinema/public/');





app.controller('signupController', function($scope, $http, API, $rootScope, $location, $window) {

    $scope.dangky = function() {
        if ($scope.password != $scope.re_password)
            alert("Nhập lại password bị sai!");
        else {
            $http.get(API + 'testdangky/' + $scope.username).then(function(response) {
                if (response.data == 1) {
                    alert('tài khoản đã tồn tại!');
                } else {
                    $http.get(API + 'create_user/' + $scope.username + '/' + $scope.password + '/' + 2).then(function(response) {
                        $http.get(API + 'create_khachhang/' + response.data.id).then(function(response) {
                            alert('Chúc mừng, bạn đã đăng ký thành công!');
                            $window.location.href = '/Cinema/public/signin';
                        });
                    });
                }
            });
        }
    };

});