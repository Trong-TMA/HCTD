var app = angular.module('list_nhanvien-app', []).constant('API', 'http://localhost:8080/Cinema/public/');





app.controller('list_nhanvienController', function($scope, $http, API, $rootScope, $location, $window) {


    $http.get(API + 'user').then(function(response) {
        $id = response.data.Id_nguoidung;
        $scope.Id_nguoidung = $id;
        if ($id == 0)
            $window.location.href = '/Cinema/public/signin';
        else {

            $http.get(API + 'luu_Userkhach/' + 0).then(function(response) {


            });

            $scope.logout = function() {
                $http.get(API + 'luu_User_1/' + 0).then(function(response) {
                    $window.location.href = '/Cinema/public/signin';
                });
            };

            $http.get(API + 'getlistnhanvien').then(function(response) {
                $scope.listnhanvien = response.data;

            });

            $scope.profile = function(khachhang) {
                $http.get(API + 'luu_Userkhach/' + khachhang.ID).then(function(response) {

                    $window.location.href = '/Cinema/public/admin/profile_nhanvien';
                });
            };





        }
    });






});