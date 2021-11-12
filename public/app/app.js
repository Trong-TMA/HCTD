var app = angular.module('my-app', []).constant('API', 'http://localhost:8080/Cinema/public/');



// app.config(['$routeProvider', '$locationProvider', function($routeProvider, $locationProvider) {
//     $routeProvider.when('/te', { TemplateUrl: 'test.html' });
//     $routeProvider.when('/te1', { TemplateUrl: 'test2.html' });
//     $routeProvider.otherwise({ redirectTo: '/' });

//     $locationProvider.html5Mode({ enable: true, requireBase: false });
// }]);









app.controller('IndexController', function($scope, $http, API, $rootScope, $window) {
    $scope.Anh_user = 'anhmacdinh.png';
    $scope.Ten_user = 'Sign in';
    // kiểm tra đăng nhập
    $http.get(API + 'user').then(function(response) {
        $MaUser = response.data.Id_nguoidung;
        if ($MaUser != 0 || $MaUser != null) {
            $scope.user = response.data;
            if (response.data.Id_nguoidung != 0) {
                $http.get(API + 'getkhachhangfirst/' + response.data.Id_nguoidung).then(function(response) {
                    $scope.Anh_user = response.data.Anh;
                    $scope.Ten_user = response.data.TenKH;
                    var splitted = $scope.Ten_user.split(" ", 5);
                    for (let item of splitted) {
                        $scope.Ten_user = item;
                    }
                });

            } else
                $scope.Maus = $MaUser;
        } else $scope.Maus = 0;

    });

    $scope.DangXuat = function() {

        var data = 0;
        var url = API + 'luuuser/' + 0;
        $http({
                method: 'POST',
                url: url,
                data: data,
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
            })
            .then(function(response) {
                $Maus = 0;
                location.reload();
            });
    };

    $scope.settings = function() {


    };



    $http.get(API + 'phimhot').then(function(response) {
        $scope.ListPhimHot = response.data;
    });

    $http.get(API + 'slidepanel').then(function(response) {
        $scope.sliepanel1 = response.data[0];

    });

    $http.get(API + 'getlichchieu').then(function(response) {
        $scope.lichchieu = response.data;
        console.log($scope.lichchieu[1]);
        console.log($scope.lichchieu[0]);
        console.log($scope.lichchieu[2]);

    });

    $scope.timkiem = function(type_search) {
        if ($scope.search_text == "" || $scope.search_text == null)
            alert("Mời bạn nhập nội dung tìm kiếm!");
        else {
            $http.get(API + 'listtimkiem/' + $scope.search_text + '/' + type_search).then(function(response) {
                if (response.data.length == 0) {
                    alert("Không tìm thấy!");
                } else {
                    $http.get(API + 'luutimkiem/' + $scope.search_text + '/' + type_search).then(function(response) {
                        $window.location.href = 'listphim';
                    });

                }
            });
        }
    };



    $scope.xemchitiet = function(MaPhim) {

        $http.get(API + 'luumaphim/' + MaPhim).then(function(response) {
            console.log(response.data);
            $window.location.href = 'xemchitiet';

        });
    };

    $scope.setting = function() {

        $window.location.href = 'account_khachhang';
    };
    $scope.next_dat_ve = function() {
        if ($scope.user.Id_nguoidung == 0)
            $window.location.href = 'signin';
        else $window.location.href = 'book_1';

    };





});