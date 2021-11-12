var app = angular.module('list_film-app', []).constant('API', 'http://localhost:8080/Cinema/public/');





app.controller('list_filmController', function($scope, $http, API, $rootScope, $location, $window) {

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

            $http.get(API + 'luumaphim/' + 0).then(function(response) {
                console.log('đã xóa mã phim');
            });

            $http.get(API + 'get_film').then(function(response) {
                $scope.listfilm = response.data;
            });
            $http.get(API + 'get_nhacungcap').then(function(response) {
                $scope.listncc = response.data;
            });


            $scope.xem = function(maphim) {
                $http.get(API + 'luumaphim/' + maphim).then(function(response) {
                    $window.location.href = '/Cinema/public/admin/xemchitiet';
                });
            };



        }
    });


});