var app = angular.module('signin-app', []).constant('API', 'http://localhost:8080/Cinema/public/');





app.controller('signinController', function($scope, $http, API, $rootScope, $location, $window) {



    $scope.signin = function(username, password) {

        if (username != null && password != null) {
            $http.get(API + 'getuserfirst/' + username + '/' + password).then(function(response) {
                var maut = response.data.MaUT;
                if (maut == null)
                    alert('Bạn đã nhập sai username hoặc password, bạn có thể thử lại hoặc đăng ký tài khoản mới');
                else {
                    $http.get(API + 'luu_User_1/' + response.data.ID).then(function(response) {
                        if (maut == 1) {
                            $window.location.href = '/Cinema/public/admin/dashboard';
                        } else if (maut == 2) {
                            $window.location.href = '/Cinema/public';
                        }
                    });


                }
            });
        }

    };



});